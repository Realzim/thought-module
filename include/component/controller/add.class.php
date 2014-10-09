<?php
/**
 * [PHPFOX_HEADER]
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
 
class Thought_Component_Controller_Add extends Phpfox_Component
{
	/**
	 * Class process method wnich is used to execute this component.
	 */
	public function process()
	{
$this->template()->setBreadcrumb('My Sample Breadcrumb'); 
$this->template()->setTitle('My Sample Title'); 
$this->template()->assign('sSampleVariable', 'Hello, I am an assigned variable.'); 
$this->template()->setHeader('sample.css', 'module_thought'); 
$aUsers = Phpfox::getService('thought')->getUsers(10); 
$this->template()->assign('aUsers', $aUsers); 
    
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