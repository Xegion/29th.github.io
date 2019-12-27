<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>About - 29th Infantry Division</title>
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
		<script src="assets/js/pace.js"></script>
	</head>
	<body>
		<?php require('header.php') ?>
		<div id="about" class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
			<div id="about_top">
			</div>
			<div id="about_bottom">
				<p id="about_header">About</p>
				<p id="about_back"><a onclick="document.getElementById('about_nav').style.display = 'block'; document.getElementById('about_box').style.display = 'none'; document.getElementById('about_back').style.display = 'none'; document.getElementById('back_bottom_bottom').style.display = 'none'; $(window).scrollTop(0)" id="about_back_link"><span class="fa fa-arrow-circle-left"></span> Back</a></p>
				<div id="about_nav">
					<p id="about_nav_button"onclick="document.getElementById('about_introduction').style.display = 'block'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-user"></span><br><span id="about_title_button">Introduction</span></p>
					<p id="about_nav_button_two" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'block';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-bullhorn"></span><br><span id="about_title_button">What is Realism?</span></p>
					<p id="about_nav_button_third"onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'block'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-cog"></span><br><span id="about_title_button">Training System</span></p>
					<p id="about_nav_button_forth"onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'block'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-id-card"></span><br><span id="about_title_button">Rank System</span></p>
					<p id="about_nav_button_one_two" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'block';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-trophy"></span><br><span id="about_title_button">Medals & Awards</span></p>
					<p id="about_nav_button_two_two" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'block';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-bookmark"></span><br><span id="about_title_button">Historical 29th</span></p>
					<p id="about_nav_button_third_two" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'block';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-history"></span><br><span id="about_title_button">Our History</span></p>
					<p id="about_nav_button_forth_two" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'block';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-file-text"></span><br><span id="about_title_button">Enlistment Process</span></p>
					<p id="about_nav_button_one_three" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'block';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-book"></span><br><span id="about_title_button">Scrim Records</span></p>
					<p id="about_nav_button_two_three" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'block';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-balance-scale"></span><br><span id="about_title_button">Server Rules</span></p>
					<p id="about_nav_button_third_three" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'block';
					document.getElementById('about_qa').style.display = 'none';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-usd"></span><br><span id="about_title_button">How to Donate</span></p>
					<p id="about_nav_button_forth_three" onclick="document.getElementById('about_introduction').style.display = 'none'; 
					document.getElementById('about_realism').style.display = 'none';
					document.getElementById('about_training').style.display = 'none'; 
					document.getElementById('about_rank').style.display = 'none'; 
					document.getElementById('about_medal').style.display = 'none';
					document.getElementById('about_historical').style.display = 'none';
					document.getElementById('about_history').style.display = 'none';
					document.getElementById('about_enlistment').style.display = 'none';
					document.getElementById('about_records').style.display = 'none';
					document.getElementById('about_rules').style.display = 'none';
					document.getElementById('about_donate').style.display = 'none';
					document.getElementById('about_qa').style.display = 'block';
					document.getElementById('about_nav').style.display = 'none';
					document.getElementById('about_box').style.display = 'block';
					document.getElementById('about_back').style.display = 'block';
					document.getElementById('back_bottom_bottom').style.display = 'block';
					$(window).scrollTop(0);"><span id="about_icon" class="fa fa-question"></span><br><span id="about_title_button">Q&A</span></p>
				</div>
				<div id="about_box">
					<div id="about_introduction" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Introduction &nbsp;</p>
						<p id="about_section_text"><b>What is the 29th ID?</b><br>The 29th Infantry Division is a realism unit in the online Modern Conflict game Arma III. Recently we have also started new companies in Rising Storm 2: Vietnam and Squad games. Realism is the conducting of a gaming group as close to real combat as possible.</p>
						<p id="about_section_text">By using the menu on the left, you can browse through more information explaining different aspects of Realism and the 29th ID.</p>
						<p id="about_section_text">We base our unit off of the US Army during World War II. From there, the rank system, medals and weapons have been based and modified to fit into each game respectively.</p>
						<p id="about_section_text">When you enlist, you start as a Private and enter basic training for a week, where you are trained and pounded into place by drill sergeants as they make you "29th Material".</p>
						<p id="about_section_text">We have several servers, as listed on the servers page which can be found on the navbar, where we play publicly and host realism scrimmages.</p>
						<p id="about_section_text">If you are looking to enter a new aspect of online gaming, have fun, and learn a lot about the US military system, enlist with the 29th Infantry Division.</p>
					</div>
					<div id="about_realism" class="animated fadeIn">
						<p id="about_section_header">&nbsp; What is Realism? &nbsp;</p>
						<p id="about_section_text">The 29th Infantry Division practices a sort of teamwork-oriented style of gameplay, known as "Realism". It is much different from the "death match" style play seen on the public server. It is the portrayal of real tactics, strategies, and conduct through an online 70 player game. When you die in a realism scrimmage, you do not respawn until the end of the round. You must work as a team to keep each other alive. If you are looking for a different gaming atmosphere, community, and experience - Realism may be for you.</p>
						<p id="about_section_text"><b>Set-Up</b><br>In a Realism match, there are many different styles and scenarios. The most common are Attack/Attack and Attack/Defense, meaning both teams attack at the same time, or one team attacks while the other defends an area. Once the terms and weapon allowances are established, your platoon (or team) leader will designate squad leaders and give them assignments. They will delegate the specific responsibilities to each member of their squad and go over the plan. Everyone has an assignment and is vital to the survival of the tea</p>
						<p id="about_section_text"><b>In the Heat of the Battle</b><br>After your team moves out to secure its objective, you encounter the enemy - also trying to secure their objective. The feeling at this point, acknowledging that you only have one life, has been described as "the most adrenaline ever received in a video game." Between providing your teammates suppressive fire to dodging bullets yourself, you hear your squad leader shouting orders to keep you all alive, and the team leader's communication with his squad leaders, revising the plan to ensure victory.</p>
						<p id="about_section_text"><b>Victory conditions</b><br>As there are no respawns in a standard realism scenario, flag capturing is generally disallowed. A victory is obtained by eliminating the enemy force. This is different, of course, with the many other scenarios used by the 29th such as Reinforcements, Attack/Counter-Attack, Isolation, Prisoner Rescue, Escort, Paratroopers (with real parachutes), etc.</p>
					</div>
					<div id="about_training" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Our Training System &nbsp;</p>
						<p id="about_section_text">Following Basic Combat Training, newly graduated Privates are assigned to a squad, where they may discuss their Advanced Infantry Training (AIT) options with the Squad Leader. Depending on the slots that are open in the squad, soldiers may request to train with the Rifle, BAR, Machine Gun, Bazooka, etc. and be given personalized training with their AIT weapon.</p>
						<p id="about_section_text">Soldiers may qualify for three different Arms Qualification Badges (AQB) for their AIT weapon: The Marksman Badge, the Sharpshooter Badge, and the Expert Badge. Each badge has a unit-wide list of criteria. With a lot of practice, as well as tips from their squad leader or other veteran 29ers, soldiers can meet these criteria and be awarded the badges, which will be proudly displayed on their service coats and qualify them for official battle. In addition, soldiers may qualify for the Expert Infantry Badge, another requirement for official battle, which pertains to combat skills and communication.</p>
						<p id="about_section_text">To speed up the process of training and qualifying, the Infantry School holds classes periodically where soldiers in training can receive tips from experts and be tested for the badge criteria. After qualifying high enough, soldiers will have the opportunity to pass on their skills to newer members in training as well, through leadership and the Infantry School.</p>
					</div>
					<div id="about_rank" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Our Rank System &nbsp;</p>
						<p id="about_section_text">All members of the 29th Infantry Division, 116th Regiment, 1st Battalion, have the opportunity of advancing throughout the battalion. You start out as a Private undergoing Basic Training for an entire week. If you show exceptional skills as a Private, you may be promoted to a higher rank in our chain of command.</p>
						<p id="about_section_text">"29th Infantry Division" serves as a title of this realism unit. In size, we are a Battalion within the Division. US Army units are composed as follows:</p>
						<p id="about_section_text">Divisions are made up of Regiments, which are made up of <b>Battalions</b>, which are made up of Companies, which are made up of Platoons, which are made up of Squads.</p>
						<p id="about_section_text"><b>Officers</b></p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/ltcol.png">
						<p id="rank_name"><b>Lieutenant Colonel (Lt.Col.)</b></p>
						<p id="rank_desc">The Lieutenant Colonel commands the entire Battalion, and is also referred to as the Commanding Officer, or CO, and does not lead a company, but is the highest rank in the Battalion HQ.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/maj.png">
						<p id="rank_name"><b>Major (Maj.)</b></p>
						<p id="rank_desc">The Major is usually the Executive Officer of the Battalion, but can be the Commanding Officer in absence of a Lieutenant Colonel.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/cpt.png">
						<p id="rank_name"><b>Captain (Cpt.)</b></p>
						<p id="rank_desc">The Captain commands a Company, and is also referred to as the Company's Commanding Officer (CO). He does not lead a platoon, but is the highest rank in the Company HQ.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/1lt.png">
						<p id="rank_name"><b>First Lieutenant (1Lt.)</b></p>
						<p id="rank_desc">Usually the Executive Officer (XO) of the company, the First Lieutenant is second in command and executes orders from the Captain, but can be the Commanding Officer in absence of a Captain, or can lead a platoon if necessary.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/2lt.png">
						<p id="rank_name"><b>Second Lieutenant (2Lt.)</b></p>
						<p id="rank_desc">The entry-level Officer rank, who typically leads a platoon under the Company HQ's command.</p>
						<p id="about_section_text"><b>Warrant Officers</b></p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/CW5.png">
						<p id="rank_name"><b>Chief Warrant Officer 5 (CW5)</b></p>
						<p id="rank_desc">Master-level technical and tactical experts that support brigade, division, corps, echelons above corps, and major command operations. They provide leader development, mentorship, advice, and counsel to WOs and branch officers. CW5s have special WO leadership and representation responsibilities within their respective commands</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/CW4.png">
						<p id="rank_name"><b>Chief Warrant Officer 4 (CW4)</b></p>
						<p id="rank_desc">Senior-level experts in their chosen field. They primarily support battalion, brigade, division, corps, and echelons above corps operations. CW4s typically have special mentorship responsibilities for other WOs and provide essential advice to commanders on WO issues.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/CW3.png">
						<p id="rank_name"><b>Chief Warrant Officer 3 (CW3)</b></p>
						<p id="rank_desc">Advanced-level experts who perform the primary duties that of a technical and tactical leader. They provide direction, guidance, resources, assistance, and supervision necessary for subordinates to perform their duties. CW3s primarily support operations levels from team or detachment through brigade.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/CW2.png">
						<p id="rank_name"><b>Chief Warrant Officer 2 (CW2)</b></p>
						<p id="rank_desc">Chief Warrant Officers become commissioned officers by warrant as determined by the President of the United States. Chief Warrant Officers are intermediate level technical and tactical experts who perform increased duties and responsibilities at the detachment through battalion levels.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/WO1.png">
						<p id="rank_name"><b>Warrant Officer 1 (WO1)</b></p>
						<p id="rank_desc">Appointed by warrant from the Secretary of the Army, Warrant Officer 1's are technically and tactically focused officers who perform the primary duties of technical leader, trainer, operator, manager, maintainer, sustainer, and adviser.</p>
						<p id="about_section_text"><b>Non-Commissioned Officers</b></p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/msgt.png">
						<p id="rank_name"><b>Master Sergeant (MSgt.)</b></p>
						<p id="rank_desc">Typically found only once in a battalion, and assists in the Battalion HQ. Also fulfilling the job of a First Sergeant, the Master Sergeant can assist in running a company.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/fsgt.png">
						<p id="rank_name"><b>First Sergeant (FSgt.)</b></p>
						<p id="rank_desc">A key advisor to the Commander, the First Sergeant is often the most respected member of the company, and known as the "Company Boss." Helps run the company by dispatching leadership training and has much experience under his belt.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/tsgt.png">
						<p id="rank_name"><b>Technical Sergeant (TSgt.)</b></p>
						<p id="rank_desc">A Technical Sergeant is a seasoned leader who typically serves as platoon sergeant, and can hold a Company HQ position. The key advisor to the platoon leader</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/ssgt.png">
						<p id="rank_name"><b>Staff Sergeant (SSgt.)</b></p>
						<p id="rank_desc">A Staff Sergeant has many of the same responsibilities as a Sergeant, but has even more exceptional leadership skills which come natural to him. Often has sergeants working under him and can lead a large squad or platoon.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/t3.png">
						<p id="rank_name"><b>Technician, 3rd Grade (T/3)</b></p>
						<p id="rank_desc">Equivelant to Staff Sergeant, this enlisted soldier specializes in a certain area, such as head of a particular office in Headquarters Support Staff, Clerical Work, or even a highly proven Combat Engineer.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/sgt.png">
						<p id="rank_name"><b>Sergeant (Sgt.)</b></p>
						<p id="rank_desc">A Sergeant is a proven Corporal who is placed in charge of a squad and is in charge of his squad's discipline, appearance, and organization. Sergeants call practices and drills for their squad when necessary.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/t4.png">
						<p id="rank_name"><b>Technician, 4th Grade (T/4)</b></p>
						<p id="rank_desc">Equivelant to Sergeant, this enlisted soldier is a proven specialist at a particular area, and often is in charge of training other specialists under him.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/cpl.png">
						<p id="rank_name"><b>Corporal (Cpl.)</b></p>
						<p id="rank_desc">The entry-level NCO rank, a corporal is a PFC who has proven himself in Leadership training and is capable of leading other soldiers. A Corporal is usually an Assistant Squad Leader, but can also lead squads if necessary. Usually does not discipline the men as much as a higher NCO, but acts as a team leader.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/t5.png">
						<p id="rank_name"><b>Technician, 5th Grade (T/5)</b></p>
						<p id="rank_desc">Equivelant to Corporal, a T/5 has been qualified to specialize in a certain area, such as clerical or office work, or combat engineer weapons.</p>
						<p id="about_section_text"><b>Privates</b></p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/pfc.png">
						<p id="rank_name"><b>Private, First Class (PFC)</b></p>
						<p id="rank_desc">This rank is awarded to Privates who have become valuable to the Squad Leaders. They assist in drills, showing other Privates the ropes, and are next in line for leadership positions.</p>
						<img id="rank_image" src="http://www.29th.org/images/29th_REAL_Patch128.png" width="60px;">
						<p id="rank_name"><b>Private (Pvt.)</b></p>
						<p id="rank_desc">Once cadets graduate basic combat training, they receive the 29th ID shoulder patch and serve to carry out orders to the best of their ability.</p>
						<p id="about_section_text"><b>Chain of Command</b></p>
						<img id="about_coc" src="assets/img/coc.png">
					</div>
					<div id="about_medal" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Medals, Badges, and Citations &nbsp;</p>
						<p id="about_section_text">All members of the 29th Infantry Division, 116th Regiment, 1st Battalion, have the opportunity of advancing throughout the battalion. You start out as a Private undergoing Basic Training for an entire week. If you show exceptional skills as a Private, you may be promoted to a higher rank in our chain of command.</p>
						<p id="about_section_text"><b>Individual Medals</b></p>
						<img id="rank_image" src="http://29th.org/images/awards/dsc_.gif">
						<p id="medal_name"><b>Distinguished Service Cross</b></p>
						<p id="medal_desc">Exceptional in every regard. The highest honor attainable in the 29th Infantry Division</p>
						<img id="rank_image" src="http://29th.org/images/bars/dsc.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/dsm_.gif">
						<p id="medal_name"><b>Distinguished Service Medal</b></p>
						<p id="medal_desc">Carried out duty successfully and responsibly</p>
						<img id="rank_image" src="http://29th.org/images/bars/dsm.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/sstar_.gif">
						<p id="medal_name"><b>Silver Star</b></p>
						<p id="medal_desc">Soldier demonstrated perfect performance that not only single-handedly secured victory for his team, but demonstrated the core principles of being an effective soldier in the 29th Infantry Division. This medal is only awarded when the soldier's gameplay was at a level of the highest caliber.</p>
						<img id="rank_image" src="http://29th.org/images/bars/sstar.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/sm_.gif">
						<p id="medal_name"><b>Soldier's Medal</b></p>
						<p id="medal_desc">A soldier's bravery, preparation, and leadership abilities allows them to take control of a situation resulting in the prevention of friendly casualties, regardless of survival of recipient.</p>
						<img id="rank_image" src="http://29th.org/images/bars/sm.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/bstar_.gif">
						<p id="medal_name"><b>Bronze Star</b></p>
						<p id="medal_desc">Soldier demonstrated exemplary performance that had a significant impact on the match at hand.</p>
						<img id="rank_image" src="http://29th.org/images/bars/bstar.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/acom_.gif">
						<p id="medal_name"><b>Army Commendation Medal</b></p>
						<p id="medal_desc">Consistent attendance and lack of latency</p>
						<img id="rank_image" src="http://29th.org/images/bars/acom.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/pheart_.gif">
						<p id="medal_name"><b>Purple Heart</b></p>
						<p id="medal_desc">Soldier remained engaged with enemy contact following injury from enemy fire and helped to impact the outcome of a realism scrimmage.</p>
						<img id="rank_image" src="http://29th.org/images/bars/pheart.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/lom_.gif">
						<p id="medal_name"><b>Legion of Merit</b></p>
						<p id="medal_desc">Awarded for leading and winning an Official Scrimmage.</p>
						<img id="rank_image" src="http://29th.org/images/bars/lom.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/gcon_.gif">
						<p id="medal_name"><b>Good Conduct Medal</b></p>
						<p id="medal_desc">Has served the past three months with no disciplinary action or disciplinary demerits while maintaining a minimum 80% mandatory drill attendance in the past 30 days.</p>
						<img id="rank_image" src="http://29th.org/images/bars/gcon.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/adef_.gif">
						<p id="medal_name"><b>American Defense Service Medal</b></p>
						<p id="medal_desc">Graduated 29th ID's Basic Training program</p>
						<img id="rank_image" src="http://29th.org/images/bars/adef.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/dsc_.gif">
						<p id="medal_name"><b>Distinguished Service Cross</b></p>
						<p id="medal_desc">Exceptional in every regard. The highest honor attainable in the 29th Infantry Division</p>
						<img id="rank_image" src="http://29th.org/images/bars/dsc.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/acamp_.gif">
						<p id="medal_name"><b>American Campaign Medal</b></p>
						<p id="medal_desc">Awarded for exemplary leadership on or off the battlefield.</p>
						<img id="rank_image" src="http://29th.org/images/bars/acamp.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/anpdr_.gif">
						<p id="medal_name"><b>Army NCO Professional Development Ribbon</b></p>
						<p id="medal_desc">This soldier has passed through a Squad Leader Training Program.</p>
						<img id="rank_image" src="http://29th.org/images/bars/anpdr.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/eamc_.gif">
						<p id="medal_name"><b>European-African-Middle Eastern Campaign Medal</b></p>
						<p id="medal_desc">Only awarded to the participants that win an attack round of an official scrimmage.</p>
						<img id="rank_image" src="http://29th.org/images/bars/euro.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/dmsm_.gif">
						<p id="medal_name"><b>Defense Meritorious Service Medal Ribbon</b></p>
						<p id="medal_desc">Only awarded to the participants that win a defense round of an official scrimmage.</p>
						<img id="rank_image" src="http://i.imgur.com/xEc80cI.png">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/ww2v_.gif">
						<p id="medal_name"><b>World War II (WWII) Victory Medal</b></p>
						<p id="medal_desc">Only awarded to the participants that win every round of a multi-round official scrimmage. Awarding of this medal supercedes the awarding of the African European Middle-Eastern Campaign Medal and the Defense Meritorious Service Medal Ribbon.</p>
						<img id="rank_image" src="http://i.imgur.com/lpVNTYh.png">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/aocc_.gif">
						<p id="medal_name"><b>Army of Occupation Medal</b></p>
						<p id="medal_desc">Served six months of service in the 29th Infantry Division</p>
						<img id="rank_image" src="http://29th.org/images/bars/aocc.gif">
						<br>
						<br>
						<p id="about_section_text"><b>Individual Medals</b></p>
						<img id="rank_image" src="http://29th.org/images/awards/french_.gif">
						<p id="medal_name"><b>French Croix de Guerre Medal</b></p>
						<p id="medal_desc">Awarded for exceptional leadership capabilities.</p>
						<img id="rank_image" src="http://29th.org/images/bars/french.gif">
						<br>
						<br>
						<p id="about_section_text"><b>Proficiency Badges</b></p>
						<img id="rank_image" src="http://29th.org/images/badges/web/marksman.gif">
						<p id="medal_name_pro"><b>Marksman Badge</b></p>
						<p id="medal_desc">Proven proficient use of the Rifle, Automatic Rifle, or Machine Gun - Allows use of certain weapons</p>
						<img id="rank_image" src="http://29th.org/images/badges/web/sharpshooter.gif">
						<p id="medal_name_pro"><b>Sharpshooter Badge</b></p>
						<p id="medal_desc">Consistent skill demonstration with special weapon, or steady use and success with the Rifle</p>
						<img id="rank_image" src="http://29th.org/images/badges/web/expert.gif">
						<p id="medal_name_pro"><b>Expert Shooting Badge</b></p>
						<p id="medal_desc">Exemplary skill demonstration with special weapon, or near perfect use and success with the Rifle with ability to teach weapon tactics</p>
						<p id="about_section_text"><b>Identification Badges</b></p>
						<img id="rank_image" src="http://29th.org/images/awards/recruiter_.gif">
						<p id="medal_name_pro"><b>Recruiter Badge</b></p>
						<p id="medal_desc">This will be awarded by the Commanding Officer, based upon reports from the Recruitment Officer, to a member of the 29th Infantry Division who has successfully shown consitency as being one of the top recruiters for over a month.</p>
						<img id="rank_image" src="http://29th.org/images/awards/di_.gif">
						<p id="medal_name_pro"><b>Drill Sergeant Badge</b></p>
						<p id="medal_desc">Unit Drill Sergeant</p>
						<p id="about_section_text"><b>Combat Badges</b></p>
						<img id="rank_image" src="http://29th.org/images/awards/eib_.gif">
						<p id="medal_name_pro"><b>Expert Infantry Badge</b></p>
						<p id="medal_desc">Awarded to men who prove themselves experts in all aspects of Infantry and is required for soldiers to participate in combat.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cib1_.gif">
						<p id="medal_name_pro"><b>Combat Infantry Badge, 1st Award</b></p>
						<p id="medal_desc">Awarded to a soldier after their 1st scrimmage with another realism unit.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cib2_.gif">
						<p id="medal_name_pro"><b>Combat Infantry Badge, 2nd Award</b></p>
						<p id="medal_desc">Awarded to a soldier after their 3rd scrimmage with another realism unit.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cib3_.gif">
						<p id="medal_name_pro"><b>Combat Infantry Badge, 3rd Award</b></p>
						<p id="medal_desc">Awarded to a soldier after their 5th scrimmage with another realism unit.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cab1_.gif">
						<p id="medal_name_pro"><b>Combat Action Badge, 1st Award</b></p>
						<p id="medal_desc">This will be awarded by the Recruitment Officer, to a member of the 29th Infantry Division who has successfully recruited 3 recruits for that week's Training Platoon.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cab2_.gif">
						<p id="medal_name_pro"><b>Combat Action Badge, 2nd Award</b></p>
						<p id="medal_desc">This will be awarded by the Recruitment Officer, to a member of the 29th Infantry Division who has successfully recruited 5 recruits for that week's Training Platoon.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cab3_.gif">
						<p id="medal_name_pro"><b>Combat Action Badge, 3rd Award</b></p>
						<p id="medal_desc">This will be awarded by the Recruitment Officer, to a member of the 29th Infantry Division who has successfully recruited 10 recruits for that week's Training Platoon.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cab4_.gif">
						<p id="medal_name_pro"><b>Combat Action Badge, 4th Award</b></p>
						<p id="medal_desc">This will be awarded by the Recruitment Officer, to a member of the 29th Infantry Division who has successfully recruited 20 recruits for that week's Training Platoon.</p>
						<p id="about_section_text"><b>Combat Unit Citations</b></p>
						<img id="rank_image" src="http://29th.org/images/unit/tt.gif">
						<p id="medal_name_combat"><b>The Trenches Unit Participation</b></p>
						<p id="medal_desc">Participated in The Trenches Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/bg.gif">
						<p id="medal_name_combat"><b>Battlegrounds Unit Participation</b></p>
						<p id="medal_desc">Participated in the Battlegrounds Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/dod.gif">
						<p id="medal_name_combat"><b>Day of Defeat Unit Participation</b></p>
						<p id="medal_desc">Participated in the Day of Defeat Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/dh.gif">
						<p id="medal_name_combat"><b>Darkest Hour Unit Participation</b></p>
						<p id="medal_desc">Participated in the Darkest Hour Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/arma.gif">
						<p id="medal_name_combat"><b>Arma 3 Unit Participation</b></p>
						<p id="medal_desc">Participated in the Arma 3 Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/rs.gif">
						<p id="medal_name_combat"><b>Red Orchestra 2/Rising Storm Unit Participation</b></p>
						<p id="medal_desc">Participated in the Red Orchestra 2/Rising Storm Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/rs2.gif">
						<p id="medal_name_combat"><b>Rising Storm 2: Vietnam Unit Participation</b></p>
						<p id="medal_desc">Participated in the Rising Storm 2: Vietnam Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/sq.gif">
						<p id="medal_name_combat"><b>Squad Unit Participation</b></p>
						<p id="medal_desc">Participated in the Squad Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/muc.gif">
						<p id="medal_name_combat"><b>Meritorious Unit Citation</b></p>
						<p id="medal_desc">Most exemplary and skilled squad in the company (Transfers every month)</p>
						<img id="rank_image" src="http://personnel.29th.org/images/awards/suc.gif">
						<p id="medal_name_combat"><b>Superior Unit Citation</b></p>
						<p id="medal_desc">Squad excels among all squads at a platoon level. Platoon HQ can award two Superior Citations a year (reviewed every six months).</p>
					</div>
					<div id="about_historical" class="animated fadeIn">
						<p id="about_section_header">&nbsp; The Historical 29th Infantry Division &nbsp;</p>
						<p id="about_section_text">June 6, 1944</p>
						<p id="about_section_text">6:30 AM</p>
						<p id="about_section_text">Normandy, France</p>
						<p id="about_section_text">Omaha Beach</p>
						<p id="about_section_text">The first wave of the Allied invasion of Europe hits France’s northern shores, and are met with unexpectedly harsh resistance.  Maschinengewehr-42s rip the air, sending more than 1200 rounds per minute toward the Allies.  Blasts from German mortars and artillery create a deafening thunder across the sandy battlefield.  And at the spearhead of the invasion of Omaha Beach:  the 29th Infantry Division of the U.S. Army.</p>
						<p id="about_section_text">In what is widely considered one of the toughest, and bloodiest, invasions in America history, the 29th ID and their comrades pushed forward to crush the German defenses.  Less than three days after their triumphant victory on Omaha Beach, the 29th Infantry Division was called upon to advance deeper into enemy territory and capture the town of Isigny.  Advancing through the French hedgerows, the 29th ID proceeded to retake multiple key cities throughout Northern France, liberating the country from Nazi tyranny.</p>
						<p id="about_section_text">The war took the 29th through four campaigns:  Normandy, Northern France, Rhineland, and Central Europe; all of which pushed back the Nazi offensive, and paved the way for the Allied advance into Germany.  During their tours, the 29th was recognized for their brave, valiant efforts by being awarded 40 Distinguished Service Cross, 11 Legion of Merit, 856 Silver Star, 25 Soldier Medal, 5,954 Bronze Star, and 176 Air Medal.  During their campaigns, the unit captured nearly 39,000 Prisoners of War, a key objective in negotiating with enemy states.</p>
						<p id="about_section_text">“The Blue and Gray”, as the 29th ID is often referred to, comes from the unit’s seal, or insignia.  A taijitu, or “yin yang”, of half blue and half gray represents the composition of the unit; which is composed of men from both the North (Union Blue) and the South (Confederate Gray).  It represents eternal life, and the relentless drive of the 29th Infantry Division.  The unit’s motivational saying is “Ever Forward”, which coincides with the idea of the insignia:  Never giving up, never surrendering, always ahead.</p>
						<p id="about_section_text">The 29th Infantry Division is one of the most recognized units to fight during World War II on the side of the Allied Forces.  Their bravery, tenacity, and brotherhood, is what encompasses the core idea of the United States Military.  A soldier in the 29th Infantry Division is a proud one; always ready to fight, always ready to lead the way.</p>
						<p id="about_section_text">29, Let’s Go!</p>
					</div>
					<div id="about_history" class="animated fadeIn">
						<p id="about_section_header">&nbsp; History of Our Unit &nbsp;</p>
						<p id="about_section_text">The 29th Infantry Division was activated on March 14, 2005 playing in both the The Trenches and Battle Grounds. The reputable 29th Infantry Division that stands before you today participates in the "realism" community of the Red Orchestra Modification, Darkest Hour: Normandy 1944, Red Orchestra 2/Rising Storm, Arma 3, Rising Storm 2: Vietnam, and Squad.</p>
						<p id="about_section_text">Prior to August of 2008, the 29th Infantry Division was a unit within the Half-Life Modification, Day of Defeat. When the 29th started out in Day of Defeat, there were roughly 17 members, and almost half of them were inactive. Today, the 29th ID has come to be the largest Realism Unit with almost 300 members. Through training and discipline we've gotten to where we stand today. With new members, returning members, and even veteran members from nearly 6 years ago, we continue growing stronger by the day.</p>
						<p id="about_section_text">Basic Combat Training, or BCT, is one of the ways we accomplish training new unit members, Cadets, into respectable soldiers of the 29th Infantry Division. Our intricate and well organized office, Lighthouse, takes care of BCT and trains every soldier that enters the unit.</p>
						<p id="about_section_text">Because of Lighthouse and its efforts, our number are constantly growing. There are many other offices and ways to get involved in the unit; here in the 29th we don't simply "get by." Hundreds of individuals have put forth hundreds of hours building the foundation on which this unit stands today, and we are proud to call ourselves soldiers of the Fightin' 29th!</p>
						<hr id="time_divider">
						<div id="timeline">
							<h2 class="section-title">OUR HISTORY</h2>
							<p class="section-description">Milestones On Our Path To Where We Are Today</p>
							<hr id="time_divider">
							<div class="history-card-wrapper">
								<div class="history-card history-card-tier-1">
									<div id="head_one" class="head">
										<div class="number-box">
											<span>2005</span>
										</div>
										<h2><span class="small">Creation of 29th</span> Our Inception</h2>
									</div>
									<div class="body">
										<p>Our journey started in 2005 in the game The Trenches and Battle Grouds as a small group setting the very first footprint in our path of history. It was founded by at the time Captain Pak. Later was taken over by Captain Radcliffe.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-2">
									<div id="head_two" class="head">
										<div class="number-box">
											<span>2006</span>
										</div>
										<h2><span class="small">MOVEMENT INTO DOD</span> GAME CHANGE</h2>
									</div>
									<div class="body">
										<p>We completely moved to Day of Defeat and closed down the prior two companies. We closed down the company in the prior two games and stuck in one game each time we changed. This is where most of our roots can be traced back too today and here is where major changes took place to put in place the regulations that are still abided by today. These changes were brought on by another Company HQ level change during a transition from Captain Radcliffe to Captain Wilson in late 2015. He would then bring in the one game rule.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-3">
									<div id="head_three" class="head">
										<div class="number-box">
											<span>2008</span>
										</div>
										<h2><span class="small">MOVE TO DARKEST HOUR</span> BATTALION LEVEL</h2>
									</div>
									<div class="body">
										<p>After DOD became dated we moved to the next hottest thing striving and alive as ever. We did another game change to darkest hour. We upgraded to Battalion size right away. We went from four platoons and one company into two platoons for two different comapnies each. So instead of just being a company we created a different company. We mainly utalized for for an eastern comapny and western company.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-4">
									<div id="head_four" class="head">
										<div class="number-box">
											<span>2013</span>
										</div>
										<h2><span class="small">SPLIT INTO ARMA 3 AND RO2/RS </span> MULTI GAMES</h2>
									</div>
									<div class="body">
										<p>As new games came out that would be adequate for our needs we started to check out our options. We learned that there was a demand for a a realism unit such as ourself in the games Arma 3 and RO2/RS. After the decission was made to break our one game tradition, we swiftly transitioned into creating two new companies for the game, which is where Charlie and Baker were formed. Baker was no longer associated with Darkest Hour. We stayed in DOD and put all the platoons under one comapny thar was called Able. That would leave dog company unattended which left to it being disbanded and ressurected later. We solved the time zone issue by making platoons dedicated to eastern and western personnel.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-5">
									<div id="head_five" class="head">
										<div class="number-box">
											<span>2015</span>
										</div>
										<h2><span class="small">LTC Wheatley's Appointment</span> Future Steps</h2>
									</div>
									<div class="body">
										<p>There would soon be a huge change in the 29th, Lieutenent Colonel Wilson had to step down due to a lack of time a new battalion commander was appointed. After the previous Lt. Col.'s run of ten years LTC Wheatley had a lot to live up to. He had a good foundation and continued to help the 29th as it's new leader.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-6">
									<div id="head_six" class="head">
										<div class="number-box">
											<span>2017</span>
										</div>
										<h2><span class="small">RS2:VIETNAM AND SQUAD</span> GAME CHANGES</h2>
									</div>
									<div class="body">
										<p>All good things come to an end at some point, as our previous games came to be dated it was time for another switch. New suitable games were found that meet our needs entirely and provided a platform for us to excell in. This is how we found our current homes in RS2: Vietnam and the tactical shooter Squad. It enabled modding and had all the core functionality for us to be able to run our drills. Shortly after this switch after we stabilized we shut down Able and Baker companies leaving Charlie company (Arma 3) and the newly created Dog (RS2:Vietnam) and Easy (Squad) companies.</p>
									</div>
								</div>
								<div id="circle_hider">
									<span id="circle_one"></span>
									<span id="circle_two"></span>
									<span id="circle_three"></span>
									<span id="circle_four"></span>
									<span id="circle_five"></span>
									<span id="circle_six"></span>
								</div>
								<div id="triangle_hider">
									<span id="triangle_one"><i class="fa fa-caret-right"></i></span>
									<span id="triangle_two"><i class="fa fa-caret-left"></i></span>
									<span id="triangle_three"><i class="fa fa-caret-right"></i></span>
									<span id="triangle_four"><i class="fa fa-caret-left"></i></span>
									<span id="triangle_five"><i class="fa fa-caret-right"></i></span>
									<span id="triangle_six"><i class="fa fa-caret-left"></i></span>
								</div>
							</div>
						</div>
					</div>
					<div id="about_enlistment" class="animated fadeIn">
						<p id="about_section_header">&nbsp; The Enlistment Process &nbsp;</p>
						<p id="about_section_text">First, click the "ENLIST" button on the top-left of this web site. Follow the instructions on that page to complete your enlistment and post it in our forums. The process is very easy and explained in detail.</p>
						<p id="about_section_text">After it is posted, bookmark the enlistment and come back to check it in a few hours or the next day for a reply, explaining your schedule or requesting more information.</p>
						<p id="about_section_text">Then it is your responsibility to show up for Basic Training and learn while proving to us that your capable of handing [29th ID] tags on your name.</p>
						<p id="about_section_text">After you pass Basic Combat Training, you will be assigned a platoon and a squad, and be an official member of the 29th Infantry Division. The only thing stopping you after that is letting yourself go AWOL!</p>
					</div>
					<div id="about_records" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Scrim Records &nbsp;</p>
						<p id="about_section_text"><b>Opponents &nbsp; Date of engagement &nbsp; Outcome</b></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/35268/ep2-vs-7th-cavalry-and-3rd-ranger-battalion-official-scrimmage-write-up-and-awards#latest" target="_blank">EP2 vs 7th Cavalry and 3rd Rangers</a>&nbsp;&nbsp;&nbsp;December 7th 2019&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/categories/promotions-and-awards" target="_blank">DBoTs I</a>&nbsp;&nbsp;&nbsp;December 5th 2019&nbsp;&nbsp;&nbsp;<span class="green">DP2S2 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/35060" target="_blank">EP1 vs 508th PIR & 3rd Rangers</a>&nbsp;&nbsp;&nbsp;November 9th 2019&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/33664" target="_blank">EBoTs II</a>&nbsp;&nbsp;&nbsp;June to August 2019&nbsp;&nbsp;&nbsp;<span class="green">EP2S2 Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/29655" target="_blank">EBoTs I</a>&nbsp;&nbsp;&nbsp;October to December 2018&nbsp;&nbsp;&nbsp;<span class="green">EP2S1 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/28651" target="_blank">DP2 vs DMC</a>&nbsp;&nbsp;&nbsp;August 12th 2018&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/21955" target="_blank">CP2 vs 2MRB</a>&nbsp;&nbsp;&nbsp;November 4th and 11th 2017	&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/18259" target="_blank">AP3 vs. 352nd</a>&nbsp;&nbsp;&nbsp;April 29th 2017&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/18144" target="_blank">BP1 vs 1st SS</a>&nbsp;&nbsp;&nbsp;April 23rd 2017&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/15439" target="_blank">AP4 vs 352nd</a>&nbsp;&nbsp;&nbsp;October 15th 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/13018" target="_blank">BP3 vs 2.FJ</a>&nbsp;&nbsp;&nbsp;May-June 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/12007" target="_blank">BBotS RS 2016</a>&nbsp;&nbsp;&nbsp;May 28th 2016&nbsp;&nbsp;&nbsp;<span class="green">AP3S1 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/12007" target="_blank">BBotS A3 2016</a>&nbsp;&nbsp;&nbsp;May 21st 2016&nbsp;&nbsp;&nbsp;<span class="green">CP2S1 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/12007" target="_blank">BBotS DH 2016</a>&nbsp;&nbsp;&nbsp;May 14th 2016&nbsp;&nbsp;&nbsp;<span class="green">BP1S1 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/11781" target="_blank">AP1 vs 352nd & HSA</a>&nbsp;&nbsp;&nbsp;May 8th 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/11862" target="_blank">BP1 vs 2.FJ</a>&nbsp;&nbsp;&nbsp;April 24th 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/10824" target="_blank">BP3 vs 52nd ID</a>&nbsp;&nbsp;&nbsp;March 5th 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/7403" target="_blank">BP3 vs 6th DyW</a>&nbsp;&nbsp;&nbsp;October 4th 2015&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/3896" target="_blank">AP3 vs 5.SS</a>&nbsp;&nbsp;&nbsp;May 25th 2015&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/5191" target="_blank">BP2 vs 2.SS & Gr.559</a>&nbsp;&nbsp;&nbsp;March 15th 2015&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=45363.0" target="_blank">BP1 vs PanzerLehr.901</a>&nbsp;&nbsp;&nbsp;August 18th 2014	&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?board=232.0" target="_blank">BotS 2013</a>&nbsp;&nbsp;&nbsp;August to October 2013	&nbsp;&nbsp;&nbsp;<span class="green">CP1S3 Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=37579.0" target="_blank">DP1 vs 113th Cav</a>&nbsp;&nbsp;&nbsp;October 7th 2012&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?board=254.0" target="_blank">BotS 2012</a>&nbsp;&nbsp;&nbsp;June to July 2012	&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=35756.0" target="_blank">CP3 vs 113th Cav</a>&nbsp;&nbsp;&nbsp;May 26th 2012&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=35658.0" target="_blank">AP1 vs 2.SS</a>&nbsp;&nbsp;&nbsp;May 18th 2012&nbsp;&nbsp;&nbsp;<span class="red">Loss</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=35252.0" target="_blank">BP1 vs 2.SS</a>&nbsp;&nbsp;&nbsp;April 15th 2012&nbsp;&nbsp;&nbsp;<span class="yellow">Draw</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=34666.0" target="_blank">CP1 vs 25th PzrGren</a>&nbsp;&nbsp;&nbsp;February 4th 2012&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=33845.0" target="_blank">AP2 vs 113th Cav</a>&nbsp;&nbsp;&nbsp;November 12th 2011&nbsp;&nbsp;&nbsp;<span class="yellow">Draw</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=22416.0" target="_blank">BotS2010</a>&nbsp;&nbsp;&nbsp;March 28th 2010&nbsp;&nbsp;&nbsp;<span class="green">AP1S2 Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=18610.0" target="_blank">CP2 vs 2.SS</a>&nbsp;&nbsp;&nbsp;August 31st 2009&nbsp;&nbsp;&nbsp;<span class="red">Loss</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=11942.0" target="_blank">BotS 2008</a>&nbsp;&nbsp;&nbsp;March 21st 2008&nbsp;&nbsp;&nbsp;<span class="green">CP3S3 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=11585.msg95881#new" target="_blank">CP4 vs 35th ID</a>&nbsp;&nbsp;&nbsp;Febuary 29th 2008&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=9613.0" target="_blank">CP2 vs 2nd RB	</a>&nbsp;&nbsp;&nbsp;October 14th 2007&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=8668.0" target="_blank">CP3 vs 26th ID</a>&nbsp;&nbsp;&nbsp;August 24th 2007&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=6821.0" target="_blank">CP2 vs 1st Para</a>&nbsp;&nbsp;&nbsp;May 9th 2007&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=6421.0" target="_blank">CP3 vs 2nd ID</a>&nbsp;&nbsp;&nbsp;April 7th 2007&nbsp;&nbsp;&nbsp;<span class="red">Loss</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=1488.0" target="_blank">CP1 vs 502nd PIR</a>&nbsp;&nbsp;&nbsp;26th July 2006&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=1184" target="_blank">29th vs 10th MD</a>&nbsp;&nbsp;&nbsp;25th November 2005&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=1488.0" target="_blank">29th vs 5.SS</a>&nbsp;&nbsp;&nbsp;5th September 2005&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
					</div>
					<div id="about_rules" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Server Rules &nbsp;</p>
						<p id="about_section_text"><b>Rules of Our Servers</b></p>
						<p id="about_section_text">The 29th Infantry Division public servers are realism servers. This means that we try to keep gameplay as realistic as possible while still keeping things enjoyable.</p>
						<span id="text_indent">
							<p id="about_section_text">1. Do not intentionally wound or kill your teammate.</p>
							<p id="about_section_text">2. Trolling, political discussions, or harassment of other players is not tolerated.</p>
							<p id="about_section_text">3. Spamming the mic and playing music over in-game comms is prohibited.</p>
							<p id="about_section_text">4. No hacking, glitching, or exploiting broken game mechanics.</p>
							<p id="about_section_text">5. Keep complaints and whining to a minimum.</p>
							<p id="about_section_text">6. Do not interrupt private drills.</p>
							<p id="about_section_text">7. Do not take role slots you are not familiar with.</p>
							<p id="about_section_text">8. Do not recruit for your own unit/clan in our servers.</p>
							<p id="about_section_text">9. Do not impersonate a 29th member.</p>
							<p id="about_section_text">10. Do not argue server rules in the server.</p>
						</span>
					</div>
					<div id="about_donate" class="animated fadeIn">
						<p id="about_section_header">&nbsp; How to donate &nbsp;</p>
						<p id="about_section_text"><b>Where do I go to donate donate?</b></p>
						<p id="about_section_text">You go <a href="donate">here</a>.</p>
						<p id="about_section_text"><b>Why should you donate?</b></p>
						<p id="about_section_text">We thrive off your donations! Donations go towards the cost of upkeep of the unit along with any additional expenses that come us may it be tools for offices, etc. In return for your generosity, we have rewards for meeting goals and continued donations monthly! You can find these rewards <a href="http://forums.29th.org/discussion/31925/donation-rewards-overhaul-and-jacket-updates" target="_blank">here</a>.</p>
						<p id="about_section_text"><b>Where exactly does my money go?</b></p>
						<p id="about_section_text">100% of donations go to paying for 29th ID expenses:</p>
						<p id="about_section_text">&#9675; Dedicated Game Server Machine $339.35/mo</p>
						<br>
						<span id="text_indent">
							<p id="about_section_text">- Arma 3 Company Server</p>
							<p id="about_section_text">- Arma 3 Platoon Server</p>
							<p id="about_section_text">- Arma 3 WWII Server</p>
							<p id="about_section_text">- Arma 3 Development Server</p>
						</span>
						<br>
						<span id="text_indent">
							<p id="about_section_text">- RS2 New York #1 Territories/Supremacy</p>
							<p id="about_section_text">- RS2 New York #2 Campaign</p>
							<p id="about_section_text">- RS2 Euro Server </p>
							<p id="about_section_text">- RS2 Company Server</p>
							<p id="about_section_text">- RS2 Platoon Server</p>
						</span>
						<br>
						<span id="text_indent">
							<p id="about_section_text">- Squad Battalion Server</p>
							<p id="about_section_text">- Squad Company Server</p>
							<p id="about_section_text">- Squad Platoon Server</p>
							<p id="about_section_text">- Squad Squad Server</p>
						</span>
						<br>
						<p id="about_section_text">&#9675; 150-Slot Teamspeak Server: $39.10/mo</p>
						<p id="about_section_text">&#9675; 29th.org Web Site: $30.00/mo</p>
						<br>
						<p id="about_section_text"><b>Monthly Total: $408.44</b></p>
						<p id="about_section_text">The current account balance and a ledger of all account transactions/donations can be viewed <a href="http://personnel.29th.org/#finances" target="_blank">here</a>.</p>
						<p id="about_section_text"><b>Thank you. Your support is appreciated.</b></p>
					</div>
					<div id="about_qa" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Q&A &nbsp;</p>
						<p id="about_section_text"><b>Before Enlisting</b></p>
						<p id="about_section_text_indented"><b>Q: Do I have to use my real name?</b><br>A: Most of us do, but you don't have to; however, we would like for you to pick a realistic last name, as long as it's not already used.<br>e.g. NOT Pvt. Suicidal J3di, instead Frank James is more what we are looking for.</p>
						<p id="about_section_text_indented"><b>Q: Do I need to have past gaming/realism experience in order to join the 29th?</b><br>A: No, we welcome players from all skill levels to join the ranks of the 29th. It's more about the attitude and dedication you show. The 29th will take care of training you.</p>
						<p id="about_section_text_indented"><b>Q: Does everyone need to go through Basic Combat Training?</b><br>A: Yes, every single member of the unit has gone through BCT - all the way up to the commander of the 29th - and every new member needs to complete it as well.</p>
						<p id="about_section_text_indented"><b>Q: What will I learn in BCT?</b><br>AA: The basics about realism gaming, the 29th, and the game you choose:  Darkest Hour, Rising Storm/Red Orchestra 2, Arma 3.</p>
						<p id="about_section_text_indented"><b>Q: Do I have to use my in-game name and tag all the time when playing DH?</b><br>A: In the 29th servers you must wear your name and tag at all times. Outside of the 29th servers it is not required, but it is recommended, as the 29th tag carries weight and respect.</p>
						<p id="about_section_text_indented"><b>Q: How long will it take to get my application processed?</b><br>A: If you fill out all the information asked, as detailed as possible, it will be accepted or denied within roughly 48 hours.</p>
						<p id="about_section_text_indented"><b>Q: Can I practice in the Platoon Server when it's empty?</b><br>A: No, you're only allowed on the Platoon Server during the times of BCT.</p>
						<p id="about_section_text_indented"><b>Q: Does the 29th use Teamspeak?</b><br>A: Yes, and it is open to the public. You may find the information <a href="http://www.29th.org/forums/index.php?topic=39065.0" target="_blank">here</a>.</p>
						<p id="about_section_text_indented"><b>Q: How do I get my full name as my in-game name? I can't get my name to fit!</b><br>A: Drop down the console, type this command: set input KEY setname Pvt. Lastname [29th 301]<br>Replace KEY with any key that you wish to bind this command to, replace your name and TP number accordingly. Hit "enter" key, and close console. When You enter the server, hit that binded key, and you will have your full in-game name. For details on this, see this <a href="http://29th.org/dh/index.php?title=Name_Changing" target="_blank">page</a>.</p>
						<p id="about_section_text_indented"><b>Q: How do I get my full name as my in-game name? I can't get my name to fit!</b><br>A: Drop down the console, type this command: set input KEY setname Pvt. Lastname [29th 301]<br>Replace KEY with any key that you wish to bind this command to, replace your name and TP number accordingly. Hit "enter" key, and close console. When You enter the server, hit that binded key, and you will have your full in-game name. For details on this, see this <a href="http://29th.org/dh/index.php?title=Name_Changing" target="_blank">page</a>.</p>
						<p id="about_section_text"><b>During BCT</b></p>
						<p id="about_section_text">Remember to read the <a href="http://www.29th.org/wiki/index.php?title=FM_21-20_%22Cadet%27s_Handbook%22" target="_blank">Cadet Handbook</a> during BCT!</p>
						<p id="about_section_text_indented"><b>Q: Why can't I connect to the Platoon Server? I've been sitting in a black screen for over 15 mins now and can't attend my first day of BCT!</b><br>A: This is due to a name bug in the game. Disconnect from the black screen by pressing Esc or F10, change your in-game name to something short like "Pvt." and reconnect. Still, if you can't connect, contact someone online/in-game from your BCT's steamgroup.</p>
						<p id="about_section_text_indented"><b>Q: What is a steamgroup?</b><br>A: A steamgroup is a community in Steam. Anyone can create one of their own to stay in touch with friends, clanmates, people with the same interests etc. It has features like calendar, announcements, chat room etc.</p>
						<p id="about_section_text_indented"><b>Q: Where can I find my BCT's steamgroup and what is the purpose of it?</b><br>A: The direct link can be found from your enlistment post after a liaison's reply. You'll get notifications about when your BCT starts, you can easily contact your BCT buddies, liaisons, ask for help, anything!</p>
						<p id="about_section_text_indented"><b>Q: Where can I find the server password and ip?</b><br>A: All that information can be found at your enlistment post after a liaison has replied there.</p>
						<p id="about_section_text_indented"><b>Q: If I am the only player from the 29th on our company server, what do I do when someone breaks the rules?</b><br>A: Until you graduate, it is not your duty to enforce 29th rules on our servers. You can report troublemakers to your Enlistment Liaison by PM (Private Message) on the forums (nickname, server, time, description of problem).</p>
						<p id="about_section_text_indented"><b>Q: Can I just use any class available in DH, while being in the 29th?</b><br>A: As the rifle is the most common and most effective weapon in the game, all of our incoming soldiers learn its ins-and-outs. After graduating BCT, soldiers are given the opportunity to choose an AIT (Advanced Infantry Training) class such as the Machine Gun, the BAR, the Rifle, the Bazooka, etc. That said, you are restricted to the rifles (and the grenades, etc. that come with the rifle classes) at all times during BCT and until you are told otherwise by your squad leader.<br><i>Note: this only counts for the 29th servers. On any other server you are allowed to pick any class you want - but as many have noticed, the rifle isn't that bad a choice of weapon after all.</i></p>
						<p id="about_section_text_indented"><b>Q: Where can I find my BCT's steamgroup and what is the purpose of it?</b><br>A: The direct link can be found from your enlistment post after a liaison's reply. You'll get notifications about when your BCT starts, you can easily contact your BCT buddies, liaisons, ask for help, anything!</p>
						<p id="about_section_text"><b>After BCT</b></p>
						<p id="about_section_text">For questions and answers after BCT, read the <a href="http://www.29th.org/wiki/index.php?title=Category:FM_21-100" target="_blank">FM 21-100</a> or message your squad leader.</p>
					</div>
				</div>
			</div>
			<center>
				<p id="back_bottom_bottom" class="back-bottom-bottom"><a onclick="document.getElementById('about_nav').style.display = 'block'; document.getElementById('about_box').style.display = 'none'; document.getElementById('about_back').style.display = 'none'; document.getElementById('back_bottom_bottom').style.display = 'none'; $(window).scrollTop(0);">- Back -</a></p>
			</center>
		</div>
		<div id="about_small" class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
			<div id="about_top">
			</div>
			<div id="about_bottom">
				<p id="about_header_small">About</p>
				<div id="about_nav_small">
					<p id="about_nav_button_small"onclick="document.getElementById('about_introduction_small').style.display = 'block'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Introduction</p>
					<p id="about_nav_button_two_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'block';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">What is Realism?</p>
					<p id="about_nav_button_two_small"onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'block'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Training System</p>
					<p id="about_nav_button_two_small"onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'block'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rule_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Rank System</p>
					<p id="about_nav_button_two_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'block';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Medals & Awards</p>
					<p id="about_nav_button_two_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'block';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Historical 29th</p>
					<p id="about_nav_button_two_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'block';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Our History</p>
					<p id="about_nav_button_two_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'block';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Enlistment Process</p>
					<p id="about_nav_button_two_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'block';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Scrim Records</p>
					<p id="about_nav_button_two_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'block';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'none'">Server Rules</p>
					<p id="about_nav_button_two_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'block';
					document.getElementById('about_qa_small').style.display = 'none'">How to Donate</p>
					<p id="about_nav_button_third_small" onclick="document.getElementById('about_introduction_small').style.display = 'none'; 
					document.getElementById('about_realism_small').style.display = 'none';
					document.getElementById('about_training_small').style.display = 'none'; 
					document.getElementById('about_rank_small').style.display = 'none'; 
					document.getElementById('about_medal_small').style.display = 'none';
					document.getElementById('about_historical_small').style.display = 'none';
					document.getElementById('about_history_small').style.display = 'none';
					document.getElementById('about_enlistment_small').style.display = 'none';
					document.getElementById('about_records_small').style.display = 'none';
					document.getElementById('about_rules_small').style.display = 'none';
					document.getElementById('about_donate_small').style.display = 'none';
					document.getElementById('about_qa_small').style.display = 'block'">Q&A</p>
				</div>
				<div id="about_box_small">
					<div id="about_introduction_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Introduction &nbsp;</p>
						<p id="about_section_text"><b>What is the 29th ID?</b><br>The 29th Infantry Division is a realism unit in the online Modern Conflict game Arma III. Recently we have also started new companies in Rising Storm 2: Vietnam and Squad games. Realism is the conducting of a gaming group as close to real combat as possible.</p>
						<p id="about_section_text">By using the menu on the left, you can browse through more information explaining different aspects of Realism and the 29th ID.</p>
						<p id="about_section_text">We base our unit off of the US Army during World War II. From there, the rank system, medals and weapons have been based and modified to fit into each game respectively.</p>
						<p id="about_section_text">When you enlist, you start as a Private and enter basic training for a week, where you are trained and pounded into place by drill sergeants as they make you "29th Material".</p>
						<p id="about_section_text">We have several servers, as listed on the servers page which can be found on the navbar, where we play publicly and host realism scrimmages.</p>
						<p id="about_section_text">If you are looking to enter a new aspect of online gaming, have fun, and learn a lot about the US military system, enlist with the 29th Infantry Division.</p>
					</div>
					<div id="about_realism_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; What is Realism? &nbsp;</p>
						<p id="about_section_text">The 29th Infantry Division practices a sort of teamwork-oriented style of gameplay, known as "Realism". It is much different from the "death match" style play seen on the public server. It is the portrayal of real tactics, strategies, and conduct through an online 70 player game. When you die in a realism scrimmage, you do not respawn until the end of the round. You must work as a team to keep each other alive. If you are looking for a different gaming atmosphere, community, and experience - Realism may be for you.</p>
						<p id="about_section_text"><b>Set-Up</b><br>In a Realism match, there are many different styles and scenarios. The most common are Attack/Attack and Attack/Defense, meaning both teams attack at the same time, or one team attacks while the other defends an area. Once the terms and weapon allowances are established, your platoon (or team) leader will designate squad leaders and give them assignments. They will delegate the specific responsibilities to each member of their squad and go over the plan. Everyone has an assignment and is vital to the survival of the tea</p>
						<p id="about_section_text"><b>In the Heat of the Battle</b><br>After your team moves out to secure its objective, you encounter the enemy - also trying to secure their objective. The feeling at this point, acknowledging that you only have one life, has been described as "the most adrenaline ever received in a video game." Between providing your teammates suppressive fire to dodging bullets yourself, you hear your squad leader shouting orders to keep you all alive, and the team leader's communication with his squad leaders, revising the plan to ensure victory.</p>
						<p id="about_section_text"><b>Victory conditions</b><br>As there are no respawns in a standard realism scenario, flag capturing is generally disallowed. A victory is obtained by eliminating the enemy force. This is different, of course, with the many other scenarios used by the 29th such as Reinforcements, Attack/Counter-Attack, Isolation, Prisoner Rescue, Escort, Paratroopers (with real parachutes), etc.</p>
					</div>
					<div id="about_training_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Our Training System &nbsp;</p>
						<p id="about_section_text">Following Basic Combat Training, newly graduated Privates are assigned to a squad, where they may discuss their Advanced Infantry Training (AIT) options with the Squad Leader. Depending on the slots that are open in the squad, soldiers may request to train with the Rifle, BAR, Machine Gun, Bazooka, etc. and be given personalized training with their AIT weapon.</p>
						<p id="about_section_text">Soldiers may qualify for three different Arms Qualification Badges (AQB) for their AIT weapon: The Marksman Badge, the Sharpshooter Badge, and the Expert Badge. Each badge has a unit-wide list of criteria. With a lot of practice, as well as tips from their squad leader or other veteran 29ers, soldiers can meet these criteria and be awarded the badges, which will be proudly displayed on their service coats and qualify them for official battle. In addition, soldiers may qualify for the Expert Infantry Badge, another requirement for official battle, which pertains to combat skills and communication.</p>
						<p id="about_section_text">To speed up the process of training and qualifying, the Infantry School holds classes periodically where soldiers in training can receive tips from experts and be tested for the badge criteria. After qualifying high enough, soldiers will have the opportunity to pass on their skills to newer members in training as well, through leadership and the Infantry School.</p>
					</div>
					<div id="about_rank_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Our Rank System &nbsp;</p>
						<p id="about_section_text">All members of the 29th Infantry Division, 116th Regiment, 1st Battalion, have the opportunity of advancing throughout the battalion. You start out as a Private undergoing Basic Training for an entire week. If you show exceptional skills as a Private, you may be promoted to a higher rank in our chain of command.</p>
						<p id="about_section_text">"29th Infantry Division" serves as a title of this realism unit. In size, we are a Battalion within the Division. US Army units are composed as follows:</p>
						<p id="about_section_text">Divisions are made up of Regiments, which are made up of <b>Battalions</b>, which are made up of Companies, which are made up of Platoons, which are made up of Squads.</p>
						<p id="about_section_text"><b>Officers</b></p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/ltcol.png">
						<p id="rank_name"><b>Lieutenant Colonel (Lt.Col.)</b></p>
						<p id="rank_desc">The Lieutenant Colonel commands the entire Battalion, and is also referred to as the Commanding Officer, or CO, and does not lead a company, but is the highest rank in the Battalion HQ.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/maj.png">
						<p id="rank_name"><b>Major (Maj.)</b></p>
						<p id="rank_desc">The Major is usually the Executive Officer of the Battalion, but can be the Commanding Officer in absence of a Lieutenant Colonel.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/cpt.png">
						<p id="rank_name"><b>Captain (Cpt.)</b></p>
						<p id="rank_desc">The Captain commands a Company, and is also referred to as the Company's Commanding Officer (CO). He does not lead a platoon, but is the highest rank in the Company HQ.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/1lt.png">
						<p id="rank_name"><b>First Lieutenant (1Lt.)</b></p>
						<p id="rank_desc">Usually the Executive Officer (XO) of the company, the First Lieutenant is second in command and executes orders from the Captain, but can be the Commanding Officer in absence of a Captain, or can lead a platoon if necessary.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/2lt.png">
						<p id="rank_name"><b>Second Lieutenant (2Lt.)</b></p>
						<p id="rank_desc">The entry-level Officer rank, who typically leads a platoon under the Company HQ's command.</p>
						<p id="about_section_text"><b>Warrant Officers</b></p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/CW5.png">
						<p id="rank_name"><b>Chief Warrant Officer 5 (CW5)</b></p>
						<p id="rank_desc">Master-level technical and tactical experts that support brigade, division, corps, echelons above corps, and major command operations. They provide leader development, mentorship, advice, and counsel to WOs and branch officers. CW5s have special WO leadership and representation responsibilities within their respective commands</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/CW4.png">
						<p id="rank_name"><b>Chief Warrant Officer 4 (CW4)</b></p>
						<p id="rank_desc">Senior-level experts in their chosen field. They primarily support battalion, brigade, division, corps, and echelons above corps operations. CW4s typically have special mentorship responsibilities for other WOs and provide essential advice to commanders on WO issues.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/CW3.png">
						<p id="rank_name"><b>Chief Warrant Officer 3 (CW3)</b></p>
						<p id="rank_desc">Advanced-level experts who perform the primary duties that of a technical and tactical leader. They provide direction, guidance, resources, assistance, and supervision necessary for subordinates to perform their duties. CW3s primarily support operations levels from team or detachment through brigade.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/CW2.png">
						<p id="rank_name"><b>Chief Warrant Officer 2 (CW2)</b></p>
						<p id="rank_desc">Chief Warrant Officers become commissioned officers by warrant as determined by the President of the United States. Chief Warrant Officers are intermediate level technical and tactical experts who perform increased duties and responsibilities at the detachment through battalion levels.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/WO1.png">
						<p id="rank_name"><b>Warrant Officer 1 (WO1)</b></p>
						<p id="rank_desc">Appointed by warrant from the Secretary of the Army, Warrant Officer 1's are technically and tactically focused officers who perform the primary duties of technical leader, trainer, operator, manager, maintainer, sustainer, and adviser.</p>
						<p id="about_section_text"><b>Non-Commissioned Officers</b></p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/msgt.png">
						<p id="rank_name"><b>Master Sergeant (MSgt.)</b></p>
						<p id="rank_desc">Typically found only once in a battalion, and assists in the Battalion HQ. Also fulfilling the job of a First Sergeant, the Master Sergeant can assist in running a company.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/fsgt.png">
						<p id="rank_name"><b>First Sergeant (FSgt.)</b></p>
						<p id="rank_desc">A key advisor to the Commander, the First Sergeant is often the most respected member of the company, and known as the "Company Boss." Helps run the company by dispatching leadership training and has much experience under his belt.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/tsgt.png">
						<p id="rank_name"><b>Technical Sergeant (TSgt.)</b></p>
						<p id="rank_desc">A Technical Sergeant is a seasoned leader who typically serves as platoon sergeant, and can hold a Company HQ position. The key advisor to the platoon leader</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/ssgt.png">
						<p id="rank_name"><b>Staff Sergeant (SSgt.)</b></p>
						<p id="rank_desc">A Staff Sergeant has many of the same responsibilities as a Sergeant, but has even more exceptional leadership skills which come natural to him. Often has sergeants working under him and can lead a large squad or platoon.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/t3.png">
						<p id="rank_name"><b>Technician, 3rd Grade (T/3)</b></p>
						<p id="rank_desc">Equivelant to Staff Sergeant, this enlisted soldier specializes in a certain area, such as head of a particular office in Headquarters Support Staff, Clerical Work, or even a highly proven Combat Engineer.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/sgt.png">
						<p id="rank_name"><b>Sergeant (Sgt.)</b></p>
						<p id="rank_desc">A Sergeant is a proven Corporal who is placed in charge of a squad and is in charge of his squad's discipline, appearance, and organization. Sergeants call practices and drills for their squad when necessary.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/t4.png">
						<p id="rank_name"><b>Technician, 4th Grade (T/4)</b></p>
						<p id="rank_desc">Equivelant to Sergeant, this enlisted soldier is a proven specialist at a particular area, and often is in charge of training other specialists under him.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/cpl.png">
						<p id="rank_name"><b>Corporal (Cpl.)</b></p>
						<p id="rank_desc">The entry-level NCO rank, a corporal is a PFC who has proven himself in Leadership training and is capable of leading other soldiers. A Corporal is usually an Assistant Squad Leader, but can also lead squads if necessary. Usually does not discipline the men as much as a higher NCO, but acts as a team leader.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/t5.png">
						<p id="rank_name"><b>Technician, 5th Grade (T/5)</b></p>
						<p id="rank_desc">Equivelant to Corporal, a T/5 has been qualified to specialize in a certain area, such as clerical or office work, or combat engineer weapons.</p>
						<p id="about_section_text"><b>Privates</b></p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/pfc.png">
						<p id="rank_name"><b>Private, First Class (PFC)</b></p>
						<p id="rank_desc">This rank is awarded to Privates who have become valuable to the Squad Leaders. They assist in drills, showing other Privates the ropes, and are next in line for leadership positions.</p>
						<img id="rank_image" src="http://www.29th.org/images/rank/60x60/pvt.png">
						<p id="rank_name"><b>Private (Pvt.)</b></p>
						<p id="rank_desc">Once cadets graduate basic combat training, they receive the 29th ID shoulder patch and serve to carry out orders to the best of their ability.</p>
						<p id="about_section_text"><b>Chain of Command</b></p>
						<img id="about_coc" src="assets/img/coc.png">
					</div>
					<div id="about_medal_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Medals & Awards &nbsp;</p>
						<p id="about_section_text">All members of the 29th Infantry Division, 116th Regiment, 1st Battalion, have the opportunity of advancing throughout the battalion. You start out as a Private undergoing Basic Training for an entire week. If you show exceptional skills as a Private, you may be promoted to a higher rank in our chain of command.</p>
						<p id="about_section_text"><b>Individual Medals</b></p>
						<img id="rank_image" src="http://29th.org/images/awards/dsc_.gif">
						<p id="medal_name"><b>Distinguished Service Cross</b></p>
						<p id="medal_desc">Exceptional in every regard. The highest honor attainable in the 29th Infantry Division</p>
						<img id="rank_image" src="http://29th.org/images/bars/dsc.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/dsm_.gif">
						<p id="medal_name"><b>Distinguished Service Medal</b></p>
						<p id="medal_desc">Carried out duty successfully and responsibly</p>
						<img id="rank_image" src="http://29th.org/images/bars/dsm.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/sstar_.gif">
						<p id="medal_name"><b>Silver Star</b></p>
						<p id="medal_desc">Soldier demonstrated perfect performance that not only single-handedly secured victory for his team, but demonstrated the core principles of being an effective soldier in the 29th Infantry Division. This medal is only awarded when the soldier's gameplay was at a level of the highest caliber.</p>
						<img id="rank_image" src="http://29th.org/images/bars/sstar.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/sm_.gif">
						<p id="medal_name"><b>Soldier's Medal</b></p>
						<p id="medal_desc">A soldier's bravery, preparation, and leadership abilities allows them to take control of a situation resulting in the prevention of friendly casualties, regardless of survival of recipient.</p>
						<img id="rank_image" src="http://29th.org/images/bars/sm.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/bstar_.gif">
						<p id="medal_name"><b>Bronze Star</b></p>
						<p id="medal_desc">Soldier demonstrated exemplary performance that had a significant impact on the match at hand.</p>
						<img id="rank_image" src="http://29th.org/images/bars/bstar.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/acom_.gif">
						<p id="medal_name"><b>Army Commendation Medal</b></p>
						<p id="medal_desc">Consistent attendance and lack of latency</p>
						<img id="rank_image" src="http://29th.org/images/bars/acom.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/pheart_.gif">
						<p id="medal_name"><b>Purple Heart</b></p>
						<p id="medal_desc">Soldier remained engaged with enemy contact following injury from enemy fire and helped to impact the outcome of a realism scrimmage.</p>
						<img id="rank_image" src="http://29th.org/images/bars/pheart.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/lom_.gif">
						<p id="medal_name"><b>Legion of Merit</b></p>
						<p id="medal_desc">Awarded for leading and winning an Official Scrimmage.</p>
						<img id="rank_image" src="http://29th.org/images/bars/lom.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/gcon_.gif">
						<p id="medal_name"><b>Good Conduct Medal</b></p>
						<p id="medal_desc">Has served the past three months with no disciplinary action or disciplinary demerits while maintaining a minimum 80% mandatory drill attendance in the past 30 days.</p>
						<img id="rank_image" src="http://29th.org/images/bars/gcon.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/adef_.gif">
						<p id="medal_name"><b>American Defense Service Medal</b></p>
						<p id="medal_desc">Graduated 29th ID's Basic Training program</p>
						<img id="rank_image" src="http://29th.org/images/bars/adef.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/dsc_.gif">
						<p id="medal_name"><b>Distinguished Service Cross</b></p>
						<p id="medal_desc">Exceptional in every regard. The highest honor attainable in the 29th Infantry Division</p>
						<img id="rank_image" src="http://29th.org/images/bars/dsc.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/acamp_.gif">
						<p id="medal_name"><b>American Campaign Medal</b></p>
						<p id="medal_desc">Awarded for exemplary leadership on or off the battlefield.</p>
						<img id="rank_image" src="http://29th.org/images/bars/acamp.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/anpdr_.gif">
						<p id="medal_name"><b>Army NCO Professional Development Ribbon</b></p>
						<p id="medal_desc">This soldier has passed through a Squad Leader Training Program.</p>
						<img id="rank_image" src="http://29th.org/images/bars/anpdr.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/eamc_.gif">
						<p id="medal_name"><b>European-African-Middle Eastern Campaign Medal</b></p>
						<p id="medal_desc">Only awarded to the participants that win an attack round of an official scrimmage.</p>
						<img id="rank_image" src="http://29th.org/images/bars/euro.gif">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/dmsm_.gif">
						<p id="medal_name"><b>Defense Meritorious Service Medal Ribbon</b></p>
						<p id="medal_desc">Only awarded to the participants that win a defense round of an official scrimmage.</p>
						<img id="rank_image" src="http://i.imgur.com/xEc80cI.png">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/ww2v_.gif">
						<p id="medal_name"><b>World War II (WWII) Victory Medal</b></p>
						<p id="medal_desc">Only awarded to the participants that win every round of a multi-round official scrimmage. Awarding of this medal supercedes the awarding of the African European Middle-Eastern Campaign Medal and the Defense Meritorious Service Medal Ribbon.</p>
						<img id="rank_image" src="http://i.imgur.com/lpVNTYh.png">
						<br>
						<br>
						<img id="rank_image" src="http://29th.org/images/awards/aocc_.gif">
						<p id="medal_name"><b>Army of Occupation Medal</b></p>
						<p id="medal_desc">Served six months of service in the 29th Infantry Division</p>
						<img id="rank_image" src="http://29th.org/images/bars/aocc.gif">
						<br>
						<br>
						<p id="about_section_text"><b>Individual Medals</b></p>
						<img id="rank_image" src="http://29th.org/images/awards/french_.gif">
						<p id="medal_name"><b>French Croix de Guerre Medal</b></p>
						<p id="medal_desc">Awarded for exceptional leadership capabilities.</p>
						<img id="rank_image" src="http://29th.org/images/bars/french.gif">
						<br>
						<br>
						<p id="about_section_text"><b>Proficiency Badges</b></p>
						<img id="rank_image" src="http://29th.org/images/badges/web/marksman.gif">
						<p id="medal_name_pro"><b>Marksman Badge</b></p>
						<p id="medal_desc">Proven proficient use of the Rifle, Automatic Rifle, or Machine Gun - Allows use of certain weapons</p>
						<img id="rank_image" src="http://29th.org/images/badges/web/sharpshooter.gif">
						<p id="medal_name_pro"><b>Sharpshooter Badge</b></p>
						<p id="medal_desc">Consistent skill demonstration with special weapon, or steady use and success with the Rifle</p>
						<img id="rank_image" src="http://29th.org/images/badges/web/expert.gif">
						<p id="medal_name_pro"><b>Expert Shooting Badge</b></p>
						<p id="medal_desc">Exemplary skill demonstration with special weapon, or near perfect use and success with the Rifle with ability to teach weapon tactics</p>
						<p id="about_section_text"><b>Identification Badges</b></p>
						<img id="rank_image" src="http://29th.org/images/awards/recruiter_.gif">
						<p id="medal_name_pro"><b>Recruiter Badge</b></p>
						<p id="medal_desc">This will be awarded by the Commanding Officer, based upon reports from the Recruitment Officer, to a member of the 29th Infantry Division who has successfully shown consitency as being one of the top recruiters for over a month.</p>
						<img id="rank_image" src="http://29th.org/images/awards/di_.gif">
						<p id="medal_name_pro"><b>Drill Sergeant Badge</b></p>
						<p id="medal_desc">Unit Drill Sergeant</p>
						<p id="about_section_text"><b>Combat Badges</b></p>
						<img id="rank_image" src="http://29th.org/images/awards/eib_.gif">
						<p id="medal_name_pro"><b>Expert Infantry Badge</b></p>
						<p id="medal_desc">Awarded to men who prove themselves experts in all aspects of Infantry and is required for soldiers to participate in combat.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cib1_.gif">
						<p id="medal_name_pro"><b>Combat Infantry Badge, 1st Award</b></p>
						<p id="medal_desc">Awarded to a soldier after their 1st scrimmage with another realism unit.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cib2_.gif">
						<p id="medal_name_pro"><b>Combat Infantry Badge, 2nd Award</b></p>
						<p id="medal_desc">Awarded to a soldier after their 3rd scrimmage with another realism unit.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cib3_.gif">
						<p id="medal_name_pro"><b>Combat Infantry Badge, 3rd Award</b></p>
						<p id="medal_desc">Awarded to a soldier after their 5th scrimmage with another realism unit.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cab1_.gif">
						<p id="medal_name_pro"><b>Combat Action Badge, 1st Award</b></p>
						<p id="medal_desc">This will be awarded by the Recruitment Officer, to a member of the 29th Infantry Division who has successfully recruited 3 recruits for that week's Training Platoon.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cab2_.gif">
						<p id="medal_name_pro"><b>Combat Action Badge, 2nd Award</b></p>
						<p id="medal_desc">This will be awarded by the Recruitment Officer, to a member of the 29th Infantry Division who has successfully recruited 5 recruits for that week's Training Platoon.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cab3_.gif">
						<p id="medal_name_pro"><b>Combat Action Badge, 3rd Award</b></p>
						<p id="medal_desc">This will be awarded by the Recruitment Officer, to a member of the 29th Infantry Division who has successfully recruited 10 recruits for that week's Training Platoon.</p>
						<img id="rank_image" src="http://29th.org/images/awards/cab4_.gif">
						<p id="medal_name_pro"><b>Combat Action Badge, 4th Award</b></p>
						<p id="medal_desc">This will be awarded by the Recruitment Officer, to a member of the 29th Infantry Division who has successfully recruited 20 recruits for that week's Training Platoon.</p>
						<p id="about_section_text"><b>Combat Unit Citations</b></p>
						<img id="rank_image" src="http://29th.org/images/unit/tt.gif">
						<p id="medal_name_combat"><b>The Trenches Unit Participation</b></p>
						<p id="medal_desc">Participated in The Trenches Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/bg.gif">
						<p id="medal_name_combat"><b>Battlegrounds Unit Participation</b></p>
						<p id="medal_desc">Participated in the Battlegrounds Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/dod.gif">
						<p id="medal_name_combat"><b>Day of Defeat Unit Participation</b></p>
						<p id="medal_desc">Participated in the Day of Defeat Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/dh.gif">
						<p id="medal_name_combat"><b>Darkest Hour Unit Participation</b></p>
						<p id="medal_desc">Participated in the Darkest Hour Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/arma.gif">
						<p id="medal_name_combat"><b>Arma 3 Unit Participation</b></p>
						<p id="medal_desc">Participated in the Arma 3 Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/rs.gif">
						<p id="medal_name_combat"><b>Red Orchestra 2/Rising Storm Unit Participation</b></p>
						<p id="medal_desc">Participated in the Red Orchestra 2/Rising Storm Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/rs2.gif">
						<p id="medal_name_combat"><b>Rising Storm 2: Vietnam Unit Participation</b></p>
						<p id="medal_desc">Participated in the Rising Storm 2: Vietnam Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/sq.gif">
						<p id="medal_name_combat"><b>Squad Unit Participation</b></p>
						<p id="medal_desc">Participated in the Squad Unit campaign</p>
						<img id="rank_image" src="http://29th.org/images/unit/muc.gif">
						<p id="medal_name_combat"><b>Meritorious Unit Citation</b></p>
						<p id="medal_desc">Most exemplary and skilled squad in the company (Transfers every month)</p>
						<img id="rank_image" src="http://personnel.29th.org/images/awards/suc.gif">
						<p id="medal_name_combat"><b>Superior Unit Citation</b></p>
						<p id="medal_desc">Squad excels among all squads at a platoon level. Platoon HQ can award two Superior Citations a year (reviewed every six months).</p>
					</div>
					<div id="about_historical_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Historical 29th &nbsp;</p>
						<p id="about_section_text">June 6, 1944</p>
						<p id="about_section_text">6:30 AM</p>
						<p id="about_section_text">Normandy, France</p>
						<p id="about_section_text">Omaha Beach</p>
						<p id="about_section_text">The first wave of the Allied invasion of Europe hits France’s northern shores, and are met with unexpectedly harsh resistance.  Maschinengewehr-42s rip the air, sending more than 1200 rounds per minute toward the Allies.  Blasts from German mortars and artillery create a deafening thunder across the sandy battlefield.  And at the spearhead of the invasion of Omaha Beach:  the 29th Infantry Division of the U.S. Army.</p>
						<p id="about_section_text">In what is widely considered one of the toughest, and bloodiest, invasions in America history, the 29th ID and their comrades pushed forward to crush the German defenses.  Less than three days after their triumphant victory on Omaha Beach, the 29th Infantry Division was called upon to advance deeper into enemy territory and capture the town of Isigny.  Advancing through the French hedgerows, the 29th ID proceeded to retake multiple key cities throughout Northern France, liberating the country from Nazi tyranny.</p>
						<p id="about_section_text">The war took the 29th through four campaigns:  Normandy, Northern France, Rhineland, and Central Europe; all of which pushed back the Nazi offensive, and paved the way for the Allied advance into Germany.  During their tours, the 29th was recognized for their brave, valiant efforts by being awarded 40 Distinguished Service Cross, 11 Legion of Merit, 856 Silver Star, 25 Soldier Medal, 5,954 Bronze Star, and 176 Air Medal.  During their campaigns, the unit captured nearly 39,000 Prisoners of War, a key objective in negotiating with enemy states.</p>
						<p id="about_section_text">“The Blue and Gray”, as the 29th ID is often referred to, comes from the unit’s seal, or insignia.  A taijitu, or “yin yang”, of half blue and half gray represents the composition of the unit; which is composed of men from both the North (Union Blue) and the South (Confederate Gray).  It represents eternal life, and the relentless drive of the 29th Infantry Division.  The unit’s motivational saying is “Ever Forward”, which coincides with the idea of the insignia:  Never giving up, never surrendering, always ahead.</p>
						<p id="about_section_text">The 29th Infantry Division is one of the most recognized units to fight during World War II on the side of the Allied Forces.  Their bravery, tenacity, and brotherhood, is what encompasses the core idea of the United States Military.  A soldier in the 29th Infantry Division is a proud one; always ready to fight, always ready to lead the way.</p>
						<p id="about_section_text">29, Let’s Go!</p>
					</div>
					<div id="about_history_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; History of Our Unit &nbsp;</p>
						<p id="about_section_text">The 29th Infantry Division was activated on March 14, 2005 playing in both the The Trenches and Battle Grounds. The reputable 29th Infantry Division that stands before you today participates in the "realism" community of the Red Orchestra Modification, Darkest Hour: Normandy 1944, Red Orchestra 2/Rising Storm, Arma 3, Rising Storm 2: Vietnam, and Squad.</p>
						<p id="about_section_text">Prior to August of 2008, the 29th Infantry Division was a unit within the Half-Life Modification, Day of Defeat. When the 29th started out in Day of Defeat, there were roughly 17 members, and almost half of them were inactive. Today, the 29th ID has come to be the largest Realism Unit with almost 300 members. Through training and discipline we've gotten to where we stand today. With new members, returning members, and even veteran members from nearly 6 years ago, we continue growing stronger by the day.</p>
						<p id="about_section_text">Basic Combat Training, or BCT, is one of the ways we accomplish training new unit members, Cadets, into respectable soldiers of the 29th Infantry Division. Our intricate and well organized office, Lighthouse, takes care of BCT and trains every soldier that enters the unit.</p>
						<p id="about_section_text">Because of Lighthouse and its efforts, our number are constantly growing. There are many other offices and ways to get involved in the unit; here in the 29th we don't simply "get by." Hundreds of individuals have put forth hundreds of hours building the foundation on which this unit stands today, and we are proud to call ourselves soldiers of the Fightin' 29th!</p>
						<hr id="time_divider">
						<div id="timeline">
							<h2 class="section-title">OUR HISTORY</h2>
							<p class="section-description">Milestones On Our Path To Where We Are Today</p>
							<hr id="time_divider">
							<div class="history-card-wrapper">
								<div class="history-card history-card-tier-1">
									<div id="head_one_two" class="head">
										<div class="number-box">
											<span>2005</span>
										</div>
										<h2><span class="small">Creation of 29th</span> Our Inception</h2>
									</div>
									<div class="body">
										<p>Our journey started in 2005 in the game The Trenches and Battle Grouds as a small group setting the very first footprint in our path of history. It was founded by at the time Captain Pak. Later was taken over by Captain Radcliffe.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-2">
									<div id="head_two_two" class="head">
										<div class="number-box">
											<span>2006</span>
										</div>
										<h2><span class="small">MOVEMENT INTO DOD</span> GAME CHANGE</h2>
									</div>
									<div class="body">
										<p>We completely moved to Day of Defeat and closed down the prior two companies. We closed down the company in the prior two games and stuck in one game each time we changed. This is where most of our roots can be traced back too today and here is where major changes took place to put in place the regulations that are still abided by today. These changes were brought on by another Company HQ level change during a transition from Captain Radcliffe to Captain Wilson in late 2015. He would then bring in the one game rule.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-3">
									<div id="head_three_two" class="head">
										<div class="number-box">
											<span>2008</span>
										</div>
										<h2><span class="small">MOVE TO DARKEST HOUR</span> BATTALION LEVEL</h2>
									</div>
									<div class="body">
										<p>After DOD became dated we moved to the next hottest thing striving and alive as ever. We did another game change to darkest hour. We upgraded to Battalion size right away. We went from four platoons and one company into two platoons for two different comapnies each. So instead of just being a company we created a different company. We mainly utalized for for an eastern comapny and western company.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-4">
									<div id="head_four_two" class="head">
										<div class="number-box">
											<span>2013</span>
										</div>
										<h2><span class="small">SPLIT INTO ARMA 3 AND RO2/RS </span> MULTI GAMES</h2>
									</div>
									<div class="body">
										<p>As new games came out that would be adequate for our needs we started to check out our options. We learned that there was a demand for a a realism unit such as ourself in the games Arma 3 and RO2/RS. After the decission was made to break our one game tradition, we swiftly transitioned into creating two new companies for the game, which is where Charlie and Baker were formed. Baker was no longer associated with Darkest Hour. We stayed in DOD and put all the platoons under one comapny thar was called Able. That would leave dog company unattended which left to it being disbanded and ressurected later. We solved the time zone issue by making platoons dedicated to eastern and western personnel.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-5">
									<div id="head_five_two" class="head">
										<div class="number-box">
											<span>2015</span>
										</div>
										<h2><span class="small">LTC Wheatley's Appointment</span> Future Steps</h2>
									</div>
									<div class="body">
										<p>There would soon be a huge change in the 29th, Lieutenent Colonel Wilson had to step down due to a lack of time a new battalion commander was appointed. After the previous Lt. Col.'s run of ten years LTC Wheatley had a lot to live up to. He had a good foundation and continued to help the 29th as it's new leader.</p>
									</div>
								</div>
								<div class="history-card history-card-tier-6">
									<div id="head_six_two" class="head">
										<div class="number-box">
											<span>2017</span>
										</div>
										<h2><span class="small">RS2:VIETNAM AND SQUAD</span> GAME CHANGES</h2>
									</div>
									<div class="body">
										<p>All good things come to an end at some point, as our previous games came to be dated it was time for another switch. New suitable games were found that meet our needs entirely and provided a platform for us to excell in. This is how we found our current homes in RS2: Vietnam and the tactical shooter Squad. It enabled modding and had all the core functionality for us to be able to run our drills. Shortly after this switch after we stabilized we shut down Able and Baker companies leaving Charlie company (Arma 3) and the newly created Dog (RS2:Vietnam) and Easy (Squad) companies.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="about_enlistment_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; The Enlistment Process &nbsp;</p>
						<p id="about_section_text">First, click the "ENLIST" button on the top-left of this web site. Follow the instructions on that page to complete your enlistment and post it in our forums. The process is very easy and explained in detail.</p>
						<p id="about_section_text">After it is posted, bookmark the enlistment and come back to check it in a few hours or the next day for a reply, explaining your schedule or requesting more information.</p>
						<p id="about_section_text">Then it is your responsibility to show up for Basic Training and learn while proving to us that your capable of handing [29th ID] tags on your name.</p>
						<p id="about_section_text">After you pass Basic Combat Training, you will be assigned a platoon and a squad, and be an official member of the 29th Infantry Division. The only thing stopping you after that is letting yourself go AWOL!</p>
					</div>
					<div id="about_records_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Scrim Records &nbsp;</p>
						<p id="about_section_text"><b>Opponents &nbsp; Date of engagement &nbsp; Outcome</b></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/35268/ep2-vs-7th-cavalry-and-3rd-ranger-battalion-official-scrimmage-write-up-and-awards#latest" target="_blank">EP2 vs 7th Cavalry and 3rd Rangers</a>&nbsp;&nbsp;&nbsp;December 7th 2019&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/categories/promotions-and-awards" target="_blank">DBoTs I</a>&nbsp;&nbsp;&nbsp;December 5th 2019&nbsp;&nbsp;&nbsp;<span class="green">DP2S2 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/35060" target="_blank">EP1 vs 508th PIR & 3rd Rangers</a>&nbsp;&nbsp;&nbsp;November 9th 2019&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/33664" target="_blank">EBoTs II</a>&nbsp;&nbsp;&nbsp;June to August 2019&nbsp;&nbsp;&nbsp;<span class="green">EP2S2 Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/29655" target="_blank">EBoTs I</a>&nbsp;&nbsp;&nbsp;October to December 2018&nbsp;&nbsp;&nbsp;<span class="green">EP2S1 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/28651" target="_blank">DP2 vs DMC</a>&nbsp;&nbsp;&nbsp;August 12th 2018&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/21955" target="_blank">CP2 vs 2MRB</a>&nbsp;&nbsp;&nbsp;November 4th and 11th 2017	&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/18259" target="_blank">AP3 vs. 352nd</a>&nbsp;&nbsp;&nbsp;April 29th 2017&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/18144" target="_blank">BP1 vs 1st SS</a>&nbsp;&nbsp;&nbsp;April 23rd 2017&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/15439" target="_blank">AP4 vs 352nd</a>&nbsp;&nbsp;&nbsp;October 15th 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/13018" target="_blank">BP3 vs 2.FJ</a>&nbsp;&nbsp;&nbsp;May-June 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/12007" target="_blank">BBotS RS 2016</a>&nbsp;&nbsp;&nbsp;May 28th 2016&nbsp;&nbsp;&nbsp;<span class="green">AP3S1 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/12007" target="_blank">BBotS A3 2016</a>&nbsp;&nbsp;&nbsp;May 21st 2016&nbsp;&nbsp;&nbsp;<span class="green">CP2S1 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/12007" target="_blank">BBotS DH 2016</a>&nbsp;&nbsp;&nbsp;May 14th 2016&nbsp;&nbsp;&nbsp;<span class="green">BP1S1 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/11781" target="_blank">AP1 vs 352nd & HSA</a>&nbsp;&nbsp;&nbsp;May 8th 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/11862" target="_blank">BP1 vs 2.FJ</a>&nbsp;&nbsp;&nbsp;April 24th 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/10824" target="_blank">BP3 vs 52nd ID</a>&nbsp;&nbsp;&nbsp;March 5th 2016&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/7403" target="_blank">BP3 vs 6th DyW</a>&nbsp;&nbsp;&nbsp;October 4th 2015&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/3896" target="_blank">AP3 vs 5.SS</a>&nbsp;&nbsp;&nbsp;May 25th 2015&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://forums.29th.org/discussion/5191" target="_blank">BP2 vs 2.SS & Gr.559</a>&nbsp;&nbsp;&nbsp;March 15th 2015&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=45363.0" target="_blank">BP1 vs PanzerLehr.901</a>&nbsp;&nbsp;&nbsp;August 18th 2014	&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?board=232.0" target="_blank">BotS 2013</a>&nbsp;&nbsp;&nbsp;August to October 2013	&nbsp;&nbsp;&nbsp;<span class="green">CP1S3 Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=37579.0" target="_blank">DP1 vs 113th Cav</a>&nbsp;&nbsp;&nbsp;October 7th 2012&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?board=254.0" target="_blank">BotS 2012</a>&nbsp;&nbsp;&nbsp;June to July 2012	&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=35756.0" target="_blank">CP3 vs 113th Cav</a>&nbsp;&nbsp;&nbsp;May 26th 2012&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=35658.0" target="_blank">AP1 vs 2.SS</a>&nbsp;&nbsp;&nbsp;May 18th 2012&nbsp;&nbsp;&nbsp;<span class="red">Loss</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=35252.0" target="_blank">BP1 vs 2.SS</a>&nbsp;&nbsp;&nbsp;April 15th 2012&nbsp;&nbsp;&nbsp;<span class="yellow">Draw</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=34666.0" target="_blank">CP1 vs 25th PzrGren</a>&nbsp;&nbsp;&nbsp;February 4th 2012&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=33845.0" target="_blank">AP2 vs 113th Cav</a>&nbsp;&nbsp;&nbsp;November 12th 2011&nbsp;&nbsp;&nbsp;<span class="yellow">Draw</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=22416.0" target="_blank">BotS2010</a>&nbsp;&nbsp;&nbsp;March 28th 2010&nbsp;&nbsp;&nbsp;<span class="green">AP1S2 Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=18610.0" target="_blank">CP2 vs 2.SS</a>&nbsp;&nbsp;&nbsp;August 31st 2009&nbsp;&nbsp;&nbsp;<span class="red">Loss</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=11942.0" target="_blank">BotS 2008</a>&nbsp;&nbsp;&nbsp;March 21st 2008&nbsp;&nbsp;&nbsp;<span class="green">CP3S3 Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/index.php?topic=11585.msg95881#new" target="_blank">CP4 vs 35th ID</a>&nbsp;&nbsp;&nbsp;Febuary 29th 2008&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=9613.0" target="_blank">CP2 vs 2nd RB	</a>&nbsp;&nbsp;&nbsp;October 14th 2007&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=8668.0" target="_blank">CP3 vs 26th ID</a>&nbsp;&nbsp;&nbsp;August 24th 2007&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=6821.0" target="_blank">CP2 vs 1st Para</a>&nbsp;&nbsp;&nbsp;May 9th 2007&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=6421.0" target="_blank">CP3 vs 2nd ID</a>&nbsp;&nbsp;&nbsp;April 7th 2007&nbsp;&nbsp;&nbsp;<span class="red">Loss</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=1488.0" target="_blank">CP1 vs 502nd PIR</a>&nbsp;&nbsp;&nbsp;26th July 2006&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<br>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=1184" target="_blank">29th vs 10th MD</a>&nbsp;&nbsp;&nbsp;25th November 2005&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
						<p id="about_section_text">&#9675; <a href="http://www.29th.org/forums/?topic=1488.0" target="_blank">29th vs 5.SS</a>&nbsp;&nbsp;&nbsp;5th September 2005&nbsp;&nbsp;&nbsp;<span class="green">Victory</span></p>
					</div>
					<div id="about_rules_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Server Rules &nbsp;</p>
						<p id="about_section_text"><b>Rules of Our Servers</b></p>
						<p id="about_section_text">The 29th Infantry Division public servers are realism servers. This means that we try to keep gameplay as realistic as possible while still keeping things enjoyable.</p>
						<p id="about_section_text">1. Do not intentionally wound or kill your teammate.</p>
						<p id="about_section_text">2. Trolling, political discussions, or harassment of other players is not tolerated.</p>
						<p id="about_section_text">3. Spamming the mic and playing music over in-game comms is prohibited.</p>
						<p id="about_section_text">4. No hacking, glitching, or exploiting broken game mechanics.</p>
						<p id="about_section_text">5. Keep complaints and whining to a minimum.</p>
						<p id="about_section_text">6. Do not interrupt private drills.</p>
						<p id="about_section_text">7. Do not take role slots you are not familiar with.</p>
						<p id="about_section_text">8. Do not recruit for your own unit/clan in our servers.</p>
						<p id="about_section_text">9. Do not impersonate a 29th member.</p>
						<p id="about_section_text">10. Do not argue server rules in the server.</p>
					</div>
					<div id="about_donate_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; How to donate &nbsp;</p>
						<p id="about_section_text"><b>Where do I go to donate donate?</b></p>
						<p id="about_section_text">You go <a href="donate">here</a>.</p>
						<p id="about_section_text"><b>Why should you donate?</b></p>
						<p id="about_section_text">We thrive off your donations! Donations go towards the cost of upkeep of the unit along with any additional expenses that come us may it be tools for offices, etc. In return for your generosity, we have rewards for meeting goals and continued donations monthly! You can find these rewards <a href="http://forums.29th.org/discussion/31925/donation-rewards-overhaul-and-jacket-updates" target="_blank">here</a>.</p>
						<p id="about_section_text"><b>Where exactly does my money go?</b></p>
						<p id="about_section_text">100% of donations go to paying for 29th ID expenses:</p>
						<p id="about_section_text">&#9675; Dedicated Game Server Machine $339.35/mo</p>
						<br>
						<span id="text_indent_small">
							<p id="about_section_text">- Arma 3 Company Server</p>
							<p id="about_section_text">- Arma 3 Platoon Server</p>
							<p id="about_section_text">- Arma 3 WWII Server</p>
							<p id="about_section_text">- Arma 3 Development Server</p>
						</span>
						<br>
						<span id="text_indent_small">
							<p id="about_section_text">- RS2 New York #1 Territories/Supremacy</p>
							<p id="about_section_text">- RS2 New York #2 Campaign</p>
							<p id="about_section_text">- RS2 Euro Server </p>
							<p id="about_section_text">- RS2 Company Server</p>
							<p id="about_section_text">- RS2 Platoon Server</p>
						</span>
						<br>
						<span id="text_indent_small">
							<p id="about_section_text">- Squad Battalion Server</p>
							<p id="about_section_text">- Squad Company Server</p>
							<p id="about_section_text">- Squad Platoon Server</p>
							<p id="about_section_text">- Squad Squad Server</p>
						</span>
						<br>
						<p id="about_section_text">&#9675; 150-Slot Teamspeak Server: $39.10/mo</p>
						<p id="about_section_text">&#9675; 29th.org Web Site: $30.00/mo</p>
						<br>
						<p id="about_section_text"><b>Monthly Total: $408.44</b></p>
						<p id="about_section_text">The current account balance and a ledger of all account transactions/donations can be viewed <a href="http://personnel.29th.org/#finances" target="_blank">here</a>.</p>
						<p id="about_section_text"><b>Thank you. Your support is appreciated.</b></p>
					</div>
					<div id="about_qa_small" class="animated fadeIn">
						<p id="about_section_header">&nbsp; Q&A &nbsp;</p>
						<p id="about_section_text"><b>Before Enlisting</b></p>
						<p id="about_section_text_indented"><b>Q: Do I have to use my real name?</b><br>A: Most of us do, but you don't have to; however, we would like for you to pick a realistic last name, as long as it's not already used.<br>e.g. NOT Pvt. Suicidal J3di, instead Frank James is more what we are looking for.</p>
						<p id="about_section_text_indented"><b>Q: Do I need to have past gaming/realism experience in order to join the 29th?</b><br>A: No, we welcome players from all skill levels to join the ranks of the 29th. It's more about the attitude and dedication you show. The 29th will take care of training you.</p>
						<p id="about_section_text_indented"><b>Q: Does everyone need to go through Basic Combat Training?</b><br>A: Yes, every single member of the unit has gone through BCT - all the way up to the commander of the 29th - and every new member needs to complete it as well.</p>
						<p id="about_section_text_indented"><b>Q: What will I learn in BCT?</b><br>AA: The basics about realism gaming, the 29th, and the game you choose:  Darkest Hour, Rising Storm/Red Orchestra 2, Arma 3.</p>
						<p id="about_section_text_indented"><b>Q: Do I have to use my in-game name and tag all the time when playing DH?</b><br>A: In the 29th servers you must wear your name and tag at all times. Outside of the 29th servers it is not required, but it is recommended, as the 29th tag carries weight and respect.</p>
						<p id="about_section_text_indented"><b>Q: How long will it take to get my application processed?</b><br>A: If you fill out all the information asked, as detailed as possible, it will be accepted or denied within roughly 48 hours.</p>
						<p id="about_section_text_indented"><b>Q: Can I practice in the Platoon Server when it's empty?</b><br>A: No, you're only allowed on the Platoon Server during the times of BCT.</p>
						<p id="about_section_text_indented"><b>Q: Does the 29th use Teamspeak?</b><br>A: Yes, and it is open to the public. You may find the information <a href="http://www.29th.org/forums/index.php?topic=39065.0" target="_blank">here</a>.</p>
						<p id="about_section_text_indented"><b>Q: How do I get my full name as my in-game name? I can't get my name to fit!</b><br>A: Drop down the console, type this command: set input KEY setname Pvt. Lastname [29th 301]<br>Replace KEY with any key that you wish to bind this command to, replace your name and TP number accordingly. Hit "enter" key, and close console. When You enter the server, hit that binded key, and you will have your full in-game name. For details on this, see this <a href="http://29th.org/dh/index.php?title=Name_Changing" target="_blank">page</a>.</p>
						<p id="about_section_text_indented"><b>Q: How do I get my full name as my in-game name? I can't get my name to fit!</b><br>A: Drop down the console, type this command: set input KEY setname Pvt. Lastname [29th 301]<br>Replace KEY with any key that you wish to bind this command to, replace your name and TP number accordingly. Hit "enter" key, and close console. When You enter the server, hit that binded key, and you will have your full in-game name. For details on this, see this <a href="http://29th.org/dh/index.php?title=Name_Changing" target="_blank">page</a>.</p>
						<p id="about_section_text"><b>During BCT</b></p>
						<p id="about_section_text">Remember to read the <a href="http://www.29th.org/wiki/index.php?title=FM_21-20_%22Cadet%27s_Handbook%22" target="_blank">Cadet Handbook</a> during BCT!</p>
						<p id="about_section_text_indented"><b>Q: Why can't I connect to the Platoon Server? I've been sitting in a black screen for over 15 mins now and can't attend my first day of BCT!</b><br>A: This is due to a name bug in the game. Disconnect from the black screen by pressing Esc or F10, change your in-game name to something short like "Pvt." and reconnect. Still, if you can't connect, contact someone online/in-game from your BCT's steamgroup.</p>
						<p id="about_section_text_indented"><b>Q: What is a steamgroup?</b><br>A: A steamgroup is a community in Steam. Anyone can create one of their own to stay in touch with friends, clanmates, people with the same interests etc. It has features like calendar, announcements, chat room etc.</p>
						<p id="about_section_text_indented"><b>Q: Where can I find my BCT's steamgroup and what is the purpose of it?</b><br>A: The direct link can be found from your enlistment post after a liaison's reply. You'll get notifications about when your BCT starts, you can easily contact your BCT buddies, liaisons, ask for help, anything!</p>
						<p id="about_section_text_indented"><b>Q: Where can I find the server password and ip?</b><br>A: All that information can be found at your enlistment post after a liaison has replied there.</p>
						<p id="about_section_text_indented"><b>Q: If I am the only player from the 29th on our company server, what do I do when someone breaks the rules?</b><br>A: Until you graduate, it is not your duty to enforce 29th rules on our servers. You can report troublemakers to your Enlistment Liaison by PM (Private Message) on the forums (nickname, server, time, description of problem).</p>
						<p id="about_section_text_indented"><b>Q: Can I just use any class available in DH, while being in the 29th?</b><br>A: As the rifle is the most common and most effective weapon in the game, all of our incoming soldiers learn its ins-and-outs. After graduating BCT, soldiers are given the opportunity to choose an AIT (Advanced Infantry Training) class such as the Machine Gun, the BAR, the Rifle, the Bazooka, etc. That said, you are restricted to the rifles (and the grenades, etc. that come with the rifle classes) at all times during BCT and until you are told otherwise by your squad leader.<br><i>Note: this only counts for the 29th servers. On any other server you are allowed to pick any class you want - but as many have noticed, the rifle isn't that bad a choice of weapon after all.</i></p>
						<p id="about_section_text_indented"><b>Q: Where can I find my BCT's steamgroup and what is the purpose of it?</b><br>A: The direct link can be found from your enlistment post after a liaison's reply. You'll get notifications about when your BCT starts, you can easily contact your BCT buddies, liaisons, ask for help, anything!</p>
						<p id="about_section_text"><b>After BCT</b></p>
						<p id="about_section_text">For questions and answers after BCT, read the <a href="http://www.29th.org/wiki/index.php?title=Category:FM_21-100" target="_blank">FM 21-100</a> or message your squad leader.</p>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php require('footer.php') ?>
	<script>
		if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
			document.getElementById("about_button_four").classList.add("selected_three");
			document.getElementById("about_button_five").classList.add("selected_three");
		}
		if (document.documentMode || !/Edge/.test(navigator.userAgent)) {
			function start_nav() {
				document.getElementById("about_button").classList.add("selected");
				document.getElementById("about_button_two").classList.add("selected");
				document.getElementById("about_button_three").classList.add("selected_mobile");
				document.getElementById("about_button_dropshadow").classList.add("selected");
				document.getElementById("about_button_dropshadow_fix").style.opacity = "1.0";
				document.getElementById("about_button_dropshadow_fix_two").style.opacity = "1.0";
			}
			start_nav()
		} else {
			document.getElementById("about_header").style.textDecoration = "none";
			document.getElementById("about_header").style.color = "rgba(203,209,131,1)";
			document.getElementById("about_header_small").style.textDecoration = "none";
			document.getElementById("about_header_small").style.color = "rgba(203,209,131,1)";
			document.getElementById("about_button_four").classList.add("selected_three");
			document.getElementById("about_button_five").classList.add("selected_three");
			document.getElementById("about_button_three").classList.add("selected_mobile");
			document.getElementById("triangle_one").style.display = "none";
			document.getElementById("triangle_two").style.display = "none";
			document.getElementById("triangle_three").style.display = "none";
			document.getElementById("triangle_four").style.display = "none";
			document.getElementById("triangle_five").style.display = "none";
			document.getElementById("triangle_six").style.display = "none";
			document.getElementById("head_one").style.backgroundColor = "#000080";
			document.getElementById("head_two").style.backgroundColor = "#bebebe";
			document.getElementById("head_three").style.backgroundColor = "#000080";
			document.getElementById("head_four").style.backgroundColor = "#bebebe";
			document.getElementById("head_five").style.backgroundColor = "#000080";
			document.getElementById("head_six").style.backgroundColor = "#bebebe";
			document.getElementById("head_one_two").style.backgroundColor = "#000080";
			document.getElementById("head_two_two").style.backgroundColor = "#bebebe";
			document.getElementById("head_three_two").style.backgroundColor = "#000080";
			document.getElementById("head_four_two").style.backgroundColor = "#bebebe";
			document.getElementById("head_five_two").style.backgroundColor = "#000080";
			document.getElementById("head_six_two").style.backgroundColor = "#bebebe";
		}
		function TriangleFix() {
			if ($(window).width() < 1200) {
				document.getElementById("triangle_hider").style.display = "none";
			} else {
				document.getElementById("triangle_hider").style.display = "block";
			}
		}
		TriangleFix();
		$(window).on('resize', function() {
			if ($(window).width() < 1200) {
				document.getElementById("triangle_hider").style.display = "none";
			} else {
				document.getElementById("triangle_hider").style.display = "block";
			}
		});
	</script>
</html>