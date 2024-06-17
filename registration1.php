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


    <title>EXNET AWARDS</title>
    <link rel="stylesheet" href="styles.css">
    <link rel = "stylesheet" href = "registration1.css">
    <link rel = "stylesheet" href = "footer.css">

</head>
<body>
    <div>
        <div>
            <h1><B><center>EXNET AWARDS</center></B></h1>
        </div>
           

            <div class="top_bar">
                <img class="logo"src="./images/EX2.png"  width="150px" height="80px" alt="Logo" >
                
                <div class="nav">
                    <a class="active" href="#home">HOME</a>
                    <a href="vote.html">VOTE</a>
                    <a href="categories.html">CATEGORIES</a>
                    <a  href="candidates.html">CANDIDATES</a>
                    <a href="winners.html">WINNERS</a>
                    <a href="news.html">NEWS</a>
            
                    <form class="search" action="#" align = "left" >
                        <input class="input" type="text"  placeholder="Search" name="search">
                        <button class="button" type="submit"><i class=" fa fa-search"></i></button>
                    </form>
                </div>
                <BUTTON class="login" >Login</BUTTON>
                <BUTTON class="reg" >Register</BUTTON>
                <a href=""><img class="img2" src="./images/login.png" alt="avatar"></a>
            </div> 
            
            <br><br>
            
        <h1 class = "topic"> Candidate Information</h1> 

        <form>
            <label style = "margin-right: 73px;"> <b> Title: </b> </label> 
            <select> name = "title">
                <option>select title</option>
                <option>Mr</option>
                <option>Mrs</option>
                <option>Miss</option>
            </select>
            <br><br>

            <label style = "margin-right: 30px;"><b> Full name </b></label>
            <input type = "text" placeholder = "full name" required>
            <br><br>

            <!-- <label style = "margin-right: 32px;"><b> Last name </b></label> 
            <input type = "text" placeholder = "last name" required>
            <br><br> -->

            <label style = "margin-right: 6px;"><b> Address </b></label>
            <input type = "text" placeholder = "Address" required>
            <br><br>

            <!-- <label style = "margin-right: 6px;"><b> Address Line2 </b></label>
            <input type = "text" placeholder = "Address line2" required>
            <br><br> -->

            <label style = "margin-right: 50px;"><b> Gender </b></label>
            <input type = "radio" name = "gender" checked> Male
            <input type = "radio" name = "gender" checked> Female
            <br><br>

            <label style = "margin-right: 15px;"><b> Age </b></label>
            <input type = "text" name = "age" required>
            <br><br><br>

            <input type = "checkbox" name ="confirm"><b> I confirm that information are correct </b>
            <br><br>

            <input type = "submit"  name ="submit" id="">


        </form>

        <footer>
            <div class="row">
               <div class="col">
                   <button id="btn1">About Us</button>
                   <p id="p1"> At EXNET AWARDS, we specialize in managing prestigious awards programs, recognizing excellence with integrity and expertise. <br> Join us in celebrating exceptional achievements in your industry. <br> <br>Copyright © 2023 EXNET. The EXNET is not responsible for the content of external sites. 
                   </p>
               
               </div>
               <div class="col"> 
                     <button id="btn2"> Contact Us</button>
                     <div class="social-icons">
                       
                     
                       <i class="fa-brands fa-whatsapp"></i>
                       <i class="fa-brands fa-facebook-f"></i>
                       <i class="fa-solid fa-envelope"></i>
    
                     </div>
               </div>
            </div>
       </footer>




    </div>


