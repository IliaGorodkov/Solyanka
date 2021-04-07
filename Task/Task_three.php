<?php
session_start();
require('index.php');

?>



<link  rel="stylesheet" href="style/style.css" >
<div id="news_width">
<body id="task_three">
<h3>
Популярные Новости
</h3>






<button class="accordion">Невероятное спасение Котят</button>
<div class="panel">
  <p>Пожарные спасли котят из огня. </p>
</div>

<button class="accordion">Собака герой!</button>
<div class="panel">
  <p>Собака спасла женщину отогнав грабителя.</p>
</div>

<button class="accordion">Что будет если выпить сок на ночь?</button>
<div class="panel">
  <p>Сок очень полезен особенно на ночь,так он лучше усваивается</p>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}


</script>




</div>
</body>
<?php
require('footer/footer.php');

?>