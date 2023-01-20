<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if ($arParams['INCLUDE_COMPONENT_EPILOG'] == 'Y') {
	$file = str_replace('//', '/', $arParams['TEMPLATE_PATH'].'/component_epilog.php');
	if (file_exists($file)) {
		include($file);
	}
}

