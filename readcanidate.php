<?php
    include_once'config.php';

    function readData()
    {
        global $conn;
        $sql="SELECT C_ID,title	,full_name,address,gender,age FROM candidate";
        $result=$conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "Candidate ID:".$row["C_ID"]."title:".$row["title"]."-full name :" . $row["full_name"].
                "-address :" . $row["address"]. "-Gender :" . $row["gender"]. "-age:" . $row["age"]."<br/>";
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