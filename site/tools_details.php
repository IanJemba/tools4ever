<?php
require 'database.php';

$id = $_GET['id'];
$sql = " SELECT * FROM tools where tool_id  = $id";
$result = mysqli_query($conn, $sql);
$tools = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>

<body>
    <h1><?php echo $tools['tool_id'] ?>. <?php echo $tools['tool_name'] ?></h1>
    <p><?php echo $tools['tool_category'] ?></p>
    <p><?php echo $tools['tool_price'] ?></p>
    <p><?php echo $tools['tool_brand'] ?></p>



</body>

</html>