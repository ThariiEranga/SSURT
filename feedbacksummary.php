<?php
include 'connect.php';
session_start();
?>
<?php
          if(isset($_SESSION['feedbackid']))
          {

            $fid=$_SESSION['feedbackid'];
          $sql2 = "SELECT * FROM feedback WHERE feedbackID = $fid;";
          $result2 = mysqli_query($connect,$sql2);
          $row = mysqli_fetch_assoc($result2);
          
          $fusername= $row['username'];
          $femail = $row['email'];
          $fsubject = $row['message'];
        }
        
?>

<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
<link rel="stylesheet" href="style/feedback.css">
 <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
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
<br>
<br>
<br>
<center><div class="container">    
    <form method="POST">    
      <div class="row">    
        <div class="col-25">       
        </div>    
        <div class="col-75">    
          <input type="text" id="fname" name="username"  value="<?php if(isset($fusername)){echo $fusername;}?>"disabled >    
        </div>    
      </div>    
         
      <div class="row">    
          <div class="col-25">    
          </div>    
          <div class="col-75">    
            <input type="email" id="email" name="email" value="<?php  if(isset($femail)){echo $femail;} ?>" disabled >    
          </div>    
        </div>    
      
      <div class="row">    
        <div class="col-25">   
        </div>    
        <div class="col-75">    
          <input type="textarea" id="subject" name="subject"  style="height:200px"  value="<?php  if(isset($fsubject)){echo $fsubject;} ?>"disabled></textarea>    
        </div>    
      </div>    
      <div class="btn-group">
        <button><a href="feedback.php" style="text-decoration:none">New feedback</a></button>
        <input type="submit" name="delete" value="Delete feedback">
      </div>
    </form>    
  </div>
</center>
  <br>

  <div>  
     <center>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<br>
Rate us
</div>
 </center>
 <footer>
    <div class="footer" >
        <button id="about"><a href="aboutus.html" style="text-decoration:none;">About us</button></a>
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
  
  if(isset($_POST['delete']))
  {

        $fid=$_SESSION['feedbackid'];
        $deletesql = "DELETE FROM feedback WHERE feedbackID = $fid;";
        $delete=mysqli_query($connect,$deletesql);
        session_destroy();
        header("location:feedback.php");
    
}
?>
<?php
mysqli_close($connect);
?>


  