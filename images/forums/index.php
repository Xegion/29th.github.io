<html>
<head>
<title>{$mybb->settings['bbname']}</title>
{$headerinclude}
<script type="text/javascript">
<!--
    lang.no_new_posts = "{$lang->no_new_posts}";
    lang.click_mark_read = "{$lang->click_mark_read}";
// -->
</script>
</head>
<body>
{$header}
{$dvz_shoutbox}
<?php
	require __DIR__ . '/SourceQuery/bootstrap.php';

	use xPaw\SourceQuery\SourceQuery;

	define( 'SQ_SERVER_PORT', 27100 );
	define( 'SQ_TIMEOUT',     15 );
	define( 'SQ_ENGINE',      SourceQuery::SOURCE );
	
	$Query = new SourceQuery( );
	
	try
	{
		$Query->Connect( '64.42.178.178', SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );
		$info = $Query->GetInfo();
		
		$ww1online = $info['Players'];
		$ww1max    = $info['MaxPlayers'];
	}
	catch( Exception $e )
	{
		$ww1online = "error";
		$ww1max = "error";
	}
	
	$Query->Disconnect( );
?>
<div class="forums" style="float: left; width: 76%;">{$forums}</div>
<div class="sidebar" style="float: right; width: 22%;">
<table border="0" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" class="tborder">
	<tr>
		<td class="thead side">
			<strong>Servers</strong>
			<div class="float_right" style="padding-top: 5px;"><i class="fa fa-server"></i></div>
		</td>
	</tr>
	<tr>
		<td class="trow1">
			<span class="smalltext">
				TTT - <?php echo $ww1online . "/". $ww1max ?> - <a href="steam://connect/64.42.178.178:27100" target="_blank">Join</a>
			</span>
		</td>
	</tr>
</table><br />
<table border="0" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" class="tborder">
	<tr>
		<td class="thead side">
			<strong><a href="online.php">{$lang->whos_online}</a></strong>
			<div class="float_right" style="padding-top: 5px;"><i class="fa fa-user"></i></div>
		</td>
	</tr>
	<tr>
		<td class="trow1">
			{$whosonline}
		</td>
	</tr>
</table><br />
<table border="0" cellspacing="{$theme['borderwidth']}" cellpadding="{$theme['tablespace']}" class="tborder">
	<tr>
		<td class="thead side">
			<strong><a href="stats.php">{$lang->boardstats}</a></strong>
			<div class="float_right" style="padding-top: 5px;"><i class="fa fa-line-chart"></i></div>
		</td>
	</tr>
	<tr>
		<td class="trow1">
			{$forumstats}
		</td>
	</tr>
</table>
</div>
<br class="clear" />
{$footer}
</body>
</html>