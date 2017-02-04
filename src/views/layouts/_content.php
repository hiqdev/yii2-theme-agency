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
