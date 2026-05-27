<?php
$appNo=24000;
$server="localhost";
$username="root";
$password="";
$dbname="hostel";

$conn=new mysqli($server,$username,$password,$dbname);

if(!$conn){
    echo $conn->error;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['btn'])) {
        $name=$_POST['name'];
        $fa_name=$_POST['fa_name'];
        $ma_name=$_POST['ma_name'];
        $gur_name=$_POST['gur_name'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $appNo=$appNo+1;
        $sql="INSERT INTO `requests`(`Application ID`,`Name`, `Father_name`, `Mother_name`, `Gurdian_name`, `DOB`, `email`) VALUES ('$appNo','$name','$fa_name','$ma_name','$gur_name','$dob','$email')";
        if(!$conn->query($sql)){
            echo "404 Eror";
        }
    }
}
header("user.php");
?>