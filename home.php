<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<body>

  <h1>Registration Form</h1>
  <h2>My SQL</h2>
  <form>
    <fieldset>
    <legend>Basic Information</legend>
    <label for="FName">First Name</label>
    <input type="text" id="FName" name="FName">
    
    <label for="LName">Last Name</label>
    <input type="text" id="LName" name="LName">
    <br>
    <label for="Gender">Gender</label>
    <input type="radio" id="male" name="Gender"> Male
    <input type="radio" id="female" name="Gender"> Female
    <br>
    <label for="birthday">Date of Birth:</label>
    <input type="date" id="birthday" name="birthday">
    
    <br>
    
    <label for="religion">Religion:</label>
    <select name="religion" id="religion">
    <option value="Islam">Islam</option>
    <option value="Hindu">Hindu</option>
    <option value="Christian">Christian</option>
    <option value="Buddho">Buddho</option>
    <option value="Jews">Jews</option>
    <option value="Other">Other</option>
    </select><br>
    
    
    
    
    </fieldset>
    </form>
    
  
    
    <form>
    <fieldset>
    <legend>Contact Information</legend>
    <label for="preAdd">Present Address</label>
    <input type="text" id="preAdd" name="preAdd"><br> 
    
    <label for="parAdd">Parmanent Address</label>
    <input type="text" id="parAdd" name="parAdd"><br> 
    
    <label for="Phone">Phone Number</label>
    <input type="number" id="Phone" name="Phone"><br> 
    
    <label for="email">Email</label>
    <input type="text" id="email" name="email"><br> 
    
    <label for="url">Personal Website:</label>
    <input type="url" id="url" name="url">
    
    
    
    </fieldset>
    </form>
    
    <form>
    <fieldset>
    <legend>Account Information</legend>
    <label for="username">User Name</label>
    <input type="text" id="username" name="username"><br> 
    
    <label for="password">Password</label>
    <input type="text" id="password" name="password"><br>
    
    
    
    
    
    
    
    <input type="submit" value="Submit">
  
</body>
</html>