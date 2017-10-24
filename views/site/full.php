<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = "Tu Blog - ".$article->title;
?>
<div id="content">
    <div id="fullArticle">
        <div id="fullArticleBlock">
            <img src="<?=$article->getImage() ?>">
            <div class='category'>
                <?= isset($article->category) ? $article->category->title : 'no category';?>
            </div>
            <div class='title'>
                <?=$article->title ?>
            </div>
            <div class='text'>
                <?=$article->content ?>
            </div>
            <div id="tags">
                <?php foreach($article->tags as $tag):?>
                    <div class='tag'>
                        <?=$tag->title ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class='article-footer'>
                <p><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="author">admin</span>
                    <span class="viewed"><i class="fa fa-eye" aria-hidden="true"></i> 325</span></p>
                <div class="clear"></div>
            </div>
        </div>
        <?= $this->render('/parts/comments',[
            'article'=>$article,
            'comments'=>$comments,
            'commentForm'=>$commentForm,
        ]); ?>




    </div><?= $this->render('/parts/sidebar.php', [
        'popular' => $popular,
        'recents' => $recents,
        'categories' => $categories,
    ])?>
</div>
<div class="clear"></div>