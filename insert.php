<?php

$conn = mysqli_connect("localhost", "root", "", "dcg");
if($conn === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

//data from index for database
$name =$_POST['name'];
$pname =$_POST['pname'];
$email =$_POST['email'];
$aadhar =$_POST['aadhar'];
$number =$_POST['number'];
$percent =$_POST['percentage'];
$gender=$_POST['gender'];

session_start();
$_SESSION['phone'] = $number;

$sql = "INSERT INTO cd(name,pname,emailid,aadharnumber,mobilenumber,percentage,gender)
VALUES ('$name', '$pname','$email',$aadhar,'$number','$percent','$gender')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
if(isset($number))
{
  header("Location:http://localhost/lm/mess.php ");
}


?>
