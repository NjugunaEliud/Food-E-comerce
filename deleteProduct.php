<?php
if (isset($_GET['food_id'])) {
    $foodId = $_GET['food_id'];
    $conn = mysqli_connect('localhost', 'root', '', 'foodgeusto');

    
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
        
        $sql = "DELETE FROM foods WHERE food_id = '$foodId'";
        if (mysqli_query($conn, $sql)) {
            
            header("Location: AdminProducts.php");
            exit();
        } else {
            echo 'Error deleting product.';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .confirmation-container {
            text-align: center;
        }
        .confirmation-message {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .confirmation-buttons a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            cursor: pointer;
        }
        .confirmation-buttons a:last-child {
            margin-right: 0;
        }
    </style>
<body>
<div class="confirmation-container">
        <p class="confirmation-message">Are you sure you want to delete this product?</p>
        <div class="confirmation-buttons">
            <a href="deleteProduct.php?food_id=<?php echo $foodId; ?>&confirm=yes">Yes, delete</a>
            <a href="AdminProducts.php">No, cancel</a>
        </div>
    </div>
</body>
</html>
