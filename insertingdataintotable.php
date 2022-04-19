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
$sql="INSERT INTO students(stname,email,mobile)
    VALUES ('Mohan','mohan@example.com','0284658999')";



if(mysqli_query($conn,$sql)){
    echo "New record inserted successfully";
}
else{
    echo "Error:".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>