<html>
<?php

echo '<pre>';
// комментарий 1 строка

/* комментарий 2 абзац */

//</editor-fold desc="комментарий 3 особый">

$greetings = "🐘 - Hello!";
echo $greetings;

echo "<br>";
var_dump($greetings);

/* строгая конвертация */
echo "<br>";
$string = '10';
var_dump($string);
echo "<br>";
var_dump((int)$string);
echo "<br>";

//</editor-fold desc="массивы">

$array = [10, 1.2, true, 'priva)'];
var_dump($array);
echo "<br>";
echo $array[0];
echo "<br>";
var_dump($array[0]);
echo "<br>";

print_r($array);
echo "<br>";

//</editor-fold desc="конкатенация сложение строк">

$age = 24;
$name = 'Nik';
$user = $age . ' ' . $name;
print_r($user);
echo "<br>";

//</editor-fold desc="константы">

define('PI', 3.14);
var_dump(PI);
echo "<br>";

//<editor-fold desc="Арифметика">
$a = 2;
$b = 3;

$sum = $a + $b;
var_dump($sum);
echo '<br>';

$defference = $a - $b;
var_dump($defference);
echo '<br>';

$product = $a * $b;
var_dump($product);
echo '<br>';

$quantity = $a / $b;
var_dump($quantity);
echo '<br>';

$remainder = $b % $a;
var_dump($remainder);
echo '<br>';

//<editor-fold desc="Логические операции">
//ИЛИ, НЕ, И

//Что такое if
$bool = false;
$wallet = 130;
$order = 120;
var_dump($wallet < $order);
if ($wallet < $order) {
    echo 'У нас не достаточно деняг';
}
echo '<br>';
//ИЛИ
$wallet = 100;
$order = 120;
$bonus = 30;
//false || true
if ($wallet > $order || ($wallet + $bonus) > $order) {
    echo 'денег хватает';
}
echo '<br>';

//И
$wallet = 130;
$order = 120;
$date = 30;
//true && true
if ($wallet > $order && $date === 30) {
    echo 'можем заказать';
}
echo '<br>';

//И
$wallet = 130;
$order = 120;
$date = 30;
$bool = false;
$test = !$bool;
$test_wallet = $wallet < $order;
//true && true && false->(!)true
if (!$test_wallet && $date !== 6 && !$bool) {
    echo 'можем заказать 2';
}
echo '<br>';
//</editor-fold>

?>
</html>
