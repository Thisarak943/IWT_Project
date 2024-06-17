<?php
include 'connect.php';
session_start();
?>
<?php
$id = $_SESSION['id'];
$sql = "SELECT * FROM voter WHERE voter_id = $id; ";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);
$fname = $row['first_name'];
$lname = $row['last_name'];
$email = $row['email'];
$mobile = $row['mobile_no'];
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
            background-image: url('images/login.jpg') ;
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
            
                    <form class="search" action="#" onsubmit="return checkemail()" , "return  checkPassword()" >
                        <input class="input" type="text"  placeholder="Search" name="search">
                        <button class="button" type="submit"><i class=" fa fa-search"></i></button>
                    </form>
                </div>
               
                <a href="userAccount.php"><img class="img2" src="./images/login.png" alt="avatar"></a>
            </div>    
        
            
            
                <form>
                    
                <b><legend id="up" >User profile</legend></br><br><br><br><br>
               
                <label class = "candi1">first name</label>
                <input type="text" name="fname" value="<?php if(isset($fname)){echo $fname;}?>" disabled>
                <br><br><br>
                <label class = "candi1">last name</label>
                <input type="text" name="lname" value="<?php  if(isset($lname)){echo $lname;} ?>" disabled>
                <br><br><br>
                
                <label for="userID" class = "candi1">user ID</label>
                <input type="text" name="userID" value="<?php  if(isset($id)){echo $id;} ?>"  disabled>
                <br><br><br>
                <label for="email" class = "candi1">email</label>
                <input type="text" name="email" value="<?php  if(isset($email)){echo $email;} ?>" disabled>
                <br><br><br>
                <label for="mobile" class = "candi1">mobile no</label>
                <input type="text" name="mobile" value="<?php  if(isset($mobile
                )){echo $mobile;} ?>" disabled>
                <br><br><br><br>
                </form>

            
            <div class="ed2">
            <button class="ed"> <a href="editprof.php" class="ed">update profile </a></button><br><br><br>
         
           
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
mysqli_close($connect);
?>