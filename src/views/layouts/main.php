<?php

/**
 * Theme main layout.
 *
 * @var \yii\web\View View
 * @var string $content Content
 */
use yii\bootstrap\Html;
use yii\widgets\Menu;

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
    <?= $this->render('//layouts/_head') ?>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Organization",
      "name": "<?= Yii::$app->name ?>",
      "url": "<?= Yii::$app->request->hostInfo ?>",
      "email": "<?= Yii::$app->params['supportEmail'] ?>"
    }







    </script>
</head>
<body>
<?php $this->beginBody() ?>

<?php if (Yii::$app->themeManager->hasWidget('Flashes')) : ?>
    <?= Yii::$app->themeManager->widget('Flashes') ?>
<?php endif ?>

<div id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top <?= (!$isHome) ? 'affix' : '' ?>">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <?= Yii::t('hiqdev:themes:agency', 'Menu') ?>&nbsp;&nbsp;<i
                        class="fa fa-bars"></i>
                </button>
                <?= Html::a(Yii::t('hiqdev:themes:agency', Yii::$app->name), '#page-top', ['class' => 'navbar-brand page-scroll']) ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?= Yii::$app->get('menuManager')->render('main', [
                    'class' => Menu::class,
                    'options' => ['class' => 'nav navbar-nav navbar-right'],
                ]) ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <?php if (Yii::$app->themeManager->isHomePage()) : ?>
        <header>
            <?= $this->render('//layouts/_splash') ?>
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
    <?php endif ?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">
                        &copy; <?= Yii::$app->themeManager->widget('CopyrightYears') ?> <?= Yii::$app->themeManager->widget('OrganizationLink') ?>
                        .
                        <?= Yii::t('hiqdev:themes:agency', 'All rights reserved.') ?>
                    </span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <?= Yii::$app->themeManager->widget('SocialLinks') ?>
                    </ul>
                    <span class="copyright">
                        <?= Yii::$app->themeManager->widget([
                            'class' => 'LanguageMenu',
                            'view' => 'miniLanguageMenu',
                        ]) ?>
                    </span>
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
