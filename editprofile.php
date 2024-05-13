<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style/editprofile.css">
    <title>Edit profile</title>
    
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

    <div >
        <div style="margin-left:50px">
    <button class="profilebtn" ><a href="userprofile.php" class="profilebtn">Back to Profile</a></button>
</div>
        <br>
        <br>
        <div id="update">
            <div style="margin:30px;" >
            <h3>Edit Details</h3>
                <br><br>
                <form action="" method="POST"  >
                    <div class="content">

                        <div class="input">
                            <label for="username">UserName : </label>
                            <input type="text" class="input-field" name="username" />
                        </div>
                        <br>
                        <div class="input">
                            <label for="Nphone">Phone number : </label>
                            <input type="text" class="input-field" name="mobile" required />
                        </div>
                        <br>
                        <div class="input">
                            <label for="Npassword">New Password : </label>
                            <input type="password" class="input-field" name="password" required />
                        </div>
                        <br>
                        <div class="input">
                            <label for="Nrepassword">Confirm Password : </label>
                            <input type="password" class="input-field" name="repassword" required />
                        </div>
                        <br>
                        <div >
                        
                                <input class="savebtn"name="submit" type="submit" value="Save">
                            
                    </div>
            </div>
            </form>
        </div>
    </div>

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
if (isset($_SESSION['userid'])) {
    $userid = $_SESSION['userid'];

    $userquery = "SELECT * FROM register WHERE userid = '$userid';";
    $result = mysqli_query($connect, $userquery);
    $data = mysqli_fetch_assoc($result);

    $username = $data['username'];
    $email = $data['email'];
    $mobile = $data['mobile'];
    $password = $data['password'];
}

if (isset($_POST['submit'])) {
    $id = $_SESSION['userid'];
    $Name = $_POST['username'];
    $umobile = $_POST['mobile'];
    $upassword = $_POST['password'];
    $urepassword = $_POST['repassword'];

    if ($upassword == $urepassword) {
        $updatequery = "UPDATE register SET username = '$Name', mobile = '$umobile', password = '$upassword' WHERE userid = $id;";
        $runquery = mysqli_query($connect,$updatequery);
        header("Location: userprofile.php");
        
    } else {
        echo "<script>alert(\"Password mismatch!!!\n Enter again.\")</script>";
    }
}
?>