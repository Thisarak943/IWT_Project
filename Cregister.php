
    <?php
    include_once'config.php';

    $id = $_POST['cid'];
    $title = $_POST['tit'];
    $fullName = $_POST['fname'];
    $add = $_POST['addr'];
    $gen = $_POST['gend'];
    $ag = $_POST['cage'];

    $sql="insert into 
    candidate(C_ID,title,full_name,address,gender,age) values('$id','$title','$fullName ',' $add','$gen','$ag')";

    //execute the wuery
    if($conn->query($sql))
    {
        echo "inserd successfully";
        header("Location:Cregister.html");

    }
    else{
        echo "Error".$conn->error;
    }

    //close the connection
    $conn->close();


    

    ?>
