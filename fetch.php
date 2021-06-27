<?php
//connecting to the database
$server = "localhost";
$username = "root";
$password = "";
$database="trip";

//create a conncetion
$con=mysqli_connect($server,$username,$password,$database);
//die if connection was not sucessfull 
if(!$con)
{
  die("sorry we failed to connect :".mysqli_connect_errno());
}
else{
echo "connection was sucessful<br>";
}
$sql="SELECT * FROM `trip`";
$result=mysqli_query($con,$sql);
//find the number of records returned
$num=mysqli_num_rows($result);
echo $num;
echo "<br>";
//display the rows returned by the query
if($num>0)
{
  // $row=mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  // $row=mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  // $row=mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  // $row=mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  // $row=mysqli_fetch_assoc($result);
  // echo var_dump($row);
  // echo "<br>";
  while($row=mysqli_fetch_assoc($result))
  {
    //echo var_dump($row);
    echo $row['name'].$row['gender'].$row['age'].$row['email'].$row['phone'].$row['other'];
    echo "<br>";
  }


}
?>