#PHP - PDO 
PHP PDO is a database access layer that provides a uniform interface for working with multiple databases.

PDO simplifies the common database operations including:

.Creating database connections
.Executing queries using prepared statements
.Calling stored procedures
Performing transactions
.And handling errors
 PDO allows you to work with any database that has a PDO driver available. PDO relies on database-specific drivers, e.g., PDO_MYSQL for MySQL, PDO_PGSQL for PostgreSQL, PDO_OCI for Oracle database, etc., to function properly. Here’s the complete list of PDO drivers.

Therefore, to use PDO for a specific database, you need to have a corresponding database driver available.

#Section 1. PDO Quick Start
This section shows you step by step how to connect to some relational database management systems, including MySQL and PostgreSQL.

Connect to MySQL – show you step-by-step on how to connect to the MySQL database.
Connect to PostgreSQL – show you how to connect to the PostgreSQL database.

#Section 2. Creating a sample database
Create a sample database – show you how to create a sample database and tables in the MySQL database server and a reusable script for connecting to the database.
Creating new tables – learn how to create a new table in a MySQL database from PHP using PDO.

#Section 3. Prepared Statements
Prepared statement – introduce to you the prepared statement.
Execute the LIKE operator – show you how to use a prepare statement to execute a query that contains the LIKE operator.
Execute the IN operator – learn how to use a prepared statement to execute a query that contains the IN operator.

#Section 4. CRUD in PDO
This section illustrates the common database operation, including creating (insert), reading(select), updating, and deleting data using PDO. These basic operations are often called CRUD.

Inserting data into a table – walk you through the steps of inserting data into a table of a database.
Updating data in a table – show you how to update data in a table from PHP using PDO.
Selecting data from a table – guide you on how to query data from a table.
Deleting data from a table – show you how to delete data in the database table using PDO API.

#Section 5. Fetching data
This section discusses various fetch* methods and modes in detail.

fetch() – fetch a row from a result set associated with a PDOStatement object.
fetchAll() – fetch all rows from a result set object into an array.
fetchcolumn() – fetch a single column from the next row in a result set.
fetchObject() – fetch the next row from a result set and returns it as an object of a class.
PDO::FETCH_KEY_PAIR – select a two-column result in an array where the first column is the key and the second column is the value
PDO::FETCH_GROUP – group rows by the unique values of the first column in the result set.
PDO::FETCH_CLASS – show you how to return an instance of a class whose properties map to the column values from the database.

#Section 6. Calling Stored Procedures (Hidden file)
This section shows you some examples of dealing with stored procedures, including:

Calling a MySQL stored procedure from PHP using PDO – show you how to call a MySQL stored procedure from PHP using PDO.
#Section 6 cntd. Managing Transaction in PDO
PDO provides you with some handy methods, including beginTransaction(), commit() and rollBack() that handles transactions effectively. This section gives you some examples of handling transactions in your web application.
PDO Transaction – learn how to perform a database transaction from PHP using PDO
