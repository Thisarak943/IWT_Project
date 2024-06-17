<?php
    include_once'config.php';

    function readData()
    {
        global $conn;
        $sql="SELECT VoterId,first_name,last_name,Mobile,Reason FROM detail";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "Voter Id :".$row["VoterId"]."first Name :".$row["first_name"]."-last Name :" . $row["last_name"].
                "-Mobile :" . $row["Mobile"]. "-Reason :" . $row["Reason"]. "<br/>";
            }    
        
        }
        else
        {
            echo "No result";
        }

        $conn->close();
    }

    readData();

?>