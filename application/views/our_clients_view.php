<?php
    $dir = "logo/*.png";

    $image = glob($dir);
?>


<section role="main" class="bg2 row-fluid clearfix">
    <article class=" our_clients">
        <h1 class="title-dif text-center">O<span>ur Client</span>s</h1>
        <div class=" ul-container">
            <?php foreach($image as $img):?>
                <ul class=" list-group ul-list">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="image-parent">
                        <img src="<?= $img?>" class="img-fluid image-logo" alt="quixote">
                    </div>
                </li>
            </ul>
                <?php endforeach; ?>
        </div>
    </article>
</section>