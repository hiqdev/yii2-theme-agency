<?php
/**
 * Agency Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-agency
 * @package   yii2-theme-agency
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'themeManager' => [
            'agency' => [
                'class' => \hiqdev\themes\agency\Theme::class,
            ],
        ],
        'i18n' => [
            'translations' => [
                'hiqdev:themes:agency' => [
                    'class' => \yii\i18n\PhpMessageSource::class,
                    'basePath' => '@hiqdev/themes/agency/messages',
                ],
            ],
        ],
    ],
];
