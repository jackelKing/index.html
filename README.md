# PHP Registration Form

A simple registration form built with **HTML**, **CSS**, **JavaScript**, and **PHP**.  
The form stores user details in a text file on the server.

## Features
- Basic responsive design
- Client-side form validation using JavaScript
- Data saved to a text file using PHP
- Easy to host with Render using Docker
  
## How It Works
1. The user fills in the form on `index.html`.
2. When submitted, data is sent via POST to `save_data.php`.
3. PHP writes the data to `data.txt`.
4. A confirmation message is displayed after submission.

## Local Setup
You can run this locally if you have PHP installed:
```bash
php -S localhost:8000
