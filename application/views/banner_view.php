<?php 
    
    $dir = "slider/*.jpg";

    $images = glob($dir);
   

?>

<!-- BEGIN: Carousel-->
<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="slider/slide1.jpg">
        </div>
        <!-- <?php foreach ($images as $img):?>
        <div class="item">
            <img src="<?=$img ?>">
        </div>
        <?php endforeach;?> -->
        <div class="item">
            <img src="slider/slide2.jpg">
        </div>
        <div class="item">
            <img src="slider/slide3.jpg">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- END: Carousel-->