<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php basics</title>
</head>
<style>
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
  }
  .container{
    max-width:80%;
    background-color:grey;
    margin:auto;
    padding:23px;
  }
  </style>
<body>
  <div class="container">
    <h1> lets learn php </h1>
   <p> party status </p> 
<?php
$age=34;
if($age>18)
{
  echo "yes to party";
}  
else{
  echo "not allowed";
}
$languages =array("python","c++","java","php");
echo count($languages);
for ($a=0; $a < 5; $a++) 
{ 
  echo "hello";
}
?>
  </div>
</body>
</html>