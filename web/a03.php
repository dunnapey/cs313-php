<?php
    session_start();

    $ark = 100000;
    $cloak = 50000;
    $diary = 8000;
    $dino = 500;
    $geiger = 4000;
    $orb = 70000;
    $plates = 80000;
    $ring = 30000;
    $saber = 40000;
    $skull = 20000;
    $stone = 10000;
    $toothpaste = 1000000;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rare Artifacts Shop</title>
    <link rel="stylesheet" type="text/css" href="a03.css">
</head>

<body>
    <div id="head">
        <h1>Rare and Interesting Artifacts for Sale</h1><br>
        <a href="a03cart.php">My Cart</a>
    </div>

    <div id="main">
        <div class="item">
            <h3>Ark of the Covenant</h3>
            <img src="assets/ark1.jpg">
            <?php echo "<span>Price - \$$ark</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="ark">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Invisibility Cloak</h3>
            <img src="assets/cloak.png">
            <?php echo "<span>Price - \$$cloak</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="cloak">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Old Cursed Diary</h3>
            <img src="assets/diary.jpg">
            <?php echo "<span>Price - \$$diary</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="diary">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Best Costume Ever</h3>
            <img src="assets/dino.jpg">
            <?php echo "<span>Price - \$$dino</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="dino">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Mobile Radiation Sensor</h3>
            <img src="assets/geiger.jpg">
            <?php echo "<span>Price - \$$geiger</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="geiger">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Evil Crystal Ball</h3>
            <img src="assets/orb.jpg">
            <?php echo "<span>Price - \$$orb</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="orb">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Brass Plates</h3>
            <img src="assets/plates.jpg">
            <?php echo "<span>Price - \$$plates</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="plates">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Shiny Precious</h3>
            <img src="assets/ring.jpg">
            <?php echo "<span>Price - \$$ring</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="ring">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Awesome Laser Sword</h3>
            <img src="assets/saber.png">
            <?php echo "<span>Price - \$$saber</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="saber">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Weird Alien Skull</h3>
            <img src="assets/skull.jpg">
            <?php echo "<span>Price - \$$skull</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="skull">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Seer Stone</h3>
            <img src="assets/stone.jpg">
            <?php echo "<span>Price - \$$stone</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="stone">Add to Cart</input>
            </form>
        </div>
        <div class="item">
            <h3>Bacon-Flavored Toothpaste</h3>
            <img src="assets/toothpaste.jpg">
            <?php echo "<span>Price - \$$toothpaste</span>"; ?>
            <form action="addtocart.php" method="post">
                <input type="submit" name="add[]" value="toothpaste">Add to Cart</input>
            </form>
        </div>
    </div>
</body>

</html>