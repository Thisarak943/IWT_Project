<?php
    include_once'config.php';

    $id=$_POST["v_Id"];
    $name1=$_POST["f_name"];
    $name2=$_POST["l_name"];
    $number=$_POST["m_number"];
    $desc=$_POST["reason"];

    $sql="insert into 
         detail(VoterId,first_name,last_name,Mobile,Reason) values('$id','$name1','$name2','$number','$desc')";

    if($conn->query($sql))
    {

        echo "inserted successfully";
        header("Location:ContatcUS.html");

    }   
    else
    {
        echo "Error".$conn->error;
    }  

    //close the connection
    $conn->close();


?>    