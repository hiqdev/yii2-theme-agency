<?php

use hiqdev\thememanager\widgets\CopyrightYears;
use hiqdev\thememanager\widgets\OrganizationLink;
use hiqdev\thememanager\widgets\SocialLinks;
use hiqdev\yii2\language\menus\LanguageMenu;

?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">
                    &copy; <?= CopyrightYears::widget() ?> <?= OrganizationLink::widget() ?>.
                    <?= Yii::t('hiqdev:themes:agency', 'All rights reserved.') ?>
                </span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <?= SocialLinks::widget() ?>
                </ul>
                <?php if (class_exists(LanguageMenu::class)) : ?>
                    <span class="copyright">
                        <?= LanguageMenu::widget() ?>
                    </span>
                <?php endif ?>
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
