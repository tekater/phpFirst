<?php
// Однострочный комментарий

/*
Многострочный Комментарий
*/

$userName = "Eugene"; // Создание переменной

echo "<h1 style = 'color: red'> Hello $userName </h1> <br>"; // Вывод



echo "Вывод строк:<br>";
echo 'hello $userName'; 


echo '<br>'; // перенос строки

echo "hello $userName <br>"; // точка с запятой обязательна

echo "<br>"; // перенос строки



// Типы данных

$var = null;
$myBool = True; // Boolean



echo "Логическая переменная:<br>";
echo "Boolean - $myBool <br>";

echo "<br>";



echo "Конкантенация:<br>";
echo "hello ".$userName."<br>"; //Конкантенация - сложение строк через точку
echo "2+2=".(2+2); // Конкатенация с вычислением

echo "<br>";



// a**b - возведение в степень 
// ===  - сравнивает типы данных

// <=>  - оператор сравнивает значения слева и справа от себя
//        Возвращает:
//                   0  если оба равны
//                  -1  слева меньше
//                   1  справа меньше
echo "4<=>1=".(4<=>1)."<br>";



echo "<br>Условные операторы:<br>";

$num = 12;

if($num > 0)
{
    echo "$num больше нуля";
}
else if($num < 0)
{
    echo "$num меньше нуля";
}
else if($num == 0)
{
    echo "$num равен нулю";
}
else
{
    echo "$num видать не число :P";
}
echo "<br>";

//Варианты преобразования типов:
// if(0)
// 0    = false
// -0.0 = false
// 1    = true
// -1   = true
// ""   = false
// " "  = true
// null = false

//Тернарный оператор
echo "<br>Тернарный оператор:<br>";
echo '$res = $num > 0 ? true : false <br>';
$res = $num>0 ? true : false;
echo $res;



//
echo "<br><br>Калькулятор:<br>";
$a = 5;
$b = 10;

$operator = "*";

switch($operator)
{
    case "+":
        echo $a." + ".$b." = ".$a+$b;
        break;
        case "-":
            echo $a." - ".$b." = ".$a-$b;
            break;

        case "*":
            echo $a." * ".$b." = ".$a*$b;
            break;
        case "/":
            echo $a." / ".$b." = ";
            if($a != 0 || $b !=0 )
            {
                echo $a/$b;
            }
            break;

}
