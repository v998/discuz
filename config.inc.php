<?php

/*
	[Discuz!] (C)2001-2006 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$RCSfile: config5.inc.php,v $
	$Revision: 1.9 $
	$Date: 2007/01/26 01:11:32 $
*/

// [CH] 以下變量請根據空間商提供的賬號參數修改,如有疑問,請聯繫服務器提供商

	$dbhost = 'localhost';			// 數據庫服務器
	$dbuser = 'username';			// 數據庫用戶名
	$dbpw = '';				// 數據庫密碼
	$dbname = 'discuz';			// 數據庫名
	$pconnect = 0;				// 數據庫持久連接 0=關閉, 1=打開

// [CH] Mysql 輔助服務器設置，只有當您擁有多個 Mysql 服務器且協同工作時請進行設置

	$multiserver = array();			// 服務器變量初始化，請勿修改或刪除
	
// [CH] 如您對 cookie 作用範圍有特殊要求, 或論壇登錄不正常, 請修改下面變量, 否則請保持默認

	$cookiepre = 'cdb_';			// cookie 前綴
	$cookiedomain = ''; 			// cookie 作用域
	$cookiepath = '/';			// cookie 作用路徑

// [CH] 論壇投入使用後不能修改的變量

	$tablepre = 'cdb_';   			// 表名前綴, 同一數據庫安裝多個論壇請修改此處

// [CH] 小心修改以下變量, 否則可能導致論壇無法正常使用

	$database = 'mysql';			// 論壇數據庫類型，請勿修改
	$dbcharset = '';			// MySQL 字符集, 可選 'gbk', 'big5', 'utf8', 'latin1', 留空為按照論壇字符集設定

	$charset = 'utf-8';			// 論壇頁面默認字符集, 可選 'gbk', 'big5', 'utf-8'
	$headercharset = 0;			// 強制論壇頁面使用默認字符集，可避免部分服務器空間頁面出現亂碼，一般無需開啟。 0=關閉 1= 開啟

	$tplrefresh = 1;			// 論壇風格模板自動刷新開關 0=關閉, 1=打開。

// [CH] 論壇安全設置, 調整以下設置，可以增強論壇的安全性能和防禦性能

	$adminemail = 'admin@your.com';		// 系統管理員 Email

	$forumfounders = '';			// 論壇創始人 UID, 可以支持多個創始人，之間使用 「,」 分隔。[出於安全考慮，請務必設置一名管理員為創始人]
						// 論壇創始人可對其他管理員進行設置。如果不設置論壇創始人，則論壇管理員之間權利平等。

	$dbreport = 0;				// 論壇出現數據庫錯誤時，是否通過 email 發送錯誤報告給系統管理員

	$errorreport = 1;			// 是否屏蔽程序錯誤信息, 0=屏蔽所有錯誤(安全) 1=報告給管理員和版主(安全) 2=報告給任何人

	$attackevasive = 0;			// 論壇防禦級別，可防止大量的非正常請求造成的拒絕服務攻擊
						// 防護大量非正常請求造成的拒絕服務攻擊,
						// 0=關閉, 1=cookie 刷新限制, 2=限制代理訪問, 4=二次請求, 8=回答問題（第一次訪問時需要回答問題）
						// 組合為: 1|2, 1|4, 2|8, 1|2|4...
	
	$urlxssdefend = 1;			// 論壇訪問頁面防禦開關，可避免用戶通過非法的url地址對本站用戶造成危害，建議打開。1=打開 0關閉

	$admincp = array();
	$admincp['forcesecques'] = 0;		// 管理人員必須設置安全提問才能進入系統設置, 0=否, 1=是[安全]
	$admincp['checkip'] = 1;		// 後台管理操作是否驗證管理員的 IP, 1=是[安全], 0=否。僅在管理員無法登陸後台時設置 0。
	$admincp['tpledit'] = 0;		// 是否允許在線編輯論壇模板 1=是 0=否[安全]
	$admincp['runquery'] = 1;		// 是否允許後台運行 SQL 語句 1=是 0=否[安全]
	$admincp['dbimport'] = 1;		// 是否允許後台恢復論壇數據  1=是 0=否[安全]

// ============================================================================

