<?php
session_start();
$no=$_SESSION['phone'];//mobile number to send message its fetch from insert
$message="666";// number from hashing page
echo $message;
if(isset($no) && isset($message))
{
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://192.168.43.1:18080/?phone=+91$no&message=$message");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // For HTTPS
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // For HTTPS
curl_exec($ch);
$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE); // Returns 200 if everything went well
if($statusCode==200)
{
  echo "done message sent";
  header("Location:http://localhost/lm/check.php ");
}


curl_close($ch);




}
 ?>
