<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:public/mainpage.php');	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Result System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="main-container">
       <form action="login.php" method="POST">
       <h1>LOGIN</h1>
        <h4>Fill the email and password correctly</h4>
        <div class="login-page">
            <label for="email">Email Id:</label>
            <input type="email" name="email" id="email"required> <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"required> <br>
            <div class="login-button">
                <form action="result.php" method="POST"><input type="submit" value="Login" name="submit"></form>
            </div>
        </div>
       </form>
    </div>
</body>
</html>
<?php
include('dbconnect.php');
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `register` WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($con,$qry);
    $row=mysqli_num_rows($result);
    if($row<1)
    {
        $data=mysqli_fetch_array($result);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        echo "You are Successfully login!!";
        header('location:public/mainpage.php');
    }
    else
    {
        ?>
        <script>
        alert('Email Id or Password Not Match');
        window.open('login.php','_self');
        </script>
       <?php
    }
}
?>