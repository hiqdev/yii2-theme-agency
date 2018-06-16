<?php
/**
 * Agency Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-agency
 * @package   yii2-theme-agency
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\agency;

use hiqdev\thememanager\Theme as BaseTheme;

/**
 * Theme class.
 */
class Theme extends BaseTheme
{
    public $label = 'Agency';

    public $assets = [
        Asset::class,
    ];
}
