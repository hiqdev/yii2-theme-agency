<?php

use hiqdev\thememanager\menus\AbstractMainMenu;
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
            <?= AbstractMainMenu::widget([], [
                'class' => Menu::class,
                'options' => ['class' => 'nav navbar-nav navbar-right'],
                'linkTemplate' => '<a href="{url}" class="page-scroll">{label}</a>',
            ]) ?>
        </div>
    </div>
</nav>
