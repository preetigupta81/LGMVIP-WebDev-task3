<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:adminpage1.php');	
}
?>

<?php
if(isset($_POST['submit']))
{
include('../dbconnect.php');
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $english1=$_POST['english1'];
    $marathi1=$_POST['marathi1'];
    $hindi1=$_POST['hindi1'];
    $maths1=$_POST['maths1'];
    $history1=$_POST['history1'];
    $geography1=$_POST['geography1'];
    $science1=$_POST['science1'];
    
    $english2=$_POST['english2'];
    $marathi2=$_POST['marathi2'];
    $hindi2=$_POST['hindi2'];
    $maths2=$_POST['maths2'];
    $history2=$_POST['history2'];
    $geography2=$_POST['geography2'];
    $science2=$_POST['science2'];
    
    $sql="INSERT INTO `user_marks`(`u_rollno`,`u_class`,`u_english1`, `u_marathi1`, `u_hindi1`, `u_maths1`, `u_history1`, `u_geography1`, `u_science1`, `u_english2`, `u_marathi2`, `u_hindi2`, `u_maths2`, `u_history2`, `u_geography2`, `u_science2`) VALUES ('$rollno','$class','$english1','$marathi1','$hindi1','$maths1','$history1','$geography1','$science1','$english2','$marathi2','$hindi2','$maths2','$history2','$geography2','$science2')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Successfully');
        window.open('adminpage1.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>