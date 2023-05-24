<?php




require 'database.php';




// var_dump($_SERVER["REQUEST_METHOD"]);




// die;




if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    exit;
}

include '405.php';


$naam = $_POST['naamProduct'];

$categorie = $_POST['categorieProduct'];

$prijs = $_POST['prijsProduct'];

$merk = $_POST['merkProduct'];




$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand)

VALUES ('$naam', '$categorie', '$prijs', '$merk')";




if (mysqli_query($conn, $sql)) {

    header("location: tools-overzicht.php");

    exit;
}
