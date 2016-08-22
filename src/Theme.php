<?php

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
