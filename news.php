<?php

echo('<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>News</title>
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
            </div>
    </header>

    <main class="content">
        <div class="news_body">
            <h2 class="content_title">Добро пожаловать. 
                    </br>Здесь вы узнаете немного больше обо мне. Присаживайтесь поудобнее, начинаем.</h2>
                    <div class="wrapper">
                    
                    ');

                   


$dbConnect = mysqli_connect("localhost", "root", "", "altshu_final_project");
mysqli_query($dbConnect, "SET NAMES 'UTF8'");


$querySelectAll = "SELECT * FROM news";
$result = mysqli_query($dbConnect, $querySelectAll);

                
                    while ($newsAboutMe = mysqli_fetch_array($result)) {
                        echo('
                        <div class="card">
                        <span class="card__img">
                        <img class="card__img" src="'. $newsAboutMe['image_url'] . '" alt="фото">');
                        echo('</span>');
                        echo('<div class="card__content">');
                        echo('<h3 class="card__title">');
                        echo('<a href="./oneNew.php?id=' . $newsAboutMe['id'] .'">' . $newsAboutMe['title'] . "</a>");
                        echo('</h3>');
                        echo('<p class="card__description">');
                        echo($newsAboutMe['description']);
                        echo("</p>");
                        echo('</div>
                        </div>
                        ');
                        };
                    echo('
                    </div>
                    </div>
                    </main>
        </body>
        </html>
                    ');

                    ?>

                    
                        
                           
