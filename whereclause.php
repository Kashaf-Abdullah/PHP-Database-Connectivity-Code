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
$sql="SELECT id,stname,email,mobile FROM students
WHERE id=1";


$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){
   
    while($row=mysqli_fetch_assoc($result)){

echo "<b>Id:</b>".$row["id"]."<b>Name:</b>".$row["stname"]."<b>EMAIL</b>".$row["email"]."<b>MOBILE</b>".$row["mobile"];
}

}
else{
 echo "no record";   
}


mysqli_close($conn);
?>




