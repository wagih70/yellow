
## About Project

MVC structural project consists of:-
- logged in employees can check only available companies list.
- Admin can create, edit and delete companies from the list.
- Admin can add new companies categories.

## How to run the project

- Open the project code and update .env file as follows:
```
DB_DATABASE=yellow
DB_USERNAME=YOUR USERNAME
DB_PASSWORD=YOUR PASSWORD
```
- Import [yellow.sql] file from inside the project.
- open your terminal in the directory where you have the project.
- type in terminal 
```bash
cd yellow
php artisan serve
```
- use the link provided on your terminal.
- you must register and login to act as an employee 
- for administrator use:
```
email address: yellow@gmail.com
password: Yellow1234
```
- Now you're logged in as an adminstrator and you have full access.

## Files Functionality

- Controllers/CompanyController : used to create, fetch, update and delete companies. 
- Controllers/CategoryController : used to create new categories.
- Requests/CompanyRequest: create and update form validation for companies. 
- Middleware/IsAdmin : used to give full access only to adminstrator.
- Routes/web : used to handle the routes.
- Public/js/main.js : used to handle submenu functionality using Ajax.
- resources/views : has all the frontend files.

## Root Folder

The root folder has
- The application files
- my Mysql database , it's name : yellow.sql
