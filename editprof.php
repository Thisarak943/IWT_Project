
<?php
include 'connect.php';
?>
<?php
session_start();
?>
<?php
if(isset($_SESSION['id'])){
    $vid = $_SESSION['id'];

    $voterquery="SELECT * FROM  voter WHERE voter_id= '$vid';";
    $result = mysqli_query ($connect,$voterquery);
    $data = mysqli_fetch_assoc($result);

    $Fname = $data['first_name'];
    $Lname = $data['last_name']; 
    $email = $data['email'];
    $password = $data['password'];
}
?>
<?Php
  if(isset($_POST['submit'])){
    $id=$_SESSION['id'];
    $vFName=($_POST['Fname']);
    $vLname = ($_POST['Lname']);
    $vemail = ($_POST['email']);
    $vpassword = ($_POST['password']);
    $vrepassword = ($_POST['repassword']);

    if($vpassword==$vrepassword){
        $updatequery= "UPDATE voter SET first_name ='$vFName' , last_name= '$vLname',  email = '$vemail',  password='$vpassword' WHERE voter_id = $id;";
        //$update = mysqli_query($connet,$updatequery);
        if (!mysqli_query($connect, $updatequery)) {
            echo ("Error description: " . mysqli_error($connet));
        }
        header("Location:userAccount.php");

    } else {
        echo "<script>alert(\"Password mismatch!!!\n Enter again.\")</script>";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JS/javaScriptfile.js"> </script>
    
     
    <title>myaccount </title>
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
            
                    <form class="search"  Method="POST" "return  checkPassword()"  >
                        <input class="input" type="text"  placeholder="Search" name="search">
                        <button class="button" type="submit"><i class=" fa fa-search"></i></button>
                    </form>
                </div>
                
                <a href="userAccount.php"><img class="img2" src="./images/login.png" alt="avatar"></a>
            </div>    
        
            
                <div class="pic">
                    <h2></h2>
                <img class="img3"  src="./images/login.png" alt="avatar">
                <br><br>
                
                <br>
                <a class ="info1" href ="" ></a>
                <br><br>
                <a class ="info1" href =""> </a>

            </div>
        
            <form method="POST"  "return  checkPassword()">
            <div class="info2">
                <input class = "candi" type="text" placeholder ="update First name" name="Fname"><br><br><br>
                <input class = "candi" type="text" placeholder ="update Last name" name="Lname"><br><br><br>
                <input class = "candi" type="email" id="eml" placeholder="update email"  name="email" pattern="[a-z0-9._]+@[a-z0-9._]+\.[a-z]{2,3}" ><br>
                <input class = "candi" type="password"  id="pwd" placeholder="update password" name="password" pattern =  "(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,8}"><br>
                <input class = "candi" type="password" id="confirmpwd" placeholder="confirm your password"  name="repassword">

            
            </div>
        <input type="submit" class="enter"  value="Submit" name="submit" ><br><br>
        <input  type="submit" class="enter" value="Delete" name="delete">


    </div>
</form>
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
if(isset($_POST['delete'])){

        $vid = $_SESSION['id'];
        $deletesql = "DELETE FROM voter WHERE voter_id= $vid ;";
        $delete = mysqli_query($connect,$deletesql);
        header("Location:Voterregistation.php");
  
 
}
 ?>
