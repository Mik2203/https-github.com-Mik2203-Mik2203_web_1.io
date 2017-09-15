<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001504620941';
$dateexpire = '001504624541';
$ser_content = 'a:2:{s:7:"CONTENT";s:3830:"<div class="rating_count" style="width: 80px;" id="vote_">

<script type="text/javascript">
if(!window.voteScript) window.voteScript =
{
	trace_vote: function(div, flag)
	{
		var my_div;
		var r = div.id.match(/^vote_(\\d+)_(\\d+)$/);
		for(var i = r[2]; i >= 0; i--)
		{
			my_div = document.getElementById(\'vote_\'+r[1]+\'_\'+i);
			if(my_div)
			{
				if(flag)
				{
					if(!my_div.saved_class)
						my_div.saved_className = my_div.className;
					if(my_div.className != \'star-active star-over\')
						my_div.className = \'star-active star-over\';
				}
				else
				{
					if(my_div.saved_className && my_div.className != my_div.saved_className)
						my_div.className = my_div.saved_className;
				}
			}
		}
		i = r[2]+1;
		while(my_div = document.getElementById(\'vote_\'+r[1]+\'_\'+i))
		{
			if(my_div.saved_className && my_div.className != my_div.saved_className)
				my_div.className = my_div.saved_className;
			i++;
		}
	},
		do_vote: function(div, parent_id, arParams)
	{
		var r = div.id.match(/^vote_(\\d+)_(\\d+)$/);

		var vote_id = r[1];
		var vote_value = r[2];

		function __handler(data)
		{
			var obContainer = document.getElementById(parent_id);
			if (obContainer)
			{
				//16a Мы предполагаем, что шаблон содержит только один элемент (например div или table)
				var obResult = document.createElement("DIV");
				obResult.innerHTML = data;
				obContainer.parentNode.replaceChild(obResult.firstChild, obContainer);
			}
		}

		PShowWaitMessage(\'wait_\' + parent_id, true);

				var url = \'/bitrix/components/bitrix/iblock.vote/m1/template.php\'

				arParams[\'vote\'] = \'Y\';
		arParams[\'vote_id\'] = vote_id;
		arParams[\'rating\'] = vote_value;

		var TID = CPHttpRequest.InitThread();
		CPHttpRequest.SetAction(TID, __handler);
				CPHttpRequest.Post(TID, url, arParams);
			}
}
</script>
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
										<td><div id="vote__0" class="star-active star-empty" title="1" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_\', {\'SESSION_PARAMS\':\'c613e2f9d69425abca580fe3c0c22859\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'17\'},\'sessid\':\'1e2a4808e34ba0dff5b37e63a97bc708\',\'AJAX_CALL\':\'Y\'})"></div></td>
							<td><div id="vote__1" class="star-active star-empty" title="2" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_\', {\'SESSION_PARAMS\':\'c613e2f9d69425abca580fe3c0c22859\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'17\'},\'sessid\':\'1e2a4808e34ba0dff5b37e63a97bc708\',\'AJAX_CALL\':\'Y\'})"></div></td>
							<td><div id="vote__2" class="star-active star-empty" title="3" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_\', {\'SESSION_PARAMS\':\'c613e2f9d69425abca580fe3c0c22859\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'17\'},\'sessid\':\'1e2a4808e34ba0dff5b37e63a97bc708\',\'AJAX_CALL\':\'Y\'})"></div></td>
							<td><div id="vote__3" class="star-active star-empty" title="4" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_\', {\'SESSION_PARAMS\':\'c613e2f9d69425abca580fe3c0c22859\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'17\'},\'sessid\':\'1e2a4808e34ba0dff5b37e63a97bc708\',\'AJAX_CALL\':\'Y\'})"></div></td>
							<td><div id="vote__4" class="star-active star-empty" title="5" onmouseover="voteScript.trace_vote(this, true);" onmouseout="voteScript.trace_vote(this, false)" onclick="voteScript.do_vote(this, \'vote_\', {\'SESSION_PARAMS\':\'c613e2f9d69425abca580fe3c0c22859\',\'PAGE_PARAMS\':{\'ELEMENT_ID\':\'17\'},\'sessid\':\'1e2a4808e34ba0dff5b37e63a97bc708\',\'AJAX_CALL\':\'Y\'})"></div></td>
								</tr>
</table>
</div>";s:4:"VARS";a:2:{s:8:"arResult";a:1:{s:4:"AJAX";a:2:{s:11:"SESSION_KEY";s:32:"c613e2f9d69425abca580fe3c0c22859";s:14:"SESSION_PARAMS";a:14:{s:11:"PAGE_PARAMS";a:1:{i:0;s:10:"ELEMENT_ID";}s:9:"IBLOCK_ID";i:3;s:8:"MAX_VOTE";i:5;s:10:"VOTE_NAMES";a:6:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:1:"5";i:5;s:0:"";}s:10:"CACHE_TYPE";s:1:"A";s:10:"CACHE_TIME";s:4:"3600";s:17:"DISPLAY_AS_RATING";s:8:"vote_avg";s:9:"READ_ONLY";N;s:12:"ELEMENT_CODE";s:1:"1";s:11:"SHOW_RATING";s:1:"Y";s:14:"SET_STATUS_404";s:1:"Y";s:11:"MESSAGE_404";s:0:"";s:14:"COMPONENT_NAME";s:18:"bitrix:iblock.vote";s:13:"TEMPLATE_NAME";s:2:"m1";}}}s:18:"templateCachedData";a:4:{s:13:"additionalCSS";s:63:"/bitrix/templates/s1/components/bitrix/iblock.vote/m1/style.css";s:12:"additionalJS";s:63:"/bitrix/templates/s1/components/bitrix/iblock.vote/m1/script.js";s:9:"frameMode";N;s:12:"frameModeCtx";s:66:"/bitrix/templates/s1/components/bitrix/iblock.vote/m1/template.php";}}}';
return true;
?>