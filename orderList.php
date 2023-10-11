<?php
$conn = mysqli_connect('localhost', 'root', '', 'foodgeusto');
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Fetch data from the 'registration' table
$query_registration = "SELECT * FROM registration";
$result_registration = mysqli_query($conn, $query_registration);
$registration_data = mysqli_fetch_all($result_registration, MYSQLI_ASSOC);

// Fetch data from the 'foods' table
$query_foods = "SELECT * FROM foods";
$result_foods = mysqli_query($conn, $query_foods);
$foods_data = mysqli_fetch_all($result_foods, MYSQLI_ASSOC);


$query_foods = "SELECT * FROM deliveryadressdetails";
$result_foods = mysqli_query($conn, $query_foods);
$deliveryAddress = mysqli_fetch_all($result_foods, MYSQLI_ASSOC);

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .book {
        width: 100%;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    h3{
        color: crimson;
    }
</style>
<body>
    <h3 style="text-align: center;">Orders</h3>
    <table class="book">
       <tr>
        <th>Name</th>
        <th>Email</th>
       </tr>
       <?php foreach ($registration_data as $rec) { ?>
        <tr>
            <td><?php echo $rec['fullname']; ?></td>
            <td><?php echo $rec['email']; ?></td>
        </tr>
       <?php } ?>
    </table>
    <table class="book">
       <tr>
        <th>Food</th>
        <th>Price</th>
       </tr>
       <?php foreach ($foods_data as $rec) { ?>
        <tr>
            <td><?php echo $rec['name']; ?></td>
            <td><?php echo $rec['price']; ?></td>
        </tr>
       <?php } ?>
    </table>
    <table class="book">
       <tr>
        <th>Street</th>
        <th>House</th>
        <th>City</th>
        <th>Post Code</th>
        <th>Phone</th>
       </tr>
       <?php foreach ($deliveryAddress as $rec) { ?>
        <tr>
            <td><?php echo $rec['street']; ?></td>
            <td><?php echo $rec['house']; ?></td>
            <td><?php echo $rec['city']; ?></td>
            <td><?php echo $rec['postcode']; ?></td>
            <td><?php echo $rec['Phone']; ?></td>
        </tr>
       <?php } ?>
    </table>
</body>
</html>
