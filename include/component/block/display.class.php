<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * Block that displays a thought anywhere on the site depending on 
 * where it is placed.
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_thought
 * @version 		$Id: display.class.php 5534 2013-03-25 12:44:57Z Raymond_Benc $
 */
class Thought_Component_Block_Display extends Phpfox_Component
{
	/**
	 * Class process method wnich is used to execute this component.
	 */
	public function process()
	{
		
	$this->template()->assign('sSampleVariable', 'Hello,display variable.'); 
	}

	}
	
	/**
	 * Garbage collector. Is executed after this class has completed
	 * its job and the template has also been displayed.
	 */
	public function clean()
	{
		(($sPlugin = Phpfox_Plugin::get('thought.component_controller_index_clean')) ? eval($sPlugin) : false);
		
		// Remove template vars from memory
		
	}	
}

?>