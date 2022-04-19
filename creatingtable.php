<?php
$servername="localhost";
$username="root";
$password="";
$dbname="School";

//craeting a connection here with mysql


$conn=mysqli_connect($servername,$username,$password,$dbname);

//checking connection
if(!$conn){
    die("connection failed");
}
//sql query to creating database inmysql
$sql="CREATE TABLE students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    stname VARCHAR(30) NOT NULL,
    email VARCHAR(40) ,
    mobile VARCHAR(10) NOT NULL
    )";
    


if(mysqli_query($conn,$sql)){
    echo "Table student created successfully";
}
else{
    echo "Error! creating table".mysqli_error($conn);
}

mysqli_close($conn);
?>