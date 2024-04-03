<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once(dirname(dirname(__FILE__)) . '/LocalSettings.php');
$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
if (!$con) {
    die('Error!' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>OWASP Bricks Configuration</title>
    <link rel="stylesheet" href="../stylesheets/foundation.min.css">
    <link rel="stylesheet" href="../stylesheets/app.css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <script src="../javascripts/modernizr.foundation.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="row">
    <div class="four columns centered">
        Setting up database.
        <?php
        $sql = "DROP DATABASE IF EXISTS $dbname";
        if (mysqli_query($con, $sql)) {
            echo "1. Database already exists, deleting it right away.<br/><br/>";
        } else {
            echo "Error! dropping database: " . mysqli_error($con) . "<br/><br/>";
        }

        // Creating new database
        $sql = "CREATE DATABASE $dbname";
        if (mysqli_query($con, $sql)) {
            echo "1. Creating database<br/><br/>";
        } else {
            echo "1. Error creating database: " . mysqli_error($con) . "<br/><br/>";
        }

        // Creating table users
        $sql = "CREATE TABLE users (
                  `idusers` INT NOT NULL ,
                  `name` VARCHAR(45) NOT NULL ,
                  `email` VARCHAR(45) NOT NULL ,
                  `password` VARCHAR(45) NOT NULL ,
                  `ua` VARCHAR(45) NOT NULL ,
                  `ref` VARCHAR(145) NOT NULL ,
                  `host` VARCHAR(45) NOT NULL ,
                  `lang` VARCHAR(45) NOT NULL ,
                  PRIMARY KEY (`idusers`)
                )";
        if (mysqli_query($con, $sql)) {
            echo "2. Created new table<br/><br/>";
        } else {
            echo "2. Error in creating table: " . mysqli_error($con) . "<br/><br/>";
        }

        // Inserting data into users table
        $sql = "INSERT INTO users
                  (`idusers`, `name`, `email`, `password`, `ua`, `ref`, `host`, `lang`)
                VALUES
                  (0, 'admin', 'admin@getmantra.com', 'admin', 'Brick_Browser', '$server$scriptpath/content-13/index.php', '127.0.0.1', 'en'),
                  (1, 'tom', 'tom@getmantra.com', 'tom', 'Block_Browser', '', '8.8.8.8', 'en'),
                  (2, 'ron', 'ron@getmantra.com', 'ron', 'Rain_Browser', '', '192.168.1.1', 'en'),
                  (3, 'harry', 'harry@getmantra.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Mantra', '', '127.0.0.1', 'en')";
        if (mysqli_query($con, $sql)) {
            echo "3. Added users<br/><br/>";
        } else {
            echo "3. Error adding users: " . mysqli_error($con) . "<br/><br/>";
        }
        ?>
    </div>
</div>

<script src="../javascripts/jquery.js"></script>
<script src="../javascripts/foundation.min.js"></script>
<script src="../javascripts/app.js"></script>
</body>
</html>
