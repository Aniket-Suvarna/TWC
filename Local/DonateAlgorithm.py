import numpy as np 
import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt
from sklearn import neighbors
from sklearn.preprocessing import MinMaxScaler
import sys

C = sys.argv[1]
A = sys.argv[2]
AI=int(A)
T = sys.argv[3]
P = sys.argv[4]

df = pd.read_csv('../NGODATASET.csv')
df.head()

df.isnull().sum()

df.describe()



Catt_Class = pd.get_dummies(df['Category'])
Loc_Class = pd.get_dummies(df['Locality'])


FinalDF = pd.concat([Catt_Class, 
                      Loc_Class,
                      df['Amount']], axis=1)

minmaxscaler = MinMaxScaler()
FinalDF = minmaxscaler.fit_transform(FinalDF)

model = neighbors.NearestNeighbors(n_neighbors=18, algorithm='ball_tree')
model.fit(FinalDF)
distlist, sortedlist = model.kneighbors(FinalDF)

"""**For All The Filters**"""

Category_array = []
Amount_array = []
Urgency_array = []
Locality_array = []

Title_array = []
Image_array = []
Payment_array = []
try:
    X = df[(df.Category == C) & (df.Amount == AI) & (df.Urgency == T) & (df.Locality == P)].index
    X = X[0]
except:
    X = df[df.Category == C].index
    X = X[0]
for i in sortedlist[X]:
    Category_array.append(df.loc[i].Category)
    Amount_array.append(df.loc[i].Amount)
    Urgency_array.append(df.loc[i].Urgency)
    Locality_array.append(df.loc[i].Locality)

    Title_array.append(df.loc[i].Title)
    Image_array.append(df.loc[i].Image)
    Payment_array.append(df.loc[i].Payment)
   
print(Category_array)
print("*")
print(Amount_array)
print("*")
print(Urgency_array)
print("*")
print(Locality_array)
print("*")
print(Title_array)
print("*")
print(Image_array)
print("*")
print(Payment_array)

