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
echo "<br>";

// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
// Обязательно использовать оператор return. 
// В делении проверьте деление на 0 и верните текст ошибки.

function sum ($a, $b) {
    return $a + $b;
}

function minus ($a, $b) {
    return $a - $b;
}

function mult ($a, $b) {
    return $a * $b;
}

function div ($a, $b) {
    if ($b == 0) {
        return "На ноль делить нельзя";
    }
    return $a - $b;
}

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) 
// и вернуть полученное значение (использовать switch).

function mathOperation($a, $b, $operation) {
    switch ($operation) {
        case "sum": return sum($a, $b);
        case "minus": return minus($a, $b);
        case "mult": return mult($a, $b);
        case "div": return div($a, $b);
        default: return "Неизвестная оперция";
    }
}

$a = 2; $b = 3;
echo "{$a} + {$b} = " . mathOperation($a, $b, 'sum') .  "<br>";
echo "{$a} - {$b} = " . mathOperation($a, $b, 'minus') .  "<br>";
echo "{$a} * {$b} = " . mathOperation($a, $b, 'mult') .  "<br>";
$a = 6; $b = 3;
echo "{$a} / {$b} = " . mathOperation($a, $b, 'div') .  "<br>";
echo "{$a} / 0 = " . mathOperation($a, 0, 'div') .  "<br>";
echo "{$a} ? {$b} = " . mathOperation($a, $b, '?') .  "<br>";
