<?php   
header('Content-Type: text/html; charset=utf-8');
// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
// Затем написать скрипт, который работает по следующему принципу:

// если $a и $b положительные, вывести а и б положительные;
// если $а и $b отрицательные, вывести а и б отрицательные;
// если $а и $b разных знаков, вывести а и б разных знаков;

// Ноль можно считать положительным числом.

$a = -10;
$b = -5;

if ($a >= 0 && $b >= 0) {
    echo "a и b положительные";
} elseif ($a < 0 && $b < 0) {
    echo "a и b отрицательные";
} else {
    echo "a и b разных знаков";
}
echo "<br>";

// 2. Присвоить переменной $а значение в промежутке [0..15]. 
// С помощью оператора switch организовать вывод чисел от $a до 15. 
// При желании сделайте это задание через рекурсию.

$a = rand(0, 15);

function print_from_parameter_to_15($a) {
    switch ($a) {
        case 1: echo "1<br>"; break;
        case 2: echo "2<br>"; break;
        case 3: echo "3<br>"; break;
        case 4: echo "4<br>"; break;
        case 5: echo "5<br>"; break;
        case 6: echo "6<br>"; break;
        case 7: echo "7<br>"; break;
        case 8: echo "8<br>"; break;
        case 9: echo "9<br>"; break;
        case 10: echo "10<br>"; break;
        case 11: echo "11<br>"; break;
        case 12: echo "12<br>"; break;
        case 13: echo "13<br>"; break;
        case 14: echo "14<br>"; break;
        case 15: echo "15<br>"; break;
    }
    if ($a < 15) {
        print_from_parameter_to_15($a + 1);
    }
}

print_from_parameter_to_15($a);
?>
