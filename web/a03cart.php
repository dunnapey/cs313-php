<?php
    session_start();
    $cost = 0.00;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="a03.css">
</head>

<body>
    <h1>My Shopping Cart</h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php
            foreach ($_SESSION['cart'] as $item => $price) {
                echo "<tr><td>$item</td><td>$price</td></tr>";
                $cost += $price;
            }
        ?>
    </table>

    <h2>TOTAL COST: <?php echo $cost; ?></h2>
</body>

</html>