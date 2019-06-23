<?php
namespace derekisbusy\superfish;

use yii\web\AssetBundle;

class SuperfishAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/superfish';
    
    public $js = [
        'js/hoverIntent.min.js',
        'js/superfish.min.js',
    ];
}