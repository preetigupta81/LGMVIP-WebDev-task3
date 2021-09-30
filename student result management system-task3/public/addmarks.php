
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Result System</title>
    <link rel="stylesheet" href="../css/studentdata.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
        <div class="maincontent">
            <form action="updatemarks.php" method="post">
            <h3>Marks Details:</h3>
            <h4>Semester-1</h4>
            <label for="english1">English:</label>
            <input type="number" name="english1" id="english1"placeholder="     /100">
            <label for="marathi1">Marathi:</label>
            <input type="number" name="marathi1" id="marathi1"placeholder="    /100"> <br>
            <label for="hindi1">Hindi:</label>
            <input type="number" name="hindi1" id="hindi1"placeholder="    /100">
            <label for="maths1">Mathematics:</label>
            <input type="number" name="maths1" id="maths1"placeholder="    /100"> <br>
            <label for="history1">History:</label>
            <input type="number" name="history1" id="history1"placeholder="    /100">
            <label for="geography1">Geography:</label>
            <input type="number" name="geography1" id="geography1"placeholder="    /100"> <br>
            <label for="science1">Science:</label>
            <input type="number" name="science1" id="science1"placeholder="    /100">
            <h4>Semester-2</h4>
            <label for="english2">English:</label>
            <input type="number" name="english2" id="english2"placeholder="    /100">
            <label for="marathi2">Marathi:</label>
            <input type="number" name="marathi2" id="marathi2"placeholder="    /100"> <br>
            <label for="hindi2">Hindi:</label>
            <input type="number" name="hindi2" id="hindi2"placeholder="   /100">
            <label for="maths2">Mathematics:</label>
            <input type="number" name="maths2" id="maths2"placeholder="    /100"> <br>
            <label for="history2">History:</label>
            <input type="number" name="history2" id="history2"placeholder="    /100">
            <label for="geography2">Geography:</label>
            <input type="number" name="geography2" id="geography2"placeholder="    /100"> <br>
            <label for="science2">Science:</label>
            <input type="number" name="science2" id="science2"placeholder="    /100"> <br>
            <input type="submit" value="Submit" name="submit" id="submit">
        </div>
        </form>
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
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $fathername=$_POST['fathername'];
    $mothername=$_POST['mothername'];
    $mobileno=$_POST['mobileno'];
    $dob=$_POST['dob'];
    $rollno=$_POST['rollno'];
    $class=$_POST['class'];
    $address=$_POST['address'];
    
    $sql="INSERT INTO `student_data`(`u_fname`,`u_lname`, `u_fathername`, `u_mothername`, `u_mobileno`, `u_dob`, `u_rollno`,`u_class`,`u_address`) VALUES ('$fname','$lname','$fathername','$mothername','$mobileno','$dob','$rollno','$class','$address')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Student Details Are Successfully Saved');
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}
?>