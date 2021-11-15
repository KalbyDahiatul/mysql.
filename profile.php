
                   <!-- Page Connect  -->
<?php

include('../Controller/profilecheck.php');

include('../Controller/Updatecheck.php');

if(isset($_SESSION['username'])){
header("location: ../controller/profileoutput.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
</head>

                 <!-- Stylesheet  -->
<link rel="stylesheet" type="text/css" href="../view/css/style.css">

                     <!-- Header  -->
<h6 id="Header"><?php include '../view/header/header.php';?></h6>


<!-- Navbar Start  -->
<div class="sticky">
<div class="topnav">

<a href="../View/home.php">HOME</a>
<a href="../view/update.php">UPDATE PROFILE</a>
<a href="../view/search.php">SEARCH</a>

<a href="../view/reg.php">REGISTRATION</a>
<a href="../view/login.php">LOG IN</a>

<a href="../controller/logoutcheck.php">LOGOUT</a>
</div>
</div>
                             <!-- Navbar End  -->


<body>

                            <!-- Javascript  -->

            <script src="../view/js/ProfileJsValidation.js"></script>

                          <!-- Heading  -->
<h1>Profile</h1>



<br><br><br><br>
                               <!-- Form start  -->
<form action="" method='post' onsubmit="return validateForm2()">
  

<Label>Id:</label><br> <h4 id="jsiderror"></h4>
  <input type="text" id="id" name="id" ><br><br>

  <Label>User Name:</label><br> <?php echo $usernameError;?> <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" ><br><br>
  
  
  <Label>Email:</Label><br> <?php echo $emailError;?> <h4 id="jsemailerror"></h4>
  <input type="text" id="email" name="email" ><br><br><br>
 
  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php echo $DOBError; ?> <h4 id="jsDOBerror"></h4><br><br>
  
  <Label>Password:</Label><br> <?php echo $passwordError;?> <h4 id="jspasserror"></h4>
  <input type="password" id="password" name="password" ><br><br>

  
 
  <Label>Address:</Label><br>
  <input type="text" id="address" name="address" ><?php echo $addressError; ?><h4 id="jsaddresserror"></h4><br><br>

  <label>Gender:</label><?php echo $genderError; ?> <h4 id="jsgendererror"></h4>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br><br>
                      <!-- Form End  -->
  

  <br>
                          <!-- Button  -->
  <input type="submit" name="submit" id="Button" value="Submit">
  <input type="reset" name="reset" id="Button" value="reset">

</form> 

</form>
<br>
</body>
<!-- Footer  -->
<?php include '../view/footer/footer.php';?>
</html>



