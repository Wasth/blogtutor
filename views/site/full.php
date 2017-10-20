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

        <div id="comments">
            <h2>3 Comments</h2>
            <div class="comment">
                <div class="comment-avatar" style="background-image: url(owl.jpg);">

                </div>
                <div class="comment-content">
                    <h3>Elon Musk</h3>
                    <p class="comment-date">February 12, 2017</p>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi at atque consectetur consequuntur cum dignissimos, error, et.</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="comment">
                <div class="comment-avatar" style="background-image: url(owl.jpg);">
                    <!--<img src="/public/owl.jpg">-->
                </div>
                <div class="comment-content">
                    <h3>Elon Musk</h3>
                    <p class="comment-date">February 12, 2017</p>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi at atque consectetur consequuntur cum dignissimos, error, et.</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="comment">
                <div class="comment-avatar" style="background-image: url(owl.jpg);">

                </div>
                <div class="comment-content">
                    <h3>Elon Musk</h3>
                    <p class="comment-date">February 12, 2017</p>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi at atque consectetur consequuntur cum dignissimos, error, et.</p>
                </div>
                <div class="clear"></div>
            </div>
            <!--<div class="clear"></div>-->
        </div>

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