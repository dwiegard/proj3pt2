Dan Wiegard's Project 3 Visitor Counter Readme

------------
pycount.py
------------
This script has an function called incr(n) which increments an integer, n,
by one, prints the result, and returns the result. There is another function
called getVal() which gets the current counter value stored in a filed
called textfile.txt in the cgi-bin folder. A variable "current" called the
getVal() function to get the current visitor count from textfile.txt. Then
currInt calls the built-in int() function to convert this string to an
integer. This integer is then passed through to the incr function.

-----------
index.php
-----------
index.php uses include() to display textfile.txt on the website, which
is the current visitor count. The exec command runs pyscript.py and saves
the output (i.e. the current count plus 1) in a variable called output.
The file_put_contents command then takes the output variable and overwrites
textfile.txt with the new value. After that there is a command to detect
the current browser language. This is followed by if/else statements to
print out to the user what the current browser language is.
