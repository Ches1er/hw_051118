<h1><?=$pageHeader?></h1>
<div class="news_content">
    <div class="news_block">
        <?php
        for ($i=0;$i<count($date);$i++): ?>
            <div class="news_unit">
                <h4><?=$date[$i]?></h4>
                <h1><?=$mainHeader[$i]?></h1>
                <p class="fold"><?=$article[$i]?></p>
                <div class="full_article">Unfold</div>
            </div>
        <?php endfor;?>
    </div>
</div>