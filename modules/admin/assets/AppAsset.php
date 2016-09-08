<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\admin\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{

    public function init()
    {
        parent::init();
        $this->sourcePath = "@app/modules/admin/web";
        $this->css = [

            'font-awesome/4.2.0/css/font-awesome.min.css',
            'fonts/fonts.googleapis.com.css',

            'css/ace.min.css'
        ];
        $this->js = [
            'js/ace-extra.min.js',
            'js/jquery.dataTables.min.js',
            'js/jquery.dataTables.bootstrap.min.js',
            'js/dataTables.tableTools.min.js',
            'js/dataTables.colVis.min.js',
            'js/ace-elements.min.js',
            'js/ace.min.js',

        ];
        $this->depends = [
            'yii\web\YiiAsset',
            'yii\bootstrap\BootstrapAsset',
            'yii\bootstrap\BootstrapPluginAsset'
        ];
        $this->jsOptions['position']=View::POS_END;

    }
}
