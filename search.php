<!DOCTYPE html>
<html>
    <head>
    
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

<a href="../view/reg.php">REGISTRATION</a>
<a href="../view/login.php">LOG IN</a>

<a href="../controller/logoutcheck.php">LOGOUT</a>
</div>
</div>
                         <!-- Navbar End  -->
                         <body>
 <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
  else
  {
     document.getElementById("mytext").innerHTML = this.status;
  }
  };
  xhttp.open("POST", "/Mycode/MVC/controller/getuser.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);
}
</script>
</head>

<br>

<label>Find details of Profile table by ID :</label><br><br>
 ID:<input type="text" id="uname" onkeyup="showmyuser()" >
<p id="mytext"></p>

</body>
 <!-- Footer  -->
 <?php include '../view/footer/footer.php';?>
</html>