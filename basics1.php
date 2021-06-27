<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <div class="container">
  this is my first php website
  <?php 
  echo"printed using php";
  $variable=34;
  $variable1=45;
  echo $variable;
  echo $variable1;
  echo "value of variable and variable1 is :";
  echo "<br>";
  echo $variable+$variable1;
  echo "comparison betn v1 and v2 :";
  echo "<br>";
  echo var_dump($variable==$variable1);
  echo"<br>";
  echo var_dump($variable<=$variable1);
  $x="jayesh";
  echo $x;
  $a=5;
  echo $a++;
  echo $a--;
  echo ++$a;
  echo --$a;


?>
  </div>
</body>      
</html>