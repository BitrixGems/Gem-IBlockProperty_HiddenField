<?php
class BitrixGem_IBlockProperty_HiddenField extends BaseBitrixGem{

	protected $aGemInfo = array(
		'GEM'			=> 'IBlockProperty_HiddenField',
		'AUTHOR'		=> 'Владимир Савенков',
		'AUTHOR_LINK'	=> 'http://bitrixgems.ru/',
		'DATE'			=> '20.04.2011',
		'VERSION'		=> '1.0',
		'NAME' 			=> 'Скрытое поле',
		'DESCRIPTION' 	=> "Свойство инфоблока типа \"Строка\", но скрытое от редактора (прячется JS-ом). Полезно для сокрытия служебных полей (BLOG_POST_ID и т.п.).",
		'REQUIREMENTS'	=> '',
		'REQUIRED_MODULES' => array('iblock'),
		'REQUIRED_MIN_MODULE_VERSION' => '1.2.0',
	);

	public function initGem(){
		require_once( 'include/BG_HiddenField_IBlockProperty.class.php' );
	}
	
}