<?php
session_start();
require('index.php');



?>



<style>

.img{
    
    background-image: url("img/background_image.jpg");

    width: 68%;
    transform: translate(200px);
    height: 400px;
    left: 50%;
}

.text{
   
   padding:  20px 5%;
}


article button {
border: 1px;
color: white;
background-color:rgb(255,114,109);
padding: 10px 24px;
}
.text_position{
text-align: center;
}

.card{
  width: 23%;
  margin-left: 1%;
}


p{
 padding: 5px 0;

}



li {
    color: red;
}

li span {
    color: navy;
}


.Task_box{
    float: left;

    margin-right: 5%;

}

.inline{
  
    display: inline-block;	
}



.margin{
margin: 0 6%;

}




</style>
<body id="task_one">
<section class="img" >


<article class="text">
<h1>
Стажировка это Круто!   
</h1>


<div>

<p >&mdash; работа в команде;</p>
<p >&mdash; реальные Проекты;</p>
<p >&mdash; оплачиваемая стажировка;</p>
<p >&mdash; перспективная отросоль;</p>


<button>
ПОДРОБНЕЕ
</button>


</div>

</article>

</section>

<div id="body">
<h2 >
Свободные Вакансии
</h2>

<div class="d-flex flex-wrap ">
    <?php
     for ($i = 0; $i < 4;$i++):/*указываем количество столбцов*/
    ?>
    <div class="card mb-5 shadow-sm ">
     <div class="card-header ">
      <h4 class="my-4 font-weight-normal text_position">Программист</h4>
     </div>
    <div class="card-body ">
         <img class='container' src= " img/<?php  echo ($i + 1) ?>.jpg" class="img-thumbnail" >
       <ul class="list-unstyled mt-1 mb-3 text_position">

         <li><span>Верстка макета,<br>Интеграция сайта,<br>Программирование</span></li>

       </ul>
       <button class="btn btn-lg btn-block btn-outline-primary">Оставить Заявку</button>
    </div>
   </div>
  <?php endfor;?>
</div>
</div>

<div  class="inline margin">
<h5  >
Мы готовы вам предложить:
</h5>

<ul>
   <li><span>Обучение под руководством опытного наставника;</span></li>
   <li><span>Дружелюбный коллектив;</span></li>
   <li><span>Возможность проффессионального и карьерного роста в ИТ-компании;</span></li>
   <li><span>Официальное трудоустройство;</span></li>
</ul>

</div>
<div class="inline ">



<h5 id="body" >
Мы Ждем от вас:
</h5>

<ul>
   <li><span>Желание и умение обучаться упорство и целеустремленность;</span></li>
   <li><span>Базовае знания PHP,JavaScript,MySQL,HTML и CSS;</span></li>
   <li><span>Начеленность на развитие и долгосрочное сотрудничество;</span></li>
   <li><span> Имеешь опыт веб-разработки;</span></li>
</ul>

</div>
</body>

<?php
require('footer/footer.php');

?>
