<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="slide" content="width=device-width, initial-scale=1">

    <title>EXNET AWARDS</title>
    <link rel="stylesheet" href="style/winnerstyle.css">
    
    <!--link footer style sheet-->
    <style>
        body{
            background-image: url('images/winners5.jpg');
            background-repeat: no-repeat;
            background-size: 1600px 900px;}
   </style>

</head>
<body>
    <!--header-->
    <div>
        <div>
            <h1><B><center>EXNET AWARDS</center></B></h1>
        </div>
           

            <div class="top_bar">
                <img class="logo"src="images/EX2.png"  width="150px" height="80px" alt="Logo" >
                
                <div class="nav">
                    <a  href="homePage.html">HOME</a>
                    <a href="bestsong-index.html">VOTE</a>
                    <a href="catagories.html">CATEGORIES</a>
                    <a href="candidate.html">CANDIDATES</a>
                    <a class="active" href="winnersPage.html">WINNERS</a>
                    <a href="NEWS.html">NEWS</a>
            
                    <form class="search" action="#" align = "left" >
                        <input class="input" type="text"  placeholder="Search" name="search">
                        <button class="button" type="submit"><i class=" fa fa-search"></i></button>
                    </form>
                </div>
               <!--<BUTTON class="login" >Login</BUTTON>
                <BUTTON class="reg" >Register</BUTTON>
                <a href=""><img class="img2" src="./images/login.png" alt="avatar"></a>
            </div>    -->

    
        
    </div>

    <div>
        <center>
            <h2>Best Artist of the Year</h2>
            

            <?php
include_once 'config.php';
session_start();

$place = $_SESSION["Place"] = 1; // Set the session variable before accessing it
$sql = "SELECT * FROM artistyr WHERE W_Place = '$place';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    echo "<p>Winner's ID: " . $row['W_Id'] . "</p>";
    echo "<p>Winner's Name: " . $row['W_Name'] . "</p>";
    echo "<p>Place: " . $row['W_Place'] . "</p>";
    echo "<p>Number of Votes: " . $row['NumOfV'] . "</p>";
} else {
    echo "No winner found.";
}
?>


        </center>
    </div>
            




    </body>
    </html>

