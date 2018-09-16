import requests

r=requests.get('https://localhost:8000', data="HELLO")
print (r.status_code, r.reason)
print ("FIINISHE")
