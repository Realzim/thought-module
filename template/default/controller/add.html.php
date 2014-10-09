<?php 
defined('PHPFOX') or exit('NO DICE!'); 

?>


<?php echo "We will be adding a form here...";?><br/><br/>
{$sSampleVariable}
<br />
<br />
<b>Members:</b>
<ul class="p_4" style="list-style-type:square; margin:0px 0px 0px 15px;">
{foreach from=$aUsers item=aUser}
	<li>{$aUser.full_name}</li>
{/foreach}
</ul>