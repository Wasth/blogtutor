<?php
$this->title = "Tu Blog - ".$article->title;
?>
<div id="content">
    <div id="fullArticle">
        <div id="fullArticleBlock">
            <img src="<?=$article->getImage() ?>">
            <div class='category'>
                <?=$article->category->title ?>
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
    </div><div id="navigation">
        <div class="block" id="popularArticles">
            <h2 class="title">Popular posts</h2>
            <div class="article">
                <img src="/public/img1.jpg">
                <h3 class="title"><a href="#">Lorem Ipsum dolor sit amen</a></h3>
                <p class="date">February 12, 2017</p>
            </div>
            <div class="article">
                <img src="/public/img2.jpg">
                <h3 class="title"><a href="#">Lorem Ipsum dolor sit amen</a></h3>
                <p class="date">February 12, 2017</p>
            </div>
            <div class="article">
                <img src="/public/owl.jpg">
                <h3 class="title"><h3 class="title"><a href="#">Lorem Ipsum dolor sit amen</a></h3></h3>
                <p class="date">February 12, 2017</p>
            </div>
        </div>
        <div class="block" id="recentArticles">
            <h2 class="title">Recent posts</h2>
            <div class="article">
                <div class="img">
                    <img src="/public/img1.jpg">
                </div>
                <div class="content">
                    <h3 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p class="date">February 23, 2017</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="article">
                <div class="img">
                    <img src="/public/img2.jpg">
                </div>
                <div class="content">
                    <h3 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p class="date">February 23, 2017</p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="article">
                <div class="img">
                    <img src="/public/owl.jpg">
                </div>
                <div class="content">
                    <h3 class="title"><a href="#">Lorem ipsum dolor sit amet</a></h3>
                    <p class="date">February 23, 2017</p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="block" id="categories">
            <h2 class="title">Categories</h2>
            <div class="category">
                <a href="#">Travel <span class="count">(2)</span></a>
            </div>
            <div class="category">
                <a href="#">Coding <span class="count">(2)</span></a>
            </div>
            <div class="category">
                <a href="#">Other <span class="count">(2)</span></a>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>