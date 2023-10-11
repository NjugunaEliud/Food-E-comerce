
<!DOCTYPE html>
<?php 
     $errors=['regist'=>""];
     if(isset($_POST['register'])){
    $email=$_POST["email"];
    $fullname=$_POST["fullname"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    // $server='localhost';
    // $user='root';
    // $password='';
    // $database='foodgeusto';
    $conn=mysqli_connect('localhost','root','','foodgeusto');
    
    $sql = "INSERT INTO registration (email, username, password, fullname) VALUES ('$email', '$username', '$password', '$fullname')";
    $abcd = mysqli_query($conn, $sql);
  if ($abcd) {
    $errors['regist'] = 'Registration successful';
   } 
    else {
    $errors['regist'] = 'Registration failed: ' . mysqli_error($conn);
}

 
    
}?>
<html>
    <head></head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header class="header" id="header">
            <nav class="navbar_cust container">
                <a href="index.php" class="brand">FoodGuestoo</a>
                <div class="burger_top" id="burger_top">
                    <span class="burger_top-line"></span>
                    <span class="burger_top-line"></span>
                    <span class="burger_top-line"></span>
                </div>
                <div class="menu" id="menu">
                    <ul class="main-menu-container">
                        <li class="list-menu"><a href="register.php" class="item-links">Register</a></li>
                        <li class="list-menu"><a href="index.php" class="item-links">Home</a></li>
                        <li class="list-menu"><a href="products.php" class="item-links">Products</a></li>
                        
                    </ul>
                </div>
                <a href="cart.php" class="item-links"><span class="shopping-cart-btn"><i class="fa fa-shopping-cart"></i></span></a>
            </nav>
        </header>
         <section class="login-form">
            <h1>Register</h1>
            <form action="register.php" method="POST">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
    
                <button type="submit" name="register">Register</button>
            </form>
         </section>
         <footer class="footer">
            <p>&copy; 2023 FoodGuestoo. All rights reserved to world Food organisation.</p>
          </footer>
    </body>
<script src="script/script.js"></script>

</html>