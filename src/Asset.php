<?php

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
     * @inheritdoc
     */
    public $sourcePath = '@hiqdev/themes/agency/assets';

    /**
     * @inheritdoc
     */
    public $css = [
    ];

    public $js = [
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        IEFixAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
    ];
}
