<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:public/adminpage1.php');	
}
?>

<html>
<head>
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="css/adminlogin.css">
</head>
<body>
      <div class="main-container">
          <div class="login-page">
            <form action="adminlogin.php" method="post">
            <h1>Admin Login</h1>
            <div class="login-content">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"required> <br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"required> <br>
                <div class="login-button">
                    <form action="result.php" method="POST"><input type="submit" value="Login" name="submit"></form>
                </div>
            </div>
            </form>
          </div>
      </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    include('dbconnect.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    $qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    $run=mysqli_query($con,$qry);
    $row=mysqli_num_rows($run);
    if($row<1)
    {
        ?>
        <script>
        alert('Username or Password Not Match');
        window.open('adminlogin.php','_self');
        </script>
       <?php
    }
    else
    {
        $data=mysqli_fetch_assoc($run);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        header('location:public/adminpage1.php');
    }
}
?>