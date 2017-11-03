<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
<div id="content">
    <div id="articles">

        <?php foreach ($articles as $article):?>
        <div class='article'>
            <div class='article-img'>
                <img src="<?=$article->getImage(); ?>">
            </div>
            <div class='category'>
                <?= isset($article->category) ? $article->category->title : 'no category'; ?>
            </div>
            <div class='title'>
                <?=$article->title ?>
            </div>
            <div class='description'>
                <?=$article->description ?>
            </div>
            <div class="button-wrapper">
                <a href="<?= Url::toRoute(['post','id'=>$article->id]) ?>"><div class="button">
                        CONTINUE READING
                    </div></a>
            </div>
            <div class='article-footer'>
                <p><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="author"><?= $article->author->name ?> on <?=$article->getDate() ?></span>
                    <span class="viewed"><i class="fa fa-eye" aria-hidden="true"></i> <?=(int)$article->viewed ?></span></p>
                <div class="clear"></div>
            </div>
        </div><?php endforeach; ?>
        <div id="pagination">
        <?php
            echo LinkPager::widget([
                'pagination' => $pagination,
            ]);

        ?>
    </div>
    </div><?= $this->render('/parts/sidebar.php', [
        'popular' => $popular,
        'recents' => $recents,
        'categories' => $categories,
    ])?>
    <div class='clear'></div>

</div>