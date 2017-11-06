<?php
    require_once('lib.php');
    $pdo = connect();


    $sql = 'DELETE FROM book WHERE id_book =?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($_GET['id']));
    echo "Успешно удалено"

?>
<div class="col-sm-4">
    <a href="/" style="right: left; margin-bottom: 10px;" class="btn btn-primary">На главную</a>
</div>