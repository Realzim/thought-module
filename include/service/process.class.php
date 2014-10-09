<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * Process class for shoutouts where we add, delete or update shoutouts.
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Shoutbox
 * @version 		$Id: process.class.php 2526 2011-04-13 18:15:51Z Raymond_Benc $
 */
class Thought_Service_Process extends Phpfox_Service 
{
	/**
	 * Class constructor
	 */	
	public function __construct()
	{	
		
	}
	public function getCategoriesById($iId)
        {
            return $this->database()->select('*')
                                    ->from(Phpfox::getT('wish'))
                                    ->execute('getRow');
        }
        
	
	/**
	 * Add a new shoutout.
	 *
	 * @param int $iUserId User ID of the user.
	 * @param string $sText Shoutout text.
	 * 
	 * @return boolean Return TRUE by default
	 */
	
}

?>