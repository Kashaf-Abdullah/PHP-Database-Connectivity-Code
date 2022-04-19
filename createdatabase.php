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
//sql query to creating database inmysql
$sql="CREATE DATABASE School";


if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}
else{
    echo "Error! creating datavase".mysqli_error($conn);
}

mysqli_close($conn);
?>