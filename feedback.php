<?php
      include 'connect.php';
      session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
<link rel="stylesheet" href="style/feedback.css">
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
<div class="container">    
    <form method="POST">    
      <div class="row">    
        <div class="col-25">    
          <label for="fname">First Name</label>    
        </div>    
        <div class="col-75">    
          <input type="text" id="username" name="fusername" placeholder="Your name.." required>    
        </div>    
      </div>   
      <div class="row">    
          <div class="col-25">    
            <label for="email">Mail Id</label>    
          </div>    
          <div class="col-75">    
            <input type="text" id="email" name="femail" placeholder="Your mail id.." required>    
          </div>    
        </div>    
      
      <div class="row">    
        <div class="col-25">    
          <label for="feed_back">Feed Back</label>    
        </div>    
        <div class="col-75">    
          <input type="textarea" id="subject" name="fsubject" placeholder="Write something.." style="height:200px" required></textarea>    
        </div>    
      </div>    
      <div class="row">    
        <input type="submit" value="Submit" name="submit">    
      </div>    
    </form>    
  </div>
  <br>
  <center>
  <div>  
     
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
        if(isset($_POST['submit']))
        {
            $fusername = $_POST['fusername'];
            $femail =$_POST['femail'];
            $fsubject =$_POST['fsubject'];
        
            $sqlfeedback = "INSERT INTO feedback(username,email,message) VALUES ('$fusername','$femail','$fsubject');";
            $result = mysqli_query($connect,$sqlfeedback);

            $sqlfeedback2 = "SELECT * FROM feedback WHERE username = '$fusername';";
            $result2 = mysqli_query($connect,$sqlfeedback2);
            $row = mysqli_fetch_assoc($result2);
            $fid= $row['feedbackID'];
            $fusername= $row['username'];
            $femail = $row['email'];
            $fsubject = $row['message'];

            $_SESSION['feedbackid']=$fid;
            $_SESSION['fusername']=$fusername;
            $_SESSION['femail']=$femail;
            $_SESSION['fsubject']=$fsubject;
         // locate in to appointment page
            header("Location:feedbacksummary.php");
        
        }
        
        ?>
        <?php
            mysqli_close($connect);

  ?>