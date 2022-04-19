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
//sql query to select database inmysql
$sql="UPDATE students SET stname='Sunil'WHERE id=2";


$result=mysqli_query($conn,$sql);


if(mysqli_query($conn,$sql)){
   echo "updated successfully";
}
else{
    echo"error";
}


mysqli_close($conn);
?>




