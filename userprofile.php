<?php
include 'connect.php';
session_start();
?>
<?php
          if(isset($_SESSION['userid']))
          {

          $id=$_SESSION['userid'];
          $sql2 = "SELECT * FROM register WHERE userID = $id;";
          $result2 = mysqli_query($connect,$sql2);
          $row = mysqli_fetch_assoc($result2);
          
          $username= $row['username'];
          $mobile = $row['mobile'];
          $email = $row['email'];
          $password = $row['password'];
        }
        
?>
<!DOCTYPE html>
<html>
    <head>
        <title>user profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style/userstyle.css">
    </head>
<body>
<img src="image/SSURT.png" id="m1">
        <br> <br> 
        <a href="http://localhost/ssURT%20Event%20Photography%20Management%20System/userprofile.php" >
               <img src="image/log.png" id="m2">
    </a>
               <br> 
           <div id="container">
               <nav>
                   <ul>
                       <li><a href="http://localhost/SSURT%20Event%20Photography%20Management%20System/SSURT%20HOME%20PAGE.html" class="active">HOME </a></li>
                       <li>
                           <a href="http://localhost/SSURT%20Event%20Photography%20Management%20System/Weddings%20page.html">GALLERY</a>
                       </li>
                       <li>
                           <a href="http://localhost/SSURT%20Event%20Photography%20Management%20System/plans.php" class="active">PLANS</a>
                           <ul>
                               <li><a href="http://localhost/SSURT%20Event%20Photography%20Management%20System/wedding.php" class="active">WEDDING PLANS</a></li>
                               <li><a href="http://localhost/SSURT%20Event%20Photography%20Management%20System/party.php">PARTY PLANS</a></li>
                               <li><a href="http://localhost/SSURT%20Event%20Photography%20Management%20System/spectial.php">SPECIAL OCCATION</a></li>
                           </ul>
                       </li>
                       <li CLASS="sign"><a CLASS="sign"href="http://localhost/SSURT%20Event%20Photography%20Management%20System/login.php">SIGNIN</a></li>
                       <li CLASS="sign"><a  CLASS="sign"href="http://localhost/SSURT%20Event%20Photography%20Management%20System/registation.php">SIGNUP</a></li>
                   </ul>
               </nav>
           </div>
    

		<br>
<br>
<br>



<div class="form">

        <form method="POST">
            <center><h2>profile</h2><center>
            <br>
            <img src="image/log.png" alt="profile picutre" style="width:70px" >
            <br>
            <br>
            <div style="margin-left:5px;">
            <label for="username">username</label>
            <input type="text" name="username"  value="<?php if(isset($username)){echo $username;}?>"disabled>
            <br>
            <br>
            <label for="email">email</label>
            <input type="text" name="email" value="<?php  if(isset($email)){echo $email;} ?>" disabled>
            <br>
            <br>
            <label for="mobile">mobile no</label>
            <input type="text" name="mobile" value="<?php  if(isset($mobile)){echo $mobile;} ?>" disable>
            </div>
            </form>
        <br>
        <div style="text-align:center; padding-bottom:10px;">
        <button class="btnupdate" ><a href="editprofile.php" class="btnupdate">Update profile</a></button>
        <br>
        <br>
        <input class="btndelete" name="delete" type="submit" value="delete profile">
</div>
</div>

        <br>
<br>
<footer>
    <div class="footer" >
        <button id="about" style="float:left"><a href="aboutus.html" style="text-decoration:none;">About us</button></a>
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


if(isset($_POST['delete'])){
        $id=$_SESSION['userid'];
        
        $deletesql = "DELETE FROM register WHERE userID = $id;";
        $delete=mysqli_query($connect,$deletesql);
        session_destroy();
        header("location:SSURT HOME PAGE.html");
    
}
?>
<?php
mysqli_close($connect);
?>







