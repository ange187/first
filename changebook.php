<?php
    require_once('lib.php');
    $pdo = connect();

    if (isset($_POST["name"])) {

        $sql = "UPDATE book SET author = ?, name = ?, description = ?, book_price = ? WHERE id_book = ?";
        $stmt = $pdo->prepare($sql);
        $r = $stmt->execute(array($_POST['author'], $_POST['name'], $_POST['description'], $_POST['book_price'], $_GET['id']));
        if ($r) echo 'Зарпрос выполнен';
        else echo 'Что-то не так';

    }
    $sql = 'SELECT author, name, description, book_price FROM book WHERE id_book='.$_GET["id"];
    $stmt = $pdo->query($sql);
    $book = $stmt->fetch();


?>
<div class="col-sm-6">
    <form action="?page=changebook.php&id=<?php echo $_GET['id'];?>" method="post">
        <div class="form-group">
            <label for="formbookauthor">Автор</label>
            <input name="author" type="text" class="form-control" id="formbookauthor" value="<?php echo $book['author'];?>">
        </div>
        <div class="form-group">
            <label for="formbookname">Название</label>
            <input name="name" type="text" class="form-control" id="formbookname" value="<?php echo $book['name'];?>">
        </div>
        <div class="form-group">
            <label for="formbookadescr">Краткое описание</label>
            <textarea name="description" class="form-control" rows="8" " id="formbookadescr"><?php echo $book['description'];?></textarea>
        </div>
        <div class="form-group">
            <label for="formbookaprice">Цена в рублях</label>
            <input name="book_price" type="text" class="form-control" id="formbookaprice" value="<?php echo $book['book_price'];?>">
        </div>
        <input type="submit">
    </form>


</div>
<div class="col-sm-6">
    <a href="/" style="right: left; margin-bottom: 10px;" class="btn btn-primary">Вернуться</a>
</div>
