<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление</title>
    <link rel="stylesheet" href="css/AddPageStyle.css">
</head>
<body>
<header>
    <img class="imgRom" src="src/Romashka.png">
    <h1 class="Title">Добавление</h1>
</header>
<form action="configuration/AddFilms.php" method="post">
    <div class="MainAction">
        <b class="NameSpisok">Название фильма</b>
        <b class="NameGenre">Жанр</b>
        <input type="text" placeholder="Название фильма" class="InpTitleFilm" name="InpTitleFilm">
        <select class="InpTitleGenre" name="InpTitleGenre">
            <option value="1">Ужасы</option>
            <option value="2">Триллер</option>
        </select>
        <button type="submit" class="btnAdd">+</button>
    </div>
</form>
<div class="MainMenu">
    <ul>
        <li><a href="index.php" style="text-decoration: none; color: whitesmoke">Фильмы</a></li>
        <li style="color: darkgray">Добавить</li>
    </ul>
</div>
</body>
</html>


<?php
    require "configuration/ConfigDB.php";
    $sql = 'CREATE TABLE Films (id INT PRIMARY KEY NOT NULL IDENTITY , Title VARCHAR (30) NOT NULL, Id_Genre INT FOREIGN KEY REFERENCES Genre(id))'
?>