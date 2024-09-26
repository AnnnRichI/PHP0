<?php
/*
 * Дана строка $str = 'abcdef'; 
 * напишите алгоритм, преобразующий строку 
 * в перевернутом виде чтобы echo $str; вывел fedcba
 */

$str = "hello";
$result = '';

for ($i = strlen($str) - 1; $i >= 0; $i--) {
    echo $str[$i];
}

echo $result;