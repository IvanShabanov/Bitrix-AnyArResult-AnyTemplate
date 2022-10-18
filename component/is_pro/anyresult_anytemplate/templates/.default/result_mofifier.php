<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arParams['INCLUDE_RESULT_MODIFIER'] == 'Y') {
	$file = str_replace('//', '/', $arParams['TEMPLATE_PATH'].'/result_modifier.php');
	if (file_exists($file)) {
		include($file);
	}
}