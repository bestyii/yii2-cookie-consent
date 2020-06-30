<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-cookie-consent
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-cookie-consent
* @version 3.0.0
*/

namespace bestyii\cookieconsent\assets;

use yii\bootstrap4\BootstrapAsset;
use yii\bootstrap4\BootstrapPluginAsset;
use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * Class CookieAsset
 */
class CookieAsset extends AssetBundle
{
	/**
     * @inherit
     */
	public $sourcePath = '@bower/cookieconsent/build/';

	/**
	 * @inherit
	 */
	public $css = [
		'cookieconsent.min.css',
	];

	/**
     * @inherit
     */
	public $js = [
		'cookieconsent.min.js',
	];
	
	/**
     * @inherit
     */
	public $depends = [
		YiiAsset::class,
		BootstrapAsset::class,
		BootstrapPluginAsset::class,
    ];
}
