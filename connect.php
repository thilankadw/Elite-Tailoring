<?php


$server_name='localhost';
$user_name='root';
$password="";
$database="contactus";

$connect=new mysqli($server_name,$user_name,$password,$database);

if(connect->connect_error){
    die("Unable to connect".$connect->connect_error);
}
echo "database connection success";

?>