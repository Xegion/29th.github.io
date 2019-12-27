<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Donate - 29th Infantry Division</title>
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
		<div id="donate" class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
			<div id="donate_top">
			</div>
			<div id="donate_bottom">
				<p id="donate_header">Donate</p>
				<br>
				<table width="100%">
					<tr>
						<td width="50%" align="center" valign="top" style="border-right: 1px #777 solid"><h2 id="donate_button_text">One-Time Donation</h2>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="XEXJGB9TAKCWU">
								<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</td>
						<td width="50%" align="center"><h2 id="donate_button_text">Recurring Donations</h2>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="HTKVADMGVV8FG">
								<table>
									<tr>
										<td>
											<input type="hidden" name="on0" value="">
										</td>
									</tr>
									<tr>
										<td>
											<select name="os0">
												<option value="Option 1">Option 1 : $3.00USD - monthly</option>
												<option value="Option 2">Option 2 : $5.00USD - monthly</option>
												<option value="Option 3">Option 3 : $10.00USD - monthly</option>
												<option value="Option 4">Option 4 : $15.00USD - monthly</option>
												<option value="Option 5">Option 5 : $20.00USD - monthly</option>
												<option value="Option 6">Option 6 : $25.00USD - monthly</option>
												<option value="Option 7">Option 7 : $30.00USD - monthly</option>
												<option value="Option 8">Option 8 : $35.00USD - monthly</option>
												<option value="Option 9">Option 9 : $40.00USD - monthly</option>
												<option value="Option 10">Option 10 : $50.00USD - monthly</option>
											</select>
										</td>
									</tr>
								</table>
								<br>
								<input type="hidden" name="currency_code" value="USD">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</td>
					</tr>
				</table>
				<br />
				<br />
				<br />
				<p id="donate_section_text"><b>After you donate:</b></p>
				<p id="donate_section_text">Please <a href="http://forums.29th.org/messages/add/T4%20Burg" target="_blank">send a PM</a> to T/4 Burg with the email address you used to donate, so that your donation can be identified as coming from you.</p>
				<p id="donate_section_text"><b>Why should you donate?</b></p>
				<p id="donate_section_text">We thrive off your donations! Donations go towards the cost of upkeep of the unit along with any additional expenses that come at us may it be tools for offices, etc. In return for your generosity, we have rewards for meeting goals and continued donations monthly! You can find these rewards <a href="http://forums.29th.org/discussion/31925/donation-rewards-overhaul-and-jacket-updates" target="_blank">here</a>.</p>
				<p id="donate_section_text"><b>Where exactly does my money go?</b></p>
				<p id="donate_section_text">100% of donations go to paying for 29th ID expenses:</p>
				<br>
				<p id="donate_section_text">&#9675; Dedicated Game Server Machine $339.35/mo</p>
				<br>
				<span id="text_indent">
					<p id="donate_section_text">- Arma 3 Company Server</p>
					<p id="donate_section_text">- Arma 3 Platoon Server</p>
					<p id="donate_section_text">- Arma 3 WWII Server</p>
					<p id="donate_section_text">- Arma 3 Development Server</p>
				</span>
				<br>
				<span id="text_indent">
					<p id="donate_section_text">- RS2 New York #1 Territories/Supremacy</p>
					<p id="donate_section_text">- RS2 New York #2 Campaign</p>
					<p id="donate_section_text">- RS2 Euro Server </p>
					<p id="donate_section_text">- RS2 Company Server</p>
					<p id="donate_section_text">- RS2 Platoon Server</p>
				</span>
				<br>
				<span id="text_indent">
					<p id="donate_section_text">- Squad Battalion Server</p>
					<p id="donate_section_text">- Squad Company Server</p>
					<p id="donate_section_text">- Squad Platoon Server</p>
					<p id="donate_section_text">- Squad Squad Server</p>
				</span>
				<br>
				<p id="donate_section_text">&#9675; 150-Slot Teamspeak Server: $39.10/mo</p>
				<p id="donate_section_text">&#9675; 29th.org Web Site: $30.00/mo</p>
				<br>
				<p id="donate_section_text"><b>Monthly Total: $408.44</b></p>
				<p id="donate_section_text">The current account balance and a ledger of all account transactions/donations can be viewed <a href="http://personnel.29th.org/#finances" target="_blank">here</a>.</p>
				<p id="donate_section_text"><b>Thank you. Your generosity is appreciated.</b></p>
			</div>
		</div>
		<div id="donate_small" class="d-block d-sm-block d-md-none d-lg-none d-xl-none">
			<div id="donate_top">
			</div>
			<div id="donate_bottom">
				<p id="donate_header_small">Donate</p>
				<br>
				<center>
					<tr>
						<td width="100%" align="center" valign="top" style="border-right: 1px #777 solid"><h2 id="donate_button_text">One-Time Donation</h2>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="XEXJGB9TAKCWU">
								<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</td>
						<hr class="donate-divider-small">
						<td width="50%" align="center"><h2 id="donate_button_text">Recurring Donations</h2>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="HTKVADMGVV8FG">
								<table>
									<tr>
										<td>
											<input type="hidden" name="on0" value="">
										</td>
									</tr>
									<tr>
										<td>
											<select name="os0">
												<option value="Option 1">Option 1 : $3.00USD - monthly</option>
												<option value="Option 2">Option 2 : $5.00USD - monthly</option>
												<option value="Option 3">Option 3 : $10.00USD - monthly</option>
												<option value="Option 4">Option 4 : $15.00USD - monthly</option>
												<option value="Option 5">Option 5 : $20.00USD - monthly</option>
												<option value="Option 6">Option 6 : $25.00USD - monthly</option>
												<option value="Option 7">Option 7 : $30.00USD - monthly</option>
												<option value="Option 8">Option 8 : $35.00USD - monthly</option>
												<option value="Option 9">Option 9 : $40.00USD - monthly</option>
												<option value="Option 10">Option 10 : $50.00USD - monthly</option>
											</select>
										</td>
									</tr>
								</table>
								<br>
								<input type="hidden" name="currency_code" value="USD">
								<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
							</form>
						</td>
					</tr>
				</center>
				<br />
				<br />
				<br />
				<p id="donate_section_text"><b>After you donate:</b></p>
				<p id="donate_section_text">Please <a href="http://forums.29th.org/messages/add/T4%20Burg" target="_blank">send a PM</a> to T/4 Burg with the email address you used to donate, so that your donation can be identified as coming from you.</p>
				<p id="donate_section_text"><b>Why should you donate?</b></p>
				<p id="donate_section_text">We thrive off your donations! Donations go towards the cost of upkeep of the unit along with any additional expenses that come at us may it be tools for offices, etc. In return for your generosity, we have rewards for meeting goals and continued donations monthly! You can find these rewards <a href="http://forums.29th.org/discussion/31925/donation-rewards-overhaul-and-jacket-updates" target="_blank">here</a>.</p>
				<p id="donate_section_text"><b>Where exactly does my money go?</b></p>
				<p id="donate_section_text">100% of donations go to paying for 29th ID expenses:</p>
				<br>
				<p id="donate_section_text">&#9675; Dedicated Game Server Machine $339.35/mo</p>
				<br>
				<span id="text_indent_small">
					<p id="donate_section_text">- Arma 3 Company Server</p>
					<p id="donate_section_text">- Arma 3 Platoon Server</p>
					<p id="donate_section_text">- Arma 3 WWII Server</p>
					<p id="donate_section_text">- Arma 3 Development Server</p>
				</span>
				<br>
				<span id="text_indent_small">
					<p id="donate_section_text">- RS2 New York #1 Territories/Supremacy</p>
					<p id="donate_section_text">- RS2 New York #2 Campaign</p>
					<p id="donate_section_text">- RS2 Euro Server </p>
					<p id="donate_section_text">- RS2 Company Server</p>
					<p id="donate_section_text">- RS2 Platoon Server</p>
				</span>
				<br>
				<span id="text_indent_small">
					<p id="donate_section_text">- Squad Battalion Server</p>
					<p id="donate_section_text">- Squad Company Server</p>
					<p id="donate_section_text">- Squad Platoon Server</p>
					<p id="donate_section_text">- Squad Squad Server</p>
				</span>
				<br>
				<p id="donate_section_text">&#9675; 150-Slot Teamspeak Server: $39.10/mo</p>
				<p id="donate_section_text">&#9675; 29th.org Web Site: $30.00/mo</p>
				<br>
				<p id="donate_section_text"><b>Monthly Total: $408.44</b></p>
				<p id="donate_section_text">The current account balance and a ledger of all account transactions/donations can be viewed <a href="http://personnel.29th.org/#finances" target="_blank">here</a>.</p>
				<p id="donate_section_text"><b>Thank you. Your generosity is appreciated.</b></p>
			</div>
		</div>
	</body>
	<?php require('footer.php') ?>
	<script>
		if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
			document.getElementById("donate_button_four").classList.add("selected_three");
			document.getElementById("donate_button_five").classList.add("selected_three");
		}
		if (document.documentMode || !/Edge/.test(navigator.userAgent)) {
			function start_nav() {
				document.getElementById("donate_button").classList.add("selected");
				document.getElementById("donate_button_two").classList.add("selected");
				document.getElementById("donate_button_three").classList.add("selected_mobile");
				document.getElementById("donate_button_dropshadow").classList.add("selected");
				document.getElementById("donate_button_dropshadow_fix").style.opacity = "1.0";
				document.getElementById("donate_button_dropshadow_fix_two").style.opacity = "1.0";
			}
			start_nav()
		} else {
			document.getElementById("donate_header").style.textDecoration = "none";
			document.getElementById("donate_header").style.color = "rgba(203,209,131,1)";
			document.getElementById("donate_header_small").style.textDecoration = "none";
			document.getElementById("donate_header_small").style.color = "rgba(203,209,131,1)";
			document.getElementById("donate_button_four").classList.add("selected_three");
			document.getElementById("donate_button_five").classList.add("selected_three");
			document.getElementById("donate_button_three").classList.add("selected_mobile");
		}
	</script>
</html>