<footer id="footer_big" class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
	<div id="footer_leftside">
		<img id="footer_logo" src="assets/img/logo_old.png">
		<p id="copyright">&copy; 2005 - <script>document.write(new Date().getFullYear())</script> 29th Infantry Division. All Rights Reserved.</p>
		<p id="credit">Made by <a id="credit_link" href="http://personnel.29th.org/#units/Eng" target="_blank">Engineer Corps</a>.</p>
		<p id="credit"><a id="credit_link" href="privacy">Privacy Policy</a></p>
	</div>
	<div id="footer_nav">
		<div id="footer_nav_right">
			<p id="footer_nav_header">COMMUNITY</p>
			<p><a id="footer_nav_link" class="line_height_fix" href="https://steamcommunity.com/groups/29thID" target="_blank">Steam Group</a></p>
			<p><a id="footer_nav_link" class="line_height_fix" href="https://www.facebook.com/29thinfantrydivision" target="_blank">Facebook</a></p>
			<p><a id="footer_nav_link" class="line_height_fix" href="https://twitter.com/TwentyNinthID" target="_blank">Twitter</a></p>
		</div>
		<div id="footer_nav_left">
			<p id="footer_nav_header_two">PERSONNEL</p>
			<p><a id="footer_nav_link" href="http://personnel.29th.org/" target="_blank">Roster</a></p>
			<p><a id="footer_nav_link" href="http://forums.29th.org/categories" target="_blank">Forum</a></p>
			<p><a id="footer_nav_link" href="http://www.29th.org/wiki/index.php?title=Main_Page" target="_blank">Wiki</a></p>
		</div>
	</div>
</footer>
<footer id="footer_small" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
	<p id="copyright_small">&copy; <script>document.write(new Date().getFullYear())</script> 29th Infantry Division. All Rights Reserved.</p>
</footer>
<span class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
	<div id="cookie_notice" class="animated slideInUp">
		<p id="cookie_text">We use cookies to personalise content and ads, to provide social media features and to analyse our traffic. We also share information about your use of our site with our social media. <a class="privacy-link" href="privacy">Learn more</a>.</p>
		<p id="cookie_agree" onclick="CookieAgreement()"><span class="fa fa-check"></span> I Understand.</p>
		<script>
			function CookieAgreement() {
				document.cookie = "cookieagreement=yes;"
				document.getElementById("cookie_notice").style.display = "none";
			}
			function getCookie(name) {
			    var dc = document.cookie;
			    var prefix = name + "=";
			    var begin = dc.indexOf("; " + prefix);
			    if (begin == -1) {
			        begin = dc.indexOf(prefix);
			        if (begin != 0) return null;
			    }
			    else
			    {
			        begin += 2;
			        var end = document.cookie.indexOf(";", begin);
			        if (end == -1) {
			        end = dc.length;
			        }
			    }
			    return decodeURI(dc.substring(begin + prefix.length, end));
			}
			function CookieAgreed() {
			    var Cookieagreement = getCookie("cookieagreement");

			    if (Cookieagreement == null) {
			        document.getElementById("cookie_notice").style.display = "d-block";
			    }
			    else {
			        document.getElementById("cookie_notice").style.display = "none";
			    }
			}
			CookieAgreed()
		</script>
	</div>
</span>
<script>
	if (document.documentMode || /Edge/.test(navigator.userAgent)) {
		document.getElementById("footer_nav_header").style.textDecoration = "none";
		document.getElementById("footer_nav_header").style.color = "rgba(203,209,131,1)";
		document.getElementById("footer_nav_header_two").style.textDecoration = "none";
		document.getElementById("footer_nav_header_two").style.color = "rgba(203,209,131,1)";
	}
	if(window.opera) {
		document.getElementById("footer_big").style.display = "none";
		document.getElementById("footer_small").style.display = "block";
	}

	$(window).scroll(function() {
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			buttonfixtwo();
		} else {
			document.getElementById("cookie_notice").style.marginBottom = "0";
		}
	});
	function onElementHeightChangetwo(elm, callback){
	    var lastHeight = elm.clientHeight, newHeight;
	    (function run(){
	        newHeight = elm.clientHeight;
	        if( lastHeight != newHeight )
	            callback();
	        lastHeight = newHeight;

	        if( elm.onElementHeightChangeTimer )
	            clearTimeout(elm.onElementHeightChangeTimer);

	        elm.onElementHeightChangeTimer = setTimeout(run, 200);
	    })();
	}
	onElementHeightChangetwo(document.body, function(){
		if($(window).scrollTop() + $(window).height() == $(document).height()) {
			buttonfixtwo();
		} else {
			document.getElementById("cookie_notice").style.marginBottom = "0";
		}
	});
	function buttonfixtwo() {
		document.getElementById("cookie_notice").style.marginBottom = "20vh";
	}
</script>