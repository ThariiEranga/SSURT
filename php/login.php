<?php
 include 'connect.php';
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
<title>LOGIN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
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
    <br>
    <br><br>
<center>
    <form class="form" method="POST">
       <p class="form-title">Login to your account</p>
        <div class="input-container">
          <input type="email" placeholder="Enter email" style="width:80%" name="email">
          <br>
          
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" placeholder="Enter password" style="width:80%" name="password">
        </div>
        
          <br>
         <button type="submit" class="submit" name="submit">
        Login
      </button>
      <br>


      <p class="signup-link">
        No account?
        <a href="registation.php" style="text-decoration:none;">Sign up</a>
      </p>
   </form>
   </center>

   <footer>
    <div class="footer" >
    <button id="about" style="float:left"><a href="aboutus.html" style="text-decoration:none">About us</button></a>
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
if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $logQuary = "SELECT * FROM register WHERE email = '$email';";
    $logResult = mysqli_query($connect, $logQuary);

    if (mysqli_num_rows($logResult) == 1) {
        $row = mysqli_fetch_assoc($logResult);
        //check password
        if ($password == $row['password']) {
            session_start();
            $_SESSION["userid"] = $row['userID'];
            $_SESSION["username"] = $row['username'];
            $_SESSION["email"] = $row['email'];
            $_SESSION["mobile"] = $row['mobile'];
            header("Location:userprofile.php");
        } else {
            echo "<script>alert('Invalid password! Please try again.');</script>";
        }
    } else {
        echo "<script>alert('Invalid username! Please try again.');</script>";
    }
}
?>