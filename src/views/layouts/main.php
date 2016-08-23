<?php

/**
 * Theme main layout.
 *
 * @var \yii\web\View View
 * @var string $content Content
 */
use yii\bootstrap\Html;
use yii\bootstrap\Nav;

$isHome = Yii::$app->themeManager->isHomePage();
if ($isHome) {
    $this->registerJs("
    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });
    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })
    ");
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <?= $this->render('//layouts/head') ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top <?= (!$isHome) ? 'affix' : '' ?>">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <?= Yii::t('hiqdev/themes/agency', 'Menu') ?>&nbsp;&nbsp;<i
                        class="fa fa-bars"></i>
                </button>
                <?= Html::a(Yii::t('hiqdev/themes/agency', 'Start Bootstrap'), '/', ['class' => 'navbar-brand']) ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?= Yii::$app->get('menuManager')->render('main', [
                    'class' => Nav::class,
                    'options' => ['class' => 'nav navbar-nav navbar-right'],
                ]) ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <?php if (Yii::$app->themeManager->isHomePage()) : ?>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome To Our Studio!</div>
                    <div class="intro-heading">It's Nice To Meet You</div>
                    <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
                </div>
            </div>
        </header>
        <?= $content ?>
    <?php else: ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $content ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
