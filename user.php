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
echo "Hello User";
?>