<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Result System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mainpage.css">
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
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                </ul>
        </nav>
        <div class="main-content">
            <form action="../result.php" method="POST">
            <div class="content">
                <h2>Search Your Result</h2>
                <label for="class">Classname:</label>
                <input type="text" name="class" id="class" placeholder="Enter your Classname"> <br>
                <label for="rollno">Roll No:</label>
                <input type="number" name="rollno" id="rollno" placeholder="Enter your RollNO"> <br>
                <input type="submit" value="Search" name="submit" class="button">
            </div>
            </form>
        </div>
    </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>