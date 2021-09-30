<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:login.php');	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Result System</title>
    <link rel="stylesheet" href="css/registerpage.css">
</head>
<body>
    <div class="main-container">
       <form action="registerpage.php" method="POST">
       <div class="register-page">
           <h1>REGISTRATION</h1>
           <h4>Fill the following Data correctly.</h4>
            <Label for="name">Student Name:</Label>
            <input type="text" name="name" id="name" required> <br>
            <label for="phoneno">Mobile Number:</label>
            <input type="number" name="phoneno" id="phoneno"required> <br>
            <label for="email">Email Id:</label>
            <input type="email" name="email" id="email"required> <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password"required> <br>
            <div class="button">
                <form action="login.php" method="post">
                    <input type="submit" value="Register" name="submit">
                </form>
            </div>
        </div>
       </form>
    </div>
</body>
</html>

<?php  
if (isset($_POST['submit'])) {  
    include('dbconnect.php');
    extract($_POST);  
    $host = "localhost";  
    $username   = "root";  
    $password   = "";  
    $dbname     = "result";  
    // Create connection  
    $conn = new mysqli($host, $username, $password, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  
    $sql = "INSERT INTO `register` (name,phoneno,email,password)VALUES ('$name','$phoneno','$email','$password')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: login.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
}  
?> 