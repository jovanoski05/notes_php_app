# PHP Notes App

## About this project

This is a simple begginer project. I am doing this project in order to learn
the basics of PHP and MySQL.

Currently the project is in its early stages and it isn't fully built, and 
it isn't functional either.

This project is built locally using XAMPP, Apache server and MySQL server,
provided by XAMPP.

The .htaccess file is created because I had a problem with XAMPP routing and 
accessing static files and images.

## About the database

I am using MySQL and PDO connection between PHP and the database.

The database has 2 tables: 'users' and 'notes'. In the users table I have 4 columns: 'id' - user id, primary key; 'username' - the unique username; 'email' - the unique email of the user; 'password' - the hashed password of the user.

The 'notes' tables has 6 columns: 'id' - primary key; 'title' - varchar(255), the title of the note; 'subtitle' - the subtitle of the note, varchar(128); 'body' - the main content of the note, text; 'date_created' - date when this note was created; 'user_id' - the of the author.

In the table 'notes', 'user_id' is a foreign key referencing to the column 'id' of table 'users'.

## Release notes

The project is in early stages and it is not functioning yet. I need
to set up the database, tables, to create other forms, edit the navigation
bar and many other things.

## License 

No license
