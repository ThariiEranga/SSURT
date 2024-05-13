<?PHP
 include 'connect.php';
 session_start();
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="register.css">
 <title>REGISTRATION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script>
        function checkPassword(){
            if(document.getElementById("pass").value!=document.getElementById("repass").value){
                return false;
            }
            else{
                alert true;
            }
        }
        </script>
</head>
<body>
<img src="SSURT.png" id="m1">
 <br> <br> 
        <div><a href="userprofile.php"><img src="log.png" id="m2"></a></div>

        <br> 
    <div id="container">
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li>
                    <a href="#">GALLERY</a>
                </li>
                <li>
                    <a href="#" >PLANS</a>
                    <ul>
                        <li><a href="#">WEDDING PLANS</a></li>
                        <li><a href="#">PARTY PLANS</a></li>
                        <li><a href="#">SPECIAL OCCATION</a></li>
                    </ul>
                </li>
                <li CLASS="sign"><a CLASS="sign"href="login.php">SIGNIN</a></li>
                <li CLASS="sign"><a  CLASS="sign"href="registation.php">SIGNUP</a></li>
            </ul>
        </nav>
    </div>
    
<center>
<div class="form-container">
<form class="form" method="POST" onsubmit ="return checkPassword()">
    <p class="title">Registration for SSURT Photography</p>
    <p class="message">Signup now and get full access to our website. </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" style="width:160%;" name="username">
            <span>Username</span>
        </label>

    </div>  
           
    <label>
        <input required="" placeholder="" type="email" class="input" style="width:95%" name="email">
        <span>Email</span>
    </label>

<label>
        <input required="" placeholder="" type="mobile number" class="input" style="width:95%" name="mobile">
        <span>Mobile Number</span>
    </label>
       
    <label>
        <input required="" placeholder="" type="password" class="input"id="pass" style="width:95%" name="password">
        <span>Password</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" id="repass" style="width:95%" name="repassword">
        <span>Confirm password</span>
    </label>
    <input type="submit" class="submit" value="Submit" name="submit">
    <p class="signin">Already have an acount ? <a href="login.php" style="text-decoration:none;">Login</a> </p>
</form>
</center>

<footer>
    <div class="footer" >
        <button id="about"><a href="aboutus.html" style="text-decoration:none">About us</button></a>
        <b id="contact">Contact us<b>
        <br>
        <div id="icon" >
        <i id="face" class="fa fa-facebook"></i>
        <i id="what"class="fa fa-whatsapp" ></i>
        <i id="insta" class="fa fa-instagram"></i>
        </div>
    </div>
</footer>

</body>
</html>


<?php
          if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $email =$_POST['email'];
            $mobile =$_POST['mobile'];
            $password =$_POST['password'];
        
            $sql1 = "INSERT INTO register(username,email,mobile,password) VALUES ('$username','$email','$mobile','$password');";
            $result = mysqli_query($connect,$sql1);

            $sql2 = "SELECT * FROM register WHERE username = '$username';";
            $result2 = mysqli_query($connect,$sql2);
            $row = mysqli_fetch_assoc($result2);
            $id= $row['userID'];
            $username= $row['username'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $password = $row['password'];

            //create sessions
            $_SESSION['userid']=$id;
            $_SESSION['username']=$username;
            $_SESSION['email']=$email;
            $_SESSION['mobile']=$mobile;
            $SESSION['password']=$password;

         // locate in to appointment page
            header("Location:userprofile.php");

        }
      
        ?>
        <?php
            mysqli_close($connect);

  ?>
  

