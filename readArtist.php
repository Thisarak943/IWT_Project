<?php
    include_once'config.php';

    function readData()
    {
        global $conn;
        $sql="SELECT W_Id,W_Name,W_Place,NumofV FROM ArtistYr";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "ID :".$row["W_Id"]."-Name :" . $row["W_Name"].
                "-Place :" . $row["W_Place"]. "-NumOfVotes :" . $row["NumofV"]. "<br/>";
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