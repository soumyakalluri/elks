#!/usr/bin/env python3
import datetime
import os

#Print HTML header
print("Cache-Control: no-cache")
print("Content-type: text/html")
print('''
<html><head><title>Environment Variables</title></head>\
<body><h1 align=center>Environment Variables</h1>\
<hr/>
''')
for key, value in os.environ.items():
  print("{}={}\n<br/>".format(key, value))
print('''</body></html>''')
