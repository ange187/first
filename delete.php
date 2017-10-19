<?php

$filename = $_GET['file'];

if(file_exists('files/'.$filename)){
    unlink('files/'.$filename);
    echo "Фаил успешно удален";
} else {
    echo "Фаил не удален";
}






