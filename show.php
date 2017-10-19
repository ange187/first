<?php
$filename = $_GET['file'];
$code = file_get_contents('files/'.$filename);
$text = htmlentities($code);
echo '<h1>Файл '.$filename.'</h1>';
echo '<pre>';
echo $text;
echo '</pre>';

