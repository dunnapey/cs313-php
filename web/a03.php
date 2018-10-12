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
        <form action="addtocart.php" method="post">
            <div class="item">
                <h3>Ark of the Covenant</h3>
                <img src="assets/ark1.jpg">
                <?php echo "<span>Price - \$$ark</span>"; ?>
                <input type="submit" name="add" value="ark">Add to Cart</input>
            </div>
            <div class="item">
                <h3>Invisibility Cloak</h3>
                <img src="assets/cloak.png">
                <button name="add" value="cloak">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Old Cursed Diary</h3>
                <img src="assets/diary.jpg">
                <button name="add" value="diary">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Best Costume Ever</h3>
                <img src="assets/dino.jpg">
                <button name="add" value="dino">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Mobile Radiation Sensor</h3>
                <img src="assets/geiger.jpg">
                <button name="add" value="geiger">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Evil Crystal Ball</h3>
                <img src="assets/orb.jpg">
                <button name="add" value="orb">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Brass Plates</h3>
                <img src="assets/plates.jpg">
                <button name="add" value="plates">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Shiny Precious</h3>
                <img src="assets/ring.jpg">
                <button name="add" value="ring">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Awesome Laser Sword</h3>
                <img src="assets/saber.png">
                <button name="add" value="saber">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Weird Alien Skull</h3>
                <img src="assets/skull.jpg">
                <button name="add" value="skull">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Seer Stone</h3>
                <img src="assets/stone.jpg">
                <button name="add" value="stone">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Bacon-Flavored Toothpaste</h3>
                <img src="assets/toothpaste.jpg">
                <button name="add" value="toothpaste">Add to Cart</button>
            </div>
        </form>
    </div>
</body>

</html>