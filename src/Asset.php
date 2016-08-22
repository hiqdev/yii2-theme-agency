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
    ];

    public $js = [
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
