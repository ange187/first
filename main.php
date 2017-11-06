 <section id="info">        
    <div class="zig-zag container">
        <style scoped>
            .zig-zag h2 {
                margin-top: 10px;
        </style>
        <div class="row">
            <div class="col-md-6">
                <img src='assets/images/akita.jpg' class="serv flex fadeInUp animated animated" alt="Flexible" />
            </div><!--end col-md-7-->
            
            <div class="col-md-5 col-md-push-1">
                <h2 class="flex fadeInUp animated animated">Работа с php</h2>
                <p class="flex fadeInUp animated animated">
                    Домашнее задание No1. Необходимо сверстать простые странички и реализовать следующий функционал:<br>
                    - на странице находится список файлов, которые находятся вспециальной директории вашего сайта (например files);<br>
                    - при клике по названию файла, открывается страница, накоторой можно просмотреть текст данного файла;<br>
                    - на странице со списком   файлов, напротив названия каждого файла, имеются ссылки  которые ведут на страницы
                    редактирования иудаления данного файла;<br>
                    - в самом верху страницы также имеется ссылка, которая ведетна страницу добавления файла На ней вы можете указывать
                    имя будущего файла, а также вести содержимое файла;
                </p>
                <a href="/?page=services.php" title="See more" class="more">Посмотреть решение&nbsp;<i class="fa fa-angle-right"></i></a>
            </div><!--end col-md-5--> 
            
        </div><!--end row-->
        <section id="plan">
            <div class="container">
                <div style="padding-top: 50px;" class="title">

                    <h2 class="flex fadeInUp animated animated">Книги</h2>
                    <p class="description flex fadeInUp animated animated">Специальное предложение</p>
                    <a href="/?page=addbook.php" style="float: left; margin: 0 5px;" class="btn btn-primary">добавить</a>
                </div><!--end title-->
                <div class="row">
                 <?php
                 require_once('lib.php');
                 $pdo = connect();

                 $sql = 'SELECT * FROM book';
                 $stmt = $pdo->query($sql);
                 $list = $stmt->fetchAll();


                 foreach ($list as $key => $value) {

                     echo '<a href="/?page=book.php&id='.$value['id_book'].'"><div class="price-table col-sm-3 flex fadeInUp animated" data-wow-delay="0.1s"><style>.price-table:hover{margin-top: 0px}</style><i class="fa fa-user"></i>';
                     echo '<h6>'.$value['author'].'</h6><span class="dollar">&#8381;</span>';
                     echo '<span class="price">'.$value['book_price'].'</span>';
                     echo '<ul class="features">';
                     echo '<li>'.$value['name'].'</li>';
                     echo '</ul></div></a>';
                 }
                 ?>
                </div>
            </div><!--end container-->
        </section><!--end plan-->
    </div><!--end zig-zag-->


    </section><!--end info-->