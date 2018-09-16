import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
import pandas as pandas
import math

data = pandas.read_csv("C:/users/Victor/Desktop/hehexd.csv")
# "C:/users/Victor/Desktop/hehexd.csv"
readx = data.iloc[:,1]

array = []

for i in readx:
    array.append(i)
def insertion(array):
    for i in range(1, len(array)):
        key = array[i]
        j = i-1
        while(array[j] > key and j > -1):
            array[j+1] = array[j]
            j -= 1
        j += 1
        array[j] = key
    return array
    
delta = []
for i in range (1, len(array)):
    temp = array[i]-array[i-1]
    temp2 = '%.5f' % temp
    delta.append(float(temp2))

print(len(array))
print(len(delta))

delta = insertion(delta)

medhigh = delta[math.ceil(len(delta)/2)]
medlow = delta[math.floor(len(delta)/2)]
if len(array)%2 == 0:
        median = (medhigh + medlow)/2
else:
        median = medhigh

#(delta)
#print(len(delta))

temp = 0
for i in range (0, len(delta)-1):
    temp += delta[i]
    # print(temp)
mean = temp/len(delta)

mean2 = (array[len(array)-1]-array[0])/len(array)

# print(mean, mean2)
temp = 0

for i in range (0, len(delta)-1):
    temp = (delta[i] - mean)**2
        
stdev = math.sqrt(temp/len(delta))
# print(mean, median, stdev)
skew = (3*(mean - median))/stdev

text_file = open("Output.txt", "w")
text_file.write(str(skew))

print(skew)