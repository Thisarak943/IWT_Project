<?php
include 'connect.php';
?>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $username= $_POST['username'];
    $email= $_POST['email'];
    $message= $_POST['message'];

    $sql= "INSERT INTO feedback(name,email,message) VALUES ('$username','$email','$message');";
    if($connect->query($sql)){
        echo "succesfully";
    }else{
        echo "error";
    }
}
else{
    echo"error";
}
?>
<?php
mysqli_close($connect);
?>