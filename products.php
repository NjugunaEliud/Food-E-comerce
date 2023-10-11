<html>

<head></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header class="header" id="header">
    <nav class="navbar_cust container">
      <a href="index.php" class="brand">Food Guestoo</a>
      <div class="b_top" id="b_top">
        <span class="b_t-line"></span>
        <span class="b_t-line"></span>
        <span class="b_t-line"></span>
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
  
  <?php

$conn=mysqli_connect('localhost','root','','foodgeusto');
$quer="select * from foods ";
$abcd=mysqli_query($conn,$quer);
$foods=mysqli_fetch_all($abcd, MYSQLI_ASSOC);
?>
  <section class="product-section">
  <?php foreach ($foods as $food) { ?>
    <div class="product-card">
        <div class="product-image">
            <img src="<?php echo $food['image']; ?>" alt="Product Image">
            <div class="hover-overlay">
                <form action="cart.php" method="post">
                <input type="hidden" name="product_id" value="<?php echo $foof['food_id']; ?>">
                <label for="quantity1" style="color: white;">Quantity:</label>
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit">Add to Cart</button>
                </form>
            </div>
        </div>
        <div class="product-details">
            <h3><?php echo $food['name']; ?></h3>
            <p class="discount-price">£<?php echo $food['price']; ?></p>
            <!-- <div class="quantity">
                <label for="quantity1">Quantity:</label>
                <input type="number" id="quantity1" name="quantity1" value="1" min="1">
            </div> -->
        </div>
    </div>
<?php } ?>

   
    <div class="product-card">
      <div class="product-image">
        <img src="img\chicken.jpeg" alt="Product Image">
        <div class="hover-overlay">
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      </div>
      <div class="product-details">
        <h3>Chicken</h3>
        <p class="price">£18.99</p>
        <p class="discount-price">£10.99</p>
        <div class="quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-image">
        <img src="img\chinees.jpeg" alt="Product Image">
        <div class="hover-overlay">
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      </div>
      <div class="product-details">
        <h3>chinees</h3>
        <p class="price">£10.99</p>
        <p class="discount-price">£9.90</p>
        <div class="quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-image">
        <img src="img\turkish whole.jpeg" alt="Product Image">
        <div class="hover-overlay">
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      </div>
      <div class="product-details">
        <h3>Turkish Whole Chicken</h3>
        <p class="price">£7.99</p>
        <p class="discount-price">£5.95</p>
        <div class="quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-image">
        <img src="img\chicken soup.jpeg" alt="Product Image">
        <div class="hover-overlay">
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      </div>
      <div class="product-details">
        <h3>Chicken soup Bowl</h3>
        <p class="price">£23.99</p>
        <p class="discount-price">£20.99</p>
        <div class="quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-image">
        <img src="img\kebab.jpeg" alt="Product Image">
        <div class="hover-overlay">
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      </div>
      <div class="product-details">
        <h3>Chicken Kebab</h3>
        <p class="price">£14.99</p>
        <p class="discount-price">£10.49</p>
        <div class="quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-image">
        <img src="img\south spicy biryani.jpeg" alt="Product Image">
        <div class="hover-overlay">
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      </div>
      <div class="product-details">
        <h3>South Biryani</h3>
        <p class="price">£15.99</p>
        <p class="discount-price">£10.95</p>
        <div class="quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-image">
        <img src="img\masala dosa.jpeg" alt="Product Image">
        <div class="hover-overlay">
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      </div>
      <div class="product-details">
        <h3>Masala Dosa</h3>
        <p class="price">£12.99</p>
        <p class="discount-price">£7.95</p>
        <div class="quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
    </div>
    <div class="product-card">
      <div class="product-image">
        <img src="img\julab jam.jpeg" alt="Product Image">
        <div class="hover-overlay">
          <button class="add-to-cart" onclick="addToCart()">Add to Cart</button>
        </div>
      </div>
      <div class="product-details">
        <h3>gulabjam</h3>
        <p class="price">£10.99</p>
        <p class="discount-price">£8.95</p>
        <div class="quantity">
          <label for="quantity">Quantity:</label>
          <input type="number" id="quantity" name="quantity" value="1" min="1">
        </div>
      </div>
    </div>




  </section>
  <footer class="footer">
    <p>&copy; 2023 FoodGuestoo. All rights reserved to world food organisation.</p>
  </footer>

</body>
<script src="script/script.js"></script>



</html>