<?php
    session_start();
    if(isset($_SESSION['cart']) & !empty($SESSION['cart']))
    {
        $items = $SESSION['cart'];
        $cartitems = explode(",", $items);
        $_SESSION['cart'] = $items;
    }
?>