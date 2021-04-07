<?php
session_start();

require('index.php');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="style/style.css" >
    <title>Числа</title>
</head>


<style>


</style>
<div  id="num">
<body id="task_four">
<h2>Нам Пришло</h2>



<?php


/* Рандомные числа */
$one =rand($min = 0,$max = 100);
$two  =rand($min = 0,$max = 100);
$three  =rand($min = 0,$max = 100);
$four  =rand($min = 0,$max = 100);
$five  =rand($min = 0,$max = 100);
$six  =rand($min = 0,$max = 100);
$seven  =rand($min = 0,$max = 100);
$eight  =rand($min = 0,$max = 100);
$nine  =rand($min = 0,$max = 100);
$ten =rand($min = 0,$max = 100);


$array = [$q = $one,$w = $two,$e = $three,$r = $four,$t =$five,$y = $six,$u = $seven,$i = $eight,$o =$nine,$p = $ten];
rsort($array);/*Сортируем массив*/

foreach ($array as $value){
    echo ' '.$value;
    
};
echo"<hr>";


$three_maximum_values = ($array = array_slice($array,0,3));/* обрезаем массив */


echo 'Выводим 3 максимальных значения: ';
foreach ($three_maximum_values as $value){
echo ' '.$value;

};


?>



</html>
</body>
</div>
<?
require('footer/footer.php');

?>