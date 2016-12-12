<?php

/*
 * Agency Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-agency
 * @package   yii2-theme-agency
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\agency;

use yii\bootstrap\BootstrapAsset;
use yii\bootstrap\BootstrapPluginAsset;
use yii\web\AssetBundle;

/**
 * Theme main asset bundle.
 */
class Asset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@hiqdev/themes/agency/assets';

    /**
     * {@inheritdoc}
     */
    public $css = [
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',

        // Fonts
        'https://fonts.googleapis.com/css?family=Montserrat:400,700',
        'https://fonts.googleapis.com/css?family=Kaushan+Script',
        'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic',
        'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700',

        'css/agency.min.css',
        'css/custom.css',
    ];

    public $js = [
        'js/jquery.easing.min.js',
        'js/agency.js',
    ];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        IEFixAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
    ];
}
