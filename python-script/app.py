import numpy as np
import pickle
from flask import Flask, request, jsonify
app = Flask(__name__)


with open('/media/mundre/Backup/finalyear/python-script/decisionTreeFinal.pkl', 'rb') as file:
        dt = pickle.load(file)
@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json()
    X = np.array(list(data['data'].values())).reshape(1, -1)
    # X =  [np.array([842,0,2.2,0,1,0,7,0.6,188,2,2,20,756,2549,9,7,19,0,0,1])]
    print(data['data'].values())
    y_pred = dt.predict(X)
    return jsonify({'prediction':y_pred.tolist()})



if __name__ == '__main__':
    app.run(host='127.0.0.1', port=9000, debug=True)
