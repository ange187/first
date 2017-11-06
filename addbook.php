<?php
    require_once('lib.php');
    $pdo = connect();


    $sql = 'INSERT INTO book (name) VALUES (?)';
    $stmt = $pdo->prepare($sql);
    $r = $stmt->execute(array('Новая книга'));
    $id = $pdo->lastInsertId();



echo "Добавлена новая книга";
echo '<div class="col-sm-4"> <a href="/?page=changebook.php&id='.$id.'" style="float: left; margin: 0 5px;" class="btn btn-primary">Редактировать новую книгу</a><a href="/" style="right: left; margin-bottom: 10px;" class="btn btn-primary">Вернуться</a></div>';
echo '<div class="col-sm-8"></div>';