
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
        <div class="main-content">
            <form action="addmarks.php" method="post">
            <h1>Student Details</h1>
            <div class="content">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" id="fname" placeholder="First name" required>
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" id="lname" placeholder="Last name" required> <br>
                <label for="fathername">Father's Name:</label>
                <input type="text" name="fathername" id="fathername" placeholder="Father name" required>
                <label for="mothername">Mother Name:</label>
                <input type="text" name="mothername" id="mothername" placeholder="Mother name" required> <br>
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" id="dob" required>
                <label for="mobileno">Mobile No:</label>
                <input type="number" name="mobileno" id="mobileno" placeholder="Mobile no" required> <br>
                <label for="rollno">RollNO:</label>
                <input type="number" name="rollno" id="rollno"placeholder="Enter your Rollno">
                <label for="class">Class:</label>
                <input type="number" name="class" id="class"placeholder="Enter your Class"> <br>
                <label for="address">Address:</label>
                <input type="textarea" name="address" id="address" placeholder="Address" required><br>
            </div>
            <input type="submit" name="submit" value="Next" id="submit">
            </form>
        </div>    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
