<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/*
 * Contact maintainer Jan Theofel: jan@theofel.de
 *
 * PHP version 5
 * @copyright  Jan Theofel 2013
 * @author     Jan Theofel <jan@theofel.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: $
 */

// new palette
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['mailFromTable'] = '{type_legend},type,name,value,mailft_table,mailft_column,mailft_fallback;{fconfig_legend},mandatory';

$GLOBALS['TL_DCA']['tl_form_field']['fields']['mailft_table'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_form_field']['mailft_table'],
	'inputType'		=> 'text',
	'eval'			=> array('size'=>40, 'tl_class'=>'w50', 'mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['mailft_column'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_form_field']['mailft_column'],
	'inputType'		=> 'text',
	'eval'			=> array('size'=>40, 'tl_class'=>'w50', 'mandatory'=>true)
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['mailft_fallback'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_form_field']['mailft_fallback'],
	'inputType'		=> 'text',
	'eval'			=> array('size'=>100, 'tl_class'=>'w50', 'mandatory'=>true)
);