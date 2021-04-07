<?php

session_start();
require('index.php');



if(isset($_POST['name'])){

$_SESSION['name'] = $_POST['name'];

    
}


?>
<link  rel="stylesheet" href="style/style.css" >



<div  id="form">
<body id="task_two">
<h2>Авторизация</h2>

<form action="Task_one.php" method="post" >

<input type="text" id="name" name="name" required placeholder="Введите Ваше Имя"><br><br>

<button>Отправить</button>
</form><br>



</body>
</div>


<?php
require('footer/footer.php');

?>