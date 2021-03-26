<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="style.css" />
<style>
  
body {font-family: Arial, Helvetica, sans-serif; background-image:url("1.jpg") ; color: #ddd;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  float:center;
  padding: 10px;
  margin: 20px;
  display: inline-block;
  border: none;
  border-radius: 60px;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
  input[type=checkbox]{
    
    
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  float: center;
  color: white;
  padding: 10;
  margin: 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  border-radius: 65px;
  opacity: 0.9;
}
button:hover {
  opacity:1;
}
/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
/* Add padding to container elements */
.container {
  padding: 16px;
}
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="" style="border:1px solid #ccc">
  <div class="container">
    <h1 style="text-align: center;">Sign Up</h1>
    <p style="text-align: center;" >Please fill in this form to create an account.</p>
    <hr>
    <label type="email" size="32" required name="email" style="text-align: center;"><br>Email</label>
    <input type="text" placeholder="Enter Email" name="email" id="fname"required>
    <label for="psw"><br>Password</label>
    <input type="password" placeholder="Enter Password" name="psw" id="lname" required>
    <label for="psw-repeat"><br>Repeat Password</label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="bname" required>
    
    <label>
    <br>  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> <br>Remember me
    </label>
    
    <p style="text-align: center;">By creating an account you agree to our <a href="https://policies.google.com/" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <div class="clearfix">
      <button type="button" class="cancelbtn" >Cancel</button>
      <button type="submit" onclick="myFunction()"class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
    <script> 
      function myFunction(){
var x = document.getElementById('fname').value
var b = document.getElementById('lname').value
var c = document.getElementById('bname').value
var form = document.querySelector('form')
if (x == "temirlan" && b == "12345" && c=="12345"){
    form.setAttribute("action", "/main.php")
}else{
    alert("permission denied")
}
}
    </script>
</body>
</html>
