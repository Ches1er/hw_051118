<h1><?=$pageHeader?></h1>
<div class="main_content">
    <div class="main_block">
        <?php
        for ($i=0;$i<count($article);$i++): ?>
            <div class="main_unit">
                <h1><?=$mainHeader[$i]?></h1>
                <p><?=$article[$i]?></p>
            </div>
        <?php endfor;?>
    </div>
</div>