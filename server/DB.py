import mysql.connector
import os

sqluser = os.environ["MYSQL_USER"]
sqlpass = os.environ["MYSQL_PASS"]

db = mysql.connector.connect(
    host = "localhost",
    user = sqluser,
    password = sqlpass,
    database = "prod_proplistings"
)
cursor = db.cursor()
query = "SELECT * FROM user"
cursor.execute(query)
results = cursor.fetchall()
for row in results:
    print(row)
cursor.close()

db.close()
