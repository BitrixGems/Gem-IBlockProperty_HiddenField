<?php
/**
 * Скрытое поле инфоблока
 *
 * @author Vladimir Savenkov
 */

AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('BG_HiddenField_IBlockProperty', 'GetUserTypeDescription'), 5000);

class BG_HiddenField_IBlockProperty {
	public static function GetUserTypeDescription(){
		return array(
			"PROPERTY_TYPE"				=>"S",
			"USER_TYPE"					=>"BG_HiddenField_IBlockProperty",
			"DESCRIPTION"				=>"Скрытое поле (Строка)",
			"GetPropertyFieldHtml"		=>array("BG_HiddenField_IBlockProperty","GetPropertyFieldHtml"),
		);
	}
	public static function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName){
		$html = '<script type="text/javascript">document.getElementById("tr_PROPERTY_'.$arProperty['ID'].'").style.display = "none";</script><input name="'.$strHTMLControlName["VALUE"].'" id="'.$strHTMLControlName["VALUE"].'" value="'.htmlspecialcharsex($value["VALUE"]).'" type="hidden" />'.GetMessage('SYSTEM_FIELD');
		return  $html;
	}
}
?>
