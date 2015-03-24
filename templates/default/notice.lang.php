<?php

$language = array
(

	'reason_moderate' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_merge' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_delete_post' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_ban_post' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_warn_post' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> {$modaction} {time}<br />
連續 $warningexpiration 天內累計 $warninglimit 次警告，您將被自動禁止發帖 $warningexpiration 天。<br />
截至目前，您已被警告 $authorwarnings 次，請注意！
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_move' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 移動到 <a href=\"{boardurl}forumdisplay.php?from=notice&fid={$toforum[fid]}\">{$toforum[name]}</a> {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_copy' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 複製為 <a href=\"{boardurl}viewthread.php?from=notice&tid=$threadid\">{$thread[subject]}</a> {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_stamp_update' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 添加了圖章 {$_DCACHE[stamps][$stamp][text]} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reason_stamp_delete' => '<div class=\"f_manage\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 撤銷了圖章 {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modthreads_delete' => '<div class=\"f_manage\">您發表的主題 {$threadsubject} 沒有通過審核，現已被刪除！ {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modthreads_validate' => '<div class=\"f_manage\">您發表的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$threadsubject}</a> 已經審核通過！ {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">查看</a>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modreplies_delete' => '<div class=\"f_manage\">您發表回覆沒有通過審核，現已被刪除！ {time}
<dl class=\"summary\"><dt>回復內容：</dt><dd>$post</dd></dl>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'modreplies_validate' => '<div class=\"f_manage\">您發表的回復已經審核通過！ {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">查看</a>
<dl class=\"summary\"><dt>回復內容：</dt><dd>$post</dd></dl>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'reportpost' => '<div><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 向您報告 {time}
<a href=\"{boardurl}{$posturl}\" class=\"il to\">查看</a>
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'transfer' => '<div class=\"f_credit\">您收到一筆來自 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 的積分轉賬 {$extcredits[$creditstrans][title]} {$netamount} {$extcredits[$creditstrans][unit]} {time}
<a href=\"{boardurl}memcp.php?from=notice&action=creditslog\" class=\"il to\">查看</a>
<fieldset><ins>{$transfermessage}</ins></fieldset></div>',

	'addfunds' => '<div class=\"f_credit\">您提交的積分充值請求已成功完成，相應數額的積分已經存入您的積分賬戶 {time}
<a href=\"{boardurl}memcp.php?from=notice&action=creditslog\" class=\"il to\">查看</a>
<dl class=\"summary\"><dt>訂單號：</dt><dd>{$order[orderid]}<dt>支出：</dt><dd>人民幣 {$order[price]} 元</dd><dt>收入：</dt><dd>{$extcredits[$creditstrans][title]} {$order[amount]} {$extcredits[$creditstrans][unit]}</dd></dl></div>',

	'rate_reason' => '<div class=\"f_rate\">您的主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 評分 {$ratescore} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'rate_removereason' => '<div class=\"f_rate\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 撤銷了對您主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 的評分 {$ratescore} {time}
<fieldset><ins>{$reason}</ins></fieldset></div>',

	'trade_seller_send' => '<div class=\"f_trade\"><a href=\"{boardurl}space.php?from=notice&uid={$userid}\">{$user}</a> 購買您的商品 <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a>，對方已經付款，等待您發貨 {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">查看</a></div>',

	'trade_buyer_confirm' => '<div class=\"f_trade\">您購買的商品 <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a>，<a href=\"{boardurl}space.php?from=notice&uid={$userid}\">{$user}</a> 已發貨，等待您確認 {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">查看</a></div>',

	'trade_fefund_success' => '<div class=\"f_trade\">商品 <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a> 已退款成功 {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">評價</a></div>',

	'trade_success' => '<div class=\"f_trade\">商品 <a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\">{$itemsubject}</a> 已交易成功 {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">評價</a></div>',

	'eccredit' => '<div class=\"f_trade\">與您交易的 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 已經給您作了評價 {time}
<a href=\"{boardurl}trade.php?from=notice&orderid={$orderid}\" class=\"il to\">回評</a></div>',

	'activity_apply' => '<div class=\"f_activity\">活動 <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$activity_subject}</a> 的發起者已批准您參加此活動 {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">查看</a></div>',

	'activity_delete' => '<div class=\"f_activity\">活動 <a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\">{$activity_subject}</a> 的發起者拒絕您參加此活動 {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$tid}\" class=\"il to\">查看</a></div>',

	'reward_question' => '<div class=\"f_reward\">您的懸賞主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 設置了最佳答案 {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">查看</a></div>',

	'reward_bestanswer' => '<div class=\"f_reward\">您的回復被的懸賞主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 的作者 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 選為懸賞最佳答案 {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">查看</a></div>',

	'favoritethreads_notice' => '<div class=\"f_thread\">{actor}回復了您關注的主題 <a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\">{$thread[subject]}</a> {time}
<a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\" class=\"il to\">查看</a>
<dfn><a href=\"my.php?from=notice&item=attention&action=remove&tid={$thread[tid]}\" onclick=\"ajaxmenu(this, 3000);doane(event);\" class=\"deloption\" title=\"取消提醒\">取消提醒</a></dfn></div>',

	'repquote_noticeauthor' => '<div class=\"f_quote\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 引用了您曾經在主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 發表的帖子 {time}
<dl class=\"summary\"><dt>您的帖子：<dt><dd>{$noticeauthormsg}</dd><dt><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 說：</dt><dd>{$postmsg}</dd></dl>
<p><a href=\"{boardurl}post.php?from=notice&action=reply&fid={$fid}&tid={$thread[tid]}&reppost={$pid}\">回復</a><i>|</i><a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\">查看</a></p></div>',

	'reppost_noticeauthor' => '<div class=\"f_reply\"><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 答覆了您曾經在主題 <a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\">{$thread[subject]}</a> 發表的帖子 {time}
<dl class=\"summary\"><dt>您的帖子：<dt><dd>{$noticeauthormsg}</dd><dt><a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 說：</dt><dd>{$postmsg}</dd></dl>
<p><a href=\"{boardurl}post.php?from=notice&action=reply&fid={$fid}&tid={$thread[tid]}&reppost={$pid}\">回復</a><i>|</i><a href=\"{boardurl}redirect.php?from=notice&goto=findpost&pid={$pid}&ptid={$thread[tid]}\">查看</a></p></div>',

	'magics_sell' => '<div class=\"f_magic\">您的道具 {$magic[name]} 被 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 購買，獲得收益 {$totalcredit} {time}</div>',

	'magics_receive' => '<div class=\"f_magic\">您收到 <a href=\"{boardurl}space.php?from=notice&uid={$discuz_uid}\">{$discuz_userss}</a> 送給您的道具 {$magicarray[$magicid][name]} {time}
<fieldset><ins>{$givemessage}</ins></fieldset>
<p><a href=\"{boardurl}magic.php\">回贈道具</a><i>|</i><a href=\"{boardurl}magic.php?from=notice&action=mybox\" class=\"to\">去我的道具箱</a></p></div>',

	'magic_thread' => '<div class=\"f_magic\">你的帖子 {$thread[subject]} 被 <a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_user}</a> 使用了 {$magic[name]} {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">快去看看吧！</a></div>',

	'magic_thread_anonymous' => '<div class=\"f_magic\">你的帖子 {$thread[subject]} 被其他人使用了 {$magic[name]} {time}
<a href=\"{boardurl}viewthread.php?from=notice&tid={$thread[tid]}\" class=\"il to\">快去看看吧！</a></div>',

	'magic_user' => '<div class=\"f_magic\">{$discuz_user} 對你使用了 {$magic[name]} {time}
<a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid]\" class=\"il to\">快去看看吧！</a></div>',

	'magic_user_anonymous' => '<div class=\"f_magic\">你被其他人使用了 {$magic[name]}！ {time}</div>',

	'buddy_new' => '<div class=\"f_buddy\"><a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_userss}</a> 添加您為好友 {time}
<a href=\"{boardurl}my.php?from=notice&item=buddylist&newbuddyid={$discuz_uid}&buddysubmit=yes\" class=\"il to\" onclick=\"ajaxmenu(this, 3000);doane(event);\">加 {$discuz_userss} 為好友</a></div>',

	'buddy_new_uch' => '<div class=\"f_buddy\"><a href=\"{boardurl}space.php?from=notice&uid=$discuz_uid\">{$discuz_userss}</a> 添加您為好友 {time}
<p><a href=\"{boardurl}my.php?from=notice&item=buddylist&newbuddyid={$discuz_uid}&buddysubmit=yes\" onclick=\"ajaxmenu(this, 3000);doane(event);\">加 {$discuz_userss} 為好友</a><i>|</i>
<a href=\"{$uchomeurl}/space.php?from=notice&uid={$discuz_uid}\" class=\"to\">查看 {$discuz_userss} 的個人空間</a></p></div>',

	'task_reward_credit' => '<div class=\"f_task\">恭喜您完成任務：<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，獲得積分 {$extcredits[$task[prize]][title]} {$task[bonus]} {$extcredits[$task[prize]][unit]} {time}
<p><a href=\"{boardurl}memcp.php?from=notice&action=credits\">查看我的積分</a><i>|</i><a href=\"{boardurl}memcp.php?from=notice&action=creditslog&operation=creditslog\" class=\"il to\">查看積分收益記錄</a></p></div>',

	'task_reward_magic' => '<div class=\"f_task\">恭喜您完成任務：<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，獲得道具 <a href=\"{boardurl}magic.php\">{$magicname}</a> {$task[bonus]} 枚 {time}</div>',

	'task_reward_medal' => '<div class=\"f_task\">恭喜您完成任務：<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，獲得勳章 <a href=\"{boardurl}medal.php\">{$medalname}</a> 有效期 {$task[bonus]} 天 {time}</div>',

	'task_reward_invite' => '<div class=\"f_task\">恭喜您完成任務：<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，獲得邀請碼 <a href=\"{boardurl}invite.php\">{$task[prize]}</a> 個有效期 {$task[bonus]} 天 {time}
<dl class=\"summary\"><dt>邀請碼：</dt><dd>{$rewards}</dd></dl></div>',

	'task_reward_group' => '<div class=\"f_task\">恭喜您完成任務：<a href=\"{boardurl}task.php?from=notice&action=view&id={$task[taskid]}\">{$task[name]}</a>，獲得用戶組 {$grouptitle} 有效期 {$task[bonus]} 天 {time}
<a href=\"{boardurl}faq.php?from=notice&action=grouppermission\" class=\"il to\">看看我能做什麼</a></div>',

	'thread_views' => '<div>您的主題 {subject} 查看數超過了 {count} {time}</div>',

	'thread_replies' => '<div>您的主題 {subject} 回複數超過了 {count} {time}</div>',

	'thread_rate' => '<div>您的主題 {subject} 評分超過了 {count} {time}</div>',

	'post_rate' => '<div>您在 {thread} 的回復評分超過了{count} {time}</div>',

	'user_usergroup' => '<div>您的用戶組升級為 {usergroup} {time}
<a href=\"{boardurl}faq.php?from=notice&action=grouppermission\" class=\"il to\">看看我能做什麼</a></div>',

	'user_credit' => '<div>您的總積分達到 {count} {time}</div>',

	'user_threads' => '<div>您發表的主題數達到 {count} {time}</div>',

	'user_posts' =>	'<div>您的發帖數達到 {count} {time}</div>',

	'user_digest' => '<div>您的精華貼數達到 {count} {time}</div>',

);

?>