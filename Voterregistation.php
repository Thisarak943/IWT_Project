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
<body >
   
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
        
            <center><h1>Registration Form</h1></center>
         
	<div class="form2" >
	<form action="" method="POST" onsubmit= "return checkPassword()">

    <label class="form"> First Name Feild </label><br>
    <input class ="form3" type="text" name="Fname" required><br>

    <label class="form"> Last Name Feild </label><br>
    <input class ="form3" type="text" name="Lname" required><br>

    <lable class ="form"> Gender </lable><br>
    <input type="radio" name="gender"  class="radio1" value="female"> female <br>
    <input type="radio"  name="gender" class="radio1"value="male" checked> male <br>

    <lable class ="form"> Mobile Number </lable><br>
    <input type="tel" id="phoneN" maxlength="10" pattern="[0-9]{10}" name="phoneN" required><br>

    <lable class ="form"> Email </lable><br>
    <input type="email" id="email1" pattern="[a-z0-9._]+@[a-z0-9._]+\.[a-z]{2,3}" name="email" required><br>

    <lable class ="form"> Adress </lable> <br>
	<textarea rows="6" cols="50" name="adress" required> </textarea><br>

	<lable class ="form"> DOB</lable> <br>
	<input type="date" name="dob" required> <br>

	<lable class ="form"> Password </lable> <br>
	<input type="password" id="pwd" pattern = "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,8}" name="password" required><br>

	<lable class ="form">Re enter Password</lable><br>
	<input type="password" id="confirmpwd" name="repassword" required><br>

	<br>
	<input type="checkbox" class="checkbox" id="checkbox1" onclick= "enableButton()"  name="accept" > Accept privacy policy and terms<br><br>
    <center>
		<input type="submit" id="sub"  name="submit" disabled ><a href="userAccount.php"></a>
	</center>
</div>
</form>

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
    //check whether submit button has clicked isset check whether a value set to a variable
     if(isset($_POST['submit'])){
        //assign values entered by user to php variables
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $gender = $_POST['gender'];
        $phoneN = $_POST['phoneN'];
        $email = $_POST['email'];
        $adress = $_POST['adress'];
        $dob = $_POST['dob'];
        $password = $_POST['password'];
     
     
     $sql="INSERT INTO voter (first_name,last_name,gender,mobile_no,email,address,dob,password) VALUES ('$Fname', '$Lname','$gender','$phoneN', '$email','$adress','$dob','$password');";
     $execute= mysqli_query($connect,$sql);
     //read
     $userData="SELECT * FROM voter WHERE email= '$email'; ";
     $userResult=mysqli_query($connect, $userData);

     $row=mysqli_fetch_assoc($userResult);
     //
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
     }
    ?>
