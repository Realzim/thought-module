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
 * @package  		Module_Shoutbox
 * @version 		$Id: callback.class.php 4858 2012-10-09 06:56:45Z Raymond_Benc $
 */
class Thought_Service_Callback extends Phpfox_Service 
{
	/**
	 * Class constructor
	 */	
	public function __construct()
	{	
		
	}
	
	public function getPagePerms()
	{
		$return=$this->template()->assign(array(
			'aParam2' => 'Welcome to my life'
));
	
		return $return;
	}	
	
	
}

?>