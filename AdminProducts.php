<html>
<head></head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    
    h3{
        text-align: center;
        color:#ff0000;
        margin-top: 12px;
        margin-bottom: 12px;
    }a{
        list-style: none;
        text-decoration: none;
        background-color: #ff0000;
            color: white;
            border: none;
            padding: 7px 12px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
            
    }
</style>
<body>
<!-- delete product code -->

<!-- fetch foods from db for admin to delete or update -->
<?php
$conn=mysqli_connect('localhost','root','','foodgeusto');
$quer="select * from foods ";
$abcd=mysqli_query($conn,$quer);
$foods=mysqli_fetch_all($abcd, MYSQLI_ASSOC);
?>
<h3>Admin to delete Unavailable or Out of Stock Foods</h3>
  <section class="product-section">
  <?php foreach ($foods as $food) { ?>
    <div class="product-card">
        <div class="product-image">
            <img src="<?php echo $food['image']; ?>" alt="Product Image">
        </div>
        <div class="product-details">
            <h3><?php echo $food['name']; ?></h3>
            <p class="discount-price">£<?php echo $food['price']; ?></p>
        </div>
        
        <a href="deleteProduct.php?food_id=<?php echo $food['food_id']; ?>">Delete Product</a>
    </div>
  
<?php } ?>
 
  </section>
  
</body>

</html>
   
    