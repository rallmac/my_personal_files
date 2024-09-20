#!/usr/bin/python3
"""This module connects the atm code to mysql"""
import mysql.connector


def get_db_connection():
    """Establish and returns a connection to the MySQL database."""
    conn = mysql.connector.connect(
            host="localhost",
            user="root",
            password="Tobi2025%H45",
            database="atm"
    )
    return conn


def initialize_db(conn):
    """
    Creates the accounts table if it doesn't exist and inserts
    initial balance if needed.
    """
    cursor = conn.cursor()
    cursor.execute("""
    CREATE TABLE IF NOT EXISTS accounts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        balance FLOAT DEFAULT 0
    )
    """)
    cursor.execute("SELECT COUNT(*) FROM accounts")
    if cursor.fetchone()[0] == 0:
        cursor.execute("INSERT INTO accounts (balance) VALUES (0)")
        conn.commit()
    cursor.close()


def get_balance(conn):
    """Fetches and returns the current balance."""
    cursor = conn.cursor()
    cursor.execute("SELECT balance FROM account WHERE id = 1")
    balance = cursor.fetchone()[0]
    cursor.close()
    return balance


def update_balance(conn, new_balance):
    """Updates the balance in the database."""
    cursor = conn.cursor()
    cursor.execute("UPDATE accounts SET balance = %s WHERE id = 1", (new_balance))
    conn.commit()
    cursor.close()
