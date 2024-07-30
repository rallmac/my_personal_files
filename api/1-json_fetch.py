#!/usr/bin/python3
"""This api creates a response when run"""


import requests


response = requests.get('https://jsonplaceholder.typicode.com/todos/1')
if response.status_code == 200:
    json_data = response.json()
    print(json_data)
else:
    print("Failed to fetch data. Status code:", response.status_code)
