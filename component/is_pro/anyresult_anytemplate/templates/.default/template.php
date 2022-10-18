<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
$file = str_replace('//', '/', $arParams['TEMPLATE_PATH'].'/template.php');
if (file_exists($file)) {
    include($file);
}