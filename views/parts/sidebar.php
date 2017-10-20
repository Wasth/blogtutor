<?php
use yii\helpers\Url;
?>
<div id="navigation">
    <div class="block" id="popularArticles">
        <h2 class="title">Popular posts</h2>
        <?php foreach ($popular as $post): ?>
            <div class="article">
                <img src="<?=$post->getImage() ?>">
                <h3 class="title"><a href="<?= Url::toRoute(['post','id'=>$post->id]) ?>"><?=$post->title ?></a></h3>
                <p class="date"><?=$post->getDate() ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="block" id="recentArticles">
        <h2 class="title">Recent posts</h2>
        <?php foreach($recents as $post):?>
            <div class="article">
                <div class="img">
                    <img src="<?=$post->getImage() ?>">
                </div>
                <div class="content">
                    <h3 class="title"><a href="<?= Url::toRoute(['post','id'=>$post->id]) ?>"><?=$post->title ?></a></h3>
                    <p class="date"><?=$post->getDate() ?></p>
                </div>
                <div class="clear"></div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="block" id="categories">
        <h2 class="title">Categories</h2>
        <?php foreach($categories as $category): ?>
            <div class="category">
                <a href="<?= Url::toRoute(['/','id'=>$category->id]) ?>"><?=$category->title ?> <span class="count">(<?=$category->getArticles()->count()?>)</span></a>
            </div>
        <?php endforeach; ?>
    </div>
</div>