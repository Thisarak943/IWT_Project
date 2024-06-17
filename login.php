<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JS/javaScriptfile.js"></script>
    
    <title>EXNET AWARDS </title>
    <link rel="stylesheet" href="style/mainstyles.css">
    <link rel="stylesheet" href="style/footer.css">
    
    <style>
        body{
            background-image: url('images/reg2.jpg') ;
        }
    </style>
     <script src="https://kit.fontawesome.com/c897df668c.js" crossorigin="anonymous"></script>
</head>

<body>

    <div>
        <div>
            <h1><B><center>EXNET AWARDS</center></B></h1>
        </div>
           

            <div class="top_bar">
                <img class="logo"src="./images/EX2.png"  width="150px" height="80px" alt="Logo" >
                
                <div class="nav">
                    <a  href="homePage.html">HOME</a>
                    <a href="bestsong-index.html">VOTE</a>
                    <a href="catagories.html">CATEGORIES</a>
                    <a href="candidate.html">CANDIDATES</a>
                    <a href="winnersPage.html">WINNERS</a>
                    <a href="NEWS.html">NEWS</a>
            
                    <form class="search" action="#" align = "left" >
                        <input class="input" type="text"  placeholder="Search" name="search">
                        <button class="button" type="submit"><i class=" fa fa-search"></i></button>
                    </form>
                </div>
               
                <a href="userAccount.php"><img class="img2" src="./images/login.png" alt="avatar"></a>
            </div>    
        
           <center>
            <div class="a">
            <form class="form" method="POST" onsubmit="return ckeckdetails()" >
                <p class="form-title"> login</p>
                 <div class="input-container">
                   <input type="email" placeholder="email"  name="email">
                
               </div>
               <div class="input-container">
                   <input type="password" placeholder="Password" name="password" >
                 </div>
                
                 <input type="checkbox" class="checkbox" id="checkbox1"  >Remamber me<br><br>
                 
                     <input type="submit" class="sub" name="submit" ><br><br>
                     <button ><a href="Voterregistation.php"  style="color:black;">Register Now</a></button><br>
                 
               
               <br>
               <br>
                  
            </form>
        </center>
    </div>
        </div>
    </div>
    <footer>
        <div class="row">
           <div class="col">
           <a href="About Us.html" target="_blank">
                       <button id="btn1">About Us</button>
                    </a>
               <p id="p1"> At EXNET AWARDS, we specialize in managing prestigious awards programs, recognizing excellence with integrity and expertise. <br> Join us in celebrating exceptional achievements in your industry. <br> <br>Copyright © 2023 EXNET. The EXNET is not responsible for the content of external sites. 
               </p>
           
           </div>
           <div class="col"> 
           <a href ="ContatcUs.html" target="_blank">
                 <button id="btn2"> Contact Us</button>
    </a>
                 <div class="social-icons">
                   
                 
                   <i class="fa-brands fa-whatsapp"></i>
                   <i class="fa-brands fa-facebook-f"></i>
                   <i class="fa-solid fa-envelope"></i>

                 </div>
           </div>
        </div>
   </footer>
</body>
</html>
<?php
if(isset($_POST["submit"])) {
  $email = $_POST['email'];
  $password = $_POST['password'];


//read data
$logquery= "SELECT * FROM voter WHERE email= '$email';";
$logresult=mysqli_query($connect,$logquery);

if(mysqli_num_rows($logresult)==1){
    $row = mysqli_fetch_assoc($logresult);

    //check password
    if( $password == $row ['password'] ){
        session_start();
          //assign database values to super global variable
    $_SESSION["id"]=$row['voter_id'];
    $_SESSION["fname"]=$row['first_name'];
    $_SESSION["lname"]=$row['last_name'];
    $_SESSION["gen"]=$row['gender'];
    $_SESSION["mob"]=$row['mobile_no'];
    $_SESSION["email"]=$row['email'];
    $_SESSION["address"]=$row['address'];
    $_SESSION["dob"]=$row['dob'];
    $_SESSION["password"]=$row['password'];
     
    header("Location:userAccount.php");

    } else{
        echo "<script> alert('invalid password, please try again');<script>";
    }
} else{
    echo "<script>alert('Invalid username, Please try again.');</script>";
    }

}
mysqli_close($connect);
?>
