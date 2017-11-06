
<section id="services" class="container">
    <style scoped>
        .btn {
            padding: 5px 5px;
            font-size: 13px;
        }
        .btn-primary {
            background-color: #3499ef;
        }
        .list-group-item {
            padding: 8px 5px;
        }
        .title{
            margin-bottom: 20px;
        }
    </style>
    <div class="row">
        <div class="title">
            <h2 class="flex fadeInUp animated">Работа с файлами</h2>
            <p class="flex fadeInUp animated"><hr>
            </p>
        </div><!--end title-->
        <div class="col-md-offset-2 col-md-8">

            <?php
                function randir()
                {
                    $list = scandir("files/");
                    //$file = array();
                    echo '<p align="right"><a href="?page=fopen.php" class="btn btn-primary">создать файл</a></p>';
                    echo '<ul class="list-group">';
                    echo '<li class="list-group-item active">Ваш список</li>';
                    foreach ($list as $file) {
                        if ("." == $file || ".." == $file){
                            continue;
                        }
                        echo '<li class="list-group-item">';

                        echo '<a href="?page=show.php&file='.$file.'">'.$file.'</a>';
                        echo '<a href="?page=delete.php&file='.$file.'" style="float: right; margin: 0 5px;" class="btn btn-primary">удалить</a>';
                        echo '<a href="?page=edit.php&file='.$file.'" style="float: right; margin: 0 5px;" class="btn btn-primary">редактировать</a>';

                        //echo '<a href="?page=files/'.$file.'" style="float: right; margin: 0 5px;" class="btn btn-primary">выполнить</a>';

                        echo '</li>';
                    }
                    echo '</ul>';

                }
                $list = randir();
            ?>
            <?php
                echo "<a href='/csv/'>CSV</a><br/>";
                echo "<a href='/ini/'>INI</a><br/>";
                echo "<a href='/json/'>JSON</a><br/>";
                echo "<a href='/xml/'>XML</a><br/>";
            ?>

        </div>

    </div>
</section>