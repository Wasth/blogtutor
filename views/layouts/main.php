<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\PublicAssets;

PublicAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div id="headerWrapper">
        <div id='headerContent'>
            <div id='logoPart'>
                <a href="/"><span id='logoLetters'>Tu</span> Blog</a>
            </div>
            <div id="buttonPart">
                <a href="">Sign Up</a> or <a href="<?= Url::toRoute(['auth/login']) ?>">Sign In</a>
            </div>
            <div class='clear'></div>
        </div>
    </div>
</header>
<div id='content-wrapper'>
    <?=$content ?>
</div>
<footer>
    <div id="footerWrapper">
        <div id='footerContent'>
            <div id='leftPart'>
                <a href=""><span id='footerLogoLetters'>Tu</span> Blog </a>&copy; 2017
            </div>
            <div id='rightPart'>
                <a href="mailto: riasta@yandex.ru">riasta@yandex.ru</a>
            </div>
            <div class='clear'></div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
