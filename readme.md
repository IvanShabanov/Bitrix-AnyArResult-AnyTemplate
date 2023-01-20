## Компонент для применения кастомного результата в любой шаблон другого компонента

Иногда надо показать свой $aResult в шаблоне компонента,
без подключения и обработки самого компонента.

	<?
		/* Подготовим наш $arResult */
		$arResult = [
			"NAME" => "Наименование новости"
			"DETAIL_TEXT" => "Детальный текст",
		]
	?>

	<?$APPLICATION->IncludeComponent(
		"is_pro:anyresult_anytemplate",
		"",
		Array(
			/* Свой $arResult - сформированный выше */
			"RESULT" => $arResult,
			/* Путь до используемого шаблона */
			"TEMPLATE_PATH" => "/bitrix/templates/.default/components/bitrix/news.detail/",
			/* Включить result_modifier используемого шаблона - может изменить наш %arResult */
			"INCLUDE_RESULT_MODIFIER" => "Y",
			/* Включить component_epilog.php используемого шаблона */
			"INCLUDE_COMPONENT_EPILOG" => "Y",
			/* Включить script.js используемого шаблона */
			"ADD_JS" => "Y",
			/* Включить style.css используемого шаблона */
			"ADD_CSS" => "Y",

			/* Можно добавить параметры использемого шаблона */
		),
		$component
	);
	?>