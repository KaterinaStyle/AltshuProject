<?php

echo('<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>OnlyOne</title>
    <link rel="stylesheet" href="./Assets/css/styles.css">
    <link rel="stylesheet" href="./Assets/css/stylesMedia.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">

    </head>
<body>
    <header>
        <div class="top">
            <div class="blog">
                <button class="button"></button>    
                <p class="name">Блог Катерина Стайл</p>
            </div>

            <div class="navtop">
            <p class="navtoplist_item"><a href="./index.php">Главное меню</a></p>
            <p class="navtoplist_item"><a href="./news.php">Все новости</a></p>
            </div>
    </header>

    <main class="content">
        <div class="news_body">
        ');

        $dbConnect = mysqli_connect("localhost", "root", "", "altshu_final_project");
        mysqli_query($dbConnect, "SET NAMES 'UTF8'");
        
        
        $queryId = $_GET['id'];
        $queryString = "SELECT * FROM news WHERE id = $queryId";
        $result = mysqli_query($dbConnect, $queryString);

        $oneResult = mysqli_fetch_array($result);

                        echo('
                        <span class="card__img">
                        <img class="card__img" src="'. $oneResult['image_url'] . '" alt="фото">');
                        echo('</span>');
                        echo('<h3 class="card__title">');
                        echo($oneResult['title']);
                        echo('</h3>');
                        echo('</br>');
                        echo('<p class="card__description">');
                        echo($oneResult['text']);
                        echo("</p>");
                        


        echo('
        
        </div>
        </main>
</body>
</html>
        ');

        ?>