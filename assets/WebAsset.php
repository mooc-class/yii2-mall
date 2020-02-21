<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use app\common\services\UrlService;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class WebAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
    ];
	public function registerAssetFiles( $view ){
		//加一个版本号,目的 ： 是浏览器获取最新的css 和 js 文件
		$release_version = defined("RELEASE_VERSION")?RELEASE_VERSION:time();
		$this->css = [
			UrlService::buildWwwUrl( "/css/web/bootstrap.min.css" ),
			UrlService::buildWwwUrl( "/font-awesome/css/font-awesome.css"),
			UrlService::buildWwwUrl( "/css/web/style.css",[ 'ver' => $release_version ] )
		];
		$this->js = [
			UrlService::buildWwwUrl( "/plugins/jquery-2.1.1.js"),
			UrlService::buildWwwUrl( "/js/web/bootstrap.min.js"),
			UrlService::buildWwwUrl( "/plugins/layer/layer.js"),
			UrlService::buildWwwUrl( "/js/web/common.js",[ 'ver' => $release_version ] ),
		];
		parent::registerAssetFiles( $view );
	}
}
