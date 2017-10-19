<?php


echo '<h1>Создание нового файла</h1>';

if (isset($_POST['text'])) {
    $filename = $_POST['name'];
    $text = $_POST['text'];
    file_put_contents('files/'.$filename,$text);
    echo 'Файл <b>'.$filename.'</b> создан.<br>';
    echo '<a href="?page=edit.php&file='.$filename.'" style="float: right; margin: 0 5px;" class="btn btn-primary">редактировать</a>';
    echo '<hr>';
} else {
    echo '<form action="?page=fopen.php" method="post">';
    echo '<input name="name" style="width: 200px; height: 30px;" type="text" class="form-control" placeholder="new.php">';
    echo 'Наименование файла должно быть латиницей<br>';
    echo '<textarea name="text" style="height: 100px; width: 30%">';
    echo '</textarea>';
    echo '<input type="submit">';
    echo '</form>';
}




