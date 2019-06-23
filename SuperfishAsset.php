<?php
namespace derekisbusy\superfish;

use yii\web\AssetBundle;

class SuperfishAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/yii2-superfish';
    
    public $js = [
        'js/hoverIntent.js',
        YII_ENV_DEV ? 'js/superfish.js' : 'js/superfish.min.js',
    ];
}