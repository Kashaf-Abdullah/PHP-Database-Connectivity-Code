<?php
$servername="localhost";
$username="root";
$password="";


//craeting a connection here with mysql


$conn=mysqli_connect($servername,$username,$password);

//checking connection
if(!$conn){
    die("connection failed");
}
else{
    echo "  connected suucceffully";
}
?>