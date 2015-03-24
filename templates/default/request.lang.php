<?php

$requestlang = array
(
	'assistant_name' => '我的助手',
	'assistant_desc' => '我的助手，適用於邊欄，顯示當前用戶的信息以及常用鏈接',

	'birthday_name' => '今日生日會員',
	'birthday_desc' => '顯示今日生日會員的頭像',
	'birthday_limit' => '顯示會員數',
	'birthday_limit_comment' => '設置今天過生日的最大會員人數',

	'forumtree_name' => '版塊樹形列表',
	'forumtree_desc' => '樹形顯示版塊列表',

	'html_name' => '自由代碼',
	'html_desc' => '本模塊可自由書寫 HTML、Discuz 代碼',
	'html_type' => '代碼格式',
	'html_type_comment' => '選擇代碼的格式，如果您對 HTML 知識瞭解的不多，可以選擇 Discuz! 代碼格式',
	'html_type_html' => 'HTML 代碼',
	'html_type_code' => 'Discuz! 代碼',
	'html_code' => '代碼內容',
	'html_code_comment' => '按照您選定的代碼格式輸入相應的代碼',
	'html_side' => '用於邊欄',
	'html_side_comment' => '如果本模塊用於邊欄，請選擇此項',

	'modlist_name' => '版塊版主排行',
	'modlist_desc' => '列出當前版塊的版主，主題列表頁面(forumdisplay.php)專用模塊<br />開啟「論壇管理工作統計」時將按照管理工作次數進行排行，否則將按照版主的發帖數進行排行',

	'rowcombine_title' => '模塊標題',
	'rowcombine_title_comment' => '如果聚合的模塊是同類數據，可在此處命名一個通用的名稱作為標題顯示',
	'rowcombine_name' => '橫向聚合模塊',
	'rowcombine_desc' => '橫向聚合顯示多個模塊',
	'rowcombine_data' => '聚合模塊',
	'rowcombine_data_comment' => '一行一個模塊，逗號前為模塊名稱，逗號後為顯示名稱<br />如:<br />邊欄模塊_最新主題,最新主題<br />邊欄模塊_最新回復,最新回復',

	'tag_name' => '標籤',
	'tag_desc' => '標籤調用，返回指定數目的標籤',
	'tag_type' => '標籤獲取方式',
	'tag_type_comment' => '設置標籤數據的獲取方式',
	'tag_type_0' => '隨機顯示標籤',
	'tag_type_1' => '顯示熱門標籤',
	'tag_type_limit' => '返回條目數',
	'tag_type_limit_comment' => '設置返回的條目數',

	'thread_name' => '主題帖內容',
	'thread_desc' => '主題帖內容調用，輸入主題 ID(TID)即可，特殊主題也會依照其自己的風格顯示',
	'thread_id' => '主題 ID',

	'google_name' => 'Google 搜索',
	'google_desc' => 'Google 搜索框',
	'google_lang' => '搜索網頁的語言',
	'google_lang_comment' => '設置適合自己論壇的網頁語言可以有效的提高搜索結果的質量',
	'google_lang_any' => '任何語言',
	'google_lang_en' => '英文',
	'google_lang_zh-CN' => '簡體中文',
	'google_lang_zh-TW' => '繁體中文',
	'google_default' => '默認搜索選擇',
	'google_default_comment' => '搜索框默認選擇的項目',
	'google_default_0' => '網頁搜索',
	'google_default_1' => '站內搜索',

	'feed_name' => 'UCHome 動態調用模塊',
	'feed_desc' => '調用 UCHome 中的用戶動態',
	'feed_title' => '模塊標題',
	'feed_title_comment' => '模塊在側邊欄顯示的標題',
	'feed_title_value' => '最新成員',
	'feed_uids' => '指定用戶 UID',
	'feed_uids_comment' => '多個 UID 請用半角逗號 "," 隔開',
	'feed_friend' => '動態類型',
	'feed_friend_nolimit' => '不限制',
	'feed_friend_friendonly' => '只獲取好友',
	'feed_start' => '起始數據行數',
	'feed_start_comment' => '如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'feed_limit' => '顯示數據條數',
	'feed_limit_comment' => '設置一次顯示的主題條目數，請設置為大於 0 的整數',
	'feed_template' => '單條顯示模板',
	'feed_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{iconurl}\', \'parameter[settings][template]\')">{iconurl}</a>代表 動態類型圖標
		<a href="###" onclick="insertunit(\'{username}\', \'parameter[settings][template]\')">{username}</a>代表 用戶名<br />
		<a href="###" onclick="insertunit(\'{photo}\', \'parameter[settings][template]\')">{photo}</a>代表 用戶頭像地址<br />
		<a href="###" onclick="insertunit(\'{title_template}\', \'parameter[settings][template]\')">{title_template}</a>代表 動態標題
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>代表 用戶個人主頁地址<br />
		<a href="###" onclick="insertunit(\'{body_template}\', \'parameter[settings][template]\')">{body_template}</a>代表 動態內容
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>代表 創建時間<br />
		</div>',

	'doing_name' => 'UCHome 記錄調用模塊',
	'doing_desc' => '調用 UCHome 中的記錄',
	'doing_title' => '模塊標題',
	'doing_title_comment' => '模塊在側邊欄顯示的標題',
	'doing_title_value' => '最新記錄',
	'doing_uids' => '指定用戶 UID',
	'doing_uids_comment' => '多個 UID 請用半角逗號 "," 隔開',
	'doing_mood' => '記錄類型',
	'doing_mood_nolimit' => '不限制',
	'doing_mood_moodonly' => '只獲取心情記錄',
	'doing_start' => '起始數據行數',
	'doing_start_comment' => '如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'doing_limit' => '顯示數據條數',
	'doing_limit_comment' => '設置一次顯示的主題條目數，請設置為大於 0 的整數',
	'doing_template' => '單條顯示模板',
	'doing_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{username}\', \'parameter[settings][template]\')">{username}</a>代表 用戶名
		<a href="###" onclick="insertunit(\'{photo}\', \'parameter[settings][template]\')">{photo}</a>代表 用戶頭像地址<br />
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>代表 用戶個人主頁地址<br />
		<a href="###" onclick="insertunit(\'{replynum}\', \'parameter[settings][template]\')">{replynum}</a>代表 回複數
		<a href="###" onclick="insertunit(\'{link}\', \'parameter[settings][template]\')">{link}</a>代表 記錄地址<br />
		<a href="###" onclick="insertunit(\'{message}\', \'parameter[settings][template]\')">{message}</a>代表 記錄內容
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>代表 創建時間<br />
		</div>',
	
	'app_name' => 'UCHome 應用調用模塊',
	'app_desc' => '調用 UCHome 中的應用列表',
	'app_title' => '模塊標題',
	'app_title_comment' => '模塊在側邊欄顯示的標題',
	'app_title_value' => '應用列表',
	'app_uids' => '指定用戶 UID',
	'app_uids_comment' => '多個 UID 請用半角逗號 "," 隔開',
	'app_type' => '應用類型',
	'app_type_nolimit' => '不限制',
	'app_type_default' => '只獲取默認',
	'app_type_userapp' => '只用戶自已的應用',
	'app_start' => '起始數據行數',
	'app_start_comment' => '如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'app_limit' => '顯示數據條數',
	'app_limit_comment' => '設置一次顯示的應用條目數，請設置為大於 0 的整數，該條件對默認應用無效',
	'app_template' => '單條顯示模板',
	'app_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{icon}\', \'parameter[settings][template]\')">{icon}</a>代表 應用小圖標
		<a href="###" onclick="insertunit(\'{link}\', \'parameter[settings][template]\')">{link}</a>代表 應用地址<br />
		<a href="###" onclick="insertunit(\'{appname}\', \'parameter[settings][template]\')">{appname}</a>代表 應用名稱<br />
		</div>',


	'space_name' => 'UCHome 成員調用模塊',
	'space_desc' => '調用 UCHome 中的用戶',
	'space_title' => '模塊標題',
	'space_title_comment' => '模塊在側邊欄顯示的標題',
	'space_title_value' => '最新成員',
	'space_uids' => '指定用戶 UID',
	'space_uids_comment' => '多個 UID 請用半角逗號 "," 隔開',
	'space_startfriendnum' => '空間好友數起始值',
	'space_endfriendnum' => '空間好友數結束值',
	'space_startviewnum' => '空間訪問數起始值',
	'space_endviewnum' => '空間訪問數結束值',
	'space_startcredit' => '積分起始值',
	'space_endcredit' => '積分結束值',
	'space_avatar' => '上傳頭像',
	'space_avatar_comment' => '用戶是否上傳過頭像',
	'space_avatar_nolimit' => '不限制',
	'space_avatar_noexists' => '未上傳',
	'space_avatar_exists' => '已上傳',
	'space_namestatus' => '實名認證',
	'space_namestatus_comment' => '獲取是否通過實名認證的用戶',
	'space_namestatus_nolimit' => '不限制',
	'space_namestatus_nopass' => '未通過',
	'space_namestatus_pass' => '已通過',
	'space_dateline' => '建立時間',
	'space_dateline_comment' => '空間創建時間',
	'space_updatetime' => '更新時間',
	'space_updatetime_comment' => '空間更新時間',
	'space_order' => '排序類型',
	'space_order_comment' => '數據排序類型',
	'space_orderselect' => array(
		array('', '默認順序'),
		array('dateline', '建立時間'),
		array('updatetime', '更新時間'),
		array('viewnum', '空間訪問數'),
		array('friendnum', '空間好友數'),
		array('credit', '成員積分')
	),
	'space_dateselect' => array(
		array('0' , '不限制'),
		array('86400' , '一天以來'),
		array('172800' , '兩天以來'),
		array('604800' , '一周以來'),
		array('1209600' , '兩周以來'),
		array('2592000' , '一個月以來'),
		array('7948800' , '三個月以來'),
		array('15897600' , '六個月以來'),
		array('31536000' , '一年以來')
	),
	'space_sc' => '排序方式',
	'space_sc_comment' => '返回記錄的排序方式',
	'space_sc_asc' => '遞增',
	'space_sc_desc' => '遞減',
	'space_start' => '起始數據行數',
	'space_start_comment' => '如需設定起始的數據行數，請輸入具體數值，0 為從第一行開始，以此類推',
	'space_limit' => '顯示數據條數',
	'space_limit_comment' => '設置一次顯示的主題條目數，請設置為大於 0 的整數',
	'space_template' => '單條顯示模板',
	'space_template_comment' => '<div class="extcredits">
		<a href="###" onclick="insertunit(\'{username}\', \'parameter[settings][template]\')">{username}</a>代表 用戶名
		<a href="###" onclick="insertunit(\'{photo}\', \'parameter[settings][template]\')">{photo}</a>代表 用戶頭像地址<br />
		<a href="###" onclick="insertunit(\'{viewnum}\', \'parameter[settings][template]\')">{viewnum}</a>代表 查看數
		<a href="###" onclick="insertunit(\'{credit}\', \'parameter[settings][template]\')">{credit}</a>代表 積分<br />
		<a href="###" onclick="insertunit(\'{userlink}\', \'parameter[settings][template]\')">{userlink}</a>代表 用戶個人主頁地址
		<a href="###" onclick="insertunit(\'{friendnum}\', \'parameter[settings][template]\')">{friendnum}</a>代表 用戶好友數<br />
		<a href="###" onclick="insertunit(\'{updatetime}\', \'parameter[settings][template]\')">{updatetime}</a>代表 更新時間
		<a href="###" onclick="insertunit(\'{dateline}\', \'parameter[settings][template]\')">{dateline}</a>代表 創建時間<br />
	</div>',

);

?>