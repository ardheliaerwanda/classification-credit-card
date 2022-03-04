import pandas as pd
import numpy as np
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split

dataset = pd.read_csv("Noid.csv", ';')

def TrainData():
    
    X = dataset.iloc[:, 0:11]
    y = dataset.iloc[:,11]

    X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)
    clf = DecisionTreeClassifier(random_state=42, criterion='entropy', max_depth=15, max_leaf_nodes=250)
    clf = clf.fit(X_train,y_train)
    return clf 

def PredictData(DataBaru):
    clf = TrainData()
    
    inputDF = pd.DataFrame(data = DataBaru)
    result = clf.predict(inputDF)
        
    return result 