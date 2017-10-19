<?php
$filename = $_GET['file'];
echo '<h1>'.$filename.'</h1>';

if (isset($_POST['text'])) {
    file_put_contents('files/'.$filename,$_POST['text']);
    echo 'Фаил перезаписан';
    echo '<hr>';
} else {
    $data = file_get_contents('files/' . $filename);

    echo '<form action="?page=edit.php&file=' . $filename . '" method="post">';
    echo '<textarea name="text" style="height: 150px; width: 70%">';
    echo $data;
    echo '</textarea><br>';
    echo '<input type="submit">';
    echo '</form>';
}

