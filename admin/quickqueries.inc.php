<?php

/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: quickqueries.inc.php 16688 2008-11-14 06:41:07Z cnteacher $
*/

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
        exit('Access Denied');
}

$simplequeries = array(
	array('comment' => '快速開啟論壇版塊功能', 'sql' => ''),
	array('comment' => '開啟 所有版塊 主題回收站', 'sql' => 'UPDATE {tablepre}forums SET recyclebin=\'1\''),
	array('comment' => '開啟 所有版塊 Discuz! 代碼」', 'sql' => 'UPDATE {tablepre}forums SET allowbbcode=\'1\''),
	array('comment' => '開啟 所有版塊 [IMG] 代碼」', 'sql' => 'UPDATE {tablepre}forums SET allowimgcode=\'1\''),
	array('comment' => '開啟 所有版塊 Smilies 代碼', 'sql' => 'UPDATE {tablepre}forums SET allowsmilies=\'1\''),
	array('comment' => '開啟 所有版塊 內容干擾碼', 'sql' => 'UPDATE {tablepre}forums SET jammer=\'1\''),
	array('comment' => '開啟 所有版塊 允許匿名發貼」', 'sql' => 'UPDATE {tablepre}forums SET allowanonymous=\'1\''),

	array('comment' => '快速關閉論壇版塊功能', 'sql' => ''),
	array('comment' => '關閉 所有版塊 主題回收站', 'sql' => 'UPDATE {tablepre}forums SET recyclebin=\'0\''),
	array('comment' => '關閉 所有版塊 HTML 代碼', 'sql' => 'UPDATE {tablepre}forums SET allowhtml=\'0\''),
	array('comment' => '關閉 所有版塊 Discuz! 代碼', 'sql' => 'UPDATE {tablepre}forums SET allowbbcode=\'0\''),
	array('comment' => '關閉 所有版塊 [IMG] 代碼', 'sql' => 'UPDATE {tablepre}forums SET allowimgcode=\'0\''),
	array('comment' => '關閉 所有版塊 Smilies 代碼', 'sql' => 'UPDATE {tablepre}forums SET allowsmilies=\'0\''),
	array('comment' => '關閉 所有版塊 內容干擾碼', 'sql' => 'UPDATE {tablepre}forums SET jammer=\'0\''),
	array('comment' => '關閉 所有版塊 允許匿名發貼', 'sql' => 'UPDATE {tablepre}forums SET allowanonymous=\'0\''),

	array('comment' => '會員操作相關', 'sql' => ''),
	array('comment' => '清除 所有會員 自定義風格', 'sql' => 'UPDATE {tablepre}members SET styleid=\'0\''),
	array('comment' => '清空 所有會員 積分交易記錄', 'sql' => 'TRUNCATE {tablepre}creditslog;'),
	array('comment' => '清空 所有會員 收藏夾', 'sql' => 'TRUNCATE {tablepre}favorites;'),
);

?>