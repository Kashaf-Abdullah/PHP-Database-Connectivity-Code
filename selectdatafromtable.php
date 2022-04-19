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
$sql="SELECT id,stname,email,mobile FROM students";


$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){
    echo"<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>EMAIL</td>
    <td>MOBILE</td>
    </tr>";
    while($row=mysqli_fetch_assoc($result)){

        //echo "<b>Id:</b>".$row["id"].",<b>Name:</b> ".$row["stname"].",<b>Email:</b>".$row["mobile"]."<br>";
 echo "

 
 <tr border=3>
  <td>$row[id]</td>  
  <td>$row[stname]</td>
  <td>$row[email]</td> 
  <td>$row[mobile]</td>
  
  </tr>
  <br>
  
  ";
}

}
else{
 echo "no record";   
}


mysqli_close($conn);
?>




