<?php require 'header.php';?>

<style type="text/css">
h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    background: #333;    
    text-align: center;
    height: 420px !important;
}
.carousel{
    margin-top: 20px;
}
</style>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Индикаторы для карусели -->
  <ol class="carousel-indicators">
    <!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>   
  <!-- Слайды карусели -->
  <div class="carousel-inner">
    <!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
    <div class="active item">
      <div class="carousel-caption">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tYcan-fC_-Q" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <!-- Слайд №2 -->
    <div class="item">
      <div class="carousel-caption">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9DrRKIXvHC4" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <!-- Слайд №3 -->
    <div class="item">
      <div class="carousel-caption">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/0nDGLwSByMU" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <!-- Навигация для карусели -->
  <!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
  <a class="carousel-control right" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


<?php require 'footer.php';?>