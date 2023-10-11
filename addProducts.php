<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f5f5f5;
        }
        label, input, textarea {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        h2{
            text-align: center;
            color: crimson;
        }
    </style>
</head>
<?php
 if(isset($_POST['add'])){
    $name = $_POST["name"];
    $price = $_POST["price"];
    $targetDir = "uploads/";
    $imageName = basename($_FILES["image"]["name"]);
    $targetPath = $targetDir . $imageName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath);

    $conn=mysqli_connect('localhost','root','','foodgeusto');
    
    $sql = "INSERT INTO foods (name, price, image)
            VALUES ('$name', '$price', '$targetPath')";

$abcd = mysqli_query($conn, $sql);

if ($abcd) {
  $errors['pay'] = 'Details captured successful';
 } 
  else {
  $errors['pay'] = 'Details not posted: ' . mysqli_error($conn);
}
    $conn->close();
}
?>

<body>
    <div id="addForm">
 <h2>Add Item</h2>
    <form action="addProducts.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required> 
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>
        
        <label for="image">Image:</label>
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" name="add" value="Add Item">
    </form>
    </div>
</body>
</html>
