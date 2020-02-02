<?php
/*
 * Thread Preview Plugin
 *
 * Displays Thread first and Last Post
 *
 * Version 1.0
 */

// Disallow direct access to this file for security reasons
if (!defined("IN_MYBB")) {
    die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

// Add Hooks
$plugins->add_hook("misc_start", "themeEffects_preview");
$plugins->add_hook("forumdisplay_end", "themeEffects_forum");
// Plugin Info
function themeEffects_info()
{

    return array(
        "name" => "iAndrew Theme Effects",
        "description" => "Custom Theme Effects for iAndrew Themes",
        "website" => "http://iandrew.me",
        "author" => "Jitendra M ",
        "authorsite" => "http://mybbplugins.com",
        "version" => "1.0",
        "guid" => "",
        "compatibility" => "18*"
    );
}

// Activate plugin
function themeEffects_activate()
{
    require_once MYBB_ROOT . "/inc/adminfunctions_templates.php";
    //find_replace_templatesets("headerinclude", "#" . preg_quote('<script type="text/javascript" src="{$mybb->asset_url}/jscripts/jquery.js?ver=1800"></script>') . "#i", '<script type="text/javascript" src="jscripts/theme-effects.js"></script>', '', false);
}

// Deactivate plugin
function themeEffects_deactivate()
{
    require_once MYBB_ROOT . "/inc/adminfunctions_templates.php";
    //find_replace_templatesets("headerinclude", "#" . preg_quote('<script type="text/javascript" src="jscripts/theme-effects.js"></script>') . "#i", ' ', '', false);
}


function chop_message(&$message) {

	$message = unhtmlentities(strip_tags($message));


    $message = preg_replace("~ ?\n ?~", " \n", $message);

    if (strlen($message) > 200)
        $message = substr($message, 0, 200) . ' ... ';

    return $message;
}


function themeeffects_forum() {
	global $headerinclude;
	$headerinclude .='<script type="text/javascript" src="jscripts/theme-effects.js"></script>';
}

function themeeffects_preview()
{
    global $mybb, $db, $lang, $charset, $headerinclude;

    if ($mybb->input['action'] == 'fetch_preview' && intval($mybb->input['tid']) !="")
    {
        if($lang->settings['charset']){
	        $charset = $lang->settings['charset'];
        }else{
	         $charset = "UTF-8";
        }
	    header("Content-type: application/json; charset={$charset}");
		require_once MYBB_ROOT . 'inc/class_parser.php';
        $parser = new postParser;
        $parser_options = array(
                'allow_html' => 0,
                'allow_mycode' => 1,
                'allow_smilies' => 0,
                'allow_imgcode' => 1,
                'filter_badwords' => 1,
                'nl2br' => 0
        );
		
		//1. Always add verify incoming post Request, you don't wanna any XSS exploits
        verify_post_check($mybb->get_input('my_post_key'));
		//2. Query incoming tid to check if that thread really exists, also NEVER TRUST anything that user inputs
		$tid = intval($mybb->input['tid']);
		$fid = $starter = $first_pid = $last_pid = $last_uid = $last_post_date = "";
		
		$query = $db->query("
		   SELECT lastpost, lastposteruid, uid, firstpost, tid, fid, subject
		   FROM ".TABLE_PREFIX."threads
		   WHERE tid='{$tid}' AND visible='1' AND closed NOT LIKE 'moved|%'
		   ORDER BY lastpost DESC
		   LIMIT 0, 1
		");
		
		if($db->num_rows($query) == 0) {
		   $data = "The specified thread does not exist.";
		}
		while($results = $db->fetch_array($query)) {
		    $fid = $results['fid'];
			$starter = $results['uid'];
			$first_pid = $results['firstpost'];
			$last_post_date = $results['lastpost'];
			$last_uid = $results['lastposteruid'];
		}
		     $forumpermissions = forum_permissions($fid);

        // Does the user have permission to view this thread?
        if($forumpermissions['canview'] != 1 || $forumpermissions['canviewthreads'] != 1)
        {
            $data = "You don't have permissions to view this thread.";
        }

        if(isset($forumpermissions['canonlyviewownthreads']) && $forumpermissions['canonlyviewownthreads'] == 1 && $thread['uid'] != $mybb->user['uid'])
        {
            $data = "You don't have permissions to view this thread.";
        }
		//Join everything in one query instead of draining SQL queries
		$first_post = $db->query("
		             SELECT p.pid, p.tid, p.dateline, p.subject, p.message, u.avatar, u.username, u.uid
					 FROM ".TABLE_PREFIX."posts AS p
					 LEFT JOIN ".TABLE_PREFIX."users AS u ON (u.uid=p.uid)
					 WHERE p.pid='{$first_pid}'
		");
		While($results = $db->fetch_array($first_post)) {
		       $fp_message = $parser->parse_message($results['message'], $parser_options);
			   $fp_message = chop_message($fp_message);
			   $fp_avatar = $results['avatar'];
			   if($fp_avatar == "") {
			      $fp_avatar = $mybb->settings['useravatar'];
			   }
			   $fp_avatar = "<img src='{$fp_avatar}' alt='#' />";
			   //$fp_username = build_profile_link($results['username'], $results['uid']);
			   $fp_username = '<span style="font-weight:bold;">' . $results['username'] . '</span> made the first post' . '';
		}

		//Last post query (2 queries, there is no lastpospid)
		//First get the pid
		$last_post = $db->query("
		             SELECT p.pid, p.tid, p.dateline, p.subject, p.message, u.avatar, u.username, u.uid
					 FROM ".TABLE_PREFIX."posts AS p
					 LEFT JOIN ".TABLE_PREFIX."users AS u ON (u.uid=p.uid)
					 WHERE p.tid='{$tid}' AND visible='1'
					 ORDER BY pid DESC
					 LIMIT 1
					 
		");
		While($results = $db->fetch_array($last_post)) {
		       $lp_message = $parser->parse_message($results['message'], $parser_options);
			   $lp_message = chop_message($lp_message);
			   $lp_avatar = $results['avatar'];
			   if($lp_avatar == "") {
			      $lp_avatar = $mybb->settings['useravatar'];
			   }
			   $lp_avatar = "<img src='{$lp_avatar}' alt='#' />";
			   $lp_username = '<span style="font-weight:bold;">' . $results['username'] . '</span> made the last post' . '';

			   //$lp_username = build_profile_link($results['username'], $results['uid']);
		}
		$preview = '
		<div id="firstPost">
		<div class="preview_avatar">'.$fp_avatar.'</div><div class="preview_info">'.$fp_username.'<div class="preview_message">'.$fp_message.'</div></div><br class="clear" /></div><div id="lastPost"><div class="preview_avatar">'.$lp_avatar.'</div><div class="preview_info">'.$lp_username.'<div class="preview_message">'.$lp_message.'</div></div><br class="clear" /></div>';
		     
		
		
		//$thread = get_thread($mybb->input['tid']);
        //$threadData = $thread;
	   $data = array(
            'success' => true,
            'preview' => $preview
        );
	 	echo json_encode($data);
        exit;   
	}
	
}

