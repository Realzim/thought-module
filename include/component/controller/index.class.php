<?php
/**
 * [PHPFOX_HEADER]Puja
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * 
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_thought
 * @version 		$Id: index.class.php 225 2009-02-13 13:24:59Z Raymond_Benc $
 */
class Thought_Component_Controller_Index extends Phpfox_Component
{
	/**
	 * Class process method wnich is used to execute this component.
	 */
	public function process()
	{
			}
	
	/**
	 * Garbage collector. Is executed after this class has completed
	 * its job and the template has also been displayed.
	 */
	public function clean()
	{
		(($sPlugin = Phpfox_Plugin::get('thought.component_controller_index_clean')) ? eval($sPlugin) : false);
	}
}

?>