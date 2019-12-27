<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home - 29th Infantry Division</title>
		<meta name="description" content="The 29th Infantry Division is a realism unit spread throughout multiple games in multiple time periods. Each game is supported separately by different companies while serving under the same Battalion so that all games and soldiers function individually and as all whole."/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
		<script src="assets/js/pace.js"></script>
	</head>
	<body>
		<?php require('header.php') ?>
		<div id="home" class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
			<div id="home_top_outline">
				<div id="home_top">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background1.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background2.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background3.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background4.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background5.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background6.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background7.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background8.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background9.jpg">
					<img id="slideshow" class="Slides animated fadeIn" src="assets/img/background10.jpg">
					<img id="slideshow_overlay" src="https://i.imgur.com/YXrIo35.png">
					<p id="home_text">29th Infantry Division</p>
					<span id="home_divider"></span>
					<p id="home_sub_text">ARMA 3 <span style="color: rgba(203,209,131,1);">|</span> RISING STORM 2:VIETNAM <span style="color: rgba(203,209,131,1);">|</span> SQUAD</p>
					<p id="down_arrow" onclick="home_middle()"><i class="fa fa-angle-double-down"></i></p>
				</div>
			</div>
			<div id="home_middle">
				<!-- <marquee id="enlist_announcement" scrollamount="10">We are looking for people like you to join in on the fun! Intersted in our drills? <a id="enlist_button_home_link" href="enlist">Enlist today</a>!</marquee> -->
				<div id="ts_container">
					<div id="ts3viewer_1071952">Teamspeak 3
					</div>
				</div>
				<script src="https://static.tsviewer.com/short_expire/js/ts3viewer_loader.js"></script>
				<script>
					var ts3v_url_1 = "https://www.tsviewer.com/ts3viewer.php?ID=1071952&text=BBB5A9&text_size=12&text_family=1&js=1&text_s_weight=normal&text_s_style=normal&text_s_variant=normal&text_s_decoration=none&text_s_weight_h=normal&text_s_style_h=normal&text_s_variant_h=normal&text_s_decoration_h=none&text_i_weight=normal&text_i_style=normal&text_i_variant=normal&text_i_decoration=none&text_i_weight_h=normal&text_i_style_h=normal&text_i_variant_h=normal&text_i_decoration_h=none&text_c_weight=normal&text_c_style=normal&text_c_variant=normal&text_c_decoration=none&text_c_weight_h=normal&text_c_style_h=normal&text_c_variant_h=normal&text_c_decoration_h=none&text_u_weight=normal&text_u_style=normal&text_u_variant=normal&text_u_decoration=none&text_u_weight_h=normal&text_u_style_h=normal&text_u_variant_h=normal&text_u_decoration_h=none";
					ts3v_display.init(ts3v_url_1, 1071952, 100);
				</script>
				<a href="ts3server://twentyninth.ts.nfoservers.com?port=9987&password=29th" target="_blank"><p id="ts_connect">Connect</p></a>
				<div id="time_converter">
					<center>
						<p id="time_text">Time Converter</p>
						<div id="est_time">
							<span class="wtb-ew-v1" style="width: 204px; display:inline-block"><script src="https://www.worldtimebuddy.com/clock_widget.js?h=5&bc=8BA1BB&cn=EST&wt=c1"></script><i><a href="https://www.worldtimebuddy.com/">Time Converter</a></i><noscript><a href="https://www.worldtimebuddy.com/">Time Converter</a></noscript><script>window[wtb_event_widgets.pop()].init()</script></span>
						</div>
						<div id="gmt_time">
							<span class="wtb-ew-v1" style="width: 204px; display:inline-block"><script src="https://www.worldtimebuddy.com/clock_widget.js?h=2643743&bc=8BA1BB&cn=GMT&wt=c1"></script><i><a href="https://www.worldtimebuddy.com/">Time Converter</a></i><noscript><a href="https://www.worldtimebuddy.com/">Time Converter</a></noscript><script>window[wtb_event_widgets.pop()].init()</script></span>
						</div>
						<p id="time_switcher"><a id="est_clicker" onclick="
						document.getElementById('est_clicker').style.color = 'rgba(203,209,131,1)';
						document.getElementById('gmt_clicker').style.color = 'white';
						document.getElementById('est_time').style.display = 'block';
						document.getElementById('gmt_time').style.display = 'none'">EST</a> / <a id="gmt_clicker" onclick="
						document.getElementById('est_clicker').style.color = 'white';
						document.getElementById('gmt_clicker').style.color = 'rgba(203,209,131,1)';
						document.getElementById('est_time').style.display = 'none';
						document.getElementById('gmt_time').style.display = 'block'">GMT</a></p>
					</center>
				</div>
				<div id="home_top_background">
					<div id="home_navbar">
						<p id="home_navbar_civil_button" class="home_navbar_button" title="Civil Announcements" onclick="
						document.getElementById('civil_announcements_nav_button').style.display = 'block';
						document.getElementById('promotions_nav_button').style.display = 'none';
						document.getElementById('twitter_nav_button').style.display = 'none';
						document.getElementById('rs_feed').src += '';
						document.getElementById('home_navbar_civil_button').style.borderRight = '4px solid rgba(203,209,131,1)';
						document.getElementById('home_navbar_promo_button').style.borderRight = 'none';
						document.getElementById('home_navbar_twitter_button').style.borderRight = 'none';
						document.getElementById('home_navbar_civil_button').style.textIndent = '2px';
						document.getElementById('home_navbar_promo_button').style.textIndent = '0px';
						document.getElementById('home_navbar_twitter_button').style.textIndent = '0px'"><span class="fa fa-bullhorn"></span></p>
						<p id="home_navbar_promo_button" class="home_navbar_button" title="Promotions and Awards" onclick="
						document.getElementById('civil_announcements_nav_button').style.display = 'none';
						document.getElementById('promotions_nav_button').style.display = 'block';
						document.getElementById('twitter_nav_button').style.display = 'none';
						document.getElementById('rs_feed_two').src += '';
						document.getElementById('home_navbar_civil_button').style.borderRight = 'none';
						document.getElementById('home_navbar_promo_button').style.borderRight = '4px solid rgba(203,209,131,1)';
						document.getElementById('home_navbar_twitter_button').style.borderRight = 'none';
						document.getElementById('home_navbar_civil_button').style.textIndent = '0px';
						document.getElementById('home_navbar_promo_button').style.textIndent = '2px';
						document.getElementById('home_navbar_twitter_button').style.textIndent = '0px'"><span class="fa fa-trophy"></span></p>
						<p id="home_navbar_twitter_button" class="home_navbar_button" title="Twitter Feed" onclick="
						document.getElementById('civil_announcements_nav_button').style.display = 'none';
						document.getElementById('promotions_nav_button').style.display = 'none';
						document.getElementById('twitter_nav_button').style.display = 'block';
						document.getElementById('rs_feed_three').src += '';
						document.getElementById('home_navbar_civil_button').style.borderRight = 'none';
						document.getElementById('home_navbar_promo_button').style.borderRight = 'none';
						document.getElementById('home_navbar_twitter_button').style.borderRight = '4px solid rgba(203,209,131,1)';
						document.getElementById('home_navbar_civil_button').style.textIndent = '0px';
						document.getElementById('home_navbar_promo_button').style.textIndent = '0px';
						document.getElementById('home_navbar_twitter_button').style.textIndent = '2px'"><span class="fa fa-twitter"></span></p>
					</div>
					<div id="civil_announcements_nav_button" class="animated fadeIn">'
						<div id="civil_announcements">
							<iframe id="rs_feed" src="https://feed.mikle.com/widget/v2/118688/" height="98.65%" width="100%" class="fw-iframe" scrolling="yes" frameborder="0"></iframe>
						</div>
					</div>
					<div id="promotions_nav_button" class="animated fadeIn">
						<div id="civil_announcements">
							<iframe id="rs_feed_two" src="https://feed.mikle.com/widget/v2/118705/" height="98.65%" width="100%" class="fw-iframe" scrolling="yes" frameborder="0"></iframe>
						</div>
					</div>
					<div id="twitter_nav_button" class="animated fadeIn">
						<div id="civil_announcements">
							<iframe id="rs_feed_three" src="https://feed.mikle.com/widget/v2/121502/" height="98.65%" width="100%" class="fw-iframe" scrolling="yes" frameborder="0"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div id="home_middle_bottom">
				<p id="latest_video_title">Latest YouTube Video</p>
				<p id="channel_notice">We upload to our YouTube channel every Monday and Friday! Come check us out to see how we run our drills and get to know some of our most senior veterans!</p>
				<div id="latest_video" class="d-none d-sm-none d-md-none d-lg-none d-xl-block">
					<iframe width="100%" height="100%" src="http://www.youtube.com/embed?max-results=1&controls=1&showinfo=1&rel=1&listType=user_uploads&list=29thid1" frameborder="0" allowfullscreen></iframe> 
				</div>
				<div id="latest_video_two" class="d-none d-sm-none d-md-block d-lg-block d-xl-none">
					<iframe width="100%" height="100%" src="http://www.youtube.com/embed?max-results=1&controls=1&showinfo=1&rel=1&listType=user_uploads&list=29thid1" frameborder="0" allowfullscreen></iframe> 
				</div>
			</div>
			<div id="home_bottom">
				<p id="home_bottom_title">Games We're Deployed In</p>
				<div id="edge_deploy_compat">
					<!-- <p id="home_bottom_subtitle"><span class="fa fa-hand-pointer-o"></span> Hover over Image(s)</p> -->
					<div id="game_desc_background"></div>
					<div id="arma_description">
						<a href="https://store.steampowered.com/app/107410/" target="_blank"><img id="game_img_two" src="assets/img/arma3.jpg"></a>
					</div>
					<img id="arma_logo" src="assets/img/arma_logo.png" class="animated zoomIn">
					<div id="rs2_description">
						<a href="https://store.steampowered.com/app/418460/" target="_blank"><img id="game_img_two" src="assets/img/rs2.jpg"></a>
					</div>
					<img id="rs_logo" src="assets/img/rs_logo.png" class="animated zoomIn">
					<div id="squad_description">
						<a href="https://store.steampowered.com/app/393380/" target="_blank"><img id="game_img_two" src="assets/img/squad.jpg"></a>
					</div>
					<img id="sq_logo" src="assets/img/squad_logo.png" class="animated zoomIn">
				</div>
				<div id="edge_deploy_compat_two">
					<div id="arma_description_two">
						<a href="https://store.steampowered.com/app/107410/" target="_blank"><img id="game_img_three" src="https://steamcdn-a.akamaihd.net/steam/apps/107410/header.jpg?t=1561619799"></a>
						<a id="game_purchase_link" href="https://store.steampowered.com/app/107410/" target="_blank"><p id="game_purchase"><i class="fa fa-shopping-cart"></i> Purchase</p></a>
					</div>
					<div id="rs2_description_two">
						<a href="https://store.steampowered.com/app/418460/" target="_blank"><img id="game_img_three" src="https://steamcdn-a.akamaihd.net/steam/apps/418460/header.jpg?t=1568318280"></a>
						<a id="game_purchase_link" href="https://store.steampowered.com/app/418460/" target="_blank"><p id="game_purchase"><i class="fa fa-shopping-cart"></i> Purchase</p></a>
					</div>
					<div id="squad_description_two">
						<a href="https://store.steampowered.com/app/393380/" target="_blank"><img id="game_img_three" src="https://steamcdn-a.akamaihd.net/steam/apps/393380/header.jpg?t=1572378312"></a>
						<a id="game_purchase_link" href="https://store.steampowered.com/app/393380/" target="_blank"><p id="game_purchase"><i class="fa fa-shopping-cart"></i> Purchase</p></a>
					</div>
				</div>
			</div>
		</div>
		<div id="home_small" class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
			<div id="home_top_outline">
			</div>
			<div id="home_top">
				<img id="slideshow_two" class="Slides_Two animated fadeIn" src="assets/img/background9.jpg">
				<img id="slideshow_overlay" src="https://i.imgur.com/YXrIo35.png">
				<p id="home_text">29th Infantry Division</p>
				<div id="home_divider_two"></div>
				<p id="home_sub_text">ARMA 3 | RISING STORM 2:VIETNAM | SQUAD</p>
				<p id="down_arrow" onclick="home_middle_small()"><i class="fa fa-angle-double-down"></i></p>
			</div>
			<div id="home_middle_small">
				<div id="latest_video_small">
					<iframe width="100%" height="100%" src="http://www.youtube.com/embed?max-results=1&controls=1&showinfo=1&rel=1&listType=user_uploads&list=29thid1" frameborder="0" allowfullscreen></iframe> 
				</div>
				<p id="video_title_small">Latest YouTube Video</p>
				<a id="channel_button_small" href="https://www.youtube.com/user/29thid1" target="_blank"><p><i class="fa fa-link"></i> Visit Channel</p></a>
			</div>
			<div id="home_middle_bottom_small">
				<div id="civil_announcements_small">
					<iframe id="rs_feed_three" src="https://feed.mikle.com/widget/v2/118688/" height="99%" width="100%" class="fw-iframe" scrolling="yes" frameborder="0"></iframe>
				</div>
				<div id="civil_announcements_two_small">
					<iframe id="rs_feed_four" src="https://feed.mikle.com/widget/v2/118705/" height="99%" width="100%" class="fw-iframe" scrolling="yes" frameborder="0"></iframe>
				</div>
			</div>
			<div id="home_bottom_small">
				<p id="home_bottom_title_small">Games We're Deployed In</p>
				<div id="arma_description_small">
					<p id="game_header">Arma 3</p>
					<img id="game_img" src="https://steamcdn-a.akamaihd.net/steam/apps/107410/header.jpg?t=1561619799">
					<hr id="game_divider">
					<p id="game_text_small">Experience true combat gameplay in a massive military sandbox. Deploying a wide variety of single- and multiplayer content, over 20 vehicles and 40 weapons, and limitless opportunities for content creation, this is the PC’s premier military game. Authentic, diverse, open - Arma 3 sends you to war.</p>
					<a id="game_purchase_link" href="https://store.steampowered.com/app/107410/" target="_blank"><p id="game_purchase_small"><i class="fa fa-shopping-cart"></i></p></a>
				</div>
				<div id="rs2_description_small">
					<p id="game_header">RS2</p>
					<img id="game_img" src="https://steamcdn-a.akamaihd.net/steam/apps/418460/header.jpg?t=1568318280">
					<hr id="game_divider">
					<p id="game_text_small">Rising Storm 2: Vietnam is the next in the series that has twice been PC Gamer’s ‘Multiplayer Game of the Year’, bringing the franchise into the era of automatic rifles, man-portable grenade launchers and more modern weapons systems. Still with the authentic look and feel and realistic weapon handling that the series is known for.</p>
					<a id="game_purchase_link" href="https://store.steampowered.com/app/418460/" target="_blank"><p id="game_purchase_small"><i class="fa fa-shopping-cart"></i></p></a>
				</div>
				<div id="squad_description_small">
					<p id="game_header">Squad</p>
					<img id="game_img" src="https://steamcdn-a.akamaihd.net/steam/apps/393380/header.jpg?t=1570769617">
					<hr id="game_divider">
					<p id="game_text_small">Squad is a large scale combined arms multiplayer first-person shooter emphasizing combat realism through communication, team play, emphasizing strong squad cohesion mechanics as well as larger-scale coordination, tactics, and planning.</p>
					<a id="game_purchase_link" href="https://store.steampowered.com/app/393380/" target="_blank"><p id="game_purchase_small"><i class="fa fa-shopping-cart"></i></p></a>
				</div>
			</div>
		</div>
	</body>
	<?php require('footer.php') ?>
	<script>
		if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
			document.getElementById("home_button_four").classList.add("selected_three");
			document.getElementById("home_button_five").classList.add("selected_three");
			document.getElementById("time_text").style.textDecoration = "none";
			document.getElementById("time_text").style.borderBottom = "2px solid rgba(203,209,131,1)";
			document.getElementById("time_text").style.marginLeft = "15%";
			document.getElementById("time_text").style.marginRight = "15%";
			document.getElementById("time_converter").style.overflow = "hidden";
		}
		if (document.documentMode || !/Edge/.test(navigator.userAgent)) {
			function start_nav() {
				document.getElementById("home_button").classList.add("selected");
				document.getElementById("home_button_two").classList.add("selected");
				document.getElementById("home_button_three").classList.add("selected_mobile");
				document.getElementById("home_button_dropshadow").classList.add("selected");
				document.getElementById("home_button_dropshadow_fix").style.opacity = "1.0";
				document.getElementById("home_button_dropshadow_fix_two").style.opacity = "1.0";
				document.getElementById("home_navbar_civil_button").style.borderRight = "4px solid rgba(203,209,131,1)";
				document.getElementById('home_navbar_civil_button').style.textIndent = '2px';
			}
			start_nav()
		} else {
			document.getElementById("latest_video_title").style.color = "rgba(203,209,131,1)";
			document.getElementById("latest_video_title").style.textDecoration = "none";
			document.getElementById("latest_video_title").style.borderBottom = "2px solid rgba(203,209,131,1)";
			document.getElementById("latest_video_title").style.marginLeft = "25%";
			document.getElementById("latest_video_title").style.marginRight = "25%";
			document.getElementById("home_button_four").classList.add("selected_three");
			document.getElementById("home_button_five").classList.add("selected_three");
			document.getElementById("home_navbar_civil_button").style.borderRight = "4px solid rgba(203,209,131,1)";
			document.getElementById("edge_deploy_compat").style.display = "none";
			document.getElementById("edge_deploy_compat_two").style.display = "block";
			document.getElementById("home_bottom_title").style.textDecoration = "none";
			document.getElementById("home_bottom_title").style.color = "rgba(203,209,131,1)";
			document.getElementById("home_bottom_title").style.borderBottom = "2px solid rgba(203,209,131,1)";
			document.getElementById("home_bottom_title").style.width = "50vw";
			document.getElementById("home_bottom_title").style.marginLeft = "calc(50vw - 25vw)";
			document.getElementById("home_bottom_title").style.backgroundColor = "rgba(0,0,0,.5)";
			document.getElementById("home_bottom_title").style.borderTopLeftRadius = "1vh";
			document.getElementById("home_bottom_title").style.borderTopRightRadius = "1vh";
			document.getElementById("home_bottom_title_small").style.textDecoration = "none";
			document.getElementById("home_bottom_title_small").style.color = "rgba(203,209,131,1)";
			document.getElementById("home_bottom_title_small").style.borderBottom = "2px solid rgba(203,209,131,1)";
			document.getElementById("home_bottom_title_small").style.width = "75vw";
			document.getElementById("home_bottom_title_small").style.marginLeft = "calc(50vw - 37.5vw)";
			document.getElementById("home_bottom_title_small").style.backgroundColor = "rgba(0,0,0,.5)";
			document.getElementById("home_bottom_title_small").style.borderTopLeftRadius = "1vh";
			document.getElementById("home_bottom_title_small").style.borderTopRightRadius = "1vh";
			document.getElementById("home_button_three").classList.add("selected_mobile");
			document.getElementById('home_navbar_civil_button').style.textIndent = '2px';
			document.getElementById("time_text").style.textDecoration = "none";
			document.getElementById("time_text").style.borderBottom = "2px solid rgba(203,209,131,1)";
			document.getElementById("time_text").style.marginLeft = "15%";
			document.getElementById("time_text").style.marginRight = "15%";
		}
		function home_middle() {
			document.getElementById('home_middle').scrollIntoView({behavior: 'smooth'})
		}
		function home_middle_small() {
			document.getElementById('home_middle_small').scrollIntoView({behavior: 'smooth'})
		}
		var slideIndex = 0;
			carousel();
			function carousel() {
					  var i;
		  var x = document.getElementsByClassName("Slides");
		  for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";
		  }
		  slideIndex++;
		  if (slideIndex > x.length) {slideIndex = 1}
		  x[slideIndex-1].style.display = "block";
		  setTimeout(carousel, 20000);
		}
		window.onresize = function() {
			if ( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				if ($('#home_small').is(':visible')) {
					document.getElementById("rs_feed_three").src += '';
				   	document.getElementById("rs_feed_four").src += '';
				} else {
				   	document.getElementById("rs_feed").src += '';
				   	document.getElementById("rs_feed_two").src += '';
				}
			}
		}
	</script>
</html>