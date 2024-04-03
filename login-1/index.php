<?php
require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');

$sSuccessMsg = "<div class=\"alert-box\">  You are not logged in.  <a href=\"\" class=\"close\">&times;</a></div>";

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pwd = $_POST['passwd'];

    // Create connection
    $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE name=? AND password=?");
    $stmt->bind_param("ss", $username, $pwd);

    // Execute statement
    $stmt->execute();

    // Get result
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $sSuccessMsg = "<div class=\"alert-box success\">Succesfully logged in.<a href=\"\" class=\"close\">&times;</a></div>";
    } else {
        $sSuccessMsg = "<div class=\"alert-box alert\">Wrong user name or password.<a href=\"\" class=\"close\">&times;</a></div>";
    }

    // Get the real SQL query
    $sql = "SELECT * FROM users WHERE name='$username' AND password='$pwd'";

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>OWASP Bricks Login Form #1</title>
  <link rel="stylesheet" href="../stylesheets/foundation.min.css">
  <link rel="stylesheet" href="../stylesheets/app.css">
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <script src="../javascripts/modernizr.foundation.js"></script>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'></head>
<body>
<div class="row">
	<div class="four columns centered">
		<br/><br/><a href="../index.php"><img src="../images/bricks.jpg" /></a><br/><br/>
		<form method="POST" action="index.php" enctype="application/x-www-form-urlencoded">
			<fieldset>
				<legend>Login</legend>
				<p><?php echo $sSuccessMsg;?></p>
				<p>Username: <input type="text" name="username" id="username" size="25" required/></p>
				<p>Password: <input type="password" name="passwd" id="passwd" size="25" required/></p>
				<p><input type="submit" class="small button" name="submit" id="submit" value="Submit"/><br/></p>
			 </fieldset>
		</form>
		<!-- Display the real SQL query -->
		<?php 
			if($showhint === true && isset($sql)) { 
				echo '<div class="alert-box secondary">SQL Query: ';
				echo $sql; 
				echo '<a href="" class="close">&times;</a></div>';			
			} 
		?>
	</div><br/><br/><br/>
</div>

<script src="../javascripts/jquery.js"></script>
<script src="../javascripts/foundation.min.js"></script>
<script src="../javascripts/app.js"></script>
</body>
</html>
