<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2022 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */


if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$lang_translator['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$lang_translator['createdate'] = '04/03/2010, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2009-2021 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = '';
$lang_translator['langtype'] = 'lang_module';

$lang_module['categories'] = 'Categories';
$lang_module['topics'] = 'Topics';
$lang_module['topics1'] = 'Topic';
$lang_module['topics_error_title'] = 'Error: You do not enter the event title';
$lang_module['sources'] = 'Sources';
$lang_module['save'] = 'Save';
$lang_module['send'] = 'Send';
$lang_module['action'] = 'Submit';
$lang_module['move'] = 'Move';
$lang_module['save_temp'] = 'Draft save';
$lang_module['publtime'] = 'Publish';
$lang_module['publtime_action'] = 'Publish (does not apply to drafts and locked posts)';
$lang_module['exptime'] = 'Make expired';
$lang_module['status_action_0'] = 'Switch to wait for approval';
$lang_module['declined'] = 'Reject posts';
$lang_module['re_published'] = 'Re published';
$lang_module['status'] = 'Status';
$lang_module['status_0'] = 'Stop effect';
$lang_module['status_1'] = 'Published';
$lang_module['status_2'] = 'Still waitting';
$lang_module['status_3'] = 'Expired';
$lang_module['status_4'] = 'Draft';
$lang_module['status_5'] = 'Send Approve';
$lang_module['status_6'] = 'Reject Approve';
$lang_module['status_7'] = 'Checking for Approve';
$lang_module['status_8'] = 'Send Publish';
$lang_module['status_9'] = 'Reject Publish';
$lang_module['status_10'] = 'Checking for Publish';
$lang_module['status_lockbycat'] = 'Locked by category';
$lang_module['errorsave'] = 'Error: Update content fail, please check your article alias';
$lang_module['errorexists'] = 'Error: The title or static link is duplicated, enter a different value';
$lang_module['saveok'] = 'Update succesfully';
$lang_module['clickgotomodule'] = 'Click here to management posts.';
$lang_module['alias'] = 'Static Link';
$lang_module['name'] = 'Title';
$lang_module['no_name'] = 'Empty title';
$lang_module['titlesite'] = 'Customize the site title';
$lang_module['error_name'] = 'Error: Please add title';
$lang_module['weight'] = 'Position';
$lang_module['numsubcat'] = 'Number of sub-categories';
$lang_module['numlinks'] = 'Number of link';
$lang_module['numcomments'] = 'Number comments';
$lang_module['numtags'] = 'Number tags';
$lang_module['newday'] = 'Show new icon (day)';
$lang_module['hitstotal'] = 'Number view';
$lang_module['checkall'] = 'Check all';
$lang_module['uncheckall'] = 'Uncheck all';
$lang_module['cat_instant_view'] = 'See the RSS feed URL for instant messages';
$lang_module['cat_instant_viewsimple'] = 'View the RSS URL';
$lang_module['cat_instant_title'] = 'RSS feed URL instantaneously';
$lang_module['show_hide_pass'] = 'Show / Hide passwords';
$lang_module['gen_rand_pass'] = 'Randomly generated';
$lang_module['cat_status_0'] = 'Deactive';
$lang_module['cat_status_1'] = 'Active, displayed on the homepage';
$lang_module['cat_status_2'] = 'Active, not displayed on the homepage';
$lang_module['cat_status_0_confirm'] = 'Note: Deactive this category will stop all active posts in the category and its subcategories. Are you sure?';
$lang_module['cat_locked_byparent'] = 'Locked by parent category';
$lang_module['description'] = 'Description';
$lang_module['viewdescription'] = 'Show describes when view topic';
$lang_module['viewdescription_0'] = 'No display';
$lang_module['viewdescription_1'] = 'Display in page 1 of topic';
$lang_module['viewdescription_2'] = 'Display in all page of topic';
$lang_module['keywords'] = 'Keyword';
$lang_module['content_list'] = 'List of articles';
$lang_module['content_add'] = 'Add a new article';
$lang_module['add_cat'] = 'Add categories';
$lang_module['add_topic'] = 'Add topic';
$lang_module['add_sources'] = 'Add sources';
$lang_module['edit_cat'] = 'Edit categories';
$lang_module['edit_topic'] = 'Edit topic';
$lang_module['edit_sources'] = 'Edit sources';
$lang_module['add_block_cat'] = 'Add block group';
$lang_module['edit_block_cat'] = 'Edit block groups';
$lang_module['link'] = 'Website\'s link';
$lang_module['cat_sub'] = 'Categories';
$lang_module['cat_sub_sl'] = 'Main categories';
$lang_module['cat_parent'] = 'Main categories';
$lang_module['note_cat_title'] = 'Empty cat';
$lang_module['note_cat_content'] = 'You need a category before create new post. System redirecting <strong>Cat manage</strong> a moments...';
$lang_module['topic_sl'] = 'Select topics';
$lang_module['delcat_msg_cat'] = 'Error:Categories has %s sub-categories';
$lang_module['delcat_msg_rows'] = 'Error:Delete categories fail because categories %s article.';
$lang_module['delcat_msg_rows_select'] = 'Note: Remove category %1$s and all %2$s topics.';
$lang_module['delcat_msg_rows_move'] = 'Select category to move';
$lang_module['delcat_msg_cat_permissions'] = 'You are not allowed to do this action';
$lang_module['delcatandrows'] = 'Delete topics and articles';
$lang_module['delcat_msg_rows_noselect'] = 'You should choose the topic to move to article';
$lang_module['deltopic_msg_rows'] = 'relevant news group %s article, have you sure deleted, then group related information is deleted from the article?';
$lang_module['setting'] = 'Configuration';
$lang_module['setting_indexfile'] = 'Home page plan';
$lang_module['setting_mobile_indexfile'] = 'Home page plan in Mobile theme';
$lang_module['setting_homesite'] = 'The size of the image at home';
$lang_module['setting_thumbblock'] = 'The size of the image in the block';
$lang_module['setting_imagefull'] = 'The size of the image under article preamble';
$lang_module['setting_per_page'] = 'Number of article and article preamble are shown';
$lang_module['setting_st_links'] = 'Number of article are only shown link';
$lang_module['setting_idf_df'] = 'Default';
$lang_module['setting_copyright'] = 'Copyright';
$lang_module['setting_view'] = 'Setting view';
$lang_module['setting_post'] = 'Setting post';
$lang_module['setting_auto_tags'] = 'Automatically generate tags for article tags is entered at the post';
$lang_module['setting_tags_remind'] = 'Remind the tags no description';
$lang_module['setting_keywords_tag'] = 'If you do not enter keywords then use keywords as tags';
$lang_module['setting_alias_lower'] = 'Alias to lowercase when creating a new';
$lang_module['setting_elasticseach'] = 'Configure search server using Elasticsearch';
$lang_module['setting_elas_use'] = 'Use Elasticsearch';
$lang_module['setting_elas_host'] = 'Server address installed Elasticsearch';
$lang_module['setting_elas_port'] = 'Server ports Elasticsearch';
$lang_module['setting_elas_index'] = 'Database name Elasticsearch';
$lang_module['error_elas_host_connect'] = 'Unable to connect to the server Elasticsearch!';
$lang_module['use_setup_elasticseach'] = 'Installation instructions Elasticsearch';
$lang_module['use_dev_elasticseach'] = 'Programming Guide Elasticsearch on NukeViet';
$lang_module['setting_insart_caption'] = 'Configure instant messages';
$lang_module['setting_active_instant_articles'] = 'Enable instant messaging functionality';
$lang_module['setting_instant_articles_template'] = 'Post templates are used by default if each post does not specify a template';
$lang_module['setting_instant_articles_httpauth'] = 'Enable HTTP authentication for RSS feeds';
$lang_module['setting_instant_articles_username'] = 'Account authentication';
$lang_module['setting_instant_articles_password'] = 'Authentication password';
$lang_module['setting_instant_articles_livetime'] = 'Time (minutes) recreate RSS';
$lang_module['setting_instant_articles_livetime1'] = 'Enter 0 to create new RSS feeds when queries to the feed. RSS will also automatically recreate the query immediately to the cache if the cache is deleted without waiting.';
$lang_module['setting_instant_articles_gettime'] = 'Limit the time (minutes) to retrieve new posts and new posts from the time of RSS creation before';
$lang_module['setting_instant_articles_gettime1'] = 'Note: Facebook queries into the power for many hours at a time, however, to make sure that new or updated articles can be displayed between query timeouts from facebook, select this value from 60 minutes or less. on. Also note, if this value is less than the re-generation time RSS some posts may not be displayed';
$lang_module['setting_instant_articles_defaulturl'] = 'RSS feed URL to declare if using instant messaging feature';
$lang_module['setting_instant_articles_defaulturl1'] = 'Note: This URL is the URL that contains the entire article of the module. To get the URL of the feed for each forum, after activating the instant messaging feature, you need to move to the administration section, click the button that displays the URL of the instant message RSS feed. At each respective category.';
$lang_module['setting_instant_articles_auto'] = 'The default message is posted as an instant message if this function is activated';
$lang_module['setting_sys'] = 'Configure system';
$lang_module['setting_identify_cat_change'] = 'Support to change article categories';
$lang_module['setting_identify_cat_change_help'] = 'Enabling this feature will allow the system to auto redirect the old article to a new address when changing the category of the article, but the performance will decrease a bit. If you do not regularly change article categories, turn off this feature';
$lang_module['setting_active_history'] = 'Turn on post history';
$lang_module['setting_active_history_help'] = 'Enable this option, the system will save the change history every time you edit the article. You can restore to the previous version if you want';
$lang_module['viewcat_page'] = 'Display method';
$lang_module['viewcat_page_new'] = 'New categories, Up';
$lang_module['viewcat_page_old'] = 'Old categories, Up';
$lang_module['viewcat_main_left'] = 'Categories,News other on left';
$lang_module['viewcat_main_right'] = 'Categories,News other on right';
$lang_module['viewcat_main_bottom'] = 'Categories,News other on bottom';
$lang_module['viewcat_two_column'] = 'Categories are shown in two column';
$lang_module['viewcat_list_new'] = 'title, new front';
$lang_module['viewcat_list_old'] = 'title, old front';
$lang_module['viewcat_grid_new'] = 'grid, new front';
$lang_module['viewcat_grid_old'] = 'grid, old front';
$lang_module['viewcat_none'] = 'Not show content';
$lang_module['viewcat_detail'] = 'Group is view in detail content';
$lang_module['search'] = 'Search';
$lang_module['search_type'] = 'Search by';
$lang_module['search_status'] = 'Status';
$lang_module['search_id'] = 'ID';
$lang_module['search_key'] = 'Key word';
$lang_module['search_cat'] = 'Categories';
$lang_module['search_cat_all'] = 'All Categories';
$lang_module['search_title'] = 'Title';
$lang_module['search_bodytext'] = 'Content';
$lang_module['search_author'] = 'Author';
$lang_module['search_admin'] = 'Typer';
$lang_module['search_per_page'] = 'Number of topics display';
$lang_module['search_public_time'] = 'Publication time';
$lang_module['search_type_date'] = '---Choose time type---';
$lang_module['search_note'] = 'Keyword must be more than 2 characters, less than 64 characters, no html';
$lang_module['search_time_from'] = 'From day';
$lang_module['search_time_to'] = 'To day';
$lang_module['kind_of_time'] = 'Time type';
$lang_module['content_edit'] = 'Edit article';
$lang_module['error_title'] = 'Error: Article has no title';
$lang_module['error_bodytext'] = 'Error: Article has no content';
$lang_module['error_cat'] = 'Error: Article has no categories';
$lang_module['sources_sl'] = 'Select';
$lang_module['content_cat'] = 'Categories';
$lang_module['content_block'] = 'is block content';
$lang_module['content_topic'] = 'is topic content';
$lang_module['content_homeimg'] = 'Illustrate image for Introduction';
$lang_module['content_homeimgalt'] = 'A comment about this image';
$lang_module['content_hometext'] = 'Short introduction';
$lang_module['content_notehome'] = '(Visible every one)';
$lang_module['content_keyword'] = 'Keywords';
$lang_module['content_tag'] = 'Tags';
$lang_module['content_showmore'] = '(Show more)';
$lang_module['content_notetime'] = '(date/month/year hour:minute)';
$lang_module['content_publ_date'] = 'Publish Time';
$lang_module['order_publtime'] = 'Reorder by Publish Time';
$lang_module['content_exp_date'] = 'Expire:';
$lang_module['content_extra'] = 'Extra features';
$lang_module['content_inhome'] = 'Show on homepage';
$lang_module['content_allowed_comm'] = 'Allow comment';
$lang_module['content_note_comm'] = 'Function currently config in Management module comment';
$lang_module['content_allowed_rating'] = 'Allow ratings';
$lang_module['allowed_rating_point'] = 'Showing reviews on google if article have points';
$lang_module['no_allowed_rating'] = 'No display';
$lang_module['content_allowed_send'] = 'Allow sending';
$lang_module['content_allowed_print'] = 'Allow printing';
$lang_module['content_allowed_save'] = 'Allow saving';
$lang_module['content_allshow'] = 'View all';
$lang_module['content_allcollapse'] = 'Close all';
$lang_module['content_bodytext'] = 'Content detail';
$lang_module['content_bodytext_note'] = '(Allowed people are shown)';
$lang_module['content_admin'] = 'Creator';
$lang_module['author'] = 'Author';
$lang_module['content_author'] = 'External Author';
$lang_module['content_internal_author'] = 'Author under management';
$lang_module['content_sourceid'] = 'Source';
$lang_module['content_copyright'] = 'Copyright';
$lang_module['content_external_link'] = 'Use external link';
$lang_module['content_external_link1'] = 'Open the article with the source link';
$lang_module['content_saveok'] = 'Successfully recorded data';
$lang_module['content_main'] = 'Back to management';
$lang_module['content_back'] = 'Back to edit page';
$lang_module['redircet_title'] = 'Action well done';
$lang_module['content_checkcat'] = 'The main topic for this article';
$lang_module['content_checkcatmsg'] = 'You must choose the main category of the article.';
$lang_module['content_archive'] = 'Save after expire date';
$lang_module['content_tags_empty'] = 'Note: article do not have keywords';
$lang_module['content_tags_empty_auto'] = 'The system will automatically generate keywords stored at this article, you can disable auto-generated keywords in the management module';
$lang_module['content_advfeature'] = 'Advance setting';
$lang_module['content_description'] = 'Site description';
$lang_module['content_insart'] = 'Instant article';
$lang_module['content_instant_active'] = 'This is an instant message';
$lang_module['content_instant_template'] = 'Template';
$lang_module['content_instant_template1'] = 'Instant Article Template';
$lang_module['content_instant_templatenote'] = 'Leave blank ie use the default template';
$lang_module['content_instant_creatauto'] = 'Automatically generate instant messages from regular posts';
$lang_module['content_locked_bycat'] = 'Lock by categories';
$lang_module['showtooltip'] = 'Display tooltip';
$lang_module['showtooltip_position'] = 'Tooltip postition';
$lang_module['showtooltip_position_top'] = 'Top';
$lang_module['showtooltip_position_bottom'] = 'Bottom';
$lang_module['showtooltip_position_left'] = 'Left';
$lang_module['showtooltip_position_right'] = 'Right';
$lang_module['showtooltip_length'] = 'Số ký tự';
$lang_module['showhometext'] = 'Show hometext on view content';
$lang_module['htmlhometext'] = 'Use the editor for hometext';
$lang_module['show_no_image'] = 'Display image No-Image if post has no illustrations';
$lang_module['imgposition'] = 'Article image';
$lang_module['imgpositiondefault'] = 'Default configuration, Presentation Figure in the article when posting';
$lang_module['imgposition_0'] = 'Not show';
$lang_module['imgposition_1'] = 'Show left introduction';
$lang_module['imgposition_2'] = 'Show bellow introduction';
$lang_module['addtoblock'] = 'Add content to block';
$lang_module['delete_from_block'] = 'Delete block\'s article';
$lang_module['error_del_content'] = 'Error: System can\'t delete all block\'s article, please try agian';
$lang_module['msgnocheck'] = 'No topic selected';
$lang_module['facebookAppID'] = 'Facebook App ID';
$lang_module['facebookAppIDNote'] = '(Form: 1419186468293063, <a href="http://wiki.nukeviet.vn/nukeviet:admin:news:facebookapi" target="_blank">view detail</a>)';
$lang_module['socialbutton'] = 'Display social media buttons when viewing an article';
$lang_module['socialbutton_zalo_note'] = 'First of all, you need to declare the Zalo Official Account ID';
$lang_module['block'] = 'Blocks';
$lang_module['adddefaultblock'] = 'Select the default when creating article';
$lang_module['source_logo'] = 'Source logo';
$lang_module['topic_page'] = 'Topic page';
$lang_module['topic_del'] = 'Topic del';
$lang_module['topic_nocheck'] = 'Please select at least one article to be made';
$lang_module['topic_delete_confirm'] = 'Are you sure you want to delete from news groups related articles?';
$lang_module['topic_delete_success'] = 'Delete success!';
$lang_module['topic_nonews'] = 'There are currently no news articles related to any of these groups';
$lang_module['addtotopics'] = 'Add topic';
$lang_module['topic_update_success'] = 'Update successful';
$lang_module['topic_num_news'] = 'Topic';
$lang_module['siteinfo_publtime'] = 'Active posts';
$lang_module['siteinfo_users_send'] = 'Member posts';
$lang_module['siteinfo_pending'] = 'Pending posts';
$lang_module['siteinfo_expired'] = 'Expired posts';
$lang_module['siteinfo_exptime'] = 'Expire posts';
$lang_module['siteinfo_comment'] = 'Total comments';
$lang_module['siteinfo_comment_pending'] = 'Uncheck comments';
$lang_module['siteinfo_tags_incomplete'] = 'Number of tags without description';
$lang_module['group_content'] = 'Configure post messages in the Front-end';
$lang_module['group_addcontent'] = 'Add article';
$lang_module['group_postcontent'] = 'Add article without censoring';
$lang_module['group_editcontent'] = 'Allowed edit their own article';
$lang_module['group_delcontent'] = 'Allowed delete their own article';
$lang_module['admin'] = 'Decentralized management';
$lang_module['admin_permissions'] = 'Permissions';
$lang_module['admin_edit'] = 'Edit permissions';
$lang_module['admin_edit_user'] = 'Edit member\'s permissions';
$lang_module['admin_full_module'] = 'Full administrator module';
$lang_module['admin_module'] = 'Admin\'s module';
$lang_module['admin_module_for_user'] = 'You have most of the powers of the module, eliminating the function of decentralized management.';
$lang_module['admin_cat'] = 'Management\'s Category';
$lang_module['admin_cat_for_user'] = 'Your administrative powers in the categories';
$lang_module['admin_no_user_title'] = 'Empty module manager';
$lang_module['admin_no_user_content'] = 'You need appoint module manager';
$lang_module['admin_userid'] = 'User ID';
$lang_module['admin_username'] = 'Username';
$lang_module['admin_full_name'] = 'Full name';
$lang_module['admin_first_name'] = 'First name';
$lang_module['admin_last_name'] = 'Last name';
$lang_module['admin_email'] = 'Email';
$lang_module['firstname_lastname'] = 'Firstname and Lastname';
$lang_module['lastname_firstname'] = 'Lastname and Firstname';
$lang_module['permissions_admin'] = 'Management category';
$lang_module['permissions_add_content'] = 'Add article';
$lang_module['permissions_pub_content'] = 'Posted article';
$lang_module['permissions_app_content'] = 'Approved article';
$lang_module['permissions_edit_content'] = 'Edit article';
$lang_module['permissions_del_content'] = 'Delete article';
$lang_module['permissions_pub_error'] = 'Error: You can not post messages in category: %1$s';
$lang_module['permissions_sendspadmin_error'] = 'Error: You are not allowed to post to the editors at Category: %1$s';
$lang_module['permissions_pub_show_error'] = 'Error: You do not have to display the articles in Category: %1$s';
$lang_module['error_no_del_content_id'] = 'Error: The system does not delete the article id:';
$lang_module['structure_image_upload'] = 'The module\'s upload images are archived in the default into directory structure';
$lang_module['config_source'] = 'Configuration display writing source at detail information';
$lang_module['config_source_title'] = 'Show title of information source';
$lang_module['config_source_link'] = 'Show link of information source';
$lang_module['config_source_link_nofollow'] = 'Show link of information source (rel= "nofollow")';
$lang_module['config_source_logo'] = 'Show logo of information source';
$lang_module['tags'] = 'Tags manage';
$lang_module['add_tags'] = 'Add tag';
$lang_module['edit_tags'] = 'Edit tag';
$lang_module['tags_alias'] = 'Filter Vietnamese diacritics and other characters a-z, 0-9, - in the static link tags';
$lang_module['tags_all_link'] = 'View the description tags are not enabled, click here to see all tags';
$lang_module['tags_no_description'] = 'Tags no description';
$lang_module['input_title_blocks'] = 'Input title group';
$lang_module['input_keyword'] = 'Input keyword ';
$lang_module['input_tag'] = 'Input keyword ';
$lang_module['input_pseudonym'] = 'Input pseudonym ';
$lang_module['alias_empty_notice'] = 'Alias empty, the system will automatically create static link';
$lang_module['functional'] = 'Function';
$lang_module['featured'] = 'Featured news';
$lang_module['addtocat'] = 'Add featured article in the category';
$lang_module['delete_from_cat'] = 'Delete posts from category';
$lang_module['not_featured'] = 'No posts yet';
$lang_module['notification_post_queue'] = 'Approve post <strong>%s</strong> by <strong>%s</strong><em>%s</em>';
$lang_module['ad_block_show'] = 'Displaying the sub block';
$lang_module['ad_block_top'] = 'Block top category';
$lang_module['ad_block_bot'] = 'Block bottom category';
$lang_module['fbinsartmgs_100'] = 'Error: The article has HTML tags: <strong />% s  not supported by instant message. To select this article as an instant article, remove them, replace them with supported tags, or check the box to automatically convert your posts into instant posts. Note: at system conversion will automatically remove components that do not support or replace them with other appropriate components.';
$lang_module['fbinsartmgs_101'] = 'Error: The article has no content';
$lang_module['fbinsartmgs_102'] = 'Error: Your article has attributes for tags. To select this article as an instant article, remove them from the tab or tick the box to automatically convert your posts into instant posts. Note: at system conversion will automatically remove components that do not support or replace them with other appropriate components.';
$lang_module['dulicate_edit'] = 'The article <b>%s </b> is being edited by the account <b>%s</b> at %s. You may not edit this post until it is complete.';
$lang_module['dulicate_edit_admin'] = 'The article <b>%s </b> is being edited by the account <b>%s</b> at %s. Do you want to <b>Take over the editor of the post</b>?';
$lang_module['dulicate_takeover'] = 'Take over the editor of the post';
$lang_module['dulicate_edit_takeover'] = 'You have been take over by this account %s at %s. Your changes can not be saved to the system, please copy again to avoid losing your changes.';
$lang_module['setting_copy_news'] = 'Allowed to copy the article';
$lang_module['title_copy_news'] = 'Copy the article';
$lang_module['order_articles'] = 'Sort articles';
$lang_module['order_articles_0'] = 'Sort by post time';
$lang_module['order_articles_1'] = 'Custom sort, incremental numbering';
$lang_module['order_articles_number'] = 'No current arrangements';
$lang_module['order_articles_new'] = 'No new arrangements';
$lang_module['pick_layout'] = 'Choose layout';
$lang_module['pick_layout1'] = 'Post layout';
$lang_module['default_layout'] = 'Default';
$lang_module['setting_frontend_post'] = 'Configure the post area on the user page';
$lang_module['frontend_edit_alias'] = 'Allow custom static binding when posting new';
$lang_module['frontend_edit_layout'] = 'Allows you to customize the layout';
$lang_module['large_sys_message'] = 'Note: There are currently <strong>%s</strong> posts on the site, after posting more posts, this system will become a big system. To ensure server security, some features such as suspend, re-enable categories will be locked. Before posting, please check if the categories are deactive, if so please reactivate or delete the posts in it.';
$lang_module['fileattach'] = 'Attach files';
$lang_module['add'] = 'Add';
$lang_module['status_12'] = 'Save articles, send admin';
$lang_module['status_13'] = 'Save articles, send super admin';
$lang_module['error_edit'] = 'Posts are moderated moderators. You can not edit next.';
$lang_module['not_edit_by_admin'] = 'You have been hijacked to edit this post. Your changes can not be saved to the system, please copy again to avoid losing your changes.';
$lang_module['post_is_editing'] = 'is editing this article';
$lang_module['add_multiple_tags'] = 'Add multiple tags';
$lang_module['tag'] = 'Tags';
$lang_module['note_tags'] = 'Enter one tag per line, existing tags will be ignored';
$lang_module['author_manage'] = 'Author manage';
$lang_module['add_author'] = 'Add author';
$lang_module['edit_author'] = 'Edit author';
$lang_module['author_pseudonym'] = 'Pseudonym';
$lang_module['author_image'] = 'Avatar';
$lang_module['author_uid'] = 'User account';
$lang_module['author_select_account'] = 'Please select a user account';
$lang_module['author_description'] = 'Description';
$lang_module['author_pseudonym_empty'] = 'The pseudonym cannot be left blank';
$lang_module['author_pseudonym_error'] = 'The pseudonym is already in use. Please declare another pseudonym';
$lang_module['author_uid_empty'] = 'Please select a user account';
$lang_module['author_uid_error'] = 'The user account is already in use. Please select a different account';
$lang_module['author_unspecified_error'] = 'An unspecified error has occurred. Please try again later!';
$lang_module['author_add_time'] = 'Beginning time';
$lang_module['author_numnews'] = 'Articles';
$lang_module['author_status'] = 'Status';
$lang_module['author_status_0'] = 'Disabled';
$lang_module['author_status_1'] = 'Enabled';
$lang_module['history'] = 'Post History';
$lang_module['history_time'] = 'Time';
$lang_module['history_changefields'] = 'Changed data';
$lang_module['history_restore'] = 'Restore';
$lang_module['history_author'] = 'History maker';
$lang_module['history_restore_confirm'] = 'Are you sure to roll back this version?';
$lang_module['history_recovering'] = 'The system is restoring automatically, please wait';
$lang_module['history_restore_success'] = 'Successfully restored';
$lang_module['content_voice'] = 'Select audio files for the voices';
$lang_module['order'] = 'Order';
$lang_module['function'] = 'Function';
$lang_module['voice'] = 'Reading voice';
$lang_module['voice_manager'] = 'Voice setting';
$lang_module['voice_title'] = 'Title';
$lang_module['voice_description'] = 'Description';
$lang_module['voice_add'] = 'Add voice';
$lang_module['voice_edit'] = 'Edit voice';
$lang_module['voice_error_title'] = 'Error: Title cannot be left blank';
$lang_module['voice_error_exists'] = 'Error: Duplicate title';
