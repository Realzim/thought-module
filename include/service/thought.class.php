<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 * Main shoutbox service that we use to retrieve shoutouts.
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Shoutbox
 * @version 		$Id: shoutbox.class.php 6277 2013-07-16 12:59:34Z Raymond_Benc $
 */
class Thought_Service_Thought extends Phpfox_Service 
{
	 public function getUsers($iTotal) 
    { 
        return $this->database()->select('u.full_name') 
            ->from(Phpfox::getT('user'), 'u') 
            ->limit($iTotal) 
            ->execute('getRows'); 
    } 
} 
  
?>