<?php 
     $errors=['pay'=>""];
     if(isset($_POST['payment'])){
    $street=$_POST["street"];
    $house=$_POST["house"];
    $postcode=$_POST["postcode"];
    $Phone=$_POST["Phone"];
    $city=$_POST["city"];
    

 
    $conn=mysqli_connect('localhost','root','','foodgeusto');
 
    $sql = "INSERT INTO deliveryadressdetails (street, house, postcode, Phone, city) VALUES ('$street', '$house', '$postcode', '$Phone', '$city')";
    $abcd = mysqli_query($conn, $sql);

  if ($abcd) {
    $errors['pay'] = 'Details captured successful';
   } 
    else {
    $errors['pay'] = 'Details not posted: ' . mysqli_error($conn);
}

 
    
}
if(isset($_POST['details'])){
  $cardNo=$_POST["cardNo"];
  $cvv=$_POST["cvv"];
  $expiry=$_POST["expiry"];

  $conn=mysqli_connect('localhost','root','','foodgeusto');
  $sql = "INSERT INTO card_details (cardNo, cvv, expiry) VALUES ('$cardNo', '$cvv', '$expiry')";
  $ab = mysqli_query($conn, $sql);

  if ($ab) {
    // echo ''; Details captured successful
   } 
    else {
    echo 'Details not posted: ' . mysqli_error($conn);
}

 

}
?>

<html>

<head></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <header class="header" id="header">
    <nav class="navbar_cust container">
      <a href="index.php" class="brand">GustoGrove</a>
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
      <a href="cart.php" class="item-links"><span class="shopping-cart-btn"><i
            class="fa fa-shopping-cart"></i></span></a>
    </nav>
  </header>
  <div class="cart-container">
    <div class="inner-container">
      <h1>Your Cart</h1>
    </div>
    <ul class="cart-products">
      <li class="grid_4 cart-product">
        <a href="#" class="btn-delete">
          <i class="fa fa-trash"></i>
        </a>
        <div class="img-container">
          <img src="img\biryani.jpeg">
        </div>
        <div class="name-serves-container" data-price="15.99">
          <h3>
            Biryani
          </h3>
        </div>
        <div class="price-main-container">

          <div class="second-price-container align-center replica-second-price">

            <div class="second-price-container amount-text">
              <p class="discount-price">£10.99</p>
            </div>
            <p>
              <a href="#" class="btn-amount add">
                <i class="fa fa-plus"></i>
              </a>
            </p>
            <p>
              <a href="#" class="btn-amount remove">
                <i class="fa fa-minus"></i>
              </a>
            </p>


            <input type="hidden" class="amount_field" name="amount" data-price="15.99" value="1">
          </div>
        </div>

      </li>
      <li class="grid_4 cart-product">
        <a href="#" class="btn-delete">
          <i class="fa fa-trash"></i>
        </a>
        <div class="img-container">
          <img src="img\kebab.jpeg">
        </div>
        <div class="name-serves-container" data-price="14.49">
          <h3>
            kebab
          </h3>


        </div>
         <div class="price-main-container">

          <div class="second-price-container align-center replica-second-price">

            <div class="second-price-container amount-text">
              <p>£10.49</p>
            </div>
            <p>
              <a href="#" class="btn-amount add">
                <i class="fa fa-plus"></i>
              </a>
            </p>
            <p>
              <a href="#" class="btn-amount remove">
                <i class="fa fa-minus"></i>
              </a>
            </p>

            <input type="hidden" class="amount_field" name="amount" data-price="2.49" value="1">
          </div>
        </div>

      </li>
      <li class="grid_4 cart-product">
        <a href="#" class="btn-delete">
          <i class="fa fa-trash"></i>
        </a>
        <div class="img-container">
          <img src="img\julab jam.jpeg">
        </div>
        <div class="name-serves-container" data-price="10.99">
          <h3>
            GulabJam
          </h3>

        </div> 
        <div class="price-main-container">

          <div class="second-price-container align-center replica-second-price">

            <div class="second-price-container amount-text">
              £8.95
            </div>
            <p>
              <a href="#" class="btn-amount add">
                <i class="fa fa-plus"></i>
              </a>
            </p>
            <p>
              <a href="#" class="btn-amount remove">
                <i class="fa fa-minus"></i>
              </a>
            </p>

            <input type="hidden" class="amount_field" name="amount" data-price="8.95" value="1">
          </div>
        </div>

      </li>
    </ul> -->
    <div class="inner-container delivery-payment">
      <div class="grid_6 delivery-address">
        <h3>Delivery Address</h3>
        <form action="cart.php" method="POST">
    <label for="street">Street Address:</label>
    <input type="text" id="street" name="street" placeholder="Enter Street Address" required>

    <label for="house">House number:</label>
    <input type="text" id="house" name="house" placeholder="Enter House number" required>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" placeholder="Enter City" required>

    <label for="post">Post Code:</label>
    <input type="text" id="post" name="postcode" placeholder="Enter the Post Code" required>

    <label for="phone">Phone number:</label>
    <input type="tel" id="phone" name="Phone" placeholder="Enter the Phone number" required>

    <!-- Use input type="submit" for the submit button -->
    <input type="submit" name="payment" value="Continue" class="btn-checkout btn-reverse" >
</form>

      </div>
      <div class="grid_6 payment-name-serves-container">
        <h3>Payment Card</h3>
        <form action="cart.php" method="POST">
        <label for="card-number">Card Number:</label>
        <input type="text" id="card-number" name="cardNo" placeholder="1234 5678 9012 3456">

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" maxlength="3">

        <label for="expiry-date">Expiry Date:</label>
        <input type="text" id="expiry-date" name="expiry" placeholder="MM/YY">
        <input type="submit" name="details" value="Checkout" class="btn-checkout btn-reverse" >
        </form>
      </div>
    </div>




    <div class="inner-container summary">
      <div class="price-main-container">
        <div class="summary-content">
          <div class="second-price-container meta-data">
            <div class="sub-total">
              <em>Sub Total: </em><span class="amount">£26.49</span>
            </div>
            <div class="taxes">
              <em>add VAT: </em><span class="amount">@ 10%</span>
            </div>

          </div>
          <div class="second-price-container">
            <div class="total">
              <span class="amount">Total £28.79</span>
            </div>
          </div>
        </div>
        <div class="btn-summary">

      


        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <p>&copy; 2023 FoodGuesto. All rights reserved to world food organisation.</p>
  </footer>
</body>
<script src="script/script.js"></script>

</html>