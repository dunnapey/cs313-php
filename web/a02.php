<?php

$dateData = getDate();

$date = "$dateData[mday] $dateData[month] $dateData[year]";

echo
"<!DOCTYPE html>
<html>

<head>
    <title>ABOUT ME!</title>
    <link rel='stylesheet' type='text/css' href='a02.css'>
</head>

<body>
    <div id='head'>
    <a href='index.html' id='back'><</a><h1>ABOUT ME</h1>
    </div>

    <span id='date'>$date</span>

    <p>
        My name is Peyton Dunnaway and I'm a software engineering major. I'm a Junior and am actively seeking internship opportunities for the coming year. Having dealt mostly with C++ in most of my programming classes, I'm always excited to dive more into Web Development.<br><br>
        I'm originally from Georgia, and lived in Kansas while in High School. I served a mission in Fresno, California, speaking Hmong (from Thailand area).<br><br>
        I got married over the summer and am super excited to begin life with my lovely wife! We love the outdoors, eating good food, binging some Netflix, and going to the Temple!<br><br>
    </p>

    <ul>
        <h2>Get to Know Me:<h2>
        <li><a href='https://www.linkedin.com/in/peyton-dunnaway'><img alt='LinkedIn' id='linkedin' src='assets/linkedin.png'></a></li>
        <li><a href='https://github.com/dunnapey/myPortfolio'><img alt='GitHub' id='github' src='assets/github.png'></a></li>
        <li><a href='https://www.facebook.com/peyton.dunnaway'><img alt='Facebook' id='facebook' src='assets/facebook.png'></a></li>
    </ul>

    <div class='us'>
        <img src='assets/us.jpg' alt='Me and Wife'>
        <img src='assets/us.jpg' alt='Me and Wife'>
        <img src='assets/us.jpg' alt='Me and Wife'>
        <img src='assets/us.jpg' alt='Me and Wife'>
        <img src='assets/us.jpg' alt='Me and Wife'>
        <span class='us'>Me and my wife, Emily</span>
    </div>
</body>

</html>";

?>