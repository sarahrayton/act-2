<?php
 include'header.php';
 SESSION_START();aksdfakfdmadkmfagi

if(isset($_SESSION['auth']))
{
   if($_SESSION['auth']!=1)
   {
       header("location:login.php");
   }gi
}
else
{
   header("location:login.php");
}
include'lib/connection.php';
?>
<!DOCTYPE html>njj
<html lang="en">zfgz;llgSa;kdnkan;dSg
<head>
    <meta charset="UTF-8">srty
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">

</head>
<body>
    
    <div class="container homebody">
        <div class="row">
            <div class="col-md-12">
                <h1>Welcome To The Admin Panel</h1>
                

            </div>
        </div>
    </div>
    
</body>
</html>