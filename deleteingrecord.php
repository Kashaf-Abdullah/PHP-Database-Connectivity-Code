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
$sql="DELETE FROM students WHERE id=1";


$result=mysqli_query($conn,$sql);


if(mysqli_query($conn,$sql)){
   echo "deleting successfully";
}
else{
    echo"error";
}





mysqli_close($conn);
?>




