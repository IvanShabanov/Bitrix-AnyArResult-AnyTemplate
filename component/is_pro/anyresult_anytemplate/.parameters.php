<?php
$arComponentParameters =[
	"PARAMETERS" => [

		'RESULT' => [
			'NAME' => 'Your $arResult',
			'TYPE' => 'STRING',
		],
		'TEMPLATE_PATH' => [
			'NAME' => 'Path to template from DOCUMENT_ROOT',
			'TYPE' => 'STRING',
		],
		'INCLUDE_RESULT_MODIFIER' => [
			'NAME' => 'Need Include result_modifier.php',
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y'
		],
		'INCLUDE_COMPUNENT_EPILOG' => [
			'NAME' => 'Need Include component_epilog.php',
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y'
		],
		'ADD_JS' => [
			'NAME' => 'Need add script.js',
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y'
		],
		'ADD_CSS' => [
			'NAME' => 'Need add style.css',
			'TYPE' => 'CHECKBOX',
			'DEFAULT' => 'Y'
		],
	]
];