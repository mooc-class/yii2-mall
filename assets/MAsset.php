<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use app\common\services\UrlService;
use app\common\services\UtilService;
use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MAsset extends AssetBundle
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
			UrlService::buildWwwUrl( "/font-awesome/css/font-awesome.css"),
			UrlService::buildWwwUrl( "/css/m/css_style.css"),
			UrlService::buildWwwUrl( "/css/m/app.css",[ 'ver' => $release_version ] ),
		];

		if( UtilService::isWechat() ){
			$this->js = [
				'https://res.wx.qq.com/open/js/jweixin-1.0.0.js',
				UrlService::buildWwwUrl( "/plugins/jquery-2.1.1.js"),
				UrlService::buildWwwUrl( "/js/m/TouchSlide.1.1.js"),
				UrlService::buildWwwUrl( "/js/m/common.js",[ 'ver' => $release_version ] ),
				UrlService::buildWwwUrl( "/js/m/weixin.js"),
			];
		}else{
			$this->js = [
				UrlService::buildWwwUrl( "/plugins/jquery-2.1.1.js"),
				UrlService::buildWwwUrl( "/js/m/TouchSlide.1.1.js"),
				UrlService::buildWwwUrl( "/js/m/common.js",[ 'ver' => $release_version ] )
			];
		}

		parent::registerAssetFiles( $view );
	}
}
