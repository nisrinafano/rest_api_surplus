# Coding Challenge Rest API

This project is made by Nisrina Fadhilah Fano as a coding challenge.

<b>Framework: Laravel 8.6.12</b>

<b>Prequisites:</b>
- XAMPP with PHP version >= 7.3
- Postman

## Steps to run this project in local environment:
0. Start Apache and MySQL server
1. Clone this project inside xampp/htdocs folder
2. Copy `.env.example` file and rename the new file to `.env`
3. Create a new database and change the value of `DB_DATABASE` with your database name
4. Open terminal, navigate to this project folder
5. Run `php artisan migrate` to create the table
6. Run `php artisan db:seed` to populate the table
7. Run `php artisan serve` to start
8. Now you're ready to test the REST API with Postman

## Example Request
- Category
    - [GET]  /category
    - [GET]  /category/{id}
    - [POST]  /category/add <br>
        <b>Request body :</b>
        ```
        {
            "name": "Fruit",
            "enable": 1
        }
        ```
- Product
    - [GET]  /product
    - [GET]  /product/{id}
    - [POST]  /product/add <br>
        <b>Request body :</b>
        ```
        {
            "name": "Orange",
            "description": "Fresh Orange",
            "enable": 1
        }
        ```
- Category product
    - [GET]  /category_product
    - [POST]  /category_product/add <br>
        <b>Request body :</b>
        ```
        {
            "category_id": 1,
            "product_id": 1
        }
        ```
- Image
    - [GET]  /image
    - [GET]  /image/{id}
    - [POST]  /image/add <br>
        <b>Request body :</b>
        ```
        {
            "name": "Orange",
            "file": "https://i5.walmartimages.ca/images/Enlarge/234/6_r/6000191272346_R.jpg"
            "enable": 1
        }
        ```
- Product image
    - [GET]  /product_image
    - [POST]  /product_image/add <br>
        <b>Request body :</b>
        ```
        {
            "product_id": 1,
            "image_id": 1
        }
        ```
