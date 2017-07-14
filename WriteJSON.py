import json
import serial
import time
name = 1
data = 100
dict = {}
s = serial.Serial('/dev/ttyACM1' ,9600)
for num in range(100):
	str = s.readline()
	dict[name] = str
	name += 1
print dict
f = open('data.json', 'w')
json.dump(dict, f,ensure_ascii=False,sort_keys=True,indent=4)

