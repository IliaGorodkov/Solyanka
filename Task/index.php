<?php   
session_start();

if(isset($_POST['name'])){

    $_SESSION['name'] = $_POST['name'];
    
        
}
?>



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  rel="stylesheet" href="style/style.css" >
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Задание</title>
</head>

<body>
<div id="body">
<h1 >
<strong>
ЛОГО
</strong>
</h1>

<div  id="client_block">

<?php

if($_SESSION){
    
echo "<img src='img/Avatar.png' style='width: 50px; height: 50px;'>".'Привет '.$_SESSION['name'].'!';/* Вывод имени пользователя */
  
}


?>
</div >

<div><a class="floating-box task_one" href="Task_one.php">Задание 1</a></div>
<div><a class="floating-box task_two" href="Task_two.php">Задание 2</a></div>
<div><a class="floating-box task_three" href="Task_three.php">Задание 3</a></div>
<div><a class="floating-box task_four" href="Task_four.php">Задание 4</a></div><br>
</div>



</body>
</html>



