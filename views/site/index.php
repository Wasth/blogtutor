<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

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
                <?=$article->category->title ?>
            </div>
            <div class='title'>
                <?=$article->title ?>
            </div>
            <div class='description'>
                <?=$article->description ?>
            </div>
            <div class="button-wrapper">
                <a href="/post?id=<?=$article->id ?>"><div class="button">
                        CONTINUE READING
                    </div></a>
            </div>
            <div class='article-footer'>
                <p><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="author">admin on <?=$article->date ?></span>
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
    <div class='clear'></div>

</div>