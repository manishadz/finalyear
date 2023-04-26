from flask import Flask, jsonify
from sklearn.preprocessing import LabelEncoder
from sklearn.tree import DecisionTreeRegressor
from sklearn.model_selection import train_test_split
import pandas as pd

app = Flask(__name__)

@app.route('/myapi')
def myapi():
    # Load your data into a Pandas DataFrame
    data = pd.read_csv('/home/bhairab/Downloads/PythonProj/finalyear/python-script/Apple.csv')
    
    le = LabelEncoder()
    data['Model'] = le.fit_transform(data['Model'])

    # create input and output variables
    X = data[['Model', 'Year', 'Storage']]  # features
    y = data['Price']  # target variable

    # split the data into training and testing sets
    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

    # create a decision tree model and train it
    model = DecisionTreeRegressor(max_depth=3)
    model.fit(X_train, y_train)

    # predict the price of a new phone
    new_phone = [[le.transform(['iphone6s'])[0], 2023, 128]]  # model 6, released in 2023 with 128GB storage
    predicted_price = model.predict(new_phone)

    print(f"The predicted price for the new phone is ${predicted_price[0]:.2f}.")

    # evaluate the model performance
    train_score = model.score(X_train, y_train)
    test_score = model.score(X_test, y_test)
    print(f"Train score: {train_score:.2f}")
    print(f"Test score: {test_score:.2f}")
    # predicted_price = predicted_price[0]
    data = {'predicted_price' : "{:.2f}".format(predicted_price[0])}
    return jsonify(data)

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=9000, debug=True)
