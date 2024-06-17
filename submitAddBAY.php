<?php
    include_once'config.php';
    
    $id=$_POST["wId"];
    $name = $_POST["wName"];
    $place = $_POST["Place"];
    $nov = $_POST["nov"];

    $sql="insert into 
    artistyr(W_Id,W_Name,W_Place,NumofV) values('$id','$name','$place','$nov');";

    //execute the wuery
    if($conn->query($sql))
    {
        echo "inserd successfully";
        header("Location:displayArtist.php");

    }
    else{
        echo "Error".$conn->error;
    }

    //close the connection
    $conn->close();


    

    ?>
