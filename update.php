<?php
include('../controller/db.php');
include('../controller/updatecheck.php');
?>
<!DOCTYPE html>
<html>
<head>

<br><br>
<title>update</title>

                     <!-- Stylesheet  -->
<link rel="stylesheet" type="text/css" href="../view/css/style.css">

                        <!-- Header  -->
<h6 id="Header"><?php include '../view/header/header.php';?></h6> <br><br>
</head>
      <!-- Navbar Start  -->
      <div class="sticky">
<div class="topnav">

<a href="../View/home.php">HOME</a>


<a href="../view/search.php">SEARCH</a>

<a href="../view/reg.php">REGISTRATION</a>
<a href="../view/login.php">LOG IN</a>

<a href="../controller/logoutcheck.php">LOGOUT</a>

</div>
</div>
                       <!-- Navbar End  -->
<body>
                        <!-- Javascript     -->
<script src="../js/ProfileJsValidation.js"></script>

                   <!-- Heading  -->
<h2>Update Profile information</h2>



                          <!-- Form Start  -->
<form action="" method='post' onsubmit="return validateForm2()">
  

  <Label>Id:</label><br> <h4 id="jsiderror"></h4>
  <input type="text" id="id" name="id" ><br><br>

  <Label>User Name:</label><br> <?php //echo $emailerror;?> <h4 id="jsusernameerror"></h4>
  <input type="text" id="username" name="username" ><br><br>
  
  
  <Label>Email:</Label><br> <h4 id="jsemailerror"></h4>
  <input type="text" id="email" name="email" ><br><br><br>
 
  <Label>Date Of Birth:</Label><br>
  <input type="date" id="DOB" name="DOB" ><?php //echo $DOBError; ?> <h4 id="jsDOBerror"></h4><br><br>
  
  <Label>Password:</Label><br> <?php //echo $error;?> <h4 id="jspasserror"></h4>
  <input type="password" id="password" name="password" ><br><br>

  
 
  <Label>Address:</Label><br>
  <input type="text" id="address" name="address" ><?php// echo $addressError; ?><h4 id="jsaddresserror"></h4><br><br>

  <label>Gender:</label> <h4 id="jsgendererror"></h4>
  <input type="radio" id="gender" name="gender" value="Male" >Male
  <input type="radio" id="gender" name="gender" value="Female" >Female
  <br><br><br>

                            <!-- Form End  -->


                             <!-- Button  -->
  <input type="submit" name="update" id="jButton" value="update">
  <a href="search.php"><br><button name="cancel"  id="jCancle">Cancel</button></a><br>

  </form>
  


                          <!-- Db Connection -->
  <?php

$connection = new db();
$conn=$connection->OpenCon();
$userQuery=$connection->showall($conn,"registration"); 
 


                          //  Show table 
echo "<table border='1'>
<tr>
<th>id</th>
<th>username</th>
<th>email</th>
<th>DOB</th>
<th>password</th>
<th>address</th>
<th>gender</th> 


</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
   
    echo "<td>" . $row['DOB'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";

    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    
   
    }
    echo "</table>"; //$conn->close(); //mysqli_close($conn);
    } 
?>  
</body>
                        <!-- Footer  -->
<?php include '../view/footer/footer.php';?>
</html>