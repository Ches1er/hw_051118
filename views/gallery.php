
<h1><?=$pageHeader?></h1>
<div class="gallery">
    <?php
    for ($i=0;$i<count($picTitle);$i++):
    ?>
        <div class="gallery_unit">
            <p><?=$picTitle[$i]?></p>
            <img src="<?=$src[$i]?>" alt="">
        </div>
    <?php endfor;?>
</div>