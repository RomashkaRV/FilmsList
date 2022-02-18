<?php
    require 'ConfigDB.php';

    $id = $_GET['id'];

    $sql = 'DELETE FROM `Films` WHERE `id` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header('Location: http://localhost:63342/Films/index.php?_ijt=25r1vsreou7st50p0mivkke82h&_ij_reload=RELOAD_ON_SAVE');