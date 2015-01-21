<?php

/*
 * Contact maintainer Jan Theofel: jan@theofel.de
 *
 * PHP version 5
 * @copyright  Jan Theofel 2013
 * @author     Jan Theofel <jan@theofel.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: $
 */
 
/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


class FormMailFromTable extends \FormHidden
{
	
	/**
	 * Add specific attributes
	 */
	public function __set($strKey, $varValue)
	{
		parent::__set($strKey, $varValue);
	}
	
	
	/**
	 * Add specific attributes
	 */
	public function __get($strKey)
	{
		switch( $strKey )
		{
			case 'value':
				$mailft_column = preg_replace("/[^a-zA-Z0-9\_]/", "", $this->mailft_column);
				$mailft_table =  preg_replace("/[^a-zA-Z0-9\_]/", "", $this->mailft_table);

				// BACKEND - no id given, get default value instead
				if(!preg_match("/^\d+$/", $this->varValue)) return "MAIL BY ID FROM TABLE " . $mailft_table . ", COLUMN " . $mailft_column;
				
				// FRONTEND
				$this->Import(Database);
				$dbrow = $this->Database->prepare("SELECT $mailft_column FROM $mailft_table WHERE id=?")->limit(1)->execute($this->varValue);
				if($dbrow->numRows)
				{
					return $dbrow->$mailft_column;
				}
				return $this->mailft_fallback;
				break;
				
			default:
				return parent::__get($strKey);
		}
	}
	
	
	/**
	 * Check for a valid option
	 */
	public function validate()
	{	
		$varValue = deserialize($this->getPost($this->strName));
		
		if (preg_match("/\D/", $varValue))
		{
			$this->addError(sprintf($GLOBALS['TL_LANG']['ERR']['invalid'], $varValue));
		}
		
		$this->varValue = $varValue;
	}
	
}
