#!/usr/bin/python3
"""I don't really know what this code does"""

from flask import Flask
from flask_cors import CORS

app = Flask(__name__)
CORS(app)

@app.route("/")
def helloworld():
    return "Hello, cross-origin-world!"
