
# Personal Task Manager
A simple Personal Task Manager built using Laravel and MySQL.

## Project Information
Project Code: WST21-PM-2026-SF Student Name: JOHN STEVEN A. CENIZA & Year: [BSIT 2nd year] Database Used: MySQL

## Features
Add Task
View Tasks
Edit Task
Delete Task
Update Task Status
Set Due Date
Store tasks in a MySQL database

## Technologies Used
Laravel
PHP
MySQL
Blade
HTML
XAMPP

## Laravel Components
This project demonstrates the basic Laravel flow:

**Routes → Controller → Model → Database → Blade**

* **Routes:** Handles the URLs and requests.
* **Controller:** Handles task operations.
* **Model:** Connects the application to the tasks database table.
* **Database:** Stores task information.
* **Blade:** Displays the task management pages.
## How to Run
1.Start Apache and MySQL using XAMPP.
2.Open the project folder in Command Prompt.
3.Run:

'composer install'

4.Configure the .env file with the MySQL database.
5.Run:

'php artisan migrate'

6.Start the Laravel server:

'php artisan serve'

7.Open the application in your browser:

'http://127.0.0.1:8000'