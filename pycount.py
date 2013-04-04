#!/usr/bin/python
def incr(n):
	counter = n 
	counter = counter + 1
	print counter
	return counter

def getVal():
	f = open("textfile.txt")
	data = f.read()
	f.close()
	return data

current = getVal()
currInt = int(current)
incr(currInt)
