<?php

namespace hiqdev\themes\agency;

use yii\web\AssetBundle;
use yii\web\View;

class IEFixAsset extends AssetBundle
{
    public $js = [
        'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js',
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position' => View::POS_HEAD
    ];
}
