from flask import Flask
from flask_restful import Resource, Api
import requests
import json

app = Flask(__name__)
api = Api(app)

class Product(Resource):
    def get(self): 
        r = requests.get('https://reqres.in/api/users/')
        return {
            'products': json.loads(r.text)
        }

api.add_resource(Product, '/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)
