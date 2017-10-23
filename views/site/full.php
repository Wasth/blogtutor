<?php
use yii\helpers\Url;

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



            <?php if(!empty($comments)): ?>
            <div id="comments">
                <h2><?=$comments->count() ?> Comments</h2>
                <?php foreach ($comments as $comment): ?>
                <div class="comment">
                    <div class="comment-avatar" style="background-image: url(<?=$comment->user->image ?>);">

                    </div>
                        <div class="comment-content">
                            <h3><?=$comment->user->name ?></h3>
                            <p class="comment-date"><?=$comment->getDate() ?></p>
                            <p class="comment-text"><?=$comment->text ?></p>
                        </div>
                    <div class="clear"></div>
                </div>

                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <!--<div class="clear"></div>-->


        <div id="commentForm">
            <h2>Leave a comment</h2>
            <textarea rows="10" placeholder="Enter comment..."></textarea>
            <button>SEND</button>
        </div>
    </div><?= $this->render('/parts/sidebar.php', [
        'popular' => $popular,
        'recents' => $recents,
        'categories' => $categories,
    ])?>
</div>
<div class="clear"></div>