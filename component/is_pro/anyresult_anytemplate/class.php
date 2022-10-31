<?php
use Bitrix\Main\SystemException;
use Bitrix\Main\Page\Asset;

class anyresult_anytemplate extends CBitrixComponent
{
	public function executeComponent ()
	{
		$docroot = \Bitrix\Main\Application::getDocumentRoot();
		$this->arParams['TEMPLATE_PATH'] = $docroot.'/'.trim($this->arParams['TEMPLATE_PATH'],'/').'/';

		if (!is_dir($this->arParams['TEMPLATE_PATH'])) {
			throw new SystemException('TEMPLATE_PATH '. $this->arParams['TEMPLATE_PATH']. ' not exists');
			return;
		};

		if (!is_array($this->arParams['RESULT'])) {
			throw new SystemException('RESULT is not array');
			return;
		};
		if ($this->arParams['ADD_JS'] == 'Y') {
			$file = str_replace('//', '/', $this->arParams['TEMPLATE_PATH'].'/script.js');
			Asset::getInstance()->addJs($file);
		}
		if ($this->arParams['ADD_CSS'] == 'Y') {
			$file = str_replace('//', '/', $this->arParams['TEMPLATE_PATH'].'/style.css');
			Asset::getInstance()->addCss($file);
		}
        $this->arResult = $this->arParams['RESULT'];
		$this->includeComponentTemplate();
	}
}