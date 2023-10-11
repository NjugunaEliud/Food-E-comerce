<?php
session_start(); 




$err=['er'=>""];
if(isset($_POST['login'])){
$email=$_POST["email"];
$password=$_POST["password"];
$log="select * from registration where email='$email' and password='$password'  ";
$conn=mysqli_connect('localhost','root','','foodgeusto');
$resu=mysqli_query($conn,$log);
$results=mysqli_fetch_assoc($resu);
$remail=$results["email"];
$rpassword=$results["password"];
if($email==$remail && $password==$rpassword){
    $_SESSION['user_id'] = $user_id;
    $_SESSION['email'] = $email;
 header("location:products.php");


}
else{
  $err['er']="Login Failed Please Retry";
}

} ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<style>
 /* Add padding to containers */
.container {
padding: 20px;
}
.container h1{
text-align: center;
padding-top: 3rem;
}
.one{
margin-top: 0px;
}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=tel] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;

}
input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}
.loginbtn{
background-color: #04AA6D;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
border-radius: 12px;

}
.loginbtn:hover{
background-color:green; 
}
/* Set a style for the submit button */
.registerbtn{
background-color: #04AA6D;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}
  
</style>
<body>
<form action="login.php" class="login-form" method="POST" id="l">
      <h1><?php echo $err['er'];?></h1>
            <div class="container">
                <h1>Login</h1>
                <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" id="email" required>
            
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" id="psw" required> 
            
              <button type="submit" class="loginbtn" name="login">Login</button>

            </div>
            <div class="container signin">
                <p>Don't have an account? <a href="register.php">Register</a>.</p>
              </div>
          </form>
</body>

</html>


