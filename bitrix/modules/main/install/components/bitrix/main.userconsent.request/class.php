<?

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ErrorCollection;
use Bitrix\Main\Error;
use Bitrix\Main\UserConsent\Agreement;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

Loc::loadMessages(__FILE__);

class MainUserConsentRequestComponent extends CBitrixComponent
{
	/** @var ErrorCollection $errors */
	protected $errors;

	protected function checkRequiredParams()
	{
		if (!$this->arParams['ID'])
		{
			//silent mode
			//$this->errors->setError(new Error(Loc::getMessage('MAIN_USER_CONSENT_REQUEST_COMP_CLASS_ERR_ID')));
			return false;
		}

		return true;
	}

	protected function initParams()
	{
		$this->arParams['AUTO_SAVE'] = isset($this->arParams['AUTO_SAVE']) ? $this->arParams['AUTO_SAVE'] === 'Y' : true;
		$this->arParams['IS_CHECKED'] = isset($this->arParams['IS_CHECKED']) ? $this->arParams['IS_CHECKED'] === 'Y' : true;
		$this->arParams['IS_LOADED'] = isset($this->arParams['IS_LOADED']) ? $this->arParams['IS_LOADED'] === 'Y' : false;

		$this->arParams['ID'] = isset($this->arParams['ID']) ? intval($this->arParams['ID']) : null;
		$this->arParams['REPLACE'] = is_array($this->arParams['REPLACE']) ? $this->arParams['REPLACE'] : array();

		$this->arParams['ORIGIN_ID'] = isset($this->arParams['ORIGIN_ID']) ? (string) $this->arParams['ORIGIN_ID'] : null;
		$this->arParams['ORIGINATOR_ID'] = isset($this->arParams['ORIGINATOR_ID']) ? (string) $this->arParams['ORIGINATOR_ID'] : null;
		$this->arParams['SUBMIT_EVENT_NAME'] = isset($this->arParams['SUBMIT_EVENT_NAME']) ? (string) $this->arParams['SUBMIT_EVENT_NAME'] : null;
		$this->arParams['INPUT_NAME'] = isset($this->arParams['INPUT_NAME']) ? (string) $this->arParams['INPUT_NAME'] : '';
	}

	protected function prepareResult()
	{
		$agreement = new Agreement($this->arParams['ID'], $this->arParams['REPLACE']);
		if (!$agreement->isExist() || !$agreement->isActive())
		{
			$this->errors->setError(new Error(Loc::getMessage('MAIN_USER_CONSENT_REQUEST_COMP_CLASS_ERR_ID')));
			return false;
		}

		$agreementData = $agreement->getData();
		$this->arResult['INPUT_LABEL'] = $agreement->getLabelText();

		if (isset($this->arParams['REPLACE']['fields']) && is_array($this->arParams['REPLACE']['fields']))
		{
			$this->arParams['REPLACE']['fields'][] = Loc::getMessage('MAIN_USER_CONSENT_REQUEST_COMP_IP');
		}

		$config = array(
			'id' => $this->arParams['ID'],
			'sec' => $agreementData['SECURITY_CODE'],
			'autoSave' => $this->arParams['AUTO_SAVE'],
			'actionUrl' => $this->getPath() . '/ajax.php',
			'replace' => $this->arParams['REPLACE'],
		);

		if ($this->arParams['IS_LOADED'])
		{
			$config['text'] = $agreement->getText();
		}
		if ($this->arParams['SUBMIT_EVENT_NAME'])
		{
			$config['submitEventName'] = $this->arParams['SUBMIT_EVENT_NAME'];
		}
		if ($this->arParams['ORIGIN_ID'])
		{
			$config['originId'] = $this->arParams['ORIGIN_ID'];
		}
		if ($this->arParams['ORIGINATOR_ID'])
		{
			$config['originatorId'] = $this->arParams['ORIGINATOR_ID'];
		}

		$this->arResult['CONFIG'] = $config;

		return true;
	}

	protected function printErrors()
	{
		foreach ($this->errors as $error)
		{
			ShowError($error);
		}
	}

	public function executeComponent()
	{
		$this->errors = new \Bitrix\Main\ErrorCollection();
		$this->initParams();
		if (!$this->checkRequiredParams())
		{
			$this->printErrors();
			return;
		}

		if (!$this->prepareResult())
		{
			//$this->printErrors();
			return;
		}

		$this->includeComponentTemplate();
	}
}