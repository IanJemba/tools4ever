<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw product</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1> Nieuwe product</h1>
    <form action="verwerken-nieuw-product.php" method="post">

        <div class="formgroep">
            <label for="naamProduct">Naam product</label>
            <input type="text" name="naamProduct" id="naamProduct">
        </div>

        <div class="formgroep">
            <label for="categorieproduct">Categorie product</label>
            <input type="text" name="categorieproduct" id="categorieproduct">
        </div>


        <div class="formgroep">
            <label for="prijsProduct">Prijs product</label>
            <input type="text" name="prijsProduct" id="prijsProduct">
        </div>

        <div class="formgroep">
            <label for="merkProduct">Merk product</label>
            <input type="text" name="merkProduct" id="merkProduct">
        </div>


        <button type="submit">Maak Nieuw Product</button>
</body>

</html>