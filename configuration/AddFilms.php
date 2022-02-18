<?php
    $TitleFilm = $_POST['InpTitleFilm'];
    $TitleGenre = $_POST['InpTitleGenre'];
    if (($TitleFilm == '') or ($TitleGenre == '')) {
        echo 'Введите запись';
        exit();
    }

    require 'ConfigDB.php';

    $sql = 'INSERT INTO Films(Title, Genre) VALUE (:TitleFilm, :TitleGenre)';
    $query = $pdo->prepare($sql);
    $query->execute(['TitleFilm'=> $TitleFilm, 'TitleGenre'=> $TitleGenre]);

    header('Location: http://localhost:63342/Films/AddPage.php');
