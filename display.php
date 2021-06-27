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




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

    <link rel='stylesheet' type='text/css' href='distyle.css' />

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="main-div">
        <h1 style="text-align:center;">List of patients</h1>

        <div class="center-div">
            <div clas="table-responsive">
                <table>
                    <thread>
                        <tr>
                            <th>srno</th>
                            <th>name</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>other</th>
                            <th>dt</th>
                            <th colspan="2">operation</th>
                        </tr>
                    </thread>

                    <tbody>

                    <?php

                    $selectquery = " select * from trip ";

                    $query = mysqli_query($con,$selectquery);

                    $nums = mysqli_num_rows($query);

                    $res = mysqli_fetch_array($query);

                    while($res = mysqli_fetch_array($query)){
                    
                    ?>

                        <tr>
                        <td><?php echo $res['sno']; ?></td>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['age']; ?></td>
                        <td><?php echo $res['gender']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['phone']; ?></td>
                        <td><?php echo $res['other']; ?></td>
                        <td><?php echo $res['dt']; ?></td>
                        <td> <a href="update.php" data-toggle="tooltip" 
                        data-placement="bottom" title="update">
                        <i class="fa fa-edit" aria-hidden="true">
                        </i></a></td>
                        <td><i class="fa fa-trash" aria-hidden="true">
                        </i></td>
                    </tr>

                <?php

                    }

                    ?>


                       
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
