<?php 
/*
 *	Made by Haowa_Sai
 *  http://i9mc.top
 *
 *  License: MIT
 */

/*
 *  中文简体语言
 */
 
/*
 *  管理面板
 */
$admin_language = array(
	// 一般功能
	'admin_cp' => '管理员后台',
	'infractions' => 'Infractions',
	'invalid_token' => '错误的 token，请重试。',
	'invalid_action' => '错误的操作',
	'successfully_updated' => '更新完成',
	'settings' => '设定',
	'confirm_action' => '确认操作',
	'edit' => '编辑',
	'actions' => '动作',
	'task_successful' => '任务执行完成',
	
	// 管理员登录
	're-authenticate' => '请重新登录',
	
	// 管理员侧边栏
	'index' => '概览',
	'announcements' => '公告',
	'core' => '核心',
	'custom_pages' => '自定义页面',
	'general' => '一般',
	'forums' => '论坛',
	'users_and_groups' => '用户组',
	'minecraft' => 'Minecraft',
	'style' => '样式',
	'addons' => '插件',
	'update' => '更新',
	'misc' => '杂项',
	'help' => '帮助',
	
	// 管理员索引页
	'statistics' => '统计资料',
	'registrations_per_day' => '每日注册人数（最近七天）',
	
	// 管理通知页
	'current_announcements' => '目前的公告',
	'create_announcement' => '建立一个公告',
	'announcement_content' => '公告內容',
	'announcement_location' => '公告位置',
	'announcement_can_close' => '可以关闭公告吗？',
	'announcement_permissions' => '公告权限',
	'no_announcements' => '目前还没有建立任何公告。',
	'confirm_cancel_announcement' => '你确定要取消这个公告吗？',
	'announcement_location_help' => '按住 Ctrl 并点选以选择多个页面',
	'select_all' => '全选',
	'deselect_all' => '取消全选',
	'announcement_created' => '公告建立完成',
	'please_input_announcement_content' => '请输入公告内容并且选择一个类型',
	'confirm_delete_announcement' => '你确定要删除这个公告吗？',
	'announcement_actions' => '公告操作',
	'announcement_deleted' => '公告刪除完成',
	'announcement_type' => '公告类型',
	'can_view_announcement' => '可以查看公告吗？',
	
	// 管理核心页面
	'general_settings' => '一般设定',
	'modules' => '模組',
	'module_not_exist' => '找不到该模组！',
	'module_enabled' => '模组启用完成。',
	'module_disabled' => '模组停用完成。',
	'site_name' => '网站名称',
	'language' => '语言',
	'voice_server_not_writable' => '无法写入 core/voice_server.php，请检查档案权限。',
	'email' => '电子邮件位址',
	'incoming_email' => 'Incoming 电子邮箱位址',
	'outgoing_email' => 'Outgoing 电子邮箱位址',
	'outgoing_email_help' => '只有在已启用 PHP mail() 函式的状态之下才需要填写',
	'use_php_mail' => '使用 PHP mail() 函式',
	'use_php_mail_help' => '建议启用。如果无法发送电子邮件，请停用此项并且进入 core/email.php 进行电子邮箱的设置。',
	'use_gmail' => '使用 Gmail 来发送电子邮件',
	'use_gmail_help' => '只有在 PHP mail() 函式停用的时候才可以使用。如果你选择不使用 Gmail，系统将会使用 SMTP。两种情况下都需要你在 core/email.php 中进行设置。',
	'enable_mail_verification' => '启用电子邮件验证',
	'enable_email_verification_help' => '若你启用此项，新用户注册时将会被要求验证他们的电子邮件位址才能完成注册。',
	'explain_email_settings' => '若你停用了「使用 PHP mail() 函式」 选项，则以下项目为必填。你可以在<a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-Gmail-or-SMTP-with-Nameless" target="_blank">我们的WIKI页面</a>上找到更多关于此项设定的数据。',
	'email_config_not_writable' => '无法写入 <strong>core/email.php</strong>，请检查档案权限。',
	'pages' => '页面',
	'enable_or_disable_pages' => '在这里启用或停用页面。',
	'enable' => '启用',
	'disable' => '停用',
	'maintenance_mode' => '论坛维护模式',
	'forum_in_maintenance' => '论坛目前处于维护模式中',
	'unable_to_update_settings' => '无法更新设定，请确认所有字段都已填入数据。',
	'editing_google_analytics_module' => '设定 Google Analytics 模組',
	'tracking_code' => '追踪代码',
	'tracking_code_help' => '在这里填入你的 Google Analytics 追踪代码，包括被 script 标签包住的部分。',
	'google_analytics_help' => '查看<a href="https://support.google.com/analytics/answer/1008080?hl=en#GA" target="_blank">这个教学</a>以了解更多，跟隨步骤一至步骤三。',
	'social_media_links' => '社交媒体连接',
	'youtube_url' => 'YouTube 链接',
	'twitter_url' => 'Twitter 链接（不要在結尾加上「/」）',
	'twitter_dark_theme' => '使用黑色的 Twitter 布景主题',
	'twitter_widget_id' => 'Twitter 小工具 ID',
	'google_plus_url' => 'Google+ 链接',
	'facebook_url' => 'Facebook 链接',
	'registration' => '注册',
	'registration_warning' => '若停用此模块，新用户将无法在本站注册。',
	'google_recaptcha' => '启用 Google reCAPTCHA',
	'recaptcha_site_key' => 'reCAPTCHA Site Key',
	'recaptcha_secret_key' => 'reCAPTCHA Secret Key',
	'registration_terms_and_conditions' => '注册条款',
	'voice_server_module' => '语音服务器模块',
	'only_works_with_teamspeak' => '此板块目前仅支持 TeamSpeak 与 Discord',
	'discord_id' => 'Discord 服务器 ID',
	'voice_server_help' => '请输入 ServerQuery 用户的资料',
	'ip_without_port' => 'IP 位址（不包含联机端口）',
	'voice_server_port' => '端口（一般为 25565）',
	'virtual_port' => '虚拟端口（一般为 9987）',
	'permissions' => '权限：',
	'view_applications' => '查看申请表单',
	'accept_reject_applications' => '接受/拒绝申请',
	'questions' => '问题：',
	'question' => '问题',
	'type' => '类别',
	'options' => '选项',
	'options_help' => '每个选项占一行，可以留空（仅下拉菜单）',
	'no_questions' => '还没有新增任何问题。',
	'new_question' => '新的问题',
	'editing_question' => '编辑问题',
	'delete_question' => '刪除问题',
	'dropdown' => '下拉菜单',
	'text' => '文字',
	'textarea' => '文字区块',
	'question_deleted' => '问题已删除',
	'name_required' => '昵称是必需的。',
	'question_required' => '问题是必需的。',
	'name_minimum' => '名称必须至少为2个字符。',
	'question_minimum' => '问题必须至少包含2个字符。',
	'name_maximum' => '名称不能超过16个字符。',
	'question_maximum' => '问题不能超过16个字符。',
	'use_followers' => '使用追随者',
	'use_followers_help' => '如果停用此选项，系统将会启用好友系統。',
	
	// 管理自定义页面
	'click_on_page_to_edit' => '点选一个页面来编辑',
	'page' => '页面：',
	'url' => '网址：',
	'page_url' => '页面网址',
	'page_url_example' => '（包含最前面的「/」，例如「/help/」）',
	'page_title' => '页面标题',
	'page_content' => '页面內容',
	'new_page' => '新的页面',
	'page_successfully_created' => '页面建立完毕',
	'page_successfully_edited' => '页面编辑完毕',
	'unable_to_create_page' => '页面建立失败',
	'unable_to_edit_page' => '页面编辑失败',
	'create_page_error' => '请确认你输入的网址的长度在1 ~ 20个字元之内，标题在1 ~ 30个字元之内，且内容在5 ~ 20480个字元之内。',
	'delete_page' => '删除页面',
	'confirm_delete_page' => '你确定要删除这个页面吗？',
	'page_deleted_successfully' => '页面删除完毕',
	'page_link_location' => '页面连接显示位置：',
	'page_link_navbar' => '导航列',
	'page_link_more' => '导航列的「更多」下拉菜单',
	'page_link_footer' => '页尾',
	'page_link_none' => '不显示连接',
	'page_permissions' => '页面权限',
	'can_view_page' => '可查看页面：',
	'redirect_page' => '重定向页面',
	'redirect_link' => '重定向链接',
	'page_icon' => '页面ICON',
	
	// 管理论坛页面
	'labels' => '主题标签',
	'new_label' => '新的标签',
	'no_labels_defined' => '尚未定义任何标签',
	'label_name' => '标签名称',
	'label_type' => '标签类型',
	'label_forums' => '标签论坛',
	'label_creation_error' => '标签建立失败。请确认该标签的名字不超过32个字符，且选择了一个类型。',
	'confirm_label_deletion' => '你确定要删除这个标签吗？',
	'editing_label' => '编辑标签',
	'label_creation_success' => '标签建立完毕',
	'label_edit_success' => '标签编辑完毕',
	'label_default' => '预设',
	'label_primary' => '主要',
	'label_success' => '成功',
	'label_info' => '资讯',
	'label_warning' => '警告',
	'label_danger' => '危险',
	'new_forum' => '新的论坛',
	'forum_layout' => '论坛样式',
	'table_view' => '显示版块列表',
	'latest_discussions_view' => '展示最新文章',
	'create_forum' => '建立版块',
	'forum_name' => '版块名称',
	'forum_description' => '版块描述',
	'delete_forum' => '刪除版块',
	'move_topics_and_posts_to' => '将主題与文章移动至',
	'delete_topics_and_posts' => '刪除主題与文章',
	'parent_forum' => '父级版块',
	'has_no_parent' => '没有父级',
	'forum_permissions' => '版块权限',
	'can_view_forum' => '可以查看版块',
	'can_create_topic' => '可以建立主題',
	'can_post_reply' => '可以发表回复',
	'display_threads_as_news' => '将讨论显示在首页上的新闻栏',
	'input_forum_title' => '输入一个版块标签。',
	'input_forum_description' => '输入一个讨论区描述（你可以使用 HTML 语法）。',
	'forum_name_minimum' => '版块名称的最小值为不小于2个字元。',
	'forum_description_minimum' => '版块描述的最小值为不小于2个字元。',
	'forum_name_maximum' => '版块名称的最大值为不超过150个字元。',
	'forum_description_maximum' => '版块描述的最大值为不超过255个字元。',
	'forum_type_forum' => '论坛',
	'forum_type_category' => '作为类别使用',
	
	// 管理用户组页面
	'users' => '用户',
	'new_user' => '新的用户',
	'created' => '创建',
	'user_deleted' => '用户已刪除',
	'validate_user' => '验证这个用户',
	'update_uuid' => '更新 UUID',
	'unable_to_update_uuid' => 'UUID 更新失败。',
	'update_mc_name' => '更新 Minecraft 名称',
	'reset_password' => '重设密码',
	'punish_user' => '惩罚用户',
	'delete_user' => '刪除用户',
	'minecraft_uuid' => 'Minecraft UUID',
	'ip_address' => 'IP 位址',
	'ip' => 'IP 位址：',
	'other_actions' => '其他操作：',
	'disable_avatar' => '停用大头照',
	'enable_avatar' => '启用大头照',
	'confirm_user_deletion' => '你确定要删除用户「{x}」吗？', // 不能替换 "{x}"
	'groups' => '组别',
	'group' => '组别',
	'group' => '组别 2',
	'new_group' => '新的组别',
	'id' => 'ID',
	'name' => '名称',
	'create_group' => '建立组别',
	'group_name' => '组别名称',
	'group_html' => '组别 HTML',
	'group_html_lg' => '组别 HTML Large',
	'donor_group_id' => '赞助者商品 ID',
	'donor_group_id_help' => '<p>该组别的 Buycraft、MinecraftMarket 或 MCStock 商品 ID。</p><p>此处可以留空。</p>',
	'donor_group_instructions' => 	'<p>赞助者的组别必须以价格<strong>从小到大</strong>的顺序依次建立。</p>
									<p>例如，一个 $100 RMB的项目必须在一个 $200 RMB的项目之前建立好。</p>',
	'delete_group' => '刪除组别',
	'confirm_group_deletion' => '你确定要刪除组别 {x} 吗？', // 不能替换 "{x}"
	'group_staff' => '这是管理员组别吗？',
	'group_modcp' => '这个组别可以查看 ModCP 吗？',
	'group_admincp' => '这个组别可以查看 AdminCP 吗？',
	'group_name_required' => '你必须填写一个组别名称。',
	'group_name_minimum' => '组别名称最少要有2个字元。',
	'group_name_maximum' => '组别名称最多不能超过20个字元。',
	'html_maximum' => '组别HTML最多不能超过1024个字元。',
	'select_user_group' => '该用户必须在一个组别内。',
	'uuid_max_32' => 'UUID 最多不能超过32个字元。',
	'cant_delete_root_user' => '无法删除 root 用户！',
	'cant_modify_root_user' => '无法变更 root 用户的组别.',
	
	// Minecraft管理页面
	'minecraft_settings' => 'Minecraft 设定',
	'use_plugin' => '启用 Nameless API？',
	'force_avatars' => '强制使用 Minecraft 大头照',
	'uuid_linking' => '启用 UUID 连接',
	'use_plugin_help' => '启用 API 与即将到来的服务器插件将让你能够同步 rank，且在游戏内注册本站的账号，以及检举玩家。',
	'uuid_linking_help' => '如果停用这个选项，用户账号将不会与其 UUID 连接。强烈建议启用此选项。',
	'plugin_settings' => '插件设定',
	'confirm_api_regen' => '你确定要产生一个新的 API 密钥吗？',
	'servers' => '服务器',
	'new_server' => '新的服务器',
	'confirm_server_deletion' => '你确定要移除这个服务器吗？',
	'main_server' => '主服务器',
	'main_server_help' => '玩家连线的服务器。一般而言这个服务器会是个 BungeeCord 实例。',
	'choose_a_main_server' => '选择一个主服务器 ...',
	'external_query' => '使用外部查询',
	'external_query_help' => '使用外部 API 来查询 Minecraft 服务器。如果内置的查询功能无法使用再启用此项，否则我们强烈建议停用此项。',
	'editing_server' => '正在编辑服务器 {x}', // 不能替换 "{x}"
	'server_ip_with_port' => '服务器 IP 位址（含联机端口）（可为数字或网域名称）',
	'server_ip_with_port_help' => '这是用户会看到的 IP 位址，系统不会查询它。',
	'server_ip_numeric' => '服务器 IP 位址（含联机端口）（仅数字与小数点）',
	'server_ip_numeric_help' => '系统会查询这个IP位址，请确认它仅含数字与小数点。用户不会看到此项。',
	'show_on_play_page' => '要显示在「游玩」页面上吗？',
	'pre_17' => 'Pre 1.7 Minecraft 版本',
	'server_name' => '服务器名称',
	'invalid_server_id' => '服务器 ID 错误',
	'show_players' => '在「游玩」页面上显示玩家列表',
	'server_edited' => '服务器编辑完成',
	'server_created' => '服务器建立完成',
	'query_errors' => '查询发生的错误',
	'query_errors_info' => '你可以用以下的错误信息来诊断内部服务器查询的问题。',
	'no_query_errors' => '没有任何查询错误',
	'date' => '日期：',
	'port' => '联机端口：',
	'viewing_error' => '查看错误',
	'confirm_error_deletion' => '你确定要删除这个错误吗？',
	'display_server_status' => '显示服务器状态模块',
	'server_name_required' => '你必须输入一个服务器名称。',
	'server_ip_required' => '你必须输入该服务器的 IP 位址。',
	'server_name_minimum' => '服务器名称最少要有 2 个字元。',
	'server_ip_minimum' => '服务器 IP 位址最少要有 2 个字元。',
	'server_name_maximum' => '服务器名称最多可以有 20 个字元。',
	'server_ip_maximum' => '服务器 IP 位址最多可以有 64 个字元。',
	'purge_errors' => '清除错误',
	'confirm_purge_errors' => '你确定要清除所有查询错误吗？',
	'avatar_type' => '大头照类型',
	'custom_usernames' => '强制使用 Minecraft 名称',
	'mcassoc' => 'mcassoc',
	'use_mcassoc' => '使用 mcassoc',
	'use_mcassoc_help' => 'mcassoc 可以确保用户拥有他们正用來注册本站账号的 Minecraft 账号',
	'mcassoc_key' => 'mcassoc 共享密钥',
	'invalid_mcassoc_key' => 'mcassoc 密钥不正确',
	'mcassoc_instance' => 'mcassoc Instance',
	'mcassoc_instance_help' => '在<a href="http://jsbin.com/jadofehoqu/1/" target="_blank">这里</a>建立一个 Instance 代码',
	'mcassoc_key_help' => '在<a href="https://mcassoc.lukegb.com/" target="_blank">这里</a>取得你的 mcassoc 密钥',
	'enable_name_history' => 'Enable profile username history?',
	
	// 管理主题、模板和加载项
	'themes' => '布景主题',
	'templates' => '模板',
	'installed_themes' => '已安装的布景主題',
	'installed_templates' => '已安装的模板',
	'installed_addons' => '已安装的插件',
	'install_theme' => '安装布景主題',
	'install_template' => '安装模板',
	'install_addon' => '安装插件',
	'install_a_theme' => '安装一个布景主題',
	'install_a_template' => '安装一个模板',
	'install_an_addon' => '安装一个插件',
	'active' => '使用中',
	'activate' => '启用',
	'deactivate' => '停用',
	'theme_install_instructions' => '请上传布景主题到 <strong>styles/themes</strong>，然后点选下方的「扫描」按钮。',
	'template_install_instructions' => '请上传模板到 <strong>styles/templates</strong>，然后点选下方的「扫描」按钮。',
	'addon_install_instructions' => '请上传插件到 <strong>addons</strong>，然后点选下方的「扫描」按钮。',
	'addon_install_warning' => '安装插件有一定的风险，安装前请备份你的档案与数据库',
	'scan' => '扫描',
	'theme_not_exist' => '找不到该布景主題。',
	'template_not_exist' => '找不到该模板。',
	'addon_not_exist' => '找不到该插件。',
	'style_scan_complete' => '完成，所有的新样式都安装好了。',
	'addon_scan_complete' => '完成，所有的新插件都安装好了。',
	'theme_enabled' => '布景主題启用完成。',
	'template_enabled' => '模板启用完成。',
	'addon_enabled' => '插件启用完成。',
	'theme_deleted' => '布景主題刪除完成。',
	'template_deleted' => '模板刪除完成。',
	'addon_disabled' => '插件停用完成。',
	'inverse_navbar' => '反转导航列颜色',
	'confirm_theme_deletion' => '你确定要刪除布景主題 <strong>{x}</strong>吗？<br /><br />该布景主題将会自 <strong>styles/themes</strong> 刪除。', // Don't replace {x}
	'confirm_template_deletion' => '你确定要刪除模板 <strong>{x}</strong>吗？<br /><br />该模板将会自 <strong>styles/templates</strong> 刪除。', // Don't replace {x}
	'unable_to_enable_addon' => '无法启用加载项。请确保它是有效的NamelessMC加载项。',
	
	// 管理杂项页
	'other_settings' => '其他设定',
	'enable_error_reporting' => '显示错误',
	'error_reporting_description' => '这应该只拿来作除错用，非常建议停用此项目。',
	'display_page_load_time' => '显示页面加载时间',
	'page_load_time_description' => '若启用此项，页尾将会显示页面加载时间。',
	'reset_website' => '重置网站',
	'reset_website_info' => '这将会重设本站的设定。<strong>插件将会被停用，并不会被删除，且他们的设定将不会被变更。</strong>你设定的 Minecraft 服务器数据也会被保留。',
	'confirm_reset_website' => '你确定要重设本站的设定吗？',
	
	// 管理更新页
	'installation_up_to_date' => '已经是最新版本。',
	'update_check_error' => '无法检查更新，请稍后再重试。',
	'new_update_available' => '可以进行更新',
	'your_version' => '目前的版本：',
	'new_version' => '新的版本：',
	'download' => '下载',
	'update_warning' => '警告：请确认你已经下载了更新压缩档并已上传了里面的数据！'
);

/*
 *  导航栏
 */
$navbar_language = array(
	// 仅文本
	'home' => '主页',
	'play' => '游玩',
	'forum' => '论坛',
	'more' => '更多',
	'staff_apps' => '申请成为版主',
	'view_messages' => '查看讯息',
	'view_alerts' => '查看通知',
	
	// ICON - 将显示在文本之前
	'home_icon' => '',
	'play_icon' => '',
	'forum_icon' => '',
	'staff_apps_icon' => ''
);

/*
 * 与用户相关
 */
$user_language = array(
	// 登录页面
	'create_an_account' => '建立一个账号',
	'authme_password' => 'AuthMe 密码',
	'username' => '用户名称',
	'minecraft_username' => 'Minecraft 名称',
	'email' => '电子邮件',
	'user_title' => 'Title',
	'email_address' => '电子邮件位址',
	'date_of_birth' => '生日',
	'location' => '所在地区',
	'password' => '密码',
	'confirm_password' => '确定密码',
	'i_agree' => '我同意',
	'agree_t_and_c' => '当你点下<strong class="label label-primary">注册</strong>按钮，即表示您同意我们的<a href="#" data-toggle="modal" data-target="#t_and_c_m">服务条款</a>。',
	'register' => '注册',
	'sign_in' => '登录',
	'sign_out' => '退出',
	'terms_and_conditions' => '服务条款',
	'successful_signin' => '登录成功',
	'incorrect_details' => '错误的用户名成或密码',
	'remember_me' => '记住我',
	'forgot_password' => '忘记密码',
	'must_input_username' => '你必须输入用户名成。',
	'must_input_password' => '你必须输入密码。',
	'inactive_account' => '你的账号目前已被停用，你是不是有要求重设密码？',
	'account_banned' => '你的账号已被封禁。',
	'successfully_logged_out' => '退出成功。',
	'signature' => '签名档',
	'registration_check_email' => '请到你的电子信箱内寻找账号启用连接。在你点选该连接之前，你将无法登入。',
	'unknown_login_error' => '抱歉，将您登入时发生未知错误。请稍后再重试。',
	'validation_complete' => '感謝您的注册！您现在可以登录。',
	'validation_error' => '无法处理您的请求。请试着重新点选该连接。',
	'registration_error' => '请确认你填写了所有的字段，且你的用户名称的长度在3 ~ 20个字元之间，密码长度在6 ~ 30个字元之间。',
	'username_required' => '请输入用户名称。',
	'password_required' => '请输入密码。',
	'email_required' => '请输入电子邮件位址。',
	'mcname_required' => '请输入 Minecraft 名称。',
	'accept_terms' => '你必须同意服务条款以继续',
	'invalid_recaptcha' => 'reCAPTCHA 响应验证失败。',
	'username_minimum_3' => '你的用户名称最少要有 3 个字元。',
	'username_maximum_20' => '你的用户名称长度不能超过 20 个字元。',
	'mcname_minimum_3' => '你的 Minecraft 名称最少要有 3 个字元。',
	'mcname_maximum_20' => '你的 Minecraft 名称长度不能超过 20 个字元。',
	'password_minimum_6' => '你的密码最少要有 6 个字元。',
	'password_maximum_30' => '你的密码长度不能超过 20 个字元。',
	'passwords_dont_match' => '两次輸入的密码不一致。',
	'username_mcname_email_exists' => '你的用户名称、Minecraft 名称或电子邮件位址已被使用。你是不是已经注册过了？',
	'invalid_mcname' => '你输入的 Minecraft 名称并不是一个合法的账号',
	'mcname_lookup_error' => '无法与 Mojang 服务器验证您的账号，请稍候重试。',
	'signature_maximum_900' => '你的签名档长度不能超过 900 个字元。',
	'invalid_date_of_birth' => '请输入一个正确的生日。',
	'location_required' => '请输入所在地区。',
	'location_minimum_2' => '你的所在地区名称长度至少要 2 个字元。',
	'location_maximum_128' => '你的所在地区名称长度最多不可超过 128 个字元。',
	'verify_account' => '验证账号',
	'verify_account_help' => '请跟随下方的指示以验证我们认为您有问题的Minecraft账号。',
	'verification_failed' => '验证失败，请稍后再试一次。',
	'verification_success' => '验证完成！您现在可以登入。',
	'complete_signup' => '完成注册',
	'registration_disabled' => '注册功能目前已被停用。',
	
	// 用户CP
	'user_cp' => '个人设置',
	'no_file_chosen' => '未选择任何档案',
	'private_messages' => '私人讯息',
	'profile_settings' => '个人资料设置',
	'your_profile' => '你的主页',
	'topics' => '主題',
	'posts' => '文章',
	'reputation' => '声望',
	'friends' => '好友',
	'alerts' => '通知',
	
	// 信息
	'new_message' => '新的讯息',
	'no_messages' => '沒有讯息',
	'and_x_more' => '还有 {x} 个', // 不能替换 "{x}"
	'system' => '系统',
	'message_title' => '讯息标题',
	'message' => '讯息',
	'to' => 'To:',
	'separate_users_with_comma' => '以半角逗点来区隔用户（「,」）',
	'viewing_message' => '正在查看讯息',
	'delete_message' => '刪除讯息',
	'confirm_message_deletion' => '你确定要刪除这个讯息吗？',
	
	// 配置文件设置
	'display_name' => '显示名称',
	'upload_an_avatar' => '上传一张大头照（你只能上传 jpg、png 或 gif 格式）：',
	'use_gravatar' => '使用 Gravatar',
	'change_password' => '变更密码',
	'current_password' => '现在的密码',
	'new_password' => '新的密码',
	'repeat_new_password' => '重复新的密码',
	'password_changed_successfully' => '密码重置完成',
	'incorrect_password' => '现在的密码输入错误',
	'update_minecraft_name_help' => '这将会把你在本站的用户名称变更为你现在的Minecraft用户名称。你每隔30天可以执行一次此动作。',
	'unable_to_update_mcname' => '无法更新 Minecraft 用户名称.',
	'display_age_on_profile' => '在个人资料上显示年龄',
	'two_factor_authentication' => '双因素验证',
	'enable_tfa' => '启用双因素验证',
	'tfa_type' => '双因素验证类型：',
	'authenticator_app' => '双因素验证 App',
	'tfa_scan_code' => '请在你的双因素验证应用程序内扫描这个 QR code：',
	'tfa_code' => '如果你的设备没有相机，或是你无法扫描QR code，请手动输入这个代码：',
	'tfa_enter_code' => '请将此代码输入到你的双因素验证应用程序内：',
	'invalid_tfa' => '代码错误，请重试。',
	'tfa_successful' => '双因素验证设定完成。从现在开始，你每次登入我们都会要求你进行双因素验证。',
	'confirm_tfa_disable' => '你确定要停用双因素验证吗？',
	'tfa_disabled' => '双因素验证停用完成。',
	'tfa_enter_email_code' => '我们已经传送了一个验证码到你的电子邮件位址，请输入该验证码：',
	'tfa_email_contents' => '有人尝试登入你的账号。如果那是你，当你被要求输入双因素验证代码时，请输入以下的代码。如果那不是你，你可以忽略这封电子邮件，不过我们建议你重设你的密码。这个代码在十分钟内有效。',
	
	// 通知
	'viewing_unread_alerts' => '正在查看未读的通知。标记为<a href="/user/alerts/?view=read"><span class="label label-success">已读</span></a>。',
	'viewing_read_alerts' => '正在查看已读的通知。标记为<a href="/user/alerts/"><span class="label label-warning">未读</span></a>。',
	'no_unread_alerts' => '你没有未读的通知。',
	'no_alerts' => '没有通知',
	'no_read_alerts' => '你没有已读的通知。',
	'view' => '视图',
	'alert' => '通知',
	'when' => '何时',
	'delete' => '删除',
	'tag' => '用户标记',
	'tagged_in_post' => '你在一则文章內被标记',
	'report' => '举报',
	'deleted_alert' => '通知刪除完成',
	
	// 警告
	'you_have_received_a_warning' => '您收到来自 {x} 的警告，日期 {y}.', // 不能替换 "{x}" 和 "{y}"
	'acknowledge' => '确认',
	
	// 忘记密码
	'password_reset' => '密码重置',
	'email_body' => '你因为请求重设密码而受到了这封电子邮件。若你要重设你的密码，请点选这个连接：', // 密码重置电子邮件的正文
	'email_body_2' => '如果你没有要重设你的密码，直接忽略这封电子邮件即可。',
	'password_email_set' => '完成。请查看您的电子邮件以继续。',
	'username_not_found' => '找不到这个用户名称。',
	'change_password' => '变更密码',
	'your_password_has_been_changed' => '密码变更完成。',
	
	// 配置文件页
	'profile' => '主意',
	'player' => '玩家',
	'offline' => '离线',
	'online' => '在线',
	'pf_registered' => '注册日期：',
	'pf_posts' => '文章数：',
	'pf_reputation' => '声望：',
	'user_hasnt_registered' => '这个人尚未在本站注册',
	'user_no_friends' => '这个人还没有加任何好友',
	'send_message' => '传送一个讯息',
	'remove_friend' => '刪除好友',
	'add_friend' => '添加好友',
	'last_online' => '最近一次上线：',
	'find_a_user' => '找一个人：',
	'user_not_following' => '这个人没有追隨任何人。',
	'user_no_followers' => '没有人追隨这个边缘人。',
	'following' => '跟随',
	'followers' => '追随者',
	'display_location' => '來自 {x}。', // 不能替换 {x}, 是用户的位置
	'display_age_and_location' => '{x} 岁，來自 {y}。', // 不能替换 {x} 用户的年龄, 和 {y} 来自的地方
	'write_on_user_profile' => '在 {x} 的主页上写些什么吧 ...', // 不能替换 {x}
	'write_on_own_profile' => '在你的主頁上写些什么吧 ...',
	'profile_posts' => '简介帖子',
	'no_profile_posts' => '尚未发布个人资料。',
	'invalid_wall_post' => '更改无效。请确保您的帖子长度在2到2048个字符之间。.',
	'about' => '关于',
	'reply' => '回复',
	'x_likes' => '{x} 个赞', // 不能替换 {x}
	'likes' => '赞数',
	'no_likes' => '没有任何赞',
	'post_liked' => '给了该文章一个赞。',
	'post_unliked' => '收回了对该文章的赞。',
	'no_posts' => '没有文章。',
	'last_5_posts' => '最新的五篇文章',
	'follow' => '追踪',
	'unfollow' => '取消追踪',
	'name_history' => 'Minecraft 名称历史',
	'changed_name_to' => '在 {y} 变更为 {x}', // 不能替换 {x} 和 {y}
	'original_name' => '起初的名字：',
	'name_history_error' => '无法取得用户名称变更历史。',
	
	// 版主申请
	'staff_application' => '版主申请',
	'application_submitted' => '表单提交完成。',
	'application_already_submitted' => '你已经提交了一个申请表单，前一个申请必须完成以提交另一个。',
	'not_logged_in' => '登录以继续',
	'application_accepted' => '您的版主申请已被接受。',
	'application_rejected' => '您的版主申请已被驳回。'
);

/*
 *  适度相关
 */
$mod_language = array(
	'mod_cp' => '版主后台',
	'overview' => '概览',
	'reports' => '举报',
	'punishments' => '处理',
	'staff_applications' => '版主申请表单',
	
	// 惩罚
	'ban' => 'Ban',
	'unban' => '取消 Ban',
	'warn' => '警告',
	'search_for_a_user' => '搜索用户',
	'user' => '用户：',
	'ip_lookup' => 'IP 位置查询：',
	'registered' => '注册时间',
	'reason' => '原因：',
	'cant_ban_root_user' => '无法处罚 root 用户！',
	'invalid_reason' => '请输入一个 2 ~ 256 字长的理由。',
	'punished_successfully' => '惩处增加完成。',
	
	// 举报
	'report_closed' => '举报已关闭',
	'new_comment' => '新的回复',
	'comments' => '回复',
	'only_viewed_by_staff' => '只有版主可以查看',
	'reported_by' => '检举人：',
	'close_issue' => '关闭问题',
	'report' => '举报：',
	'view_reported_content' => '查看报告内容',
	'no_open_reports' => '没有待受理的举报',
	'user_reported' => '用户报告',
	'type' => '类型',
	'updated_by' => '更新人',
	'forum_post' => '论坛帖子',
	'user_profile' => '用户主页',
	'comment_added' => '已新增回复。',
	'new_report_submitted_alert' => '{x} 刚刚检举了 {y}', // 不能替换 "{x}" 和 "{y}"
	'ingame_report' => '游戏内的检举',
	
	// 版主申请
	'comment_error' => '请确认您的回复在2 ~ 2048个字之内。',
	'viewing_open_applications' => '正在查看<span class="label label-info">待受理的</span>申请表单。<a href="/mod/applications/?view=accepted"><span class="label label-success">变更状态为接受</span></a>或<a href="/mod/applications/?view=declined"><span class="label label-danger">拒绝</span></a>.',
	'viewing_accepted_applications' => '正在查看<span class="label label-success">被接受的</span>申请表单。<a href="/mod/applications/"><span class="label label-info">变更状态为待受理</span></a>或<a href="/mod/applications/?view=declined"><span class="label label-danger">变更为拒绝</span></a>.',
	'viewing_declined_applications' => '正在查看<span class="label label-danger">被拒绝的</span>申请表单。<a href="/mod/applications/"><span class="label label-info">变更状态为待受理</span></a>或<a href="/mod/applications/?view=accepted"><span class="label label-success">变更为接受</span></a>.',
	'time_applied' => '申请时间',
	'no_applications' => '在此分类中沒有任何申请表单',
	'viewing_app_from' => '从 {x} 查看应用程序', // 不能替换 "{x}"
	'open' => '待受理',
	'accepted' => '已接受',
	'declined' => '已拒绝',
	'accept' => '接受',
	'decline' => '拒绝',
	'new_app_submitted_alert' => '{x} 提交了新的申请表单' // 不能替换 "{x}"
);

/* 
 *  概述
 */
$general_language = array(
	// 主页
	'news' => '资讯',
	'social' => '玩家讨论群',
	'join' => '加入',
	
	// 一般条款
	'submit' => '提交',
	'close' => '关闭',
	'cookie_message' => '<strong>本站使用 Cookie 以提升您的体验。</strong><p>若您继续浏览或使用本站，我们将视您同意我们使用它们。</p>',
	'theme_not_exist' => '找不到你选择的布景主题。',
	'confirm' => '确认',
	'cancel' => '取消',
	'guest' => '访客',
	'guests' => '访客',
	'back' => '返回',
	'search' => '搜寻',
	'help' => '帮助',
	'success' => '成功',
	'error' => '错误',
	'view' => '查看',
	'info' => '資讯',
	'next' => 'Next',
	
	// 玩家页面
	'connect_with' => '服务器的 IP 位址：{x}', // 不能替换 {x}
	'online' => '在线',
	'offline' => '离线',
	'status' => '状态：',
	'players_online' => '线上玩家数量：',
	'queried_in' => '查询所用时间：',
	'server_status' => '服务器状态',
	'no_players_online' => '目前没有玩家在線上。',
	'1_player_online' => '当前在线只有一个玩家.',
	'x_players_online' => '目前有 {x} 位玩家游玩当中。', // 不能替换 {x}
	
	// 其他
	'page_loaded_in' => '页面载入时间：{x} 秒', // 不能替换 {x}; 's' stands for 'seconds'
	'none' => '无',
	'404' => '抱歉，我们找不到该页面。请联系站长：QQ1710562017。'
);

/* 
 *  论坛
 */
$forum_language = array(
	// 最新讨论视图
	'forums' => '版块',
	'discussion' => '讨论',
	'stats' => '统计资料',
	'last_reply' => '最新的回复',
	'ago' => '之前',
	'by' => '作者：',
	'in' => '在',
	'views' => '次浏览',
	'posts' => '篇文章',
	'topics' => '个主題',
	'topic' => '主題',
	'statistics' => '统计',
	'overview' => '概览',
	'latest_discussions' => '最新的主题',
	'latest_posts' => '最新的文章',
	'users_registered' => '已注册的用户：',
	'latest_member' => '最新注册的用户：',
	'forum' => '版块',
	'last_post' => '最新的文章',
	'no_topics' => '这里还没有任何主題',
	'new_topic' => '新的主題',
	'subforums' => '子版块：',
	
	// 查看主题视图
	'home' => '主頁',
	'topic_locked' => '主題已关闭',
	'new_reply' => '新的回复',
	'mod_actions' => '管理操作',
	'lock_thread' => '关闭主题',
	'unlock_thread' => '打开主题',
	'merge_thread' => '合并主题',
	'delete_thread' => '刪除主题',
	'confirm_thread_deletion' => '你确定要刪除这个主题吗？',
	'move_thread' => '移动主题',
	'sticky_thread' => '置顶主题',
	'report_post' => '举报文章',
	'quote_post' => '引用文章',
	'delete_post' => '刪除文章',
	'edit_post' => '编辑文章',
	'reputation' => '声望',
	'confirm_post_deletion' => '你确定要刪除此篇文章吗？',
	'give_reputation' => '给予声望',
	'remove_reputation' => '移除声望',
	'post_reputation' => '职位声誉',
	'no_reputation' => '这篇文章还没获得任何声望',
	're' => 'RE:',
	
	// 创建文章
	'create_post' => '建立文章',
	'post_submitted' => '文章已提交',
	'creating_post_in' => '创建日志 在: ',
	'topic_locked_permission_post' => '此主題已被关闭，不过你还是有发文的权限。',
	
	// 编辑
	'editing_post' => '正在编辑文章',
	
	// 置顶帖子
	'thread_is_' => '主题',
	'now_sticky' => '置顶完成',
	'no_longer_sticky' => '取消置顶完成',
	
	// 创建主题
	'topic_created' => '主題建立完成。',
	'creating_topic_in_' => '正在建立主題至 ',
	'thread_title' => '主题',
	'confirm_cancellation' => '你确定吗？',
	'label' => '标签',
	
	// 报告
	'report_submitted' => '举报完成。',
	'view_post_content' => '查看文章內容',
	'report_reason' => '举报原因',
	
	// 移动版块
	'move_to' => '移动至：',
	
	// 合并板块
	'merge_instructions' => '两个要合并的主题<strong>必须</strong>在同个版块下。必要时移动线程.',
	'merge_with' => '与 ... 合并：',
	
	// 其他
	'forum_error' => '对不起，我们找不到相关的讨论区或主题。',
	'are_you_logged_in' => '你登录了吗？',
	'online_users' => '本站在线用户',
	'no_users_online' => '没有用户在线',
	
	// 搜索
	'search_error' => '请输入一个1 ~ 32个字元长的搜寻关键字',
	'no_search_results' => '我们搜寻不到任何数据。',
	
	//在社交媒体上分享.
	'sm-share' => '分享',
	'sm-share-facebook' => '分享到 Facebook',
	'sm-share-twitter' => '分享到 Twitter',
);

/*
 *  邮箱
 */
$email_language = array(
	// 注册电子邮件
	'greeting' => 'Hi',
	'message' => '感谢你的注册！若要完成注册，请点击这个链接：',
	'thanks' => '谢谢您'
);

/*
 *  时间语言，如“1分钟前”
 *  不能替换 "{x}" 在任何翻译中
 */
$time_language = array(
	'seconds_short' => '秒', // 缩短 "seconds", eg "s"
	'less_than_a_minute' => '刚刚',
	'1_minute' => '一分中之前',
	'_minutes' => '{x} 分中之前',
	'about_1_hour' => '约一个小时之前',
	'_hours' => '{x} 个小时之前',
	'1_day' => '昨天',
	'_days' => '{x} 天之前',
	'about_1_month' => '约一个月之前',
	'_months' => '{x} 个月之前',
	'about_1_year' => '约一年前',
	'over_x_years' => '超过 {x} 年之前'
);
 
/*
 *  表格语言; used for "DataTables" Javascript tables
 */
$table_language = array(
	'display_records_per_page' => '每页显示 _MENU_ 项纪录', // 不能替换 "_MENU_"
	'nothing_found' => '找不到结果',
	'page_x_of_y' => '第 _PAGE_ 页（共 _PAGES_ 页面）', // 不能替换 "_PAGE_" 和 "_PAGES_"
	'no_records' => '没有相关记录',
	'filtered' => '（自共 _MAX_ 项记录中筛选而出）' // 不能替换 "_MAX_"
);
 
/*
 *  API 语言
 */
$api_language = array(
	'register' => '完成注册'
);
 
?>
