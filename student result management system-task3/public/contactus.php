<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Result System</title>
    <link rel="stylesheet" href="../css/contactus.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="main-container">
        <div class="nav-content">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <a class="navbar-brand" href="#">Online Result System</a>
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="form">
              <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                Student Result Management System is a technological opportunity for the school, college, university and coaching centre institutions searching for a secure, simple and alternative solution to the conventional paper-based exam results evaluation, reporting and distribution.
                </p>
    
                <div class="social-media">
                  <p>Connect with us :</p>
                  <div class="social-icons">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="contact-form">
                    <form method="POST">
                    <h3 class="title">Contact us</h3>
                    <div class="input-container">
                        <label for="name">Username</label>
                        <input type="text" name="name" class="input" placeholder="username"/>
                        <!-- <span>Username</span> -->
                    </div>
                    <div class="input-container">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="input" placeholder="emailid"/>
                        <!-- <span>Email</span> -->
                    </div>
                    <div class="input-container">
                        <label for="contact">Phone</label>
                        <input type="tel" name="contact" class="input" placeholder="phoneno" />
                        <!-- <span>Phone</span> -->
                    </div>
                    <div class="input-container textarea">
                        <label for="message">Message</label>
                        <textarea name="message" class="input" placeholder="message"></textarea>
                        <!-- <span>Message</span> -->
                    </div>
                    <input type="submit" value="Send" class="btn" />
                    </form>
              </div>
            </div>
          </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    include('../dbconnect.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $message=$_POST['message'];
    $sql="INSERT INTO `user_message`(`u_name`, `u_email`, `u_contact`, `u_message`) VALUES ('$name','$email','$contact','$message')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Your Message is sent to Admin');
        </script>
        <?php
    }
    else{
        ?>
        <script>
        alert('message failed');
        </script>
        <?php
    }
}
?>