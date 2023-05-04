# -*- coding: utf-8 -*-
"""AlmostDoneDecisionTree (1).ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1yD2PLOfAwVca7HygTN1eGXqqa2oHvD4B
"""

# from google.colab import drive
# drive.mount('/content/drive')

import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import math
from flask import Flask, request, jsonify
app = Flask(__name__)
model = None

class DecisionTreeClassifier:
    def __init__(self, max_depth=None, min_samples_split=2):
        self.max_depth = max_depth
        self.min_samples_split = min_samples_split
        self.feature = None
        self.threshold = None
        self.left = None
        self.right = None
        self.classes = None
        self.class_counts = None

    def fit(self, X, y):
        self.classes, self.class_counts = np.unique(y, return_counts=True)
        if len(self.classes) == 1:
            # If only one class is present, make this node a leaf
            return self
        if len(y) < self.min_samples_split or (self.max_depth is not None and self.max_depth <= 1):
            # If we've reached the minimum number of samples or maximum depth, make this node a leaf
            self.class_counts = self.class_counts / len(y)
            return self
        best_feature, best_threshold = self._find_best_split(X, y)
        if best_feature is None:
            # If we can't find a good split, make this node a leaf
            self.class_counts = self.class_counts / len(y)
            return self
        self.feature = best_feature
        self.threshold = best_threshold
        left_mask = X[:, best_feature] <= best_threshold
        right_mask = X[:, best_feature] > best_threshold
        # self.left = DecisionTreeClassifier(max_depth=self.max_depth-1, min_samples_split=self.min_samples_split)
        # self.right = DecisionTreeClassifier(max_depth=self.max_depth-1, min_samples_split=self.min_samples_split)
        self.left = DecisionTreeClassifier(max_depth=self.max_depth-1 if self.max_depth is not None else None, min_samples_split=self.min_samples_split)
        self.right = DecisionTreeClassifier(max_depth=self.max_depth-1 if self.max_depth is not None else None, min_samples_split=self.min_samples_split)
        self.left.fit(X[left_mask], y[left_mask])
        self.right.fit(X[right_mask], y[right_mask])
        return self

    def predict(self, X):
        X = np.array(X)
        if self.feature is None or self.classes is not None:
            # If this node is a leaf, return the most common class
            return np.array([self.classes[np.argmax(self.class_counts)]] * len(X))
        left_mask = X[:, self.feature] <= self.threshold
        right_mask = X[:, self.feature] > self.threshold
        y_left = self.left.predict(X[left_mask])
        y_right = self.right.predict(X[right_mask])
        y_pred = np.empty(len(X), dtype=int)
        y_pred[left_mask] = y_left
        y_pred[right_mask] = y_right
        return y_pred

    def _find_best_split(self, X, y):
        best_feature = None
        best_threshold = None
        best_score = -np.inf
        for feature in range(X.shape[1]):
            thresholds = np.unique(X[:, feature])
            for threshold in thresholds:
                left_mask = X[:, feature] <= threshold
                right_mask = X[:, feature] > threshold
                if len(y[left_mask]) == 0 or len(y[right_mask]) == 0:
                    continue
                score = self._split_criterion(y[left_mask], y[right_mask])
                if score > best_score:
                    best_feature = feature
                    best_threshold = threshold
                    best_score = score
        if best_feature is None:
            return None
        return best_feature, best_threshold

    def _split_criterion(self, y_left, y_right):
        # Calculate the Gini impurity of the split
        n = len(y_left) + len(y_right)
        p_left = len(y_left) / n
        p_right = len(y_right) / n
        impurity = p_left * self._gini(y_left) + p_right * self._gini(y_right)
        return -impurity

    def _gini(self, y):
        # Calculate the Gini impurity of a node
        _, counts = np.unique(y, return_counts=True)
        p = counts / len(y)
        impurity = 1 - np.sum(p ** 2)
        return impurity

data = pd.read_csv('/media/mundre/Backup/finalyear/python-script/Apple.csv')
data.head()

X = data.drop(columns='price_range',axis =1)
Y = data['price_range']

# print(X)

# print(Y)

def data_split(data, ratio):
    np.random.seed(42)
    shuffled = np.random.permutation(len(data))
    test_set_size = int(len(data) * ratio)
    test_indices = shuffled[:test_set_size] #all rows & testsetsizecolumn
    train_indices = shuffled[test_set_size:] #first
    return data.iloc[train_indices], data.iloc[test_indices]

def data_split(data, ratio):
    np.random.seed(42)
    shuffled = np.random.permutation(len(data))
    test_set_size = int(len(data) * ratio)
    test_indices = shuffled[:test_set_size]
    train_indices = shuffled[test_set_size:]
    train = data.iloc[train_indices].reset_index(drop=True)
    test = data.iloc[test_indices].reset_index(drop=True)
    return train, test

# train, test = data_split(data, 0.2)
# print(train)
# print(test)
train, test = data_split(data, 0.2)
# print(train)
# print(test)

X_train = train[['battery_power', 'blue', 'clock_speed', 'dual_sim', 'fc','four_g','int_memory','m_dep','mobile_wt','n_cores','pc','px_height','px_width','ram','sc_h','sc_w','talk_time','three_g','touch_screen','wifi']].to_numpy()
X_test = test[['battery_power', 'blue', 'clock_speed', 'dual_sim', 'fc','four_g','int_memory','m_dep','mobile_wt','n_cores','pc','px_height','px_width','ram','sc_h','sc_w','talk_time','three_g','touch_screen','wifi']].to_numpy()
# print('2D array is -')
# print(X_train)

Y_train = train[['price_range']].to_numpy().reshape(1600,)
Y_test = test[['price_range']].to_numpy().reshape(400,)
# print('1d array is-')
# print(Y_train)

from sklearn.metrics import accuracy_score
clf= DecisionTreeClassifier(max_depth=3, min_samples_split=10)
clf.fit(X_train, Y_train)
# givenInput = np.array([1043,1,1.8,1,14,0,5,0.1,193,3,16,226,1412,3476,12,7,2,0,1,0]).reshape(1, -1)
givenInput = np.array([842,0,2.2,0,1,0,7,0.6,188,2,2,20,756,2549,9,7,19,0,0,1]).reshape(1, -1)
# givenInput = np.array([1021,1,0.5,1,0,1,53,0.7,136,3,6,9.5,1988,2631,17,3,7,1,1,0]).reshape(1, -1)
outputToDisplay = clf.predict(givenInput)
# print('the ouptut is:',outputToDisplay)

# Assume that clf is your trained model, X_test is your test data,
# and y_test is the true labels for the test data
y_pred = clf.predict(X_test)
# accuracy = accuracy_score(Y_test, y_pred)
# print("Accuracy on test data:", accuracy)

from sklearn.metrics import confusion_matrix

# Assume that clf is your trained model, X_test is your test data,
# and y_test is the true labels for the test data
y_pred = clf.predict(X_test)
confusion = confusion_matrix(Y_test, y_pred)
# print("Confusion matrix:")
# print(confusion)

import matplotlib.pyplot as plt
import seaborn as sns
from sklearn.metrics import confusion_matrix

# Assume that clf is your trained model, X_test is your test data,
# and y_test is the true labels for the test data
y_pred = clf.predict(X_test)
confusion = confusion_matrix(Y_test, y_pred)
# Create a heatmap of the confusion matrix
# plt.figure(figsize=(8, 6))
# sns.heatmap(confusion, annot=True, cmap=plt.cm.Blues)
# plt.xlabel('Predicted labels')
# plt.ylabel('True labels')
# plt.show()

# from sklearn.pipeline import Pipeline
# from sklearn.preprocessing import StandardScaler
# from DecisionTreeClassifier import DecisionTreeClassifier

# # Define the pipeline steps
# steps = [('scaler', StandardScaler()),
#          ('model', DecisionTreeClassifier(max_depth=3))]

# # Create the pipeline
# pipeline = Pipeline(steps)

# # Fit the pipeline to the data
# pipeline.fit(X_train, Y_train)

# # Evaluate the pipeline on the test set
# score = pipeline.score(X_test, Y_test)

# from sklearn.pipeline import Pipeline
# from sklearn.preprocessing import StandardScaler

# # Instantiate the DecisionTreeClassifier class
dt = DecisionTreeClassifier()

# # Define the pipeline with StandardScaler and DecisionTreeClassifier
# pipeline = Pipeline([
#     ('scaler', StandardScaler()),
#     ('dt', dt)
# ])

# # Fit and predict using the pipeline
# pipeline.fit(X_train, Y_train)
# y_pred = pipeline.predict(X_test)
# print(y_pred)

# from sklearn.metrics import r2_score
# r2_score(Y_test,y_pred)

# import pickle

# pickle.dump(pipeline,open('DecisionTreeClassifier.pkl','wb'))

# pipeline.predict(pd.DataFrame([['1043','1','1.8','1','14','0','5','0.1','193','3','16','226','1412','3476','12','7','2','0','1','0']],columns =['battery_power','blue','clock_speed','dual_sim','fc','four_g','int_memory','m_dep','mobile_wt','n_cores','pc','px_height','px_width','ram','sc_h','sc_w','talk_time','three_g','touch_screen','wifi']))



# @app.route('/train', methods=['POST'])
# def train():
#     # Parse the data from the request body
#     data = request.get_json()
#     X = np.array(data['X'])
#     y = np.array(data['y'])

#     # Fit the Decision Tree Classifier
#     dt.fit(X, y)

#     # Return a success message
#     return jsonify({'message': 'Model trained successfully'})

# @app.route('/predict', methods=['POST'])
# def predict():
#     # return(1)
#     # Parse the data from the request body
#     data = request.get_json()
#     X = np.array(data['X'])

#     # Use the Decision Tree Classifier to make predictions
#     y_pred = dt.predict(X)

#     # Return the predictions as a JSON object
#     return jsonify({'predictions': y_pred.tolist()})



app = Flask(__name__)
model = DecisionTreeClassifier(max_depth=3, min_samples_split=10)

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    # X = np.array(list(data['data'].values())).reshape(1, -1)
    X =  [np.array([842,0,2.2,0,1,0,7,0.6,188,2,2,20,756,2549,9,7,19,0,0,1])]
    print(data['data'].values())
    y_pred = model.predict(X)
    return jsonify({'prediction': y_pred.tolist()})



if __name__ == '__main__':
    app.run(host='127.0.0.1', port=9000, debug=True)