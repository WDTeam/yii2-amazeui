<?php

namespace wdteam\amazeui;

use yii\web\AssetBundle;


class AmazeuiAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $basePath = '@webroot/assets';
    public $css = [
        'amazeui/dist/css/amazeui.min.css'
    ];
    public $js = [
        'amazeui/dist/js/amazeui.min.js',
        'handlebars/handlebars.min.js',
        'amazeui/dist/js/amazeui.widgets.helper.min.js',
        'amazeui/dist/js/amazeui.ie8polyfill.min.js'
    ];
}
