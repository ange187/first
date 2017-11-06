<?php
    require_once('lib.php');
    $pdo = connect();

    $sql = 'SELECT author, name, description, book_price FROM book WHERE id_book='.$_GET["id"];
    $stmt = $pdo->query($sql);
    $book = $stmt->fetch();

?>
    <div class="zig-zag container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="flex fadeInUp animated animated"><?php echo $book['author'];?></h2>
                <h4>Описание</h4>
                <p class="flex fadeInUp animated animated"><?php echo $book['description'];?>
                </p>
                <span class="price">Цена : <?php echo $book['book_price'];?>&#8381;</span>
            </div><!--end col-md-5-->

            <div class="col-md-6 col-md-offset-1">
                <img src='/assets/images/9.jpg' class="serv flex flipInX animated" alt="Flexible" />
            </div><!--end col-md-5-->

        </div><!--end row-->
    </div>
    <a href="/?page=changebook.php&id=<?php echo $_GET["id"];?>" style="float: left; margin: 0 5px;" class="btn btn-primary">Редактировать</a>
    <a href="/" style="right: left; margin-bottom: 10px;" class="btn btn-primary">Вернуться</a>
    <a href="/?page=deletebook.php&id=<?php echo $_GET["id"];?>" style="right: left; margin-bottom: 10px;" class="btn btn-primary">Удалить</a>
