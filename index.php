<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Фильмы</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="header">
        <img class="imgRom" src="src/Romashka.png">
        <h1 class="Title">Фильмы</h1>

    </header>
    <div class="MainAction">
        <b class="NameSpisok">Название фильма</b>
        <b class="NameGenre">Жанр</b>

        <div class="Spisok">
                <?php
                    require 'configuration/ConfigDB.php';

                    echo '<ul class="SpisokFilm">';
                    $query = $pdo->query('SELECT F.id, F.Title as FilmTitle, G.Title FROM Films F, Genre G WHERE G.id=F.Genre');
                    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                        echo '<li class="TitleFilmLi"><b>'.$row->FilmTitle.'</b></li>';
                        echo '<li class="TitleGenreLi"><b>'.$row->Title.'</b><a href="configuration/DeleteFilm.php?id='.$row->id.'"><img src="src/remove.png" class="ImgDel"></a>
                              <a href="#popup?id='.$row->id.'"><img src="src/exchange.png" class="ImgChange"></a></li>';
                    }
                    echo '</ul>';
                ?>
        </div>
    </div>
    <div class="MainMenu">
        <ul>
            <li style="color: darkgray">Фильмы</li>
            <li><a href="AddPage.php" style="text-decoration: none; color: whitesmoke">Добавить</a></li>
        </ul>
    </div>
</body>
</html>
