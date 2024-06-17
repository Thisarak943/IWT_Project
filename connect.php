<?php
$serverName='localhost';
$username='root';
$password='';
$db='exnet';

//let's connect database
$connect=mysqli_connect($serverName,$username,$password,$db);

if($connect == false){
    echo("Error: can't connect to thhe database");
}
?>