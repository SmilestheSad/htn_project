from numpy import loadtxt
from xgboost import XGBClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score

db = loadtext('xe.csv',delimiter = ",")
# load the spreadsheet, split using ","
X = dataset[:,0:8]
# dependent on amount of columns
Y = dataset[:,8]
#dependent on amount of rows
seed = 2
test_size = 0.33
X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=test_size, random_state=seed)
model = XGBClassifier()
model.fit(X_train, y_train)
print(model)