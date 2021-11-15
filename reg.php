<!DOCTYPE html>
<html>
<head>
<meta name="viewport", content="width=device-width, initial-scale=1">
<title>Registration</title>


                          <!-- Stylesheet  -->
<link rel="stylesheet" type="text/css" href="../view/css/style.css">

                      <!-- Header  -->
<h6 id="Header"><?php include '../view/header/header.php';?></h6>
</head>



                      <!-- Navbar Start  -->
<div class="sticky">
<div class="topnav">
<a href="../View/home.php">HOME</a>
<a href="../view/reg.php">REGISTRATION</a>
<a href="../view/login.php">LOG IN</a>
<a href="../view/profile.php">PROFILE</a>

<a href="../view/update.php">UPDATE PROFILE</a>
<a href="../view/search.php">SEARCH</a>

<a href="../controller/logoutcheck.php">LOGOUT</a>
</div>
</div>
                      <!-- Navbar End  -->

<body>


<!-- Javascript  -->
<script src="../view/js/JsValidation.js"></script>





                 <!-- Page Connect  -->
<?php

include('../Controller/regcheck.php');

if(isset($_SESSION['username'])){
header("location: ../controller/regoutput.php");
}
?>


                    <!-- Heading  -->
<h1>Registration</h1>

<b>

                   <!-- Marquee  -->

<h2><marquee>No Account? Create your Account now!</marquee></h2>

                          <!-- Form  -->
<div id="RegistrationBlock6">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='post' enctype = "multipart/form-data" onsubmit="return validateForm()">
  
  
  <Label>First Name:</label><br> <?php //echo $fnameerror;?> <h4 id="jsfnameerror"></h4>
  <input type="text" id="fname" name="fname" ><br><br>
  <Label>Last Name:</Label><br> <?php //echo $lnameerror;?> <h4 id="jslnameerror"></h4>
  <input type="text" id="lname" name="lname" ><br><br>
  <Label>Email:</Label><br> <h4 id="jsemailerror"></h4>
  <input type="text" id="email" name="email" ><br><br>
  <Label>User Name:</label><br> <?php //echo $emailerror;?> <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" ><br><br>

  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php //echo $DOBError; ?> <h4 id="jsDOBerror"></h4><br><br>
  
  <Label>Password:</Label><br> <?php //echo $error;?> <h4 id="jspasserror"></h4>
  <input type="password" id="password" name="password" ><br><br>

  
  <Label>Confirm Password:</Label><br>
  <input type="password" id="cpassword" name="cpassword" ><?php// echo $cpasswordError; ?> <h4 id="jscpasserror"></h4><br><br>
 
  <Label>Address:</Label><br>
  <input type="text" id="address" name="address" ><?php// echo $addressError; ?><h4 id="jsaddresserror"></h4><br><br>

  <label>Gender:</label><?php// echo $genderError; ?> <h4 id="jsgendererror"></h4>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br><br>

  

  <br>
                              <!-- Form End  -->

                          <!-- Button  -->
  <input type="submit" name="submit" id="Button" value="Submit">
  <input type="reset" name="reset" id="Button" value="reset">

</form> 
<br>

</div>
</body>
<!-- Footer  -->
<?php include '../view/footer/footer.php';?>
</html>