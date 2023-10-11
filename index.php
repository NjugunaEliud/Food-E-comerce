<html>

<head></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<style>
.footer {
      background-color: #333333e4;
      color: hsla(0, 0%, 100%, 0.989);
      text-align: center;
      padding: 20px;
    }

    .footer p {
      margin: 0;
    }

    
    @media (max-width: 768px) {
      .footer {
        padding: 10px;
      }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header class="header" id="header">
    <nav class="navbar_cust container">
        <a href="index.php" class="brand">FoodGuestoo</a>
        <div class="b_top" id="burger_top">
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
        <a href="cart.php" class="item-links"><span class="shopping-cart-btn"><i class="fa fa-shopping-cart"></i></span></a>
    </nav>
</header>
    <section class="hero">
        <img class="hero-image" src="img\focused_165961960-stock-photo-two-dishes-on-restaurant-table.jpg" alt="Hero Image">
        <div class="hero-text">
            <h1>welcome to FoodGuestoo</h1>
            <p>Taste of Heaven: Taste is Yours,Delicious Food is ours
            </p>
            <a href="products.php" class="product-button">View Products</a>
        </div>
    </section>
    <footer class="footer">
      <p>&copy; 2023 FoodGuestoo. All rights reserved to World Food organisation.</p>
    </footer>
</body>
<script src="script/script.js"></script>

</html>