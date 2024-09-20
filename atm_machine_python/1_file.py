#!/usr/bin/python3
"""
This is a menu for a python console application
"""


import db_handler

# Establish database connection
conn = db_handler.get_db_connection()

# Initialize the database
db_handler.initialize_db(conn)

# Fetch the current balance
balance = db_handler.get_balance(conn)

while True:

    print("1) Deposit")
    print("2) Withdraw")
    print("3) Print Balance")
    print("4) Quit")

    choice = input("Enter Choice: ")

    choice = choice.strip()

    if (choice == "1"):
        amount = float(input("Enter Amount: "))
        balance += amount
    elif (choice == "2"):
        amount = float(input("Enter Amount: "))
        balance -= amount
    elif (choice == "3"):
        print("Balance:", balance)
    elif (choice == "4"):
        break
    else:
        print("Invalid Option. Please Try Again.")

# Close the database connection
conn.close()
