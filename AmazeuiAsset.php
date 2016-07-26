<?php

namespace wdteam\amazeui;

use yii\web\AssetBundle;


class AmazeuiAsset extends AssetBundle
{
    public $sourcePath = '@bower/amazeui/dist';
    public $basePath = '@webroot/assets';
    public $css = [
        'css/amazeui.min.css'
    ];
    public $js = [
        'js/amazeui.min.js'
    ];
}
