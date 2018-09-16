
def cacheTodaysInfo():

    apiKey= "sb5r9jv4ndop6hm0dq763vk6a0"
    apiID= "hackthenorth804220
    import requests
    store=requests.get ("https://xecdapi.xe.com/v1/convert_from.json/from=CAD&to=USD&amount=1.00", auth=HTTPBasicAuth(apiID, apiKey))
    fileCaching= open('data.dat, 'a')
    a=store.to[0].mid
    myfile.append(a)
