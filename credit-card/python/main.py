from os.path import join, isfile
import sys
from uuid import uuid4

from flask import Flask, request
from flask_restful import Resource, Api

import ml

app = Flask(__name__)
api = Api(app)

root_dir = '/app'

class HelloWorld(Resource):
  def get(self):
    return { "hello": "world" }


class MLService(Resource):
  def post(self):


    if not request.json:
      return {
        "error": True,
        "message": "no data found"
      }
    
    dataInput = {
        'CODE_GENDER': [request.json["CODE_GENDER"]],
        'FLAG_OW0_CAR': [request.json["FLAG_OW0_CAR"]],
        'FLAG_OW0_REALT1': [request.json["FLAG_OW0_REALT1"]], 
        'CNT_CHILDREN': [request.json["CNT_CHILDREN"]], 
        'AMT_INCOME_TOTAL': [request.json["AMT_INCOME_TOTAL"]], 
        'NAME_EDUCATION_TYPE': [request.json["NAME_EDUCATION_TYPE"]],
        'NAME_FAMILY_STATUS': [request.json["NAME_FAMILY_STATUS"]],
        'NAME_HOUSING_TYPE': [request.json["NAME_HOUSING_TYPE"]],
        'DAYS_BIRTH': [request.json["DAYS_BIRTH"]],
        'DAYS_EMPLOYED': [request.json["DAYS_EMPLOYED"]],
        'JOB': [request.json["JOB"]]
    }

    result = (ml.PredictData(dataInput))
    
    hasilString = "1"
    
    if result[0] == 0:
      hasilString = "0"
    
    return { 
      "error": False,
      "message": "Belajar Res",
      "result": hasilString,
    }


api.add_resource(HelloWorld, '/')
api.add_resource(MLService, '/predict')


if __name__ == "__main__":
  app.run(host="0.0.0.0", port="3333", debug=False)

