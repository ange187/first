<?php
/* Задание 1. Вывести с помощью echo, переменных, имя и возраст. Каждая фраза с новой стороки*/
    echo "//Задание 1 переменные<br>";
	$name = "Vika";
	$age = 30;
	echo "Моё имя: ".$name;
	echo "<br>";
	echo "Мне ".$age." лет";
    echo "<br><br>";

/*Задание 2. Вывести с помощью echo, переменных, имя и возраст. Удалить $age2 */
    echo "//Задание 2 <br>";
    $name2 = "Вика";
    $age2 = "";
    echo "Меня зовут: ".$name2."<br>";
    echo "Мне ".$age2." лет";
    /*Задачка посложнее
    $name2 = array ('Vika','Anton','Люся');
    $age2 = array (30,20,25);
    print_r($name2[0]." Мне лет: ".$age2[0]);
    echo "<br>";
    $a = array(2,4);
    echo "<br>";
    print_r($name2);
    echo "<br>";
    print_r($age2);*/
    echo "<br><br>";

/*Задание 3. Создать константу, проверить существует ли она, изменить значение.*/
    echo "//Задание 3 константы";
    define("Vika",1987);
    if(defined("Vika")) echo "<br>Константа Vika объявлена";
    echo "<br>Значение константы ";
    echo constant("Vika");
    define("Vika", 1988);
    echo "<br>".constant("Vika")." = Значение не поменялось";
    echo "<br><br>";

/*Задание 4. Конструкция с if elseif else */
    echo "//Задание 4 условия:<br>";
    $age4 = 100;
    if (18 <= $age4 && $age4 <= 65){
        echo "Если вам лет ".$age4." то: ";
        echo "Вам еще работать и работать";
    } elseif (65 <= $age4 && $age4 <= 110){
        echo "Если вам лет: ".$age4." то: ";
        echo "Вам пора на пенсию";
    } elseif (17 >= $age4 && $age4 > 0){
        echo "Если вам лет: ".$age4." то: ";
        echo "Вам еще рано работать”";
    } else {
        echo "Неизвестный возраст";
    }
    echo "<br><br>";

/*Задание 5. Конструкция switch case*/
    echo "//Задание 5 switch case<br>";
    $day = 6;
    switch ($day){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "День: ".$day." - это рабочий день, иди работай дальше"; break;
        case 6:
        case 7:
            echo "День: ".$day." - выходной день, возьми печеньку и расслабься"; break;
        default:
            echo "Не известный день"; break;
    }
    echo "<br><br>";

/*Задание 6. Ассоциативный массив с элементами. Выведите значения всех трех массивов. */
    echo "//Задание 6  ассоциативные массивы:<br>";
    $car["bmv"] = array(
        "model" => "X5",
        "speed" => "120",
        "doors" => "5",
        "year" => "2015"
    );
    $car["toyota"] = array(
        "model" => "5",
        "speed" => "120",
        "doors" => "3",
        "year" => "2017"
    );
    $car["opel"] = array(
        "model" => "3",
        "speed" => "120",
        "doors" => "5",
        "year" => "2010"
    );
    $name = "opel";
    echo $name." ".$car[$name]["model"]." ".$car[$name]["speed"]." ".$car[$name]["doors"]." ".$car[$name]["year"];
    echo "<br>";
    $name = "bmv";
    echo $name." ".$car[$name]["model"]." ".$car[$name]["speed"]." ".$car[$name]["doors"]." ".$car[$name]["year"];
    echo "<br>";
    $name = "toyota";
    echo $name." ".$car[$name]["model"]." ".$car[$name]["speed"]." ".$car[$name]["doors"]." ".$car[$name]["year"];
    echo "<br>";
   // print_r($car[$name]);