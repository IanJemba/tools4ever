<?php
require 'database.php';

//de sql query
$sql = "SELECT * FROM tools";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

/**
 * Hier wordt het resultaat ($result) omgezet
 * in een *multidimensionale associatieve array
 * in dit voorbeeld staat $all_users maar dit mag
 * voor bijvoorbeeld producten $all_products heten.
 * Maar dit kies je zelf
 */
$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tools</title>
</head>

<body>
    <table>
        <th> Toolen Die Je Nodig Heb.</th>
        <?php foreach ($all_tools as $thing) : ?>
            <tr>
            <td><a href="tools_details.php?id=<?php echo $thing['tool_id'] ?>"><?php echo $thing['tool_id'] ?></a></td>
            <td><?php echo $thing['tool_name'] ?></td>
            <td><?php echo $thing['tool_category'] ?></td>
            <td><?php echo $thing['tool_price'] ?></td>
            <td><?php echo $thing['tool_brand'] ?></td>
            </tr>
        
        <?php endforeach ?>
    </table>
</body>

</html>