<?php
// Version: 2.0; Modifications

//Begin Member Notepad Text Strings
$txt['mempad_title'] = 'Personal Notes';
$txt['mempad_save'] = 'Save Notes';
$txt['mempad_error'] = 'You are not allowed to edit this user\'s notepad.';

//END Member Notepad Text Strings			
/****  Start of SubAccount Mod ****/
// These take care of the permissions
$txt['permissiongroup_simple_subaccounts'] = 'Create and modify subaccounts';
$txt['permissiongroup_subaccounts'] = 'SubAccounts';
$txt['cannot_subaccounts_create_own'] = 'Sorry, but you don\'t have the necessary permissions to create subaccounts on this account.';
$txt['cannot_subaccounts_create_any'] = $txt['cannot_subaccounts_create_own'];
$txt['permissionname_subaccounts_create'] = 'Create SubAccounts';
$txt['permissionname_subaccounts_create_own'] = 'Own SubAccounts';
$txt['permissionname_subaccounts_create_any'] = 'Any SubAccounts';
$txt['permissionhelp_subaccounts_create'] = 'Create their own additional subaccounts on the board; new accounts that are really sub accounts of a user.';

$txt['cannot_subaccounts_delete_own'] = 'Sorry, but you don\'t have the necessary permissions to delete subaccounts on this account.';
$txt['cannot_subaccounts_delete_any'] = $txt['cannot_subaccounts_delete_own'];
$txt['permissionname_subaccounts_delete'] = 'Delete SubAccounts';
$txt['permissionname_subaccounts_delete_own'] = 'Own SubAccounts';
$txt['permissionname_subaccounts_delete_any'] = 'Any SubAccounts';
$txt['permissionhelp_subaccounts_delete'] = 'Delete their own additional subaccounts on the board.';

$txt['cannot_subaccounts_merge_own'] = 'Sorry, but you don\'t have the necessary permissions to merge subaccounts on this account.';
$txt['cannot_subaccounts_merge_any'] = $txt['cannot_subaccounts_merge_own'];
$txt['permissionname_subaccounts_merge'] = 'Merge SubAccounts';
$txt['permissionname_subaccounts_merge_own'] = 'Own SubAccounts';
$txt['permissionname_subaccounts_merge_any'] = 'Any SubAccounts';
$txt['permissionhelp_subaccounts_merge'] = 'Merge their own subaccounts on the board.';

$txt['cannot_subaccounts_split_own'] = 'Sorry, but you don\'t have the necessary permissions to unlink subaccounts on this account.';
$txt['cannot_subaccounts_split_any'] = $txt['cannot_subaccounts_split_own'];
$txt['permissionname_subaccounts_split'] = 'Unlink SubAccounts';
$txt['permissionname_subaccounts_split_own'] = 'Own SubAccounts';
$txt['permissionname_subaccounts_split_any'] = 'Any SubAccounts';
$txt['permissionhelp_subaccounts_split'] = 'Unlink their own subaccounts on the board.';

// Settings
$txt['core_settings_item_subaccount'] = 'SubAccounts';
$txt['core_settings_item_subaccount_desc'] = 'Enabling this feature will allow your members to have subaccounts on the board that are managed through their profiles.';
$txt['subaccount_view_all'] = 'View SubAccounts';
$txt['managesubaccounts_information'] = 'If you wish to turn on or off this feature, you may use the checkbox below
	or you may use the on/off button on the core features page.<br />
	<br />
	Once enabled, you can set various options, including the maximum number of subaccounts that each membergroup may
	have and whether or not new subaccounts inherit their parent\'s membergroup.  If you wish to set permissions as
	to which groups have which types of permissions (create, delete, merge, split), visit the <a href="' . $scripturl . '?action=admin;area=permissions">Permissions</a>
	section of your admin panel.';
$txt['enableSubAccounts'] = 'Allow users to have subaccounts';
$txt['maxSubAccounts'] = 'Max number of subaccounts<div class="smalltext">(0 for unlimited)</div>';
$txt['subaccountsInheritParentGroup'] = 'New subaccounts inherit parent membergroup';
$txt['subaccountsShowInMemberlist'] = 'SubAccounts show on memberlist';
$txt['subaccountsShowInProfile'] = 'SubAccounts show in user\'s profiles';
$txt['subaccountsEnablePortalBlock'] = 'Show in block for portal system <div class="smalltext">(Future Feature)</div>';
$txt['subaccount_no_portal'] = 'No Portal';
$txt['subaccount_configure_groups'] = 'Configure subaccounts per membergroup';
$txt['subaccount_configure_groups_desc'] = 'This section allows you to configure how many subaccounts each membergroup is allowed to have.  A user gets the number of subaccounts defined by their primary membergroup only.  0 for unlimited.';
$txt['subaccount_group_settings'] = 'Configure subaccounts per membergroup';

// Modlog
$txt['modlog_ac_delete_subaccount'] = 'Deleted subaccount &quot;{name}&quot; from &quot;{parent}&quot;';
$txt['modlog_ac_merge_subaccount'] = 'Merged subaccount &quot;{name}&quot; into &quot;{parent}&quot;';

// These take care of the profile stuff
// First the buttons
$txt['button_create'] = 'Create / Link';
$txt['button_merge'] = 'Merge';
$txt['button_split'] = 'Unlink';
$txt['button_parent'] = 'Set as parent';
$txt['button_share'] = 'Make (un)shareable';

$txt['managesubaccounts'] = 'Manage SubAccounts';
$txt['subaccount'] = 'SubAccount';
$txt['parent_account'] = 'Parent Account';
$txt['account_created'] = 'Account Created';
$txt['shared'] = 'Shared';
$txt['subaccounts'] = 'SubAccounts';
$txt['modifysubaccounts_desc'] = 'This is where you can manage your subaccounts.  Depending on what your administrator has allowed, you can create and delete subaccounts, and also merge subaccounts together, turn regular accounts into subaccounts (if you can supply the correct password) and unlink subaccounts to make regular accounts.<br /><br />Deleting a subaccount will transfer all of its posts, polls, topics, moderation actions, bans, and errors to the parent user.<br />Merging subaccounts will transfer everything from the mergee(\'s) to the merger';
$txt['subaccounts_merge_desc'] = 'Choose the account that you would like to merge the subaccount "<strong>%s</strong>" into.';
$txt['create_subaccount_desc'] = 'Please enter the name you wish to use as the subaccount.  If you want to turn an existing account into a subaccount, please enter that account\'s password.  You can click the small \'warning\' icon next to the text field to validate the name if you are creating a new subaccount.';
$txt['subaccount_create_pass'] = 'If the subaccount is already a user or shared subaccount, supply that account\'s password.';
$txt['subaccount_create_pass_admin'] = 'Your current password is required if creating a new subaccount.  If linking a subaccount, please enter it\'s existing password.';
$txt['subaccounts_split_desc'] = 'Please enter a valid email address and new password for each subaccount you wish to unlink.';
$txt['subaccounts_reassign_desc'] = 'Please enter a password to use with your new parent account.';
$txt['current_subaccounts'] = 'Current SubAccounts';
$txt['current_subaccounts_none'] = 'There are no subaccounts linked to this account.';
$txt['change_subaccount'] = 'Switch Account';
$txt['choose_subaccount'] = 'Choose Account';
$txt['use_subaccount'] = 'Use account';
$txt['identification_by_smf'] = 'Used to identify you on the forum.';
$txt['subaccount_create_success'] = 'You have successfully created a new subaccount.';
$txt['subaccount_delete_success'] = 'You have successfully deleted the subaccount(es)';
$txt['subaccount_merge_success'] = 'You have successfully merged the subaccounts';
$txt['deleteAccount_subaccount'] = 'Delete this subaccount?';
$txt['deleteAccount_subaccount_sure'] = 'Are you 100% sure?\nThis action CANNOT be reversed or recovered.';
$txt['no_subaccount_login'] = 'You cannot login with a subaccount.  Only the parent account may be used to login.';
$txt['cannot_delete_subaccount'] = 'You cannot delete this subaccount.';
$txt['cannot_delete_subaccount_shared'] = 'You cannot delete a shared subaccount that you did not create.';
$txt['subaccount_error'] = 'The following error(s) occured';
$txt['subaccount_not_selected'] = 'No valid subaccounts selected';
$txt['subaccount_cannot_create'] = 'Cannot create a subaccount with that name';
$txt['cannot_merge_subaccounts_of_subaccounts'] = 'SubAccounts cannot have subaccounts, thus you shouldn\'t be trying to merge a subaccount of a subaccount.';
$txt['registration_username_available'] = 'Username is available';
$txt['registration_username_unavailable'] = 'Username may not be available';
$txt['registration_username_check'] = 'Check if username is available';
$txt['registration_password_short'] = 'Password is too short';
$txt['registration_password_reserved'] = 'Password contains your username/email';
$txt['registration_password_numbercase'] = 'Password must contain both upper and lower case, and numbers';
$txt['registration_password_no_match'] = 'Passwords do not match';
$txt['registration_password_valid'] = 'Password is valid';
$txt['subaccount_too_many_selected'] = 'Silly rabbit, tricks are for kids.  You can only have one parent in this life';
$txt['subaccount_posts'] = 'All Posts:<span class="smalltext">(Including SubAccounts)</span>';
$txt['search_subaccount_users'] = 'Search all subaccounts of the above user';
/****  End of SubAccount Mod ****/

$txt['custom_action_shorttitle'] = 'Custom Actions';
$txt['core_settings_item_ca'] = 'Custom Actions';
$txt['core_settings_item_ca_desc'] = 'With custom actions you can create custom pages wrapped in your forum\'s theme.';
$txt['custom_action_desc'] = 'From this page you can create and modify your own custom pages.';
$txt['custom_action_title'] = 'Custom Actions';
$txt['custom_action_title_sub'] = 'Sub-Actions For "%1$s"';
$txt['custom_action_none'] = 'You have not created any custom actions yet!';
$txt['custom_action_none_sub'] = 'You have not created any sub-actions for the "%1$s" action yet!';
$txt['custom_action_name'] = 'Action Name';
$txt['custom_action_type'] = 'Type';
$txt['custom_action_type_0'] = 'HTML';
$txt['custom_action_type_1'] = 'BBC';
$txt['custom_action_type_2'] = 'PHP';
$txt['custom_action_sub_actions'] = 'Sub-Actions';
$txt['custom_action_enabled'] = 'Enabled';
$txt['custom_action_make_new'] = 'New Action';
$txt['custom_action_make_new_sub'] = 'New Sub-Action';
$txt['custom_action_not_found'] = 'The requested action was not found.';
$txt['custom_action_invalid_url'] = 'Action URLs may only contain letters, numbers and underscores.';
$txt['custom_action_settings'] = 'Action Settings:';
$txt['custom_action_url_desc'] = 'This may only contain letters, numbers and underscores.';
$txt['custom_action_permissions_mode'] = 'Permissions Mode';
$txt['custom_action_permissions_mode_0'] = 'Visible To Everyone';
$txt['custom_action_permissions_mode_1'] = 'Visible To Selected Groups';
$txt['custom_action_permissions_mode_2'] = 'Same As Parent Action';
$txt['custom_action_body'] = 'Body';
$txt['custom_action_body_html'] = 'HTML Body';
$txt['custom_action_body_php'] = 'Template Code';
$txt['custom_action_delete_sure'] = 'Are you sure you want to delete this action?';
$txt['custom_action_header'] = 'HTML Headers';
$txt['custom_action_source'] = 'Source File Code';
$txt['custom_action_source_desc'] = 'This code will be evaluated before any templates are displayed. If you don\'t understand this you should just put all your code in the template code box. No output should be displayed here.';
$txt['custom_action_header_desc'] = 'This code will be displayed in the header section.';
$txt['custom_action_body_html_desc'] = 'This code will be displayed in the body section.';
$txt['custom_action_body_php_desc'] = 'You should display all output here.';
$txt['custom_action_body_desc'] = 'This is the body of your custom page.';
$txt['custom_action_url'] = 'Action URL';
$txt['custom_action_settings_code'] = 'Action Code:';
$txt['custom_action_menu'] = 'Show Menu Button';

$txt['global_topic'] = 'Global Topic';
$txt['not_global_topic'] = 'Not Global Topic';
$txt['global_topics_board'] = 'Enable Global Topics';
$txt['global_topics_board_desc'] = 'Displays the global topics in the board';
$txt['modlog_ac_global'] = 'Made global &quot;{topic}&quot;';
$txt['modlog_ac_unglobal'] = 'Made not global &quot;{topic}&quot;';
$txt['permissionname_make_global'] = 'Make topics global';
$txt['permissionhelp_solve_topic'] = 'This permission allows a user to make a topic global.';
$txt['cannot_make_global'] = 'You cannot make topics global.';
$txt['board_not_global'] = 'You cannot make topics global in this board';
$txt['wireless_display_global'] = 'Global';
$txt['wireless_display_not_global'] = 'Not Global';

$txt['ultimate_profile'] = 'Ultimate Profile';
$txt['permissionname_edit_ultimate_profile'] = 'Edit ultimate profile';
$txt['permissionname_simple_edit_ultimate_profile_own'] = 'Edit their ultimate profile';
$txt['permissionname_simple_edit_ultimate_profile_any'] = 'Edit other people\'s ultimate profile';
$txt['permissionname_edit_ultimate_profile_own'] = 'Own profile';
$txt['permissionname_edit_ultimate_profile_any'] = 'Any profile';
$txt['permissionhelp_edit_ultimate_profile'] = 'This permission allows user to edit ultimate profile.';
$txt['cannot_edit_ultimate_profile_own'] = 'You aren\'t allowed to edit your own ultimate profile.';
$txt['cannot_edit_ultimate_profile_any'] = 'You aren\'t allowed to edit just any ultimate profile.';


?>