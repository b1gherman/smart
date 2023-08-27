<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Description of ChartAsset
 *
 * @author USER
 */
class ChartAsset extends AssetBundle {

    //put your code here

    public $sourcePath = '@bower/chart-js/dist';
    public $baseUrl = '@web';
    public $css = [
        'css/uikit.min.css',
    ];
    public $js = [
        'js/uikit.min.js',
    ];

}
