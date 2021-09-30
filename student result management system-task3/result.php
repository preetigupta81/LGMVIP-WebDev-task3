
<?php
if(isset($_POST['submit']))
{

	include('dbconnect.php');
	
	$class=$_POST['class'];
	$rollno =$_POST['rollno'];
	$sql="SELECT * FROM `student_data` WHERE `u_class`='$class' AND `u_rollno`='$rollno'";
    $sql2="SELECT * FROM `user_marks` WHERE `u_class`='$class' AND `u_rollno`='$rollno'";
    $run=mysqli_query($con,$sql);
    $run2=mysqli_query($con,$sql2);
    $row=mysqli_num_rows($run2);
    $data2=mysqli_fetch_assoc($run2); 
    if(mysqli_num_rows($run)>0)
    {
        $data=mysqli_fetch_assoc($run);
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Result System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/result.css">
</head>
<body>
    <div class="main-container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Online Result</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="public/aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/contactus.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        <div class="main-content">
            <form method="post" action="result.php">
            <table class="table">
                <tr>
                    <th>Name :</th><td><?php echo $data['u_fname'] ?></td>
                </tr>
                <tr>
                    <th>Class :</th><td><?php echo $data['u_class']; ?></td>
                </tr>
                <tr>
                    <th>Roll No :</th><td><?php echo $data['u_rollno']; ?></td>
                </tr>
                <tr>
                    <th>Father Name :</th><td><?php echo $data['u_fathername']; ?></td>
                </tr>
                <tr>
                    <th>Mother Name :</th><td><?php echo $data['u_mothername']; ?></td>
                </tr>
                <tr>
                    <th>Address :</th><td><?php echo $data['u_address']; ?></td>
                </tr>
            </table>
            <table class="table2">
                <tr>
                    <th>Subject</th>
                    <th>Half Yearly Exam (Score) </th>
                    <th>Annual Exam (Score)</th>
                    <th>Total</th>
                    <th>Max. Marks</th>
                </tr>
                <tr>   
                    <th>English</th>
                    <th><?php echo $data2['u_english1']; ?></th>
                    <th><?php echo $data2['u_english2']; ?></th>
                    <th><?php echo $total1=$data2['u_english1']+$data2['u_english2']; ?> </th>
                    <th>200</th>
                </tr>
                <tr>  
                    <th>Marathi</th>
                    <th><?php echo $data2['u_marathi1']; ?></th>
                    <th><?php echo $data2['u_marathi2']; ?></th>
                    <th><?php echo $total2=$data2['u_marathi1']+$data2['u_marathi2']; ?> </th>
                    <th>200</th>
                </tr>
                <tr>
                <th>Hindi</th>
                    <th><?php echo $data2['u_hindi1']; ?></th>
                    <th><?php echo $data2['u_hindi2']; ?></th>
                    <th><?php echo $total3=$data2['u_hindi1']+$data2['u_hindi2']; ?> </th>
                    <th>200</th>
                </tr>
                <tr>
                    <th>Maths</th>
                    <th><?php echo $data2['u_maths1']; ?></th>
                    <th><?php echo $data2['u_maths2']; ?></th>
                    <th><?php echo $total4=$data2['u_maths1']+$data2['u_maths2']; ?> </th>
                    <th>200</th>
                </tr>
                <tr>
                <th>History</th>
                    <th><?php echo $data2['u_history1']; ?></th>
                    <th><?php echo $data2['u_history2']; ?></th>
                    <th><?php echo $total5=$data2['u_history1']+$data2['u_history2']; ?> </th>
                    <th>200</th>
                </tr>
                <tr>
                    <th>Geography</th>
                    <th><?php echo $data2['u_geography1']; ?></th>
                    <th><?php echo $data2['u_geography2']; ?></th>
                    <th><?php echo $total6=$data2['u_geography1']+$data2['u_geography2']; ?></th>
                    <th>200</th>
                </tr>
                <tr>
                    <th>Science</th>
                    <th><?php echo $data2['u_science1']; ?></th>
                    <th><?php echo $data2['u_science2']; ?></th>
                    <th><?php echo $total7=$data2['u_science1']+$data2['u_science2']; ?></th>
                    <th>200</th>
                </tr>
                <tr>
                <th>Total</th>
                    <th>
                    <?php echo $data2['u_english1']+$data2['u_hindi1']+$data2['u_marathi1']+$data2['u_maths1']+$data2['u_history1']+$data2['u_geography1']+$data2['u_science1']; ?>
                    </th>
                    <th>
                    <?php echo $data2['u_english2']+$data2['u_hindi2']+$data2['u_marathi2']+$data2['u_maths2']+$data2['u_history2']+$data2['u_geography2']+$data2['u_science2']; ?>
                    </th>
                    <th><span class="colorchange">
                        <?php echo $all=$total1+$total2+$total3+$total3+$total4+$total5+$total6+$total7;?></span>
                    </th>
                    <th>1000</th>  
                </tr>     
            </table>
            <h1>You Are <span class="colorchange1">
                <?php 
                    if($all<=500) 
                    {
                        echo "Fail";
                    }
                    else
                    {
                        echo"Pass";
                    }
                ?></span></h1>
            <marquee scrollamount="5">
                <p>Your Result is Declared. Kindly check your marks and in case of any discrepancy contact the admin.</p>
            </marquee>
       </form>
        </div>
    </div>
</body>
</html>
<?php
}
else
{
?>
    <script>
    alert('Record Not found');
    window.open('public/mainpage.php','_self');
    </script>
<?php
}
}
?>