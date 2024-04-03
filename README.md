**OWASP Bricks PHP8 - Login-1 Lab**

**Overview**

OWASP Bricks PHP8 is a modified version of the OWASP Bricks project, designed to demonstrate various vulnerabilities in web applications and provide a platform for learning about web security. This specific version of OWASP Bricks has been modified to support PHP 8 and utilizes MySQLi functions for database interaction.

The login-1 lab is the first in a series of labs designed to teach users about common web application security vulnerabilities related to authentication and session management.

**Features**

Based on OWASP Bricks PHP8 project Updated to support PHP 8 Utilizes MySQLi functions for database interaction Contains a modified login-1 lab for learning about authentication vulnerabilities

**Prerequisites**

Linux: Ensure you have apache2 and mysql services.

**Usage**

1. Go to html folder

bash cd /var/www/html

2. Clone the repository:

bash git clone https://github.com/mstekh/owasp-bricks-php8.git

3. Navigate to the project directory:

bash cd owasp-bricks-php8

4. List files

bash ls

delete file LocalSetting.php with 

bash sudo rm LocalSettings.php

5. Start mysql and apache2 services

bash sudo service mysql start 
bash sudo service apache2 start 

6. Access the OWASP Bricks PHP8 application:

Using mysql create database bricks. In kali linux user root password toor for mysql.

Open a web browser and navigate to http://localhost/owasp-bricks-php8 to access the OWASP Bricks PHP8 application nd set it up.

![image](https://github.com/mstekh/owasp-bricks-php8/assets/119841626/51d68368-e158-4111-9b65-4abebbd71f7a)

After submitting download file LocalSettings.php and move it to /var/www/html/owasp-bricks-php8

bash sudo mv LocalSettings.php /var/www/html/owasp-bricks-php8

Open a web browser and navigate to http://localhost/owasp-bricks-php8/login-1/ to access the OWASP Bricks lab-1.

![image](https://github.com/mstekh/owasp-bricks-php8/assets/119841626/0a24ae49-4f2c-4cfc-b8b2-e0d431d89a44)

**Lab Instructions:**
The login-1 lab is centered around exploiting vulnerabilities related to authentication and session management, specifically focusing on MySQL injections. Your objective is to gain unauthorized access by leveraging MySQL injection techniques.

The login credentials for this lab are:
Username: admin 
Password: admin

Your goal is to log in using MySQL injection methods, demonstrating common web application security issues associated with inadequate input validation and database query construction.

**Contributing**
Contributions are welcome! If you find any issues or have suggestions for improvements, please open an issue or submit a pull request.

**License** 
This project is licensed under the MIT License - see the LICENSE file for details.

**Acknowledgements**
Special thanks to the OWASP Bricks project contributors for their work on the original project.
