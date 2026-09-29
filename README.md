
# Personal Task Manager
A simple Personal Task Manager built using Laravel and MySQL.

## Project Information
Project Code: WST21-PM-2026-SF Student Name: JOHN STEVEN A. CENIZA & Year: [BSIT 2nd year] Database Used: MySQL

## Features
Add Task
<img width="1426" height="107" alt="image" src="https://github.com/user-attachments/assets/d8747ed1-f456-452a-a6e8-cce58ee03f4e" />

View Tasks
<img width="1492" height="217" alt="image" src="https://github.com/user-attachments/assets/5541219b-9d6e-4485-9414-e14928253d9b" />

Edit Task
<img width="356" height="130" alt="image" src="https://github.com/user-attachments/assets/27257b81-6ade-47d8-b665-a2b5285e7345" />

Delete Task
<img width="356" height="130" alt="image" src="https://github.com/user-attachments/assets/e8389008-586a-4330-adc7-254d42761942" />

Update Task Status
<img width="950" height="180" alt="image" src="https://github.com/user-attachments/assets/c8a91c9b-787c-487e-be29-1b09c01c4860" />

Set Due Date
<img width="862" height="117" alt="image" src="https://github.com/user-attachments/assets/beb958a2-df1c-4bb2-8cba-073eba376829" />

Store tasks in a MySQL database
<img width="276" height="75" alt="image" src="https://github.com/user-attachments/assets/def13909-10cb-4347-9858-b1d5e661a3a8" />


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
