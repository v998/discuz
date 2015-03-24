<?php

define('UC_VERNAME', '中文版');

$lang = array(

	'SC_GBK' => '簡體中文版',
	'TC_BIG5' => '繁體中文版',
	'SC_UTF8' => '簡體中文 UTF8 版',
	'TC_UTF8' => '繁體中文 UTF8 版',
	'EN_ISO' => 'ENGLISH ISO8859',
	'EN_UTF8' => 'ENGLIST UTF-8',

	'title_install' => SOFT_NAME.' 安裝嚮導',
	'agreement_yes' => '我同意',
	'agreement_no' => '我不同意',
	'notset' => '不限制',

	'message_title' => '提示信息',
	'error_message' => '錯誤信息',
	'message_return' => '返回',
	'return' => '返回',
	'install_wizard' => '安裝嚮導',
	'config_nonexistence' => '配置文件不存在',
	'nodir' => '目錄不存在',
	'short_open_tag_invalid' => '對不起，請將 php.ini 中的 short_open_tag 設置為 On，否則無法繼續安裝。',
	'redirect' => '瀏覽器會自動跳轉頁面，無需人工干預。<br>除非當您的瀏覽器沒有自動跳轉時，請點擊這裡',
	'auto_redirect' => '瀏覽器會自動跳轉頁面，無需人工干預',
	'database_errno_2003' => '無法連接數據庫，請檢查數據庫是否啟動，數據庫服務器地址是否正確',
	'database_errno_1044' => '無法創建新的數據庫，請檢查數據庫名稱填寫是否正確',
	'database_errno_1045' => '無法連接數據庫，請檢查數據庫用戶名或者密碼是否正確',
	'database_errno_1064' => 'SQL 語法錯誤',

	'dbpriv_createtable' => '沒有CREATE TABLE權限，無法繼續安裝',
	'dbpriv_insert' => '沒有INSERT權限，無法繼續安裝',
	'dbpriv_select' => '沒有SELECT權限，無法繼續安裝',
	'dbpriv_update' => '沒有UPDATE權限，無法繼續安裝',
	'dbpriv_delete' => '沒有DELETE權限，無法繼續安裝',
	'dbpriv_droptable' => '沒有DROP TABLE權限，無法安裝',

	'db_not_null' => '數據庫中已經安裝過 UCenter, 繼續安裝會清空原有數據。',
	'db_drop_table_confirm' => '繼續安裝會清空全部原有數據，您確定要繼續嗎?',

	'writeable' => '可寫',
	'unwriteable' => '不可寫',
	'old_step' => '上一步',
	'new_step' => '下一步',

	'database_errno_2003' => '無法連接數據庫，請檢查數據庫是否啟動，數據庫服務器地址是否正確',
	'database_errno_1044' => '無法創建新的數據庫，請檢查數據庫名稱填寫是否正確',
	'database_errno_1045' => '無法連接數據庫，請檢查數據庫用戶名或者密碼是否正確',
	'database_connect_error' => '數據庫連接錯誤',

	'step_env_check_title' => '開始安裝',
	'step_env_check_desc' => '環境以及文件目錄權限檢查',
	'step_db_init_title' => '安裝數據庫',
	'step_db_init_desc' => '正在執行數據庫安裝',

	'step1_file' => '目錄文件',
	'step1_need_status' => '所需狀態',
	'step1_status' => '當前狀態',
	'not_continue' => '請將以上紅叉部分修正再試',

	'tips_dbinfo' => '填寫數據庫信息',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => '填寫管理員信息',
	'step_ext_info_title' => '安裝成功',
	'step_ext_info_comment' => '點擊進入登陸',

	'ext_info_succ' => '安裝成功',
	'install_submit' => '提交',
	'install_locked' => '安裝鎖定，已經安裝過了，如果您確定要重新安裝，請到服務器上刪除<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => '您必須解決以上問題，安裝才可以繼續',

	'step_app_reg_title' => '設置運行環境',
	'step_app_reg_desc' => '檢測服務器環境以及設置 UCenter',
	'tips_ucenter' => '請填寫 UCenter 相關信息',
	'tips_ucenter_comment' => 'UCenter 是 Comsenz 公司產品的核心服務程序，Discuz! Board 的安裝和運行依賴此程序。如果您已經安裝了 UCenter，請填寫以下信息。否則，請到 <a href="http://www.discuz.com/" target="blank">Comsenz 產品中心</a> 下載並且安裝，然後再繼續。',

	'advice_mysql_connect' => '請檢查 mysql 模塊是否正確加載',
	'advice_fsockopen' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_gethostbyname' => '是否php配置中禁止了gethostbyname函數。請聯繫空間商，確定開啟了此項功能',
	'advice_file_get_contents' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_xml_parser_create' => '該函數需要 PHP 支持 XML。請聯繫空間商，確定開啟了此項功能',

	'ucurl' => 'UCenter 的 URL',
	'ucpw' => 'UCenter 創始人密碼',
	'ucip' => 'UCenter 的IP地址',
	'ucenter_ucip_invalid' => '格式錯誤，請填寫正確的 IP 地址',
	'ucip_comment' => '絕大多數情況下您可以不填',

	'tips_siteinfo' => '請填寫站點信息',
	'sitename' => '站點名稱',
	'siteurl' => '站點 URL',

	'forceinstall' => '強制安裝',
	'dbinfo_forceinstall_invalid' => '當前數據庫當中已經含有同樣表前綴的數據表，您可以修改「表名前綴」來避免刪除舊的數據，或者選擇強制安裝。強制安裝會刪除舊數據，且無法恢復',

	'click_to_back' => '點擊返回上一步',
	'adminemail' => '系統信箱 Email',
	'adminemail_comment' => '用於發送程序錯誤報告',
	'dbhost_comment' => '數據庫服務器地址, 一般為 localhost',
	'tablepre_comment' => '同一數據庫運行多個論壇時，請修改前綴',
	'forceinstall_check_label' => '我要刪除數據，強制安裝 !!!',

	'uc_url_empty' => '您沒有填寫 UCenter 的 URL，請返回填寫',
	'uc_url_invalid' => 'URL 格式錯誤',
	'uc_url_unreachable' => 'UCenter 的 URL 地址可能填寫錯誤，請檢查',
	'uc_ip_invalid' => '無法解析該域名，請填寫站點的 IP',
	'uc_admin_invalid' => 'UCenter 創始人密碼錯誤，請重新填寫',
	'uc_data_invalid' => '通信失敗，請檢查 UCenter 的URL 地址是否正確 ',
	'uc_dbcharset_incorrect' => 'UCenter 數據庫字符集與當前應用字符集不一致',
	'uc_api_add_app_error' => '向 UCenter 添加應用錯誤',
	'uc_dns_error' => 'UCenter DNS解析錯誤，請返回填寫一下 UCenter 的 IP地址',

	'ucenter_ucurl_invalid' => 'UCenter 的URL為空，或者格式錯誤，請檢查',
	'ucenter_ucpw_invalid' => 'UCenter 的創始人密碼為空，或者格式錯誤，請檢查',
	'siteinfo_siteurl_invalid' => '站點URL為空，或者格式錯誤，請檢查',
	'siteinfo_sitename_invalid' => '站點名稱為空，或者格式錯誤，請檢查',
	'dbinfo_dbhost_invalid' => '數據庫服務器為空，或者格式錯誤，請檢查',
	'dbinfo_dbname_invalid' => '數據庫名為空，或者格式錯誤，請檢查',
	'dbinfo_dbuser_invalid' => '數據庫用戶名為空，或者格式錯誤，請檢查',
	'dbinfo_dbpw_invalid' => '數據庫密碼為空，或者格式錯誤，請檢查',
	'dbinfo_adminemail_invalid' => '系統郵箱為空，或者格式錯誤，請檢查',
	'dbinfo_tablepre_invalid' => '數據表前綴為空，或者格式錯誤，請檢查',
	'admininfo_username_invalid' => '管理員用戶名為空，或者格式錯誤，請檢查',
	'admininfo_email_invalid' => '管理員Email為空，或者格式錯誤，請檢查',
	'admininfo_password_invalid' => '管理員密碼為空，請填寫',
	'admininfo_password2_invalid' => '兩次密碼不一致，請檢查',

	'username' => '管理員賬號',
	'email' => '管理員 Email',
	'password' => '管理員密碼',
	'password_comment' => '管理員密碼不能為空',
	'password2' => '重複密碼',

	'admininfo_invalid' => '管理員信息不完整，請檢查管理員賬號，密碼，郵箱',
	'dbname_invalid' => '數據庫名為空，請填寫數據庫名稱',
	'tablepre_invalid' => '數據表前綴為空，或者格式錯誤，請檢查',
	'admin_username_invalid' => '非法用戶名，用戶名長度不應當超過 15 個英文字符，且不能包含特殊字符，一般是中文，字母或者數字',
	'admin_password_invalid' => '密碼和上面不一致，請重新輸入',
	'admin_email_invalid' => 'Email 地址錯誤，此郵件地址已經被使用或者格式無效，請更換為其他地址',
	'admin_invalid' => '您的信息管理員信息沒有填寫完整，請仔細填寫每個項目',
	'admin_exist_password_error' => '該用戶已經存在，如果您要設置此用戶為論壇的管理員，請正確輸入該用戶的密碼，或者請更換論壇管理員的名字',

	'tagtemplates_subject' => '標題',
	'tagtemplates_uid' => '用戶 ID',
	'tagtemplates_username' => '發帖者',
	'tagtemplates_dateline' => '日期',
	'tagtemplates_url' => '主題地址',

	'uc_version_incorrect' => '您的 UCenter 服務端版本過低，請升級 UCenter 服務端到最新版本，並且升級，下載地址：http://www.comsenz.com/ 。',
	'config_unwriteable' => '安裝嚮導無法寫入配置文件, 請設置 config.inc.php 程序屬性為可寫狀態(777)',

	'install_in_processed' => '正在安裝...',
	'install_succeed' => '安裝成功，點擊進入',
	'install_founder_contact' => '進入下一步填寫聯繫方式',

	'init_credits_karma' => '威望',
	'init_credits_money' => '金錢',

	'init_group_0' => '會員',
	'init_group_1' => '管理員',
	'init_group_2' => '超級版主',
	'init_group_3' => '版主',
	'init_group_4' => '禁止發言',
	'init_group_5' => '禁止訪問',
	'init_group_6' => '禁止 IP',
	'init_group_7' => '遊客',
	'init_group_8' => '等待驗證會員',
	'init_group_9' => '乞丐',
	'init_group_10' => '新手上路',
	'init_group_11' => '註冊會員',
	'init_group_12' => '中級會員',
	'init_group_13' => '高級會員',
	'init_group_14' => '金牌會員',
	'init_group_15' => '論壇元老',

	'init_rank_1' => '新生入學',
	'init_rank_2' => '小試牛刀',
	'init_rank_3' => '實習記者',
	'init_rank_4' => '自由撰稿人',
	'init_rank_5' => '特聘作家',

	'init_cron_1' => '清空今日發帖數',
	'init_cron_2' => '清空本月在線時間',
	'init_cron_3' => '每日數據清理',
	'init_cron_4' => '生日統計與郵件祝福',
	'init_cron_5' => '主題回復通知',
	'init_cron_6' => '每日公告清理',
	'init_cron_7' => '限時操作清理',
	'init_cron_8' => '論壇推廣清理',
	'init_cron_9' => '每月主題清理',
	'init_cron_10' => '每日 X-Space更新用戶',
	'init_cron_11' => '每週主題更新',

	'init_bbcode_1' => '使內容橫向滾動，這個效果類似 HTML 的 marquee 標籤，注意：這個效果只在 Internet Explorer 瀏覽器下有效。',
	'init_bbcode_2' => '嵌入 Flash 動畫',
	'init_bbcode_3' => '顯示 QQ 在線狀態，點這個圖標可以和他（她）聊天',
	'init_bbcode_4' => '上標',
	'init_bbcode_5' => '下標',
	'init_bbcode_6' => '嵌入 Windows media 音頻',
	'init_bbcode_7' => '嵌入 Windows media 音頻或視頻',

	'init_qihoo_searchboxtxt' =>'輸入關鍵詞,快速搜索本論壇',
	'init_threadsticky' =>'全局置頂,分類置頂,本版置頂',

	'init_default_style' => '默認風格',
	'init_default_forum' => '默認版塊',
	'init_default_template' => '默認模板套系',
	'init_default_template_copyright' => '康盛創想（北京）科技有限公司',

	'init_dataformat' => 'Y-n-j',
	'init_modreasons' => '廣告/SPAM\r\n惡意灌水\r\n違規內容\r\n文不對題\r\n重複發帖\r\n\r\n我很贊同\r\n精品文章\r\n原創內容',
	'init_link' => 'Discuz! 官方論壇',
	'init_link_note' => '提供最新 Discuz! 產品新聞、軟件下載與技術交流',

	'license' => '<div class="license"><h1>中文版授權協議 適用於中文用戶</h1>

<p>版權所有 (c) 2001-2009，康盛創想（北京）科技有限公司保留所有權利。</p>

<p>感謝您選擇 Discuz! 論壇產品。希望我們的努力能為您提供一個高效快速和強大的社區論壇解決方案。</p>

<p>Discuz! 英文全稱為 Crossday Discuz! Board，中文全稱為 Discuz! 論壇，以下簡稱 Discuz!。</p>

<p>康盛創想（北京）科技有限公司為 Discuz! 產品的開發商，依法獨立擁有 Discuz! 產品著作權（中國國家版權局著作權登記號 2006SR11895）。康盛創想（北京）科技有限公司網址為 http://www.comsenz.com，Discuz! 官方網站網址為 http://www.discuz.com，Discuz! 官方討論區網址為 http://www.discuz.net。</p>

<p>Discuz! 著作權已在中華人民共和國國家版權局註冊，著作權受到法律和國際公約保護。使用者：無論個人或組織、盈利與否、用途如何（包括以學習和研究為目的），均需仔細閱讀本協議，在理解、同意、並遵守本協議的全部條款後，方可開始使用 Discuz! 軟件。</p>

<p>本授權協議適用且僅適用於 Discuz! 7.x.x 版本，康盛創想（北京）科技有限公司擁有對本授權協議的最終解釋權。</p>

<h3>I. 協議許可的權利</h3>
<ol>
<li>您可以在完全遵守本最終用戶授權協議的基礎上，將本軟件應用於非商業用途，而不必支付軟件版權授權費用。</li>
<li>您可以在協議規定的約束和限制範圍內修改 Discuz! 源代碼(如果被提供的話)或界面風格以適應您的網站要求。</li>
<li>您擁有使用本軟件構建的論壇中全部會員資料、文章及相關信息的所有權，並獨立承擔與文章內容的相關法律義務。</li>
<li>獲得商業授權之後，您可以將本軟件應用於商業用途，同時依據所購買的授權類型中確定的技術支持期限、技術支持方式和技術支持內容，自購買時刻起，在技術支持期限內擁有通過指定的方式獲得指定範圍內的技術支持服務。商業授權用戶享有反映和提出意見的權力，相關意見將被作為首要考慮，但沒有一定被採納的承諾或保證。</li>
</ol>

<h3>II. 協議規定的約束和限制</h3>
<ol>
<li>未獲商業授權之前，不得將本軟件用於商業用途（包括但不限於企業網站、經營性網站、以營利為目或實現盈利的網站）。購買商業授權請登陸http://www.discuz.com參考相關說明，也可以致電8610-51657885瞭解詳情。</li>
<li>不得對本軟件或與之關聯的商業授權進行出租、出售、抵押或發放子許可證。</li>
<li>無論如何，即無論用途如何、是否經過修改或美化、修改程度如何，只要使用 Discuz! 的整體或任何部分，未經書面許可，論壇頁面頁腳處的 Discuz! 名稱和康盛創想（北京）科技有限公司下屬網站（http://www.comsenz.com、http://www.discuz.com 或 http://www.discuz.net） 的鏈接都必須保留，而不能清除或修改。</li>
<li>禁止在 Discuz! 的整體或任何部分基礎上以發展任何派生版本、修改版本或第三方版本用於重新分發。</li>
<li>如果您未能遵守本協議的條款，您的授權將被終止，所被許可的權利將被收回，並承擔相應法律責任。</li>
</ol>

<h3>III. 有限擔保和免責聲明</h3>
<ol>
<li>本軟件及所附帶的文件是作為不提供任何明確的或隱含的賠償或擔保的形式提供的。</li>
<li>用戶出於自願而使用本軟件，您必須瞭解使用本軟件的風險，在尚未購買產品技術服務之前，我們不承諾提供任何形式的技術支持、使用擔保，也不承擔任何因使用本軟件而產生問題的相關責任。</li>
<li>康盛創想（北京）科技有限公司不對使用本軟件構建的論壇中的文章或信息承擔責任。</li>
</ol>

<p>有關 Discuz! 最終用戶授權協議、商業授權與技術服務的詳細內容，均由 Discuz! 官方網站獨家提供。康盛創想（北京）科技有限公司擁有在不事先通知的情況下，修改授權協議和服務價目表的權力，修改後的協議或價目表對自改變之日起的新授權用戶生效。</p>

<p>電子文本形式的授權協議如同雙方書面簽署的協議一樣，具有完全的和等同的法律效力。您一旦開始安裝 Discuz!，即被視為完全理解並接受本協議的各項條款，在享有上述條款授予的權力的同時，受到相關的約束和限制。協議許可範圍以外的行為，將直接違反本授權協議並構成侵權，我們有權隨時終止授權，責令停止損害，並保留追究相關責任的權力。</p></div>',

	'uc_installed' => '您已經安裝過 UCenter，如果需要重新安裝，請刪除 data/install.lock 文件',
	'i_agree' => '我已仔細閱讀，並同意上述條款中的所有內容',
	'supportted' => '支持',
	'unsupportted' => '不支持',
	'max_size' => '支持/最大尺寸',
	'project' => '項目',
	'ucenter_required' => 'Discuz! 所需配置',
	'ucenter_best' => 'Discuz! 最佳',
	'curr_server' => '當前服務器',
	'env_check' => '環境檢查',
	'os' => '操作系統',
	'php' => 'PHP 版本',
	'attachmentupload' => '附件上傳',
	'unlimit' => '不限制',
	'version' => '版本',
	'gdversion' => 'GD 庫',
	'allow' => '允許',
	'unix' => '類Unix',
	'diskspace' => '磁盤空間',
	'priv_check' => '目錄、文件權限檢查',
	'func_depend' => '函數依賴性檢查',
	'func_name' => '函數名稱',
	'check_result' => '檢查結果',
	'suggestion' => '建議',
	'advice_mysql' => '請檢查 mysql 模塊是否正確加載',
	'advice_fopen' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_file_get_contents' => '該函數需要 php.ini 中 allow_url_fopen 選項開啟。請聯繫空間商，確定開啟了此項功能',
	'advice_xml' => '該函數需要 PHP 支持 XML。請聯繫空間商，確定開啟了此項功能',
	'none' => '無',

	'dbhost' => '數據庫服務器',
	'dbuser' => '數據庫用戶名',
	'dbpw' => '數據庫密碼',
	'dbname' => '數據庫名',
	'tablepre' => '數據表前綴',

	'ucfounderpw' => '創始人密碼',
	'ucfounderpw2' => '重複創始人密碼',

	'init_log' => '初始化記錄',
	'clear_dir' => '清空目錄',
	'select_db' => '選擇數據庫',
	'create_table' => '建立數據表',
	'succeed' => '成功',

	'testdata' => '安裝測試數據',
	'testdata_check_label' => '是',
	'install_test_data' => '正在安裝測試數據',

	'method_undefined' => '未定義方法',
	'database_nonexistence' => '數據庫操作對像不存在',
	'founder_contact' => '<h4>關於《康盛改善計劃》的說明</h4>

	為了不斷改進產品質量，改善用戶體驗，Discuz!7.2《康盛改善計劃》，該系統有利於我們分析用戶在論壇的操作習慣，進而幫助我們在未來的版本中對產品進行改進，設計出更符合用戶需求的新功能。

	該系統不會收集站點敏感信息，不收集用戶資料，不存在安全風險，並且經過實際測試不會影響論壇的運行效率。

	您安裝使用本版本表示您同意加入《康盛改善計劃》，Discuz!運營部門會通過對站點的分析為您提供運營指導建議，我們將提示您如何根據站點運行情況開啟論壇功能，如何進行合理的功能配置，以及提供其他的一些運營經驗等。

	為了方便我們和您溝通運營策略，請您留下常用的網絡聯繫方式',
	'skip_current' => '跳過本步',

);

$msglang = array(

	'config_nonexistence' => '您的 config.inc.php 不存在, 無法繼續安裝, 請用 FTP 將該文件上傳後再試。',
);

$optionlist = array (
	8 => array (
		'classid' => '1',
		'displayorder' => '2',
		'title' => '性別',
		'identifier' => 'gender',
		'type' => 'radio',
		'rules' => array (
			      'required' => '0',
			      'unchangeable' => '0',
			      'choices' => "1=男\r\n2=女",
			   ),
		),
	16 => array (
		'classid' => '2',
		'displayorder' => '0',
		'title' => '房屋類型',
		'identifier' => 'property',
		'type' => 'select',
		'rules' => array (
			      'choices' => "1=寫字樓\r\n2=公寓\r\n3=小區\r\n4=平房\r\n5=別墅\r\n6=地下室",
			   ),
		),
	17 => array (
		'classid' => '2',
		'displayorder' => '0',
		'title' => '座向',
		'identifier' => 'face',
		'type' => 'radio',
	    	'rules' => array (
	      			'required' => '0',
	      			'unchangeable' => '0',
	      			'choices' => "1=南向\r\n2=北向\r\n3=西向\r\n4=東向",
	    		),
	  	),
      18 => array (
        	'classid' => '2',
        	'displayorder' => '0',
        	'title' => '裝修情況',
        	'identifier' => 'makes',
        	'type' => 'radio',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=無裝修\r\n2=簡單裝修\r\n3=精裝修",
        		),
      	),
      19 => array (
        	'classid' => '2',
        	'displayorder' => '0',
        	'title' => '居室',
        	'identifier' => 'mode',
        	'type' => 'select',
        	'rules' => array (
          			'choices' => "1=獨居\r\n2=兩居室\r\n3=三居室\r\n4=四居室\r\n5=別墅",
        		),
      	),
      23 => array (
        	'classid' => '2',
        	'displayorder' => '0',
        	'title' => '屋內設施',
        	'identifier' => 'equipment',
        	'type' => 'checkbox',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=水電\r\n2=寬帶\r\n3=管道氣\r\n4=有線電視\r\n5=電梯\r\n6=電話\r\n7=冰箱\r\n8=洗衣機\r\n9=熱水器\r\n10=空調\r\n11=暖氣\r\n12=微波爐\r\n13=油煙機\r\n14=飲水機",
       		),
      	),
      25 => array (
        	'classid' => '2',
        	'displayorder' => '0',
        	'title' => '是否中介',
        	'identifier' => 'bool',
        	'type' => 'radio',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=是\r\n2=否",
        		),
      	),
      27 => array (
        	'classid' => '3',
       	'displayorder' => '0',
        	'title' => '星座',
        	'identifier' => 'Horoscope',
        	'type' => 'select',
        	'rules' => array (
          			'choices' => "1=白羊座\r\n2=金牛座\r\n3=雙子座\r\n4=巨蟹座\r\n5=獅子座\r\n6=處女座\r\n7=天秤座\r\n8=天蠍座\r\n9=射手座\r\n10=摩羯座\r\n11=水瓶座\r\n12=雙魚座",
        		),
      	),
      30 => array (
        	'classid' => '3',
        	'displayorder' => '0',
        	'title' => '婚姻狀況',
        	'identifier' => 'marrige',
        	'type' => 'radio',
        	'rules' => array (
          			'choices' => "1=已婚\r\n2=未婚",
        		),
      	),
      31 => array (
        	'classid' => '3',
        	'displayorder' => '0',
        	'title' => '愛好',
        	'identifier' => 'hobby',
        	'type' => 'checkbox',
        	'rules' => array (
          			'choices' => "1=美食\r\n2=唱歌\r\n3=跳舞\r\n4=電影\r\n5=音樂\r\n6=戲劇\r\n7=聊天\r\n8=拍托\r\n9=電腦\r\n10=網絡\r\n11=遊戲\r\n12=繪畫\r\n13=書法\r\n14=雕塑\r\n15=異性\r\n16=閱讀\r\n17=運動\r\n18=旅遊\r\n19=八卦\r\n20=購物\r\n21=賺錢\r\n22=汽車\r\n23=攝影",
        		),
      	),
      32 => array (
        	'classid' => '3',
        	'displayorder' => '0',
        	'title' => '收入範圍',
        	'identifier' => 'salary',
        	'type' => 'select',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=保密\r\n2=800元以上\r\n3=1500元以上\r\n4=2000元以上\r\n5=3000元以上\r\n6=5000元以上\r\n7=8000元以上",
        		),
      	),
      34 => array (
        	'classid' => '1',
        	'displayorder' => '0',
        	'title' => '學歷',
        	'identifier' => 'education',
        	'type' => 'radio',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=文盲\r\n2=小學\r\n3=初中\r\n4=高中\r\n5=中專\r\n6=大專\r\n7=本科\r\n8=研究生\r\n9=博士",
        		),
      	),
      38 => array (
        	'classid' => '5',
        	'displayorder' => '0',
        	'title' => '席別',
        	'identifier' => 'seats',
        	'type' => 'select',
        	'rules' => array (
          			'choices' => "1=站票\r\n2=硬座\r\n3=軟座\r\n4=硬臥\r\n5=軟臥",
        		),
      	),
      44 => array (
        	'classid' => '4',
        	'displayorder' => '0',
        	'title' => '是否應屆',
        	'identifier' => 'recr_term',
        	'type' => 'radio',
        	'rules' => array (
    		      	'required' => '0',
    		      	'unchangeable' => '0',
    		      	'choices' => "1=應屆\r\n2=非應屆",
        		),
      	),
      48 => array (
        	'classid' => '4',
        	'displayorder' => '0',
        	'title' => '薪金',
        	'identifier' => 'recr_salary',
        	'type' => 'select',
        	'rules' => array (
          			'choices' => "1=面議\r\n2=1000以下\r\n3=1000~1500\r\n4=1500~2000\r\n5=2000~3000\r\n6=3000~4000\r\n7=4000~6000\r\n8=6000~8000\r\n9=8000以上",
        		),
      	),
      50 => array (
        	'classid' => '4',
        	'displayorder' => '0',
        	'title' => '工作性質',
        	'identifier' => 'recr_work',
        	'type' => 'radio',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=全職\r\n2=兼職",
        		),
      	),
      53 => array (
        	'classid' => '4',
        	'displayorder' => '0',
        	'title' => '性別要求',
        	'identifier' => 'recr_sex',
        	'type' => 'checkbox',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=男\r\n2=女",
        		),
      	),
      62 => array (
        	'classid' => '5',
        	'displayorder' => '0',
        	'title' => '付款方式',
        	'identifier' => 'pay_type',
        	'type' => 'checkbox',
        	'rules' => array (
          			'required' => '0',
          			'unchangeable' => '0',
          			'choices' => "1=電匯\r\n2=支付寶\r\n3=現金\r\n4=其他",
        		),
      	),
);

$request_data = array (
  '邊欄模塊_版塊樹形列表' =>
  array (
    'url' => 'function=module&module=forumtree.inc.php&settings=N%3B&jscharset=0&cachelife=864000',
    'parameter' =>
    array (
      'module' => 'forumtree.inc.php',
      'cachelife' => '864000',
      'jscharset' => '0',
    ),
    'comment' => '邊欄版塊樹形列表模塊',
    'type' => '5',
  ),
  '邊欄模塊_版主排行' =>
  array (
    'url' => 'function=module&module=modlist.inc.php&settings=N%3B&jscharset=0&cachelife=3600',
    'parameter' =>
    array (
      'module' => 'modlist.inc.php',
      'cachelife' => '3600',
      'jscharset' => '0',
    ),
    'comment' => '邊欄版主排行模塊',
    'type' => '5',
  ),
  '聚合模塊_版塊列表' =>
  array (
    'url' => 'function=module&module=rowcombine.inc.php&settings=a%3A1%3A%7Bs%3A4%3A%22data%22%3Bs%3A58%3A%22%B1%DF%C0%B8%C4%A3%BF%E9_%B0%E6%BF%E9%C5%C5%D0%D0%2C%B0%E6%BF%E9%C5%C5%D0%D0%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%B0%E6%BF%E9%CA%F7%D0%CE%C1%D0%B1%ED%2C%B0%E6%BF%E9%C1%D0%B1%ED%22%3B%7D&jscharset=0&cachelife=864000',
    'parameter' =>
    array (
      'module' => 'rowcombine.inc.php',
      'cachelife' => '864000',
      'settings' =>
      array (
        'data' => '邊欄模塊_版塊排行,版塊排行
邊欄模塊_版塊樹形列表,版塊列表',
      ),
      'jscharset' => '0',
    ),
    'comment' => '熱門版塊、版塊樹形聚合模塊',
    'type' => '5',
  ),
  '邊欄模塊_版塊排行' =>
  array (
    'url' => 'function=forums&startrow=0&items=0&newwindow=1&orderby=posts&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%B0%E6%BF%E9%C5%C5%D0%D0%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%3Cimg%20style%3D%5C%22vertical-align%3Amiddle%5C%22%20src%3D%5C%22images%2Fdefault%2Ftree_file.gif%5C%22%20%2F%3E%20%7Bforumname%7D%28%7Bposts%7D%29%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>版塊排行</h4>
<ul class=\\"textinfolist\\">
[node]<li><img style=\\"vertical-align:middle\\" src=\\"images/default/tree_file.gif\\" /> {forumname}({posts})</li>[/node]
</ul>
</div>',
      'cachelife' => '43200',
      'startrow' => '0',
      'items' => '0',
      'newwindow' => 1,
      'orderby' => 'posts',
      'jscharset' => '0',
    ),
    'comment' => '邊欄版塊排行模塊',
    'type' => '1',
  ),
  '聚合模塊_熱門主題' =>
  array (
    'url' => 'function=module&module=rowcombine.inc.php&settings=a%3A2%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%C8%C8%C3%C5%D6%F7%CC%E2%22%3Bs%3A4%3A%22data%22%3Bs%3A79%3A%22%B1%DF%C0%B8%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2_%BD%F1%C8%D5%2C%C8%D5%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2_%B1%BE%D6%DC%2C%D6%DC%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2_%B1%BE%D4%C2%2C%D4%C2%22%3B%7D&jscharset=0&cachelife=1800',
    'parameter' =>
    array (
      'module' => 'rowcombine.inc.php',
      'cachelife' => '1800',
      'settings' =>
      array (
        'title' => '熱門主題',
        'data' => '邊欄模塊_熱門主題_今日,日
邊欄模塊_熱門主題_本周,周
邊欄模塊_熱門主題_本月,月',
      ),
      'jscharset' => '0',
    ),
    'comment' => '今日、本周、本月熱門主題聚合模塊',
    'type' => '5',
  ),
  '邊欄模塊_熱門主題_本月' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=hourviews&hours=720&jscharset=0&cachelife=86400&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D4%C2%C8%C8%C3%C5%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本月熱門</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '86400',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'hourviews',
      'hours' => '720',
      'jscharset' => '0',
    ),
    'comment' => '邊欄本月熱門主題模塊',
    'type' => '0',
  ),
  '聚合模塊_會員排行' =>
  array (
    'url' => 'function=module&module=rowcombine.inc.php&settings=a%3A2%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%BB%E1%D4%B1%C5%C5%D0%D0%22%3Bs%3A4%3A%22data%22%3Bs%3A79%3A%22%B1%DF%C0%B8%C4%A3%BF%E9_%BB%E1%D4%B1%C5%C5%D0%D0_%BD%F1%C8%D5%2C%C8%D5%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%BB%E1%D4%B1%C5%C5%D0%D0_%B1%BE%D6%DC%2C%D6%DC%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%BB%E1%D4%B1%C5%C5%D0%D0_%B1%BE%D4%C2%2C%D4%C2%22%3B%7D&jscharset=0&cachelife=3600',
    'parameter' =>
    array (
      'module' => 'rowcombine.inc.php',
      'cachelife' => '3600',
      'settings' =>
      array (
        'title' => '會員排行',
        'data' => '邊欄模塊_會員排行_今日,日
邊欄模塊_會員排行_本周,周
邊欄模塊_會員排行_本月,月',
      ),
      'jscharset' => '0',
    ),
    'comment' => '今日、本周、本月會員排行聚合模塊',
    'type' => '5',
  ),
  '邊欄模塊_推薦主題' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=1&newwindow=1&threadtype=0&highlight=0&orderby=lastpost&hours=48&jscharset=0&cachelife=3600&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%CD%C6%BC%F6%D6%F7%CC%E2%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>推薦主題</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '3600',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '1',
      'newwindow' => 1,
      'orderby' => 'lastpost',
      'hours' => '48',
      'jscharset' => '0',
    ),
    'comment' => '邊欄推薦主題模塊',
    'type' => '0',
  ),
  '邊欄模塊_最新圖片' =>
  array (
    'url' => 'function=images&sidestatus=0&isimage=1&threadmethod=1&maxwidth=140&maxheight=140&startrow=0&items=5&orderby=dateline&hours=0&digest=0&newwindow=1&jscharset=0&jstemplate=%3Cdiv%20%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%D7%EE%D0%C2%CD%BC%C6%AC%3C%2Fh4%3E%0D%0A%3Cscript%20type%3D%5C%22text%2Fjavascript%5C%22%3E%0D%0Avar%20slideSpeed%20%3D%202500%3B%0D%0Avar%20slideImgsize%20%3D%20%5B140%2C140%5D%3B%0D%0Avar%20slideTextBar%20%3D%200%3B%0D%0Avar%20slideBorderColor%20%3D%20%5C%27%23C8DCEC%5C%27%3B%0D%0Avar%20slideBgColor%20%3D%20%5C%27%23FFF%5C%27%3B%0D%0Avar%20slideImgs%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideImgLinks%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideImgTexts%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideSwitchBar%20%3D%201%3B%0D%0Avar%20slideSwitchColor%20%3D%20%5C%27black%5C%27%3B%0D%0Avar%20slideSwitchbgColor%20%3D%20%5C%27white%5C%27%3B%0D%0Avar%20slideSwitchHiColor%20%3D%20%5C%27%23C8DCEC%5C%27%3B%0D%0A%5Bnode%5D%0D%0AslideImgs%5B%7Border%7D%5D%20%3D%20%5C%22%7Bimgfile%7D%5C%22%3B%0D%0AslideImgLinks%5B%7Border%7D%5D%20%3D%20%5C%22%7Blink%7D%5C%22%3B%0D%0AslideImgTexts%5B%7Border%7D%5D%20%3D%20%5C%22%7Bsubject%7D%5C%22%3B%0D%0A%5B%2Fnode%5D%0D%0A%3C%2Fscript%3E%0D%0A%3Cscript%20language%3D%5C%22javascript%5C%22%20type%3D%5C%22text%2Fjavascript%5C%22%20src%3D%5C%22include%2Fjs%2Fslide.js%5C%22%3E%3C%2Fscript%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div  class=\\"sidebox\\">
<h4>最新圖片</h4>
<script type=\\"text/javascript\\">
var slideSpeed = 2500;
var slideImgsize = [140,140];
var slideTextBar = 0;
var slideBorderColor = \\\'#C8DCEC\\\';
var slideBgColor = \\\'#FFF\\\';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchBar = 1;
var slideSwitchColor = \\\'black\\\';
var slideSwitchbgColor = \\\'white\\\';
var slideSwitchHiColor = \\\'#C8DCEC\\\';
[node]
slideImgs[{order}] = \\"{imgfile}\\";
slideImgLinks[{order}] = \\"{link}\\";
slideImgTexts[{order}] = \\"{subject}\\";
[/node]
</script>
<script language=\\"javascript\\" type=\\"text/javascript\\" src=\\"include/js/slide.js\\"></script>
</div>',
      'cachelife' => '',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'isimage' => '1',
      'maxwidth' => '140',
      'maxheight' => '140',
      'threadmethod' => '1',
      'newwindow' => 1,
      'orderby' => 'dateline',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '邊欄最新圖片展示模塊',
    'type' => '4',
  ),
  '邊欄模塊_最新主題' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=dateline&hours=0&jscharset=0&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%D7%EE%D0%C2%D6%F7%CC%E2%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>最新主題</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'dateline',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '邊欄最新主題模塊',
    'type' => '0',
  ),
  '邊欄模塊_活躍會員' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=12&newwindow=1&extcredit=1&orderby=posts&hours=0&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%BB%EE%D4%BE%BB%E1%D4%B1%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22avt_list%20s_clear%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bavatarsmall%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>活躍會員</h4>
<ul class=\\"avt_list s_clear\\">
[node]<li>{avatarsmall}</li>[/node]
</ul>
</div>',
      'cachelife' => '43200',
      'startrow' => '0',
      'items' => '12',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'posts',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '邊欄活躍會員模塊',
    'type' => '2',
  ),
  '邊欄模塊_熱門主題_本版' =>
  array (
    'url' => 'function=threads&sidestatus=1&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=replies&hours=0&jscharset=0&cachelife=1800&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%B0%E6%C8%C8%C3%C5%D6%F7%CC%E2%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本版熱門主題</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '1800',
      'sidestatus' => '1',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'replies',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '邊欄本版熱門主題模塊',
    'type' => '0',
  ),
  '邊欄模塊_熱門主題_今日' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=hourviews&hours=24&jscharset=0&cachelife=1800&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%BD%F1%C8%D5%C8%C8%C3%C5%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>今日熱門</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '1800',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'hourviews',
      'hours' => '24',
      'jscharset' => '0',
    ),
    'comment' => '邊欄今日熱門主題模塊',
    'type' => '0',
  ),
  '邊欄模塊_最新回復' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=lastpost&hours=0&jscharset=0&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%D7%EE%D0%C2%BB%D8%B8%B4%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>最新回復</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'lastpost',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '邊欄最新回復模塊',
    'type' => '0',
  ),
  '邊欄模塊_最新圖片_本版' =>
  array (
    'url' => 'function=images&sidestatus=1&isimage=1&threadmethod=1&maxwidth=140&maxheight=140&startrow=0&items=5&orderby=dateline&hours=0&digest=0&newwindow=1&jscharset=0&jstemplate=%3Cdiv%20%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%D7%EE%D0%C2%CD%BC%C6%AC%3C%2Fh4%3E%0D%0A%3Cscript%20type%3D%5C%22text%2Fjavascript%5C%22%3E%0D%0Avar%20slideSpeed%20%3D%202500%3B%0D%0Avar%20slideImgsize%20%3D%20%5B140%2C140%5D%3B%0D%0Avar%20slideTextBar%20%3D%200%3B%0D%0Avar%20slideBorderColor%20%3D%20%5C%27%23C8DCEC%5C%27%3B%0D%0Avar%20slideBgColor%20%3D%20%5C%27%23FFF%5C%27%3B%0D%0Avar%20slideImgs%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideImgLinks%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideImgTexts%20%3D%20new%20Array%28%29%3B%0D%0Avar%20slideSwitchBar%20%3D%201%3B%0D%0Avar%20slideSwitchColor%20%3D%20%5C%27black%5C%27%3B%0D%0Avar%20slideSwitchbgColor%20%3D%20%5C%27white%5C%27%3B%0D%0Avar%20slideSwitchHiColor%20%3D%20%5C%27%23C8DCEC%5C%27%3B%0D%0A%5Bnode%5D%0D%0AslideImgs%5B%7Border%7D%5D%20%3D%20%5C%22%7Bimgfile%7D%5C%22%3B%0D%0AslideImgLinks%5B%7Border%7D%5D%20%3D%20%5C%22%7Blink%7D%5C%22%3B%0D%0AslideImgTexts%5B%7Border%7D%5D%20%3D%20%5C%22%7Bsubject%7D%5C%22%3B%0D%0A%5B%2Fnode%5D%0D%0A%3C%2Fscript%3E%0D%0A%3Cscript%20language%3D%5C%22javascript%5C%22%20type%3D%5C%22text%2Fjavascript%5C%22%20src%3D%5C%22include%2Fjs%2Fslide.js%5C%22%3E%3C%2Fscript%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div  class=\\"sidebox\\">
<h4>最新圖片</h4>
<script type=\\"text/javascript\\">
var slideSpeed = 2500;
var slideImgsize = [140,140];
var slideTextBar = 0;
var slideBorderColor = \\\'#C8DCEC\\\';
var slideBgColor = \\\'#FFF\\\';
var slideImgs = new Array();
var slideImgLinks = new Array();
var slideImgTexts = new Array();
var slideSwitchBar = 1;
var slideSwitchColor = \\\'black\\\';
var slideSwitchbgColor = \\\'white\\\';
var slideSwitchHiColor = \\\'#C8DCEC\\\';
[node]
slideImgs[{order}] = \\"{imgfile}\\";
slideImgLinks[{order}] = \\"{link}\\";
slideImgTexts[{order}] = \\"{subject}\\";
[/node]
</script>
<script language=\\"javascript\\" type=\\"text/javascript\\" src=\\"include/js/slide.js\\"></script>
</div>',
      'cachelife' => '',
      'sidestatus' => '1',
      'startrow' => '0',
      'items' => '5',
      'isimage' => '1',
      'maxwidth' => '140',
      'maxheight' => '140',
      'threadmethod' => '1',
      'newwindow' => 1,
      'orderby' => 'dateline',
      'hours' => '',
      'jscharset' => '0',
    ),
    'comment' => '邊欄本版最新圖片展示模塊',
    'type' => '4',
  ),
  '邊欄模塊_標籤' =>
  array (
    'url' => 'function=module&module=tag.inc.php&settings=a%3A1%3A%7Bs%3A5%3A%22limit%22%3Bs%3A2%3A%2220%22%3B%7D&jscharset=0&cachelife=900',
    'parameter' =>
    array (
      'module' => 'tag.inc.php',
      'cachelife' => '900',
      'settings' =>
      array (
        'limit' => '20',
      ),
      'jscharset' => '0',
    ),
    'comment' => '邊欄標籤模塊',
    'type' => '5',
  ),
  '邊欄模塊_會員排行_本月' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=5&newwindow=1&extcredit=1&orderby=hourposts&hours=720&jscharset=0&cachelife=86400&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%20s_clear%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D4%C2%C5%C5%D0%D0%3C%2Fh4%3E%0D%0A%5Bnode%5D%3Cdiv%20style%3D%5C%22clear%3Aboth%5C%22%3E%3Cdiv%20style%3D%5C%22float%3Aleft%3Bmargin%3A%200%2016px%205px%200%5C%22%3E%7Bavatarsmall%7D%3C%2Fdiv%3E%7Bmember%7D%3Cbr%20%2F%3E%B7%A2%CC%FB%20%7Bvalue%7D%20%C6%AA%3C%2Fdiv%3E%5B%2Fnode%5D%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本月排行</h4>
[node]<div class=\\"s_clear\\" style=\\"margin-bottom: 5px;\\"><div style=\\"margin-right: 10px; float: left;\\">{avatarsmall}</div><p>{member}</p><p>發帖 {value} 篇</p></div>[/node]
</div>',
      'cachelife' => '86400',
      'startrow' => '0',
      'items' => '5',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'hourposts',
      'hours' => '720',
      'jscharset' => '0',
    ),
    'comment' => '邊欄會員本月發帖排行模塊',
    'type' => '2',
  ),
  '邊欄模塊_會員排行_本周' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=5&newwindow=1&extcredit=1&orderby=hourposts&hours=168&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%20s_clear%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D6%DC%C5%C5%D0%D0%3C%2Fh4%3E%0D%0A%5Bnode%5D%3Cdiv%20style%3D%5C%22clear%3Aboth%5C%22%3E%3Cdiv%20style%3D%5C%22float%3Aleft%3Bmargin%3A%200%2016px%205px%200%5C%22%3E%7Bavatarsmall%7D%3C%2Fdiv%3E%7Bmember%7D%3Cbr%20%2F%3E%B7%A2%CC%FB%20%7Bvalue%7D%20%C6%AA%3C%2Fdiv%3E%5B%2Fnode%5D%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本周排行</h4>
[node]<div class=\\"s_clear\\" style=\\"margin-bottom: 5px;\\"><div style=\\"margin-right: 10px; float: left;\\">{avatarsmall}</div><p>{member}</p><p>發帖 {value} 篇</p></div>[/node]
</div>',
      'cachelife' => '43200',
      'startrow' => '0',
      'items' => '5',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'hourposts',
      'hours' => '168',
      'jscharset' => '0',
    ),
    'comment' => '邊欄會員本周發帖排行模塊',
    'type' => '2',
  ),
   '邊欄方案_主題列表頁默認' =>
  array (
    'url' => 'function=side&jscharset=&jstemplate=%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%CE%D2%B5%C4%D6%FA%CA%D6%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2_%B1%BE%B0%E6%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%B0%E6%BF%E9%C5%C5%D0%D0%5B%2Fmodule%5D',
    'parameter' =>
    array (
      'selectmodule' =>
      array (
        1 => '邊欄模塊_我的助手',
        2 => '邊欄模塊_熱門主題_本版',
        3 => '邊欄模塊_版塊排行',
      ),
      'cachelife' => 0,
      'jstemplate' => '[module]邊欄模塊_我的助手[/module]<hr class="shadowline"/>[module]邊欄模塊_熱門主題_本版[/module]<hr class="shadowline"/>[module]邊欄模塊_版塊排行[/module]',
    ),
    'comment' => NULL,
    'type' => '-2',
  ),
  '邊欄方案_首頁默認' =>
  array (
    'url' => 'function=side&jscharset=&jstemplate=%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%CE%D2%B5%C4%D6%FA%CA%D6%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%BE%DB%BA%CF%C4%A3%BF%E9_%D0%C2%CC%FB%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%BE%DB%BA%CF%C4%A3%BF%E9_%C8%C8%C3%C5%D6%F7%CC%E2%5B%2Fmodule%5D%3Chr%20class%3D%22shadowline%22%2F%3E%5Bmodule%5D%B1%DF%C0%B8%C4%A3%BF%E9_%BB%EE%D4%BE%BB%E1%D4%B1%5B%2Fmodule%5D',
    'parameter' =>
    array (
      'selectmodule' =>
      array (
        1 => '邊欄模塊_我的助手',
        2 => '聚合模塊_新帖',
        3 => '聚合模塊_熱門主題',
        4 => '邊欄模塊_活躍會員',
      ),
      'cachelife' => 0,
      'jstemplate' => '[module]邊欄模塊_我的助手[/module]<hr class="shadowline"/>[module]聚合模塊_新帖[/module]<hr class="shadowline"/>[module]聚合模塊_熱門主題[/module]<hr class="shadowline"/>[module]邊欄模塊_活躍會員[/module]',
    ),
    'comment' => NULL,
    'type' => '-2',
  ),
  '聚合模塊_新帖' =>
  array (
    'url' => 'function=module&module=rowcombine.inc.php&settings=a%3A2%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%D7%EE%D0%C2%CC%FB%D7%D3%22%3Bs%3A4%3A%22data%22%3Bs%3A46%3A%22%B1%DF%C0%B8%C4%A3%BF%E9_%D7%EE%D0%C2%D6%F7%CC%E2%2C%D6%F7%CC%E2%0D%0A%B1%DF%C0%B8%C4%A3%BF%E9_%D7%EE%D0%C2%BB%D8%B8%B4%2C%BB%D8%B8%B4%22%3B%7D&jscharset=0',
    'parameter' =>
    array (
      'module' => 'rowcombine.inc.php',
      'cachelife' => '',
      'settings' =>
      array (
        'title' => '最新帖子',
        'data' => '邊欄模塊_最新主題,主題
邊欄模塊_最新回復,回復',
      ),
      'jscharset' => '0',
    ),
    'comment' => '最新主題、最新回復聚合模塊',
    'type' => '5',
  ),
  '邊欄模塊_熱門主題_本周' =>
  array (
    'url' => 'function=threads&sidestatus=0&maxlength=20&fnamelength=0&messagelength=&startrow=0&picpre=images%2Fcommon%2Fslisticon.gif&items=5&tag=&tids=&special=0&rewardstatus=&digest=0&stick=0&recommend=0&newwindow=1&threadtype=0&highlight=0&orderby=hourviews&hours=168&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D6%DC%C8%C8%C3%C5%3C%2Fh4%3E%0D%0A%3Cul%20class%3D%5C%22textinfolist%5C%22%3E%0D%0A%5Bnode%5D%3Cli%3E%7Bprefix%7D%7Bsubject%7D%3C%2Fli%3E%5B%2Fnode%5D%0D%0A%3C%2Ful%3E%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>本周熱門</h4>
<ul class=\\"textinfolist\\">
[node]<li>{prefix}{subject}</li>[/node]
</ul>
</div>',
      'cachelife' => '43200',
      'sidestatus' => '0',
      'startrow' => '0',
      'items' => '5',
      'maxlength' => '20',
      'fnamelength' => '0',
      'messagelength' => '',
      'picpre' => 'images/common/slisticon.gif',
      'tids' => '',
      'keyword' => '',
      'tag' => '',
      'threadtype' => '0',
      'highlight' => '0',
      'recommend' => '0',
      'newwindow' => 1,
      'orderby' => 'hourviews',
      'hours' => '168',
      'jscharset' => '0',
    ),
    'comment' => '邊欄本周熱門主題模塊',
    'type' => '0',
  ),
  '邊欄模塊_會員排行_今日' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=5&newwindow=1&extcredit=1&orderby=hourposts&hours=24&jscharset=0&cachelife=3600&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%20s_clear%5C%22%3E%0D%0A%3Ch4%3E%BD%F1%C8%D5%C5%C5%D0%D0%3C%2Fh4%3E%0D%0A%5Bnode%5D%3Cdiv%20style%3D%5C%22clear%3Aboth%5C%22%3E%3Cdiv%20style%3D%5C%22float%3Aleft%3Bmargin%3A%200%2016px%205px%200%5C%22%3E%7Bavatarsmall%7D%3C%2Fdiv%3E%7Bmember%7D%3Cbr%20%2F%3E%B7%A2%CC%FB%20%7Bvalue%7D%20%C6%AA%3C%2Fdiv%3E%5B%2Fnode%5D%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox\\">
<h4>今日排行</h4>
[node]<div class=\\"s_clear\\" style=\\"margin-bottom: 5px;\\"><div style=\\"margin-right: 10px; float: left;\\">{avatarsmall}</div><p>{member}</p><p>發帖 {value} 篇</p></div>[/node]
</div>',
      'cachelife' => '3600',
      'startrow' => '0',
      'items' => '5',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'hourposts',
      'hours' => '24',
      'jscharset' => '0',
    ),
    'comment' => '邊欄會員今日發帖排行模塊',
    'type' => '2',
  ),
  '邊欄模塊_論壇之星' =>
  array (
    'url' => 'function=memberrank&startrow=0&items=3&newwindow=1&extcredit=1&orderby=hourposts&hours=168&jscharset=0&cachelife=43200&jstemplate=%3Cdiv%20class%3D%5C%22sidebox%20s_clear%5C%22%3E%0D%0A%3Ch4%3E%B1%BE%D6%DC%D6%AE%D0%C7%3C%2Fh4%3E%0D%0A%5Bnode%5D%0D%0A%5Bshow%3D1%5D%3Cdiv%20style%3D%5C%22clear%3Aboth%5C%22%3E%3Cdiv%20style%3D%5C%22float%3Aleft%3B%20margin-right%3A%2016px%3B%5C%22%3E%7Bavatarsmall%7D%3C%2Fdiv%3E%5B%2Fshow%5D%7Bmember%7D%20%5Bshow%3D1%5D%3Cbr%20%2F%3E%B7%A2%CC%FB%20%7Bvalue%7D%20%C6%AA%3C%2Fdiv%3E%3Cdiv%20style%3D%5C%22clear%3Aboth%3Bmargin-top%3A2px%5C%22%20%2F%3E%3C%2Fdiv%3E%5B%2Fshow%5D%0D%0A%5B%2Fnode%5D%0D%0A%3C%2Fdiv%3E',
    'parameter' =>
    array (
      'jstemplate' => '<div class=\\"sidebox s_clear\\">
<h4>本周之星</h4>
[node]
[show=1]<div style=\\"clear:both\\"><div style=\\"float:left; margin-right: 16px;\\">{avatarsmall}</div>[/show]{member} [show=1]<br />發帖 {value} 篇</div><div style=\\"clear:both;margin-top:2px\\" /></div>[/show]
[/node]
</div>',
      'cachelife' => '43200',
      'startrow' => '0',
      'items' => '3',
      'newwindow' => 1,
      'extcredit' => '1',
      'orderby' => 'hourposts',
      'hours' => '168',
      'jscharset' => '0',
    ),
    'comment' => '邊欄論壇之星模塊',
    'type' => '2',
  ),
  '邊欄模塊_我的助手' =>
  array (
    'url' => 'function=module&module=assistant.inc.php&settings=N%3B&jscharset=0&cachelife=0',
    'parameter' =>
    array (
      'module' => 'assistant.inc.php',
      'cachelife' => '0',
      'jscharset' => '0',
    ),
    'comment' => '邊欄我的助手模塊',
    'type' => '5',
  ),
  '邊欄模塊_Google搜索' =>
  array (
    'url' => 'function=module&module=google.inc.php&settings=a%3A2%3A%7Bs%3A4%3A%22lang%22%3Bs%3A0%3A%22%22%3Bs%3A7%3A%22default%22%3Bs%3A1%3A%221%22%3B%7D&jscharset=0&cachelife=864000',
    'parameter' =>
    array (
      'module' => 'google.inc.php',
      'cachelife' => '864000',
      'settings' =>
      array (
        'lang' => '',
        'default' => '1',
      ),
      'jscharset' => '0',
    ),
    'comment' => '邊欄 Google 搜索模塊',
    'type' => '5',
  ),
  'UCHome_最新動態' =>
  array (
    'url' => 'function=module&module=feed.inc.php&settings=a%3A6%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%D7%EE%D0%C2%B6%AF%CC%AC%22%3Bs%3A4%3A%22uids%22%3Bs%3A0%3A%22%22%3Bs%3A6%3A%22friend%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22start%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22limit%22%3Bs%3A2%3A%2210%22%3Bs%3A8%3A%22template%22%3Bs%3A54%3A%22%3Cdiv%20style%3D%5C%22padding-left%3A2px%5C%22%3E%7Btitle_template%7D%3C%2Fdiv%3E%22%3B%7D&jscharset=0&cachelife=0',
    'parameter' =>
    array (
      'module' => 'feed.inc.php',
      'cachelife' => '0',
      'settings' =>
      array (
        'title' => '最新動態',
        'uids' => '',
        'friend' => '0',
        'start' => '0',
        'limit' => '10',
        'template' => '<div style=\\"padding-left:2px\\">{title_template}</div>',
      ),
      'jscharset' => '0',
    ),
    'comment' => '獲取UCHome的最新動態',
    'type' => '5',
  ),
  'UCHome_最新更新空間' =>
  array (
    'url' => 'function=module&module=space.inc.php&settings=a%3A17%3A%7Bs%3A5%3A%22title%22%3Bs%3A12%3A%22%D7%EE%D0%C2%B8%FC%D0%C2%BF%D5%BC%E4%22%3Bs%3A3%3A%22uid%22%3Bs%3A0%3A%22%22%3Bs%3A14%3A%22startfriendnum%22%3Bs%3A0%3A%22%22%3Bs%3A12%3A%22endfriendnum%22%3Bs%3A0%3A%22%22%3Bs%3A12%3A%22startviewnum%22%3Bs%3A0%3A%22%22%3Bs%3A10%3A%22endviewnum%22%3Bs%3A0%3A%22%22%3Bs%3A11%3A%22startcredit%22%3Bs%3A0%3A%22%22%3Bs%3A9%3A%22endcredit%22%3Bs%3A0%3A%22%22%3Bs%3A6%3A%22avatar%22%3Bs%3A2%3A%22-1%22%3Bs%3A10%3A%22namestatus%22%3Bs%3A2%3A%22-1%22%3Bs%3A8%3A%22dateline%22%3Bs%3A1%3A%220%22%3Bs%3A10%3A%22updatetime%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22order%22%3Bs%3A10%3A%22updatetime%22%3Bs%3A2%3A%22sc%22%3Bs%3A4%3A%22DESC%22%3Bs%3A5%3A%22start%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22limit%22%3Bs%3A2%3A%2210%22%3Bs%3A8%3A%22template%22%3Bs%3A267%3A%22%3Ctable%3E%0D%0A%3Ctr%3E%0D%0A%3Ctd%20width%3D%5C%2250%5C%22%20rowspan%3D%5C%222%5C%22%3E%3Ca%20href%3D%5C%22%7Buserlink%7D%5C%22%20target%3D%5C%22_blank%5C%22%3E%3Cimg%20src%3D%5C%22%7Bphoto%7D%5C%22%20%2F%3E%3C%2Fa%3E%3C%2Ftd%3E%0D%0A%3Ctd%3E%3Ca%20href%3D%5C%22%7Buserlink%7D%5C%22%20%20target%3D%5C%22_blank%5C%22%20style%3D%5C%22text-decoration%3Anone%3B%5C%22%3E%7Busername%7D%3C%2Fa%3E%3C%2Ftd%3E%0D%0A%3C%2Ftr%3E%0D%0A%3Ctr%3E%3Ctd%3E%7Bupdatetime%7D%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%3C%2Ftable%3E%22%3B%7D&jscharset=0&cachelife=0',
    'parameter' =>
    array (
      'module' => 'space.inc.php',
      'cachelife' => '0',
      'settings' =>
      array (
        'title' => '最新更新空間',
        'uid' => '',
        'startfriendnum' => '',
        'endfriendnum' => '',
        'startviewnum' => '',
        'endviewnum' => '',
        'startcredit' => '',
        'endcredit' => '',
        'avatar' => '-1',
        'namestatus' => '-1',
        'dateline' => '0',
        'updatetime' => '0',
        'order' => 'updatetime',
        'sc' => 'DESC',
        'start' => '0',
        'limit' => '10',
        'template' => '<table>
<tr>
<td width=\\"50\\" rowspan=\\"2\\"><a href=\\"{userlink}\\" target=\\"_blank\\"><img src=\\"{photo}\\" /></a></td>
<td><a href=\\"{userlink}\\"  target=\\"_blank\\" style=\\"text-decoration:none;\\">{username}</a></td>
</tr>
<tr><td>{updatetime}</td></tr>
</table>',
      ),
      'jscharset' => '0',
    ),
    'comment' => '獲取UCHome最新更新會員空間',
    'type' => '5',
  ),
  'UCHome_最新記錄' =>
  array (
    'url' => 'function=module&module=doing.inc.php&settings=a%3A6%3A%7Bs%3A5%3A%22title%22%3Bs%3A8%3A%22%D7%EE%D0%C2%BC%C7%C2%BC%22%3Bs%3A3%3A%22uid%22%3Bs%3A0%3A%22%22%3Bs%3A4%3A%22mood%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22start%22%3Bs%3A1%3A%220%22%3Bs%3A5%3A%22limit%22%3Bs%3A2%3A%2210%22%3Bs%3A8%3A%22template%22%3Bs%3A360%3A%22%0D%0A%3Cdiv%20style%3D%5C%22padding%3A0%200%205px%200%3B%5C%22%3E%0D%0A%3Ca%20href%3D%5C%22%7Buserlink%7D%5C%22%20target%3D%5C%22_blank%5C%22%3E%3Cimg%20src%3D%5C%22%7Bphoto%7D%5C%22%20width%3D%5C%2218%5C%22%20height%3D%5C%2218%5C%22%20align%3D%5C%22absmiddle%5C%22%3E%3C%2Fa%3E%20%3Ca%20href%3D%5C%22%7Buserlink%7D%5C%22%20%20target%3D%5C%22_blank%5C%22%3E%7Busername%7D%3C%2Fa%3E%A3%BA%0D%0A%3C%2Fdiv%3E%0D%0A%3Cdiv%20style%3D%5C%22padding%3A0%200%205px%2020px%3B%5C%22%3E%0D%0A%3Ca%20href%3D%5C%22%7Blink%7D%5C%22%20style%3D%5C%22color%3A%23333%3Btext-decoration%3Anone%3B%5C%22%20target%3D%5C%22_blank%5C%22%3E%7Bmessage%7D%3C%2Fa%3E%0D%0A%3C%2Fdiv%3E%22%3B%7D&jscharset=0&cachelife=0',
    'parameter' =>
    array (
      'module' => 'doing.inc.php',
      'cachelife' => '0',
      'settings' =>
      array (
        'title' => '最新記錄',
        'uid' => '',
        'mood' => '0',
        'start' => '0',
        'limit' => '10',
        'template' => '
<div style=\\"padding:0 0 5px 0;\\">
<a href=\\"{userlink}\\" target=\\"_blank\\"><img src=\\"{photo}\\" width=\\"18\\" height=\\"18\\" align=\\"absmiddle\\"></a> <a href=\\"{userlink}\\"  target=\\"_blank\\">{username}</a>：
</div>
<div style=\\"padding:0 0 5px 20px;\\">
<a href=\\"{link}\\" style=\\"color:#333;text-decoration:none;\\" target=\\"_blank\\">{message}</a>
</div>',
      ),
      'jscharset' => '0',
    ),
    'comment' => '獲取UCHome的最新記錄',
    'type' => '5',
  ),
  'UCHome_競價排名' =>
  array (
    'url' => 'function=module&module=html.inc.php&settings=a%3A3%3A%7Bs%3A4%3A%22type%22%3Bs%3A1%3A%220%22%3Bs%3A4%3A%22code%22%3Bs%3A27%3A%22%3Cdiv%20id%3D%5C%22sidefeed%5C%22%3E%3C%2Fdiv%3E%22%3Bs%3A4%3A%22side%22%3Bs%3A1%3A%220%22%3B%7D&jscharset=0&cachelife=864000',
    'parameter' =>
    array (
      'module' => 'html.inc.php',
      'cachelife' => '864000',
      'settings' =>
      array (
        'type' => '0',
        'code' => '<div id=\\"sidefeed\\"></div>',
        'side' => '0',
      ),
      'jscharset' => '0',
    ),
    'comment' => '獲取UCHome的競價排名信息',
    'type' => '5',
  ),
);

$tasktypes = array(
  'promotion' =>
  array (
    'name' => '論壇推廣任務',
    'version' => '1.0',
  ),
  'gift' =>
  array (
    'name' => '紅包類任務',
    'version' => '1.0',
  ),
  'avatar' =>
  array (
    'name' => '頭像類任務',
    'version' => '1.0',
  )
);

$newbietask = array(
	1 => array(
		'name' => '回帖是一種美德',
		'task' => "1, 0, '回帖是一種美德', '學習回帖，看帖回帖是一種美德，BS看帖不回帖的', '', 0, 0, 0, 'all', 'newbie_post_reply', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '回復指定主題', '".addslashes('設置會員只有回復該主題才能完成任務，請填寫主題的 tid(比如一個主題的地址是 http://localhost/viewthread.php?tid=8 那麼該主題的 tid 就是 8)，留空為不限制')."', 'threadid', 'text', '0', ''",
			"'setting', '', '', 'entrance', 'text', 'viewthread', ''"
		)
	),
	2 => array(
		'name' => '我的第一次',
		'task' => "1, 0, '我的第一次', '學會發主題帖，成為社區的焦點', '', 0, 0, 0, 'all', 'newbie_post_newthread', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '在指定版塊發表新主題', '".addslashes('設置會員必須在某個版塊發表至少一篇新主題才能完成任務')."', 'forumid', 'text', '', ''",

			"'setting', '', '', 'entrance', 'text', 'forumdisplay', ''"
		)
	),
	3 => array(
		'name' => '與眾不同',
		'task' => "1, 0, '與眾不同', '修改個人資料，讓你和別人與眾不同', '', 0, 0, 0, 'all', 'newbie_modifyprofile', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '完善個人資料', '".addslashes('申請任務後只要把自己的個人資料填寫完整即可完成任務')."', '', '', '', ''",
			"'setting', '', '', 'entrance', 'text', 'memcp', ''"
		)
	),
	4 => array(
		'name' => '我型我秀',
		'task' => "1, 0, '我型我秀', '上傳頭像，讓大家認識一個全新的你', '', 0, 0, 0, 'all', 'newbie_uploadavatar', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '上傳頭像', '".addslashes('申請任務後只要成功上傳頭像即可完成任務')."', '', '', '', ''",
			"'setting', '', '', 'entrance', 'text', 'memcp', ''"
		)
	),
	5 => array(
		'name' => '聯絡感情',
		'task' => "1, 0, '聯絡感情', '給其他用戶發個發短消息，大家聯絡一下感情', '', 0, 0, 0, 'all', 'newbie_sendpm', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '給指定會員發送短消息', '".addslashes('只有給該會員成功發送短消息才能完成任務，請填寫該會員的用戶名')."', 'authorid', 'text', '', ''",
			"'setting', '', '', 'entrance', 'text', 'space', ''"
		)
	),
	6 => array(
		'name' => '一個好漢三個幫',
		'task' => "1, 0, '一個好漢三個幫', '出來混的，沒幾個好友怎麼行，加個好友吧', '', 0, 0, 0, 'all', 'newbie_addbuddy', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '將指定會員加為好友', '".addslashes('只有將該會員加為好友才能完成任務，請填寫該會員的用戶名')."', 'authorid', 'text', '', ''",
			"'setting', '', '', 'entrance', 'text', 'space', ''"
		)
	),
	7 => array(
		'name' => '信息時代',
		'task' => "1, 0, '信息時代', '信息時代最缺的什麼？搜索', '', 0, 0, 0, 'all', 'newbie_search', 0, 0, 0, 'credit', '2', 10, -1, ''",
		'vars' => array(
			"'complete', '學會搜索', '".addslashes('申請任務後只要成功使用論壇搜索功能即可完成任務')."', '', '', '', ''",
			"'setting', '', '', 'entrance', 'text', 'search', ''"
		)
	)
);


$testdatacontent = array();
$testdatacontent[0]['subject'] = '論壇運營秘籍 - Discuz! 7.2 新功能的妙用 ';
$testdatacontent[0]['message'] = <<<EOD

Discuz! 7.2 新推出的幾個功能，都是圍繞著提高論壇的互動性而設計的，好好利用這些新功能，對於提高論壇用戶粘性，增強會員之間的互動性，大有脾益。下面我們來說說，如何根據論壇的實際情況，來合理的設置這些新功能。[p=30, 2, left]
[b][size=4]一、論壇動態和首頁顯示風格[/size][/b] [/p][p=30, 2, left]
[b]設計目標：[/b] [/p]
通過對論壇事件展示方式的優化，增強論壇信息的傳遞功能，提高論壇會員之間的溝通效率。[b]設置指導：[/b]
很多人喜歡 UCHome 中好友動態功能，Discuz! 將這一功能引入論壇系統，通過指定條件產生論壇動態消息，促進會員之間互動的產生。各項目的值應該根據當前論壇運營狀況仔細斟酌而定。 例如：論壇日發帖量在100以上的，設置【主題回複數達到一定值發送動態】時可以如下設置 「10, 30, 80」  ，這樣當主題被回復了10次，30次，80次的時候都在論壇動態頁產生一個動態消息。日發帖量在1000以上的論壇，就可以設置「30，100，200」。總結起來論壇小，活躍用戶少，日發帖量不大，那麼應該將各項目的閾值調低，這樣讓論壇動態更容易產生。相反，論壇大，活躍用戶多，日發帖量很大，那麼應該將各項目的閾值調高，避免論壇動態氾濫，影響用戶體驗。


[img]http://faq.comsenz.com/attachments/2009/10/26_200910091741481w8rg.thumb.jpg[/img]

論壇首頁支持兩種顯示風格了：一種是傳統的論壇版塊列表的形式，這種形式歷史悠久，被廣大用戶所熟悉，版塊就像一本書的目錄，用戶可以根據版塊來快速的確定自己感興趣的話題在什麼地方；第二種論壇首頁形式就是7.2新推出的論壇動態，在這種形式下，論壇內的各種事件動態信息都彙集到論壇動態列表中，比如某人發的主題回複數超過1000了，某某的帖子被版主評為精華了等等。這種以事件為核心，動態信息為表現的形式，可以大大加強論壇用戶之間的互動性，信息流動起來了，互動性就更容易產生，更能突出一個真實「社區」的感覺。
在這裡特別提醒一下，剛開始運營不久的論壇，往往內容不夠充實，人氣不旺，也就產生不了高質量的論壇動態信息，因此短期內不宜設置首頁風格為：論壇實時動態。


[img]http://faq.comsenz.com/attachments/2009/10/26_200910091742581Wdb4.png[/img][p=30, 2, left]
[b][size=4]二、基於主題熱度和評價的主題推薦方式[/size][/b] [/p][p=30, 2, left]
[b]設計目標：[/b] [/p]
以前版本中的版主推薦或者被廣泛採用的首頁四格插件等功能都是為了達到同一個目的：讓論壇的各種「熱鬧」或者精華信息被更多的用戶更加容易的看到，促使他們參與其中。 但以前的方式由於對論壇的帖子沒有一個統一標準的評價系統，因此不管採用那種信息提取方式，都會不夠精準。因此 Discuz! 引入了主題熱度的概念，讓論壇用戶廣泛的參與到論壇內容的評價中來。讓論壇熱鬧和精華信息的提取和展現變得更加準確，更加方便。
[b]設置指導：[/b]
【[url=http://faq.comsenz.com/viewnews-851]主題熱度[/url]】會影響主題在主題列表顯示時標題後圖標的顯示(如圖)，主題的熱度根據回複數、評價值等參量根據一定算法計算得到。當熱度值達到設定的顯示級別如50，100，200 時，在主題列表中主題的標題後會顯示對應級別的圖標，來表示該主題的熱門程度。站長應該根據站點當前運營情況來設定這些值，一般推薦的方案是保證主題列表中，熱門主題和普通主題的比例在 1:7 左右。

[img]http://faq.comsenz.com/attachments/2009/10/26_200910091749011stPk.png[/img]

【[url=http://faq.comsenz.com/viewnews-851]主題評價[/url]】功能通過收集用戶對主題的評價，來計算評價圖標的顯示級別，當達到設定的級別閾值時，在主題列表中顯示主題標題後的對應級別的推薦圖標。用戶可以再後台設置主題評價的詞語 例如加分操作和減分操作分別設置為「頂」「踩」或者「支持」「鄙視」等，發揮想像力，讓用戶更有興趣參與到對主題的評價中來。

[img]http://faq.comsenz.com/attachments/2009/10/26_20091009174901250VL.png[/img]

【[url=http://faq.comsenz.com/viewnews-854]論壇熱點[/url]】是根據主題熱度來選取一部分熱點主題展示在首頁，由於選取的主題熱度高，參與性強，加之顯示在首頁所以能好的促進論壇氣氛的活躍。但是新站開啟論壇熱點的效果不會很好，因為新站主題少，人氣少，提取出來的熱點準確性就會大打折扣。等有一定人氣基礎，出來的熱點才是真正的熱點。一般推薦的方式是：左邊放置圖片展示，右邊設置 10 至 14 個推薦主題。

[url=http://faq.comsenz.com/attachments/2009/10/26_200910091744121xhVg.png][img=644,186]http://faq.comsenz.com/attachments/2009/10/26_200910091744121xhVg.png[/img][/url]

【[url=http://faq.comsenz.com/viewnews-852]推薦主題[/url]】功能通過自動或手動方式從論壇數據中提取一些主題作為系統推薦的主題，這些主題一般為論壇裡內容精彩、用戶參與度高的話題。推薦主題的數量應設置合理，太多則讓人眼花繚亂，太少則不美觀。數據緩存時間也要設置得當，該值設置太大則數據長時間不更新，造成吸引力下降，設置太小頻繁更新緩存又會增加服務器負擔。根據設置推薦的主題可以顯示在主題列表頁，也可以顯示在主題查看頁（如圖）。一般來講和版塊話題主旨符合程度高，帖子內容普適程度高的主題適合顯示在主題列表頁，帖子內容新穎，話題性強則更適合顯示到主題查看頁。

[img]http://faq.comsenz.com/attachments/2009/10/26_200910091759431vD2J.png[/img]
[url=http://faq.comsenz.com/attachments/2009/10/26_200910091759432UPgA.png][img=644,459]http://faq.comsenz.com/attachments/2009/10/26_200910091759432UPgA.png[/img][/url]
[p=30, 2, left]
[b][size=4]三、服務老用戶不忘照顧新用戶[/size][/b][/p]

[b]設計目標：[/b]
隨著互聯網的發展，論壇用戶群體越來越廣泛，很多人沒有多少上網或電腦使用經驗，他們成為論壇的用戶後往往不知道自己能在論壇做些什麼，通過新手任務功能，在嚮導的指引下，讓這些用戶很快的掌握論壇基本操作，不再對論壇感到陌生，盡快的參與到論壇的各種活動當中。
[b]設置指導：[/b]
建議站長在進行【[url=http://faq.comsenz.com/viewnews-853]新手任務[/url]】的設置時認真考慮任務獎勵類型和具體的獎勵量值。一般來講，同時使用多種獎勵形式(論壇已設定開啟【道具】和【勳章】功能)更能激勵新手們把所有新手任務做完。對積分的設置也要拉開層次，不要所有任務的獎勵都獎勵相同的積份量值。站長也可以修改任務描述，用更友好、更具吸引力的語言來描述任務，提高用戶對完成任務的興趣。下面是一些建議：

  任務一的任務名可以寫「學習回帖」 ，獎勵10個金錢 。任務二的任務名寫成「開始我的第一次」，獎勵一種道具。 任務三的任務名寫成「與眾不同」，獎勵一枚勳章。
   站長應該根據自己站點用戶群特徵來決定開啟哪些新手任務項目，例如用戶群主要為上網時間不長，對發帖回帖操作尚不熟悉的用戶，那麼就開啟學習回帖，發表主題等比較初級的任務。如果用戶群為已經有一定上網經驗，對論壇常規的發帖回帖操作已經比較熟悉，那麼就可以只開啟修改個人資料，修改頭像等比較高級的任務。
[color=#ff0000]備註： 文中的功能名以"【功能名稱】" 形式標注 ，例如：【[/color][url=http://faq.comsenz.com/viewnews-853][color=#ff0000]新手任務[/color][/url][color=#ff0000]】 點擊功能名稱的鏈接，可以查看該功能的使用說明。[/color]
EOD;

$testdatacontent[1]['subject'] = 'Discuz! 7.2 新功能——站長推薦 ';
$testdatacontent[1]['message'] = <<<EOD

Discuz! 7.2 新增站長推薦功能，管理員可以設置一部分帖子為「站長推薦」，被設置為「站長推薦」的這些帖子就會在帖子內容頁面右下角以浮動窗口的形式展示給瀏覽者，如果有多個主題被設置為「站長推薦」則隨機輪流顯示。
站長推薦可以理解為一個全局主題推薦，管理員可以將一些版塊重要信息，比如通知、公告等設置為站長推薦，以保證更多的用戶可以瀏覽到，或者還可以在此加入廣告帖進行贏利，一個功能多種用法，各位站長可以根據自身情況設置和使用。
「站長推薦」在後台的設置位置為：Discuz! 7.2 後台 => 廣告 => 站長推薦
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722051W2zR.gif[/img][p=30, 2, left]一、設置站長推薦[/p]
可以在此設置站長推薦區域標題，默認為「站長推薦」，您可以設置為您希望的標題：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722052Ji2X.gif[/img][p=30, 2, left]二、添加站長推薦[/p]
添加熱點話題有三種方式：手動添加、添加主題、自動添加。[p=30, 2, left]1、手動添加[/p]
上圖界面中點擊「添加」，在彈出的下拉框中我們點擊「手動添加」：

[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722053xvtI.gif[/img]



輸入「推薦鏈接地址」、「推薦標題」、「推薦內容」和「附加圖片」，然後「提交」即可手動添加一條站長推薦。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722054Fae6.gif[/img]
上圖界面中點擊「提交」則該帖子成功被設置為「站長推薦」：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722055tNdh.gif[/img]
返回前台進入帖子內容頁在右下角就可以看到我們剛才設置的該站長推薦：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722056CKUJ.gif[/img]
[b]2、添加主題[/b]
後台「站長推薦」點擊「添加」，在彈出的下拉框中我們點擊「添加主題」：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722057gPEE.gif[/img]
輸入帖子地址後點擊「獲取帖子內容」則可以獲取到該帖子的標題和帖子內容摘要：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722058BY2H.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271722059Fwkt.gif[/img]
提交即可成功添加該主題為站長推薦信息。
[p=30, 2, left]3、自動添加[/p]
後台「站長推薦」點擊「添加」，在彈出的下拉框中我們點擊「自動添加」：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009092717220510PAXX.gif[/img]
系統將自動推薦 10 個主題作為站長推薦候選，自動推薦的原則的獲取站點所有版主的推薦主題，如果版主推薦主題不足 10 個則有幾個自動推薦幾個。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909081525058gOVO.gif[/img]
管理員可以在此選擇哪些推薦主題設置為站長推薦，選中推薦主題前面的多選框，「提交」即可。[p=30, 2, left]二、管理站長推薦[/p]
所有被設置為站長推薦和曾經設置為站長推薦的主題都會在此顯示，管理員可以在此設置一些主題為站長推薦也可以取消其站長推薦的身份，還可以編輯這些主題，或者將這些主題刪除出站長推薦。
[img]http://faq.comsenz.com/attachments/2009/09/9_2009092717220511ZOHp.gif[/img][p=30, 2, left]三、前台顯示[/p]
我們來看看站長推薦在前台的顯示效果，打開隨便一篇帖子內容頁，在右下角我們可以看到一個浮動窗口，這個就是站長推薦的顯示界面：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009092717220512QfsZ.gif[/img]
在該浮動窗口中點擊帖子標題、內容摘要，或者右下角的「查看」鏈接都可以進入該帖子內容頁查看詳情。
看到這裡相信大家已經清楚了該功能的實際用途和使用方法，那麼，趕快體驗吧！
EOD;

$testdatacontent[2]['subject'] = '論壇熱點：在第一眼就留住用戶 ';
$testdatacontent[2]['message'] = <<<EOD

讓社區論壇在第一眼就留住用戶，需要及時的把熱點事件傳遞給用戶，在第一時間把最受會員歡迎的主題資源展示出來，才能夠最大限度的提高論壇的互動性，增加社區的黏著度。
Discuz! 7.2新增的論壇熱點功能，能夠很好的滿足主題聚焦的應用需求。該功能可以將社區中最搶眼的主題合顯示到論壇首頁的頭部，方便用戶快速在論壇中瀏覽熱點信息。論壇熱點的設置和 Discuz! 的其它功能一操作非常簡單，只需要以管理員身份到後台簡單開啟即可。

我們截圖來看一下開啟後的效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909110951061nyw4.gif[/img]
下面我們來說一下後台的開啟方法：
進入 Discuz! 7.2 後台 => 界面 => 界面設置 => 首頁設置：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271530271hxkL.gif[/img]
上圖界面我們可以看到「論壇熱點」開啟選擇，我們選擇「是」來設置各項顯示條件：
[img]http://faq.comsenz.com/attachments/2009/10/9_2009101616230316I1M.gif[/img]
論壇熱點：是/否，設置是否顯示全論壇的論壇熱點主題。
論壇熱點顯示數量：設置論壇熱點條目數，默認值 10 條。
論壇熱點更新週期（秒）：設置論壇熱點在多長時間更新一次，默認值 900 。
論壇熱點圖片大小：設置首頁論壇熱點圖片的大小，默認值 100*70 。
論壇熱點內容截取文字長度：設置論壇熱點內容的文字長度，默認值 200 個字。
如此設置後的效果如圖開篇第一個圖片所示，需要注意的是，這裡設置的「論壇熱點顯示數量」為 10 僅指右側不包含圖片的熱點主題，不包含左側的帶圖片主題。
論壇熱點的顯示結構為：
左側一列調用帶圖片的主題熱度最高一條主題及其圖片縮略圖、主題內容摘要及其發佈時間和作者；
右側調用主題熱度最高的 10 條不帶圖片的主題，按照主題熱度從高到低排序，前面 2 條顯示主題標題、作者及其內容摘要，後面的 8 條之顯示主題標題。
到此論壇熱點的開啟和效果展示為大家講解完畢了，怎麼樣，這個功能是不是很吸引你，還等什麼，趕快安裝最新版 Discuz! 7.2 或者將您的論壇升級到 Discuz! 7.2 來體驗吧！
EOD;

$testdatacontent[3]['subject'] = 'Discuz! 7.2新特性——主題熱度/評價';
$testdatacontent[3]['message'] = <<<EOD

Discuz!7.2 在對主題的操作上添加了新特性，即主題熱度和主題評價。
主題熱度，用戶可以對主題進行回復、評價等操作，這些操作都會增加主題熱度，當主題達到一定得熱度時，會顯示熱度圖標；
主題評價，用戶可以對某主題評價，以表達自己的觀點態度；當主題所得的評價指數達到後台設置的指數級別時，會顯示評價圖標；
這兩項新特性都大大提高了用戶瀏覽的效率，更是增加了熱度高或評價高主題的瀏覽次數。
下面請看詳細介紹：[p=30, 2, left][b]一、主題熱度[/b][/p]
主題熱度是 Discuz!7.2 新增的特性，站長可以在後台設置主題熱度值及熱度增加權重值。當某個主題達到站點設置的熱度時，會在主題列表頁標題右側顯示熱度圖標，大大提高熱度主題的瀏覽次數。
1、後台設置
論壇後台 => 全局 => 論壇功能 => 主題熱度，如下圖：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271400321aEXX.gif[/img]
回復增量權重：每次回復主題時，主題熱度的增量，默認值為 5 。
評價增量權重：每次對主題進行評價操作時，主題熱度的增量，默認為 3 。
熱門主題顯示級別：設置主題列表頁主題熱度的級別對應熱度值。每個級別都有相應的熱度圖標，共有三個級別。級別熱度值間用逗號分隔。留空為不顯示熱度圖標。
設置完畢後，點擊「提交」按鈕完成設置。
設置完成後，到前台主題列表頁刷新，達到熱度值的主題前會顯示主題熱度圖標：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909081603201rueN.gif][img=644,171]http://faq.comsenz.com/attachments/2009/09/15_200909081603201rueN.gif[/img][/url]
2、根據主題熱度來排序瀏覽
用戶可以根據主題熱度來對主題列表排序瀏覽，打開主題列表頁：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081603202zliR.gif[/img][p=30, 2, left][b]二、主題評價[/b][/p]
主題評價是 Discuz!7.2 新增的特性，後台有是否開啟該功能的開關，並且站長可以在後台設置評價圖標顯示級別。
1、後台設置
論壇後台 => 全局 => 論壇功能 => 主題評價，如下圖：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271400351aw5h.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271400371JFAt.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271400401hrE4.gif[/img]
啟用主題評價：選擇「是」，打開主題評價功能。
加分操作文字：設置評價加分項的表達文字，建議設置的簡單明瞭，而且不宜過長；默認每評價一次加 1 個評價積分。
減分操作文字：設置評價減分項的表達文字，建議設置的簡單明瞭，而且不宜過長；默認每評價一次減 1 個評價積分。
默認顯示數值：設置在帖子內容頁默認顯示的評價結果數值，用戶點擊可切換。
每 24 小時評價主體次數：設置用戶每 24 小時可以評價多少篇主題，0 或留空為不限制。
是否允許評價自己的帖子：設置是否允許評價自己的主題，評價自己的主題無積分獎勵。
評價圖標顯示級別：設置主題列表頁評價圖標每一級別對應的評價指數。建議為 3 個級別，每個級別的評價指數請用逗號分隔。
設置好，點擊「提交」完成設置。
2、前台評價主題
在前台瀏覽主題內容時，您會看到如下圖：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081605032M3vn.gif[/img]
當主題的評價指數達到後台設置的指數級別時，在主題列表頁將會顯示對應級別的評價圖標：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909081605033D2LF.gif][img=644,201]http://faq.comsenz.com/attachments/2009/09/15_200909081605033D2LF.gif[/img][/url]
評價圖標更直觀地告訴該用戶主題的評價，因此會大大增加評價高主題的瀏覽次數。
至此，主題熱度和主題評價已經說明完畢，趕緊去體驗下吧！
EOD;

$testdatacontent[4]['subject'] = 'Discuz! 7.2 新特性——推薦主題';
$testdatacontent[4]['message'] = <<<EOD
D
Discuz!7.2 版本完善了推薦主題功能：推薦主題時可以修改主題標題、並有選擇性地推薦主題中的圖片等，用戶體驗有了很大的提高。
下面請看詳細介紹：[p=30, 2, left][b]一、後台開啟推薦主題的權限[/b][/p]
論壇後台 => 版塊 => 版塊管理 => 編輯，即可看到下圖所示：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607261Sfhr.gif[/img]
選擇推薦主題的方式及其他設置：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607391e0B1.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607392ZKwm.gif[/img]
設置好後，點擊「提交」完成推薦主題的後台設置。[p=30, 2, left][b]二、前台推薦主題[/b][/p]
有推薦權限的用戶在前台可以推薦某個主題，如圖：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909081607393hITH.gif][img=644,131]http://faq.comsenz.com/attachments/2009/09/15_200909081607393hITH.gif[/img][/url]
推薦主題設置：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607394uMLw.gif[/img]
被推薦的主題，可以在帖子列表頁頂部看到：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081607395MQ0W.gif[/img]
到此為止，推薦主題功能已經講解完畢，趕緊去體驗下吧！
EOD;

$testdatacontent[5]['subject'] = 'Discuz! 7.2 新特性——新手任務';
$testdatacontent[5]['message'] = <<<EOD

Discuz!7.2 在論壇任務方面有所改進，系統有針對性地自帶了 7 個新手任務，無需站長添加。新註冊用戶將自動申請該任務，此功能可用於防止惡意註冊及惡意灌水，或引導新手快速熟悉論壇。
下面請看詳細介紹：[p=30, 2, left][b]一、後台啟用[/b][/p]
系統自帶的 7 個新手任務，在後台都有開關，您可以啟用或關閉任務。
論壇後台 => 擴展 => 論壇任務，如下圖：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909081610241JZg0.gif][img=644,436]http://faq.comsenz.com/attachments/2009/09/15_200909081610241JZg0.gif[/img][/url]
是否開啟論壇任務：選擇「是」開啟論壇任務；如果選擇「否」，那麼下面的設置都是不起作用的。
可用：勾選表示該任務可用，用戶註冊後會自動申請該任務。如果不勾選，表示不可用，用戶註冊後，不會看到該任務。[p=30, 2, left][b]二、編輯新手任務[/b][/p]
您可以點擊任務後的「編輯」來編輯該任務的一些信息，如圖：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081610341n8AY.gif[/img]
編輯好點擊「提交」完成編輯。[p=30, 2, left][b]三、新手前台執行任務[/b][/p]
用戶註冊後，登錄前台，即可看到新手任務的提示，如圖：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909081610343KZDL.gif[/img]
新手每完成一個任務，就會得到相應的獎勵。
至此，新手任務已經講解完畢，趕緊去體驗下吧！
EOD;

$testdatacontent[6]['subject'] = '主題關註：讓論壇帖子動起來';
$testdatacontent[6]['message'] = <<<EOD

用戶在社區論壇中的核心應用是有效信息的獲取。當用戶在「逛」論壇的時候，發現了一個很感興趣的話題往往需要一定的時間成本。如果用戶翻到一個帖子，主題內容和裡面的回復都很有意思，這時候用戶肯定還想即時瞭解到帖子的發展情況。有了「主題關注」功能，可以很方便的實現主題信息的互動，只需要用戶把這個值得關注的主題標記為關注狀態，其他會員回復該主題時，用戶就可以收到一個交互性的通知，只需要鼠標輕輕一點，就會看到所關注的主題中有哪些「志同道合」者的回復了。讓論壇帖子內容互動起來，是不是會有不一樣感覺呢？
「主題關注」不僅是社區論壇功能細節上的實現，更是在尊重網絡社區用戶閱讀習慣的基礎之上的設計理念創新。用戶盲無目的的去瀏覽帖子內容很容易形成閱讀疲勞，「主題關注」可以輕鬆的把用戶關心的主題信息主動的展示給用戶，讓用戶的有效信息獲取更加精準高效。
下面介紹一下會員如何使用主題關注功能：[p=30, 2, left][b]一、關注主題[/b][/p]
要將一個主題設為被關注狀態有以下三種方法：
1、發佈新主題時
在發表主題的時候，點擊「發表話題」按鈕右側的「更多選項」，然後在「發帖選項」裡選中「關注主題」的復選框
[img]http://faq.comsenz.com/attachments/2009/10/42_2009102816100010TeM.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281610002EHJ8.gif[/img]
2、看貼時
點擊主題內容下方的 「收藏」圖標，在彈出的窗口中點擊「關注此主題的最新回復」
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281610003BVqH.gif[/img]
[p=30, 2, left][b]二、查看被關注的主題[/b][/p]
1、關注信息提示
當您所關注的主題有新的回復時，您將在頁面頂部看到如下提示，您可以通過點擊通知裡的關注提示查看被關注主題的最新回復
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281613191ND3i.gif[/img]
2、在「個人中心」的「我的關注」中查看關注列表。
在關注列表中，您可以選擇查看正在關注的「有新回復的主題」或者「全部主題」
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281615301xugz.gif[/img]
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281618341SGvP.gif[/img][p=30, 2, left][b]三、取消關注主題[/b][/p]
1、在編輯帖子或回復帖子時，在高級模式下勾選「取消對此主題新回復的關注」復選框，這樣此主題將不再處於被關注狀態
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281629011crqU.gif[/img]
2、在二（2）的關注列表中選擇需要取消關注的主題並點擊「提交」按鈕，如此操作將使得選中主題不再處於被關注狀態
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281632171Yb4d.gif[/img]
此外，站點的管理員除了可以和普通會員一樣使用主題關注功能外，還可以在系統設置中對會員的主題關注列表容量進行控制，具體操作如下：
系統設置 => 全局 => 用戶權限 => 主題關注列表容量
[img]http://faq.comsenz.com/attachments/2009/10/42_200910281635481Z6XD.gif[/img]
EOD;

$testdatacontent[7]['subject'] = 'Discuz! 7.2 新特性——論壇動態';
$testdatacontent[7]['message'] = <<<EOD
Discuz! 7.2 增加了論壇動態實時瀏覽功能，用戶除了瀏覽原來的版塊列表界面外還可以切換到「論壇動態」裡面查看論壇實時動態，此功能類似於 SNS 的動態查看功能，可以集中查看到所有好友的動態信息，而無需進入好友個人主頁查看。
[img]http://faq.comsenz.com/attachments/2009/10/9_2009100915323019jA5.gif[/img]
站長可以在 Discuz! 7.2 後台設置論壇首頁的默認顯示風格，進入 Discuz! 7.2 系統設置 => 界面 => 界面設置 => 首頁設置 => 首頁顯示風格：
[img]http://faq.comsenz.com/attachments/2009/10/9_200910091532302Z0N9.gif[/img]
經典版塊列表：即論壇版塊列表展示模式，也就是老版本的 Discuz! 的展示效果。
論壇實時動態：即 Discuz! 7.2 新增的動態實時查看功能，用戶可以在此集中查看到所有好友的動態信息。
如果站長希望站點所有用戶登錄 Discuz! 後看到是其好友的動態信息，那麼在這裡就可以選擇首頁的默認顯示風格為「論壇實時動態」，效果如下圖所示：
[img]http://faq.comsenz.com/attachments/2009/10/9_200910091532303yDV1.gif[/img]
怎麼樣，是不是很方便？趕快安裝全新的 Discuz! 7.2 或者升級您的論壇體驗一下吧！
EOD;

$testdatacontent[8]['subject'] = 'Discuz! 7.2 新特性——提醒系統';
$testdatacontent[8]['message'] = <<<EOD
Discuz! 7.2 新增了提醒系統，提醒內容包括「全部」、「系統信息」、「好友信息」、「帖子信息」。上述這些信息主要有新信息則就會在導航的「提醒」那裡出現新信息提示，如下圖所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118351ebXv.gif[/img]
鼠標放到「提醒」上就可以看到收到的信息內容。
點擊「提醒」即可進入提醒系統界面：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118352Km5p.gif[/img]
提醒系統首頁是全部信息展示，分類瀏覽可以點擊其他的信息類別進行瀏覽。
系統信息：包括管理操作提醒、道具贈送提醒、任務提醒、積分提醒等。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118353g4uE.gif[/img]
好友信息：添加好友的提醒。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118354wCOX.gif[/img]
帖子信息：主題關注相關提醒。
[img]http://faq.comsenz.com/attachments/2009/09/9_200909291118355XZp5.gif[/img]
Discuz! 7.2 提醒系統更加細化了各個操作帶來的信息提醒，一目瞭然的分類，使用和瀏覽信息更加清晰明確。
EOD;

$testdatacontent[9]['subject'] = '帖子編輯器：輕輕鬆鬆發帖';
$testdatacontent[9]['message'] = <<<EOD
帖子主題的展示是社區論壇的核心功能。會員在發表或回復帖子時，用到的就多就是編輯器功能，很多站長苦惱於會員發帖時排版很亂而無法解決。一款專業編輯器不僅需發有人性化的界面，更需要能夠幫助用戶更好的對帖子內容進行編輯，讓社區論壇主題的排版更加專業和多樣化。
分析會員的使用習慣，Discuz! 7.2 的編輯器有了很大的改進，界面更友好，突出顯示常用操作圖標，並且新增了很多功能。
新增刪除線和分割線標籤，讓您的帖子格式更加豐富多彩；插入圖片可以設置寬高；音樂播放支持 mp3 wma ra rm ram midwav 等多種格式；視頻播放支持 wmv rm rmvb flv swf avi asf mpg mpeg mov等多種格式；視頻可以自動分析優酷、土豆、ku6三大主流視頻網站的視頻網址；附件上傳、修改、刪除等操作整合到編輯器中；附件上傳機制改進，同時上傳多個附件時如果有上傳失敗的，不影響已經成功上傳的。
Discuz! 7.2 前台 => 發帖，即可進入全新的 Discuz! 7.2 編輯器：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271441261E3fW.gif[/img]
從上圖界面可以看出，Discuz! 7.2 的編輯器有了很大的改觀，突出顯示目前社區比較常用的表情、圖片、音樂、視頻、Flash、代碼、引用，界面更加友好。
下面介紹幾個新增功能：[p=30, 2, left][b]1、新增刪除線和分割線標籤[/b][/p]
新增刪除線和分割線標籤，讓您的帖子格式更加豐富多彩。
如下圖所示我們為「節省天光」幾個字添加「刪除線」：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909071737197EwOi.gif[/img]
設置後的效果如下圖所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909071737198xEI5.gif[/img]
同理添加分割線：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909071737199TrYW.gif[/img]
添加後的效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371910v6WE.gif[/img][p=30, 2, left][b]2、插入圖片可以設置寬高[/b][/p]
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371911dvfs.gif[/img][p=30, 2, left][b]3、音樂播放支持 mp3 wma ra rm ram mid wav 等多種格式[/b][/p]
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371912wMUt.gif[/img]
插入的音樂代碼類似：
[audio]http://vfile.home.news.cn/music/public/vd06/200908/18/50/MUfs06200908181354375150fd99.mp3[/audio]
播放效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371913aJ2z.gif[/img][p=30, 2, left][b]4、視頻功能更強大[/b][/p]
視頻播放支持 wmv rm rmvb flv swf avi asf mpg mpeg mov 等多種格式
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371914Ad5B.gif[/img]
插入的視頻代碼類似：
[media=wmv,400,300]http://w4180.s11.mydiscuz.com/Alizee_lais la bonita.wmv[/media]
發佈後的效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371915G371.gif[/img]
視頻還可以自動分析優酷、土豆、ku6 三大主流視頻網站的視頻網址：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371916vS5U.gif[/img]
插入的視頻代碼類似：
[media=swf,400,300]http://player.youku.com/player.php/sid/XMTA3OTE4NjIw/v.swf[/media]
發佈後的效果：
[img]http://faq.comsenz.com/attachments/2009/09/9_20090907173719177BxG.gif[/img][p=30, 2, left][b]5、編輯器裡上傳附件[/b][/p]
附件上傳、修改、刪除等操作整合到編輯器中；附件上傳機制改進，同時上傳多個附件時如果有上傳失敗的，不影響已經成功上傳的。
批量上傳：
[img]http://faq.comsenz.com/attachments/2009/09/9_20090907173719182BAP.gif[/img]
普通上傳：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371919zovp.gif[/img]
附件列表：
[img]http://faq.comsenz.com/attachments/2009/09/9_2009090717371920TWNz.gif[/img]
到此 Discuz! 7.2 最新編輯器介紹完了，怎麼樣？是不是超酷炫！而且使用起來更加得心應手，那麼還等什麼，趕快體驗吧！

論壇運營秘籍 - Discuz!7.2 新功能的妙用：[url=http://faq.comsenz.com/viewnews-869]http://faq.comsenz.com/viewnews-869[/url]
[p=30, 2, left][img]http://faq.comsenz.com/attachments/2009/09/9_200909071737196ENcW.gif[/img][/p]
EOD;

$testdatacontent[10]['subject'] = '轉發視頻：更易更強大';
$testdatacontent[10]['message'] = <<<EOD
Discuz! 7.2 在視頻播放方面有了很大改進，不但支持播放 wmv rm rmvb flv swf avi asf mpgmpeg mov 等多種格式，還可以自動分析優酷、土豆、ku6三大主流視頻網站的視頻網址，而不需要再去找專門的轉發引用地址，使得轉發視頻變得更容易更強大，下面為大家舉例演示這三大主流視頻網站的視頻轉發功能。
Discuz! 7.2 前台 => 發帖，即可進入全新 Discuz! 7.2 編輯器：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909271441261E3fW.gif[/img]
下面我們從優酷、土豆、ku6 三大主流視頻網站分別找一個視頻地址：
優酷：[url=http://v.youku.com/v_show/id_XOTMwODQ2NjQ=.html]http://v.youku.com/v_show/id_XOTMwODQ2NjQ=.html[/url]
土豆：[url=http://www.tudou.com/programs/view/4NgBn7J39bg/]http://www.tudou.com/programs/view/4NgBn7J39bg/[/url]
ku6 ：[url=http://v.ku6.com/show/VrLuttrXQb1CIbkC.html]http://v.ku6.com/show/VrLuttrXQb1CIbkC.html[/url]
將上面三個地址分別插入視頻，如圖所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909111355583f0Ft.gif[/img]
插入後的代碼如下圖所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909111355584BDQP.gif[/img]
提交發佈後的效果如下圖所示：
[img]http://faq.comsenz.com/attachments/2009/09/9_200909111355585XszF.gif[/img]
從上面的演示可以看出來，Discuz! 7.2 發佈優酷、土豆、ku6 三大主流視頻網站的視頻變得非常容易，無需再費力找論壇引用地址，直接輸入視頻的網址系統就會自動解析獲取最終的播放地址，還等什麼，快快來親身體驗一把吧！
EOD;

$testdatacontent[11]['subject'] = 'Discuz!7.2 新特性——Manyou應用的開啟';
$testdatacontent[11]['message'] = <<<EOD

Discuz!7.2 較之前的版本，在後台添加了 Manyou 應用的開關。做為插件的形式，站長可以在後台開啟或關閉該功能。開啟該功能後，會員在論壇也可以看到 Manyou 應用的動態信息及大家都在玩什麼應用遊戲，同時還可以參與進來。
下面請看詳細介紹：
[b]一、安裝 Manyou 插件並開啟[/b]

論壇後台 => 插件 => 論壇插件，如圖：

[url=http://faq.comsenz.com/attachments/2009/09/15_200909271430221otXN.gif][img=644,233]http://faq.comsenz.com/attachments/2009/09/15_200909271430221otXN.gif[/img][/url]
安裝後，請啟用該插件，如圖：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909271432211ofuE.gif[/img][p=30, 2, left][b]二、開啟 Manyou 應用[/b][/p]
論壇後台 => 插件 => Manyou：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753151btyX.gif][img=644,440]http://faq.comsenz.com/attachments/2009/09/15_200909101753151btyX.gif[/img][/url]
點擊「設置」：
[url=http://faq.comsenz.com/attachments/2009/09/15_2009091017533510KUl.gif][img]http://faq.comsenz.com/attachments/2009/09/15_2009091017533510KUl.gif[/img][/url]
點擊「MYOP 應用管理」：
[url=http://faq.comsenz.com/attachments/2009/09/15_20090910175335228pj.gif][img=644,228]http://faq.comsenz.com/attachments/2009/09/15_20090910175335228pj.gif[/img][/url]
點擊「啟用服務」：
[img]http://faq.comsenz.com/attachments/2009/09/15_200909101753353h7yn.gif[/img]
為站點開啟具體的應用或遊戲：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753354uW1y.gif][img=644,474]http://faq.comsenz.com/attachments/2009/09/15_200909101753354uW1y.gif[/img][/url]
設為默認應用：無論用戶是否添加此應用，默認應用都會顯示在所有用戶的開始菜單裡面。
關閉應用：用戶不能添加處於關閉狀態的應用，應用目錄中也不會顯示處於關閉狀態的應用。
設為推薦應用：被設置為推薦的應用將顯示在您網站應用目錄的推薦欄目下。
為使大家能在論壇首頁看到推薦的應用並方便地參與進來，請設置首頁應用推薦條目數：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753355rwqi.gif][img]http://faq.comsenz.com/attachments/2009/09/15_200909101753355rwqi.gif[/img][/url][p=30, 2, left][b]三、前台查看[/b][/p]
1、前台查看 Manyou 動態
打開論壇首頁，可以看到下圖所示：
[url=http://faq.comsenz.com/attachments/2009/09/15_2009091017533561U7q.gif][img=644,244]http://faq.comsenz.com/attachments/2009/09/15_2009091017533561U7q.gif[/img][/url]
點擊「應用動態」，即可查看 Manyou 應用的相關動態：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753357KO05.gif][img]http://faq.comsenz.com/attachments/2009/09/15_200909101753357KO05.gif[/img][/url]
點擊「論壇版塊」，可以在論壇首頁下方看到推薦的 Manyou 應用：
[url=http://faq.comsenz.com/attachments/2009/09/15_200909101753358q9hK.gif][img=644,317]http://faq.comsenz.com/attachments/2009/09/15_200909101753358q9hK.gif[/img][/url]
到此，Manyou 應用功能已經講解完畢，趕緊去體驗一下吧！
EOD;

$testdatacontent[12]['subject'] = '7.2新增功能及功能強化';
$testdatacontent[12]['message'] = <<<EOD
[p=30, 2, left][b]功能新增：[/b][/p]
[p=16, 0, left]=================================================================[/p]
[p=16, 0, left]活動導出[/p]
[p=16, 0, left]增加附件的動態鏈接(attach://aid.ext)，便於各方面引用[/p]
[p=16, 0, left]主題鑒定[/p]
[p=16, 0, left]搶樓貼[/p]
[p=16, 0, left]不受審核限制的 IP 列表[/p]
[p=16, 0, left]版塊名稱顏色[/p]
[p=16, 0, left]倒序帖--倒序顯示回復[/p]
[p=16, 0, left]把主題在任意版塊中置頂[/p]

[p=30, 2, left][b]增強優化:[/b][/p]
[p=16, 0, left]=================================================================[/p]
[p=16, 0, left]管理員不受任何搜索限制[/p]
[p=16, 0, left]權限表達式增強，增加註冊 IP、註冊時間、用戶定制欄目的公式項目，可自定義權限表達式提示文字，增加可訪問用戶列表[/p]
[p=16, 0, left]數據調用增加主題評價的排序[/p]
[p=16, 0, left]管理中心用戶管理增加馬甲查找功能[/p]
[p=16, 0, left]回收站增加主題列表功能[/p]
[p=16, 0, left]買賣主題增加日誌記錄查看[/p]
[p=16, 0, left]個人資料頁可自由查看他人的帖子[/p]
[p=16, 0, left]評分記錄顯示方式改進[/p]
[p=16, 0, left]主題列表分割帶[/p]
[p=16, 0, left]分類信息加強[/p]
[p=16, 0, left]前台權限細化[/p]
[p=16, 0, left]搜索頁高級搜索顯示調整[/p]
[p=16, 0, left]添加新用戶組時深度繼承所選參照組權限[/p]
[p=16, 0, left]版主可以管理特殊用戶組的用戶[/p]
EOD;
?>