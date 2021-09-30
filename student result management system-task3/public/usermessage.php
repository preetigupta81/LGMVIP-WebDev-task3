<?php
session_start();
    if(isset($_SESSION['uid']))
    {
        echo "";					
    }
    else
    {
        header('location:adminpage1.php');
    }
				
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Result System</title>
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/usermessage.css">
</head>
<body>
    <div class="main-container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Online Result</a>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="result.php">Result</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            </ul>
        </nav>
        <div class="content">
        <form action="usermessage.php" method="POST">
            <table>
                <tr>
                    <th class="id_h1">Id </th>
                    <th class="name_h1">Name </th> 
                    <th class="email_h1">Email </th> 
                    <th class="contact_h1">Contact No</th>
                    <th class="message_h1">Message </th>
                </tr>
        
        <?php
        include('../dbconnect.php');
        $sql="SELECT * FROM `user_message`";
        $run=mysqli_query($con,$sql);
        if(mysqli_num_rows($run)>0)
        {
            while($row=mysqli_fetch_assoc($run))
            {
                ?>
                <tr>
                    <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
                    <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
                    <th class="email_h"> <?php  echo $row['u_email'].'<br>'; ?></th> 
                    <th class="contact_h"> <?php  echo $row['u_contact'].'<br>'; ?></th> 
                    <th class="message_h"> <?php  echo $row['u_message'].'<br>'; ?></th> 
                </tr>     
                <?php    
            }
        }
        else{
            echo "Connection failed";
        }
        ?>
        </table></form></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
