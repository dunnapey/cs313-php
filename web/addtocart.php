<?php
    session_start();

    if(isset($_POST['add']) & !empty($_POST['add']))
    {
        $item = $_POST['add'];
        array_push($_SESSION['cart'], $item);
    }

    function addItem($name, $price) {
        array_push($items, $name => $price);
    }
?>