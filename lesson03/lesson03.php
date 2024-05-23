<?php   
header('Content-Type: text/html; charset=utf-8');

// 1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
echo "Задача 1<br>";
$i = 0;
while ($i <= 100) {
    if (($i % 3) == 0) {
        echo  $i . " ";
    }
    $i++;
}
echo "<br>";

// 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
//     0 – ноль.
//     1 – нечетное число.
//     2 – четное число.
//     3 – нечетное число.
//     …
//     10 – четное число.
echo "Задача 2<br>";
$i = 0;
do {
    if ($i == 0) {
        echo "0 – ноль.<br>";
    } elseif (($i % 2) == 0) {
        echo "{$i} – четное число.<br>";
    } else {
        echo "{$i} – нечетное число.<br>";
    }
    $i++;
} while ($i <= 10);
echo "<br>";


// 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
// а в качестве значений – массивы с названиями городов из соответствующей области. 
// Вывести в цикле значения массива, чтобы результат был таким:
//     Московская область:
//     Москва, Зеленоград, Клин.
//     Ленинградская область:
//     Санкт-Петербург, Всеволожск, Павловск, Кронштадт.
//     Рязанская область … (названия городов можно найти на maps.yandex.ru) строго соблюдать формат вывода выше, т.е. двоеточие и точка в конце
echo "Задача 3<br>";
$geo["Московская область"] = array("Москва", "Зеленоград", "Клин");
$geo["Ленинградская область"] = array("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт");
$geo["Рязанская область"] = array("Рязань", "Касимов", "Скопин");

foreach ($geo as $region => $towns) {
    echo "{$region}:<br>";
    $tows_array = array();
    foreach ($towns as $town) {
        $tows_array[] = $town;
    }
    echo implode(", ", $tows_array) . ".<br>";
}
