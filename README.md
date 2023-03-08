# Coding Challenge Surplus

This project is made by Nisrina Fadhilah Fano as a coding challenge for the recruitment process at Surplus as a Backend Developer.

<b>Framework: Laravel 8.6.12</b>

<b>Prequisites:</b>
- XAMPP with PHP version >= 7.3
- Postman

<b>Steps to run this project in local environment:</b>
1. Start Apache and MySQL server
2. Clone this project inside xampp/htdocs folder
3. Copy `.env.example` file and rename the new file to `.env`
4. Create a new database and change the value of `DB_DATABASE` with your database name
5. Open terminal, navigate to this project folder
6. Run `php artisan migrate` to create the table
7. Run `php artisan db:seed` to populate the table
8. Now you're ready to test the REST API with Postman
