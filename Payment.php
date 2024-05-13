<?php
        include 'connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style/paymentstyle.css">
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
    
		
		<br><br><br>

<center>

    <fieldset id="pay" style="width:700px;">
        <h3 >Payment</h3 >
        <br>
        <form method="POST" class="payinfo" action="">
        

       <i class="fa fa-user">
        </i><input type="text" name="username" placeholder="user name"/>

         <i class="fa fa-user">
         </i><input type="text" name="userid" placeholder="user ID" />

         <br /><br />
        <lable for="city"><i class="fa fa-institution"></i> City :</lable>
        <select id="city" name="city">
            <option value="Akkaraipattu">Akkaraipattu</option>
            <option value="Ambalangoda">Ambalangoda</option>
            <option value="Ampara">Ampara</option>
            <option value="Anuradhapura">Anuradhapura</option>
            <option value="Babulla">Babulla</option>
            <option value="Balangoda">Balangoda</option>
            <option value="Bandarawela">Bandarawela</option>
            <option value="Batticaloa">Batticaloa</option>
            <option value="Beruwala">Beruwala</option>
            <option value="Boralesgamuwa">Boralesgamuwa</option>
            <option value="Chavakachcheri">Chavakachcheri"</option>
            <option value="Colombo">Colombo</option>
            <option value="Dambulla">Dambulla</option>
            <option value="Dehiwala-Mount Lavinia">Dehiwala-Mount Lavinia</option>
            <option value="Embilipitiya">Embilipitiya</option>
            <option value="Eravur">Eravur</option>
            <option value="Galle">Galle</option>
            <option value="Gampaha">Gampaha</option>
            <option value="Gampola">Gampola</option>
            <option value="Hambantota">Hambantota</option>
            <option value="Haputale">Haputale</option>
            <option value="Hatton-Dickoya">Hatton-Dickoya</option>
            <option value="Hikkduwa">Hikkduwa</option>
            <option value="Horana">Horana</option>
            <option value="Ja-Ela">Ja-Ela</option>
            <option value="Jaffna">Jaffna</option>
            <option value="Kadugannawa">Kadugannawa</option>
            <option value="Kadwela">Kaduwela</option>
            <option value="Kalmunai">Kalmunai</option>
            <option value="Kalutara">Kalutara</option>
            <option value="Kandy">kandy</option>
            <option value="Kattankudy">Kattankudy</option>
            <option value="Katunayake">Katunayake</option>
            <option value="Kegalle">Kegalle</option>
            <option value="Kesbewa">Kesbewa</option>
            <option value="Kilinochchi">Kilinochchi</option>
            <option value="Kinniya">Kinniya</option>
            <option value="Kolonnaawa">Kolonnaawa</option>
            <option value="Kesbewa">Kesbewa</option>
            <option value="Kilinochchi">Kilinochchi</option>
            <option value="Kinniya">Kinniya</option>
            <option value="Kolonnwa">kolonnwa</option>
            <option value="Kuliyapitiya">Kuliyapitiya</option>
            <option value="Kurunegala">Kurunegala</option>
            <option value="Maharagama">Maharagama</option>
            <option value="Mannar">Mannar</option>
            <option value="Matara">Matara</option>
            <option value="Matale">Matale</option>
            <option value="Minuwangoda">Minuwangoda</option>
            <option value="Moneragala">Moneragala</option>
            <option value="Moratuwa">Moratuwa</option>
            <option value="Mullativu">Mullativu</option>
            <option value="Nawalapitiya">Nawalapitiya</option>
            <option value="Negambo">Negambo</option>
            <option value="Nuwara Eliya">Nuwara Eliya</option>
            <option value="Panadura">Panadura</option>
            <option value="Peliyagoda">Peliyagoda</option>
            <option value="Point Pedro">Point Pedro</option>
            <option value="Polonnaruwa">Polonnaruwa</option>
            <option value="Puttalam">Puttalam</option>
            <option value="Ratnapura">Ratnapura</option>
            <option value="Seethawakapura">Seethawakapura</option>
            <option value="Sri Jayawardenepura">Sri jayawardenepura</option>
            <option value="Tangalle">Tangalle</option>
            <option value="Thalawkele-Lindula">Thalawkele-Lindula</option>
            <option value="Trincomalee">Trincomalee</option>
            <option value="Valvettithurai">Valvettithurai</option>
            <option value="Vavuniya">Vavuniya</option>
            <option value="Wattala-Mabole">Wattala-Mabole</option>
            <option value="Wattegama">Wattegema</option>
            <option value="Weligama">Weligama</option>

        </select>
        <br />
        <br />

        <lable for="province">Province :</lable>
        <select id="province" name="province">
            <option value="Central">Central</option>
            <option value="North Central"> North Central</option>
            <option value="Northern">Northern</option>
            <option value="Center">Center</option>
            <option value="North Western">North Western</option>
            <option value="Southern">Southern</option>
            <option value="Uva">Uva</option>
            <option value="Sabaragamuwa">Sabaragamuwa</option>
            <option value="Western">Western</option>

        </select>
        <br />
        <br />

        <i class="fa fa-address-card-o"></i><br /><input type="text" name="address" placeholder="Address" />
        
        <br /><br />

        <br /><input type="tel" name="phone"  placeholder="phone number" />
        
        <br /><br />

        <i class="fa fa-envelope"><br /></i><input type="email" name ="email" placeholder="email"/>
        
        <br /><br />


    
    <br />
    <br />

        <h5>Accepted Cards</h5>
        <div class="icon-container" >
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
            <i class="fa fa-cc-discover" style="color:orange;"></i>
        </div>
        <br>
        <input type="number" name="cnum" placeholder="card number"/><br /><br />
        </lable><input type="text" name="chname" placeholder="card holder name"/><br /><br />
       <input type="number" name="scode" placeholder="code"/><br /><br />
        <label for="expire">Expire date :</label><input type="date" name="date"/><br /><br /><br />
        <center>
            <input type="submit" value="Continue Payment" class="btn"name="submit">
        </center>

        </form>
    </fieldset>
</center>
<br>
<br>
<br>
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
    $username = $_POST['username'];
    $userID =$_POST['userid'];
    $city = $_post['city'];
    $province = $_POST['province'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email =$_POST['email'];
    $cnumber =$_POST['cnum'];
    $chname =$_POST['chname'];
    $scode = $_POST['scode'];
    $date = $_POST['date'];

    $sql = "INSERT INTO payment(username,userid,city,province,address,phone,email,cnum,cHoldername,securitycode,date) VALUES ('$username','$userID','$city','$province','$address','$phone','$email','$cnumber','$chname','$scode','$date');";
    $result = mysqli_query($connect,$sql);
 // locate in to appointment page
    header("Location:Appointment.php");

}

?>
<?php
    mysqli_close($connect);
?>