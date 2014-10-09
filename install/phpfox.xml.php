<module>
	<data>
		<module_id>thought</module_id>
		<product_id>phpfox</product_id>
		<is_core>1</is_core>
		<is_active>1</is_active>
		<is_menu>0</is_menu>
		<menu />
		<phrase_var_name>module_thought</phrase_var_name>
		<writable />
	</data>
	<settings>
		<setting group="" module_id="thought" is_hidden="0" type="boolean" var_name="thought_is_live" phrase_var_name="setting_thought_is_live" ordering="1" version_id="2.0.0alpha1">0</setting>
		<setting group="" module_id="thought" is_hidden="0" type="integer" var_name="thought_flood_limit" phrase_var_name="setting_thought_flood_limit" ordering="1" version_id="2.0.0alpha1">5</setting>
		<setting group="" module_id="thought" is_hidden="0" type="integer" var_name="thought_refresh" phrase_var_name="setting_thought_refresh" ordering="1" version_id="2.0.0alpha1">4</setting>
		<setting group="" module_id="thought" is_hidden="0" type="integer" var_name="thought_display_limit" phrase_var_name="setting_thought_display_limit" ordering="1" version_id="2.0.0alpha1">5</setting>
		<setting group="time_stamps" module_id="thought" is_hidden="0" type="string" var_name="thought_time_stamp" phrase_var_name="setting_thought_time_stamp" ordering="1" version_id="2.0.0alpha1">M j, g:i a</setting>
		<setting group="" module_id="thought" is_hidden="0" type="integer" var_name="thought_wordwrap" phrase_var_name="setting_thought_wordwrap" ordering="1" version_id="2.0.0alpha1">25</setting>
		<setting group="" module_id="thought" is_hidden="0" type="integer" var_name="thought_total" phrase_var_name="setting_thought_total" ordering="1" version_id="2.0.0alpha1">100</setting>
		<setting group="cache" module_id="thought" is_hidden="0" type="boolean" var_name="load_content_ajax" phrase_var_name="setting_load_content_ajax" ordering="1" version_id="3.6.0rc1">0</setting>
	</settings>
	<blocks>
		<block type_id="0" m_connection="core.index-member" module_id="thought" component="display" location="3" is_active="1" ordering="8" disallow_access="" can_move="1">
			<title><![CDATA[{phrase var=&#039;thought.thought&#039;}]]></title>
			<source_code />
			<source_parsed />
		</block>
		<block type_id="0" m_connection="group.view" module_id="thought" component="display" location="0" is_active="1" ordering="8" disallow_access="" can_move="1">
			<title></title>
			<source_code />
			<source_parsed />
		</block>
		<block type_id="0" m_connection="pages.view" module_id="thought" component="display" location="3" is_active="1" ordering="7" disallow_access="" can_move="1">
			<title>thought</title>
			<source_code />
			<source_parsed />
		</block>
	</blocks>
	<hooks>
		<hook module_id="thought" hook_type="controller" module="thought" call_name="thought.component_controller_index_clean" added="1240687633" version_id="2.0.0beta1" />
		<hook module_id="thought" hook_type="component" module="thought" call_name="thought.component_block_entry_clean" added="1240687633" version_id="2.0.0beta1" />
		<hook module_id="thought" hook_type="service" module="thought" call_name="thought.service_thought__call" added="1240687633" version_id="2.0.0beta1" />
		<hook module_id="thought" hook_type="service" module="thought" call_name="thought.service_process__call" added="1240687633" version_id="2.0.0beta1" />
		<hook module_id="thought" hook_type="service" module="thought" call_name="thought.service_callback__call" added="1240687633" version_id="2.0.0beta1" />
	</hooks>
	<components>
		<component module_id="thought" component="display" m_connection="" module="thought" is_controller="0" is_block="1" is_active="1" />
	</components>
	<crons>
		<cron module_id="thought" type_id="3" every="1"><![CDATA[Phpfox::getService('thought.process')->clear(Phpfox::getParam('thought.thought_total'));
]]></cron>
	</crons>
	<phrases>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="module_thought" added="1232969781">thought</phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="setting_thought_is_live" added="1233911435"><![CDATA[<title>Live thought</title><info>Set to <b>True</b> if you would like your thought to be live. If it is set to <b>True</b> your thought will automatically refresh without the need for your members to refresh the page manually in order to view new thoughts.

<b>Notice:</b> Not all servers can handle such a feature so use with caution.</info>]]></phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="setting_thought_flood_limit" added="1233912129"><![CDATA[<title>thought Flood Limit (Seconds)</title><info>Define the flood limit in seconds.</info>]]></phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="setting_thought_refresh" added="1233913715"><![CDATA[<title>thought Refresh (Seconds)</title><info>Define in seconds when the thought should refresh and get new thoughts.

<b>Notice:</b> The setting <setting>thought_flood_limit</setting> must set to <b>True</b> in order for this setting to function.</info>]]></phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="setting_thought_display_limit" added="1233913988"><![CDATA[<title>Display Limit</title><info>Select how many thoughts we should display in the thought.</info>]]></phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="setting_thought_time_stamp" added="1233914427"><![CDATA[<title>Time Stamp</title><info>Control the time stamps displayed on each of the thoughts.</info>]]></phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="user_setting_can_view_thought" added="1233914536">Can view the thought?</phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="user_setting_can_add_thought" added="1233916307">Can post a thought?</phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="setting_thought_wordwrap" added="1233916620"><![CDATA[<title>Wordwrap</title><info>Define a text wordwrap. The integer defined will be used to wrap long phrases so it does not stretch the thought.

<b>Notice:</b> The thought using a default theme outputs thoughts within a HTML DIV that allows long phrases within the DIV without stretching the entire site.</info>]]></phrase>
		<phrase module_id="thought" version_id="2.0.0alpha1" var_name="setting_thought_total" added="1233922563"><![CDATA[<title>thoughts To Save</title><info>Select the amount of thoughts we should save. Once a thought has passed this limit it is removed from our history to keep the thought working as fast as possible.</info>]]></phrase>
		<phrase module_id="thought" version_id="2.0.0rc4" var_name="please_wait_limit_seconds_before_adding_a_new_thought" added="1255336884">Please wait {limit} seconds before adding a new thought.</phrase>
		<phrase module_id="thought" version_id="2.0.0rc4" var_name="only_members_of_this_group_can_leave_a_message" added="1255336919">Only members of this group can leave a message.</phrase>
		<phrase module_id="thought" version_id="2.0.0rc4" var_name="thought" added="1255337003">thought</phrase>
		<phrase module_id="thought" version_id="2.0.0rc4" var_name="view_thought" added="1255337022">View thought</phrase>
		<phrase module_id="thought" version_id="2.0.0rc4" var_name="adding_your_thought" added="1255337063">Adding your thought</phrase>
		<phrase module_id="thought" version_id="2.0.0rc4" var_name="user_setting_can_delete_all_thought_messages" added="1255864855">Can delete all thought messages?</phrase>
		<phrase module_id="thought" version_id="2.0.0rc4" var_name="delete_this_thought" added="1255865184">Delete this thought.</phrase>
		<phrase module_id="thought" version_id="2.0.0rc4" var_name="are_you_sure" added="1255865416">Are you sure?</phrase>
		<phrase module_id="thought" version_id="2.0.0rc8" var_name="enter_a_thought" added="1258389086">Enter a thought.</phrase>
		<phrase module_id="thought" version_id="3.4.0rc1" var_name="can_view_post_in_thought" added="1349765715">Can view/post in thought?</phrase>
		<phrase module_id="thought" version_id="3.6.0rc1" var_name="setting_load_content_ajax" added="1371731961"><![CDATA[<title>thought Content via AJAX</title><info>Load thought content after the site has loaded via AJAX.</info>]]></phrase>
	</phrases>
	<user_group_settings>
		<setting is_admin_setting="0" module_id="thought" type="boolean" admin="1" user="1" guest="1" staff="1" module="thought" ordering="0">can_view_thought</setting>
		<setting is_admin_setting="0" module_id="thought" type="boolean" admin="1" user="1" guest="0" staff="1" module="thought" ordering="0">can_add_thought</setting>
		<setting is_admin_setting="0" module_id="thought" type="boolean" admin="1" user="0" guest="0" staff="1" module="thought" ordering="0">can_delete_all_thought_messages</setting>
	</user_group_settings>
	<tables><![CDATA[a:1:{s:15:"phpfox_thought";a:3:{s:7:"COLUMNS";a:4:{s:8:"shout_id";a:4:{i:0;s:7:"UINT:10";i:1;N;i:2;s:14:"auto_increment";i:3;s:2:"NO";}s:7:"user_id";a:4:{i:0;s:7:"UINT:10";i:1;N;i:2;s:0:"";i:3;s:2:"NO";}s:4:"text";a:4:{i:0;s:9:"VCHAR:255";i:1;N;i:2;s:0:"";i:3;s:2:"NO";}s:10:"time_stamp";a:4:{i:0;s:7:"UINT:10";i:1;N;i:2;s:0:"";i:3;s:2:"NO";}}s:11:"PRIMARY_KEY";s:8:"shout_id";s:4:"KEYS";a:1:{s:7:"user_id";a:2:{i:0;s:5:"INDEX";i:1;s:7:"user_id";}}}}]]></tables>
</module>