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

df = pd.read_csv('./NGODATASET-UPDATED - NGODATASET-UPDATED.csv')
df.head()

df.isnull().sum()

df.describe()


df.loc[df['Category'] == 'Medical','Catt_Class'] = "Medical"
df.loc[df['Category'] == 'DisasterRF','Catt_Class'] = "DisasterRF"
df.loc[df['Category'] == 'Education','Catt_Class'] = "Education"
df.loc[df['Category'] == 'Women','Catt_Class'] = "Women"
df.loc[df['Category'] == 'OldAge','Catt_Class'] = "OldAge"
df.loc[df['Category'] == 'FoodForNeed','Catt_Class'] = "FoodForNeed"

Catt_Class = pd.get_dummies(df['Catt_Class'])
Loc_Class = pd.get_dummies(df['Locality'])
Title_Class = pd.get_dummies(df['Title'])
Image_Class = pd.get_dummies(df['Image'])
Payment_Class = pd.get_dummies(df['Payment'])

FinalDF = pd.concat([Catt_Class, 
                      Loc_Class,
                      Title_Class,
                      Image_Class,
                      Payment_Class,
                      df['Amount']], axis=1)

minmaxscaler = MinMaxScaler()
FinalDF = minmaxscaler.fit_transform(FinalDF)

model = neighbors.NearestNeighbors(n_neighbors=40, algorithm='ball_tree')
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
    print("TRY")
    X = df[(df.Category == C) & (df.Amount == AI) & (df.Urgency == T) & (df.Locality == P)].index
    X = X[0]
except:
    print("EXCEPT")
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
print(X) 
   
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

