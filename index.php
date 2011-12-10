<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
<!--
        <script src="http://jsconsole.com/remote.js?"></script>
        <script src="http://192.168.1.2:8080/target/target-script-min.js"></script>
-->
        <title>HydroMon &beta;</title>
        <style type="text/css" media="screen">@import "jqtouch/jqtouch.css";</style>
        <style type="text/css" media="screen">@import "designonetheme.css";</style>
		<style type="text/css" media="screen">@import "designonebars.css";</style>
		<style type="text/css" media="screen">@import "extensions/jqt.listIndex/jqt.listIndex.css";</style>
        <script src="jqtouch/jquery-1.4.2.js" type="text/javascript" charset="utf-8"></script>
        <script src="jqtouch/jqtouch.js" type="application/x-javascript" charset="utf-8"></script>
		<script src="extensions/jqt.autotitles.js" type="application/x-javascript" charset="utf-8"></script>
		<script src="extensions/jqt.bars/jqt.bars.js" type="application/x-javascript" charset="utf-8"></script>
		<script src="extensions/jqt.listIndex/jqt.listIndex.js" type="application/x-javascript" charset="utf-8"></script>
		<script src="checknetwork.js" type="application/x-javascript" charset="utf-8"></script>
        <script type="text/javascript" charset="utf-8">
            var jQT = new $.jQTouch({
                icon: 'themes/one/img/hydromon-icon.png',
                icon4: 'themes/one/img/hydromon-icon.png',
                addGlossToIcon: false,
				fullScreen: true,
                startupScreen: 'themes/one/img/hydromon-startup.png',
                statusBar: 'black',
                preloadImages: [
                    'themes/one/img/backButton.png',
                    'themes/one/img/backButtonActive.png',
                    'themes/one/img/bigButton.png',
                    'themes/one/img/bigButtonActive.png',
                    'themes/one/img/button.png',
                    'themes/one/img/buttonActive.png',
                    'themes/one/img/chevron.png',
                    'themes/one/img/chevronActive.png',
                    'themes/one/img/chevronCircle.png',
                    'themes/one/img/chevronCircleActive.png',
                    'themes/one/img/toggleSwitch.png'
                    ]
            });
		</script>
		
<script type="text/javascript" src="extensions/iscroll.js"></script>
<script type="text/javascript">
</script>
<script type="text/javascript">
var myScroll;
function loaded() {
	myScroll = new iScroll('wrapper');
}

document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

/* * * * * * * *
 *
 * Use this for high compatibility (iDevice + Android)
 *
 */
document.addEventListener('DOMContentLoaded', function () { setTimeout(loaded, 200); }, false);
/*
 * * * * * * * */


/* * * * * * * *
 *
 * Use this for iDevice only
 *
 */
//document.addEventListener('DOMContentLoaded', loaded, false);
/*
 * * * * * * * */


/* * * * * * * *
 *
 * Use this if nothing else works
 *
 */
window.addEventListener('load', setTimeout(function () { loaded(); }, 200), false);
/*
 * * * * * * * */

</script>

<style type="text/css" media="all">
#wrapper {
	position:absolute; z-index:1;
	top:45px; bottom:48px; left:0;
	width:100%;
	background:#fff9f8;
	overflow:auto;
}

#scroller {
	position:absolute; z-index:1;
/*	-webkit-touch-callout:none;*/
	-webkit-tap-highlight-color:rgba(0,0,0,0);
	width:100%;
	padding:0;
}

#content {
	background: none;
	padding: 10px;
}
</style>
    </head>
    <body>

<div id="jqt">
			<div id="home">
<textarea></textarea>
				<div class="nav">
					<div align="right">
						<p><a href="#status" target="_top"><img src="themes/one/img/status.png" /></a></p>
						<p>&nbsp;</p><p>&nbsp;</p>
						<p><a href="#weather" target="_top"><img src="themes/one/img/weather.png" /></a></p>
						<p>&nbsp;</p><p>&nbsp;</p>
						<a href="#more" target="_top"><img src="themes/one/img/more.png" /></a> &nbsp;
					</div>
				</div>
			</div>
			<div id="status" class="keep_tabbar">
			<div class="toolbar">
				<h1>Status</h1>
			</div>
				<div id="wrapper">
				<div id="scroller">	
				<div id="content">
			<h1>Today</h1>
			<div class="chart"><img src="sghmps1.jpg" /></div>
			<p><strong>Date:</strong> 7th October 2011</p>
			<p><strong>Time:</strong> 4:14PM</p>
				<h2>Load Percentage of Rated</h2>
				<table>
				<tr>
					<td class="first">&nbsp; Daily Percentage</td>
					<td class="last"><em>42%</em></td>
				</tr>
				<tr>
					<td class="first">&nbsp; Monthly Average Percentage</td>
					<td class="last"><em>41%</em></td>
				</tr>
				</table>

				</div>
				</div>
				</div>
			</div>
			<div id="weather">
				<div class="toolbar">
					<h1>Weather</h1>
				</div>
					<div id="wrapper">
					<div id="scroller">
					<div id="content">
<h1>Company Profile</h1>
<p>
Hydrotech International Limited is a publicly listed company that has official quotation on the Australian Stock Exchange Limited. The company trades under the stock code of "HTI". Hydrotech is a total water ingress solution provider and owns 100% of the intellectual and commercial property rights to the Multi Pulse Sequencing System (MPS System). The company is a specialist design and installation supplier of proprietary technology and know-how in the area of prevention of water ingress into subterranean concrete and masonry structures. In other areas, such as water table protection, irrigation and oil retrieval, Hydrotech is presently developing solutions. The company operates in various jurisdictions under which it trades by way of its fully owned subsidiaries, Hydrotech Europe plc and Hydrotech Asia Limited. These fully owned operating subsidiaries have expertise in civil engineering, architecture, electronics and project management.
</p>
<p>&nbsp;</p>
<p>
Hydrotech commercialises its intellectual property by providing water ingress solutions to corporations that own structures requiring a reliable and highly sophisticated process to de-water them. Hydrotech is a registered company with offices in United Kingdom, Hong Kong, China and Australia. 
</p>
<p>&nbsp;</p>
<h1>What is the MPS system?</h1>
<p>
The MPS System is evolutionary technology built upon a proven scientific theory. It gives a new life to existing brick, masonry and concrete structures avoiding expensive reconstruction and allows a broad field of application in new concrete structures. Existing methods used by the building industry today can be characterised as temporary solutions to the water ingress problem for which there has been no apparent permanent solution until now.
</p>
<p>
The MPS System can waterproof existing and new concrete, brick and masonry structures/basement walls through a complex low voltage positive/negative pulsating charge.
Concrete, brick and masonry structures consist of a mass containing capillary formations. Water may penetrate structures in a multitude of ways, the simplest form of which is as a result of gravity. Water can also penetrate structures through capillary action, very much in the same manner as plants and trees receive and distribute water to smaller branches.
</p>
<p>&nbsp;</p>
<p>
The MPS system is utilised for transporting water encapsulated within the capillaries out of structures, as well as permanently preventing the penetration of water into structures. A control unit produces a low voltage electrical charge, which passed through electrodes in the form of probes or wires strategically placed within portion of the walls and/or floors which are wet.
</p>
					</div>	
					</div>
					</div>
			</div>
		<div id="more">
			<div class="toolbar">
				<h1>Settings</h1>
			</div>
		<div id="wrapper">
		<div id="scroller">	
		<div id="content">
			<ul class="rounded">
				<li class="forward"><a href="#login">Log In</a></li>
				<li class="forward"><a href="doSignOut.php" rel="external">Sign Out</a></li>
			</ul>
			<ul class="rounded">
				<li class="forward"><a href="#location">Specify your Location</a></li>
				<li class="forward"><a href="#help">Help</a></li>
			</ul>
			<ul class="individual">
				<li><a class="cube" href="#about">About</a></li>
				<li><a class="cube" href="#credits">Credits</a></li>
			</ul>
		</div>
		</div>
		</div>
		</div>
        <div id="about" class="slideup in">
			<div class="toolbar">
				<h1>About</h1>
                <a class="back" href="#">Back</a>
			</div>
		<div id="wrapper">
		<div id="scroller">
		<div id="content">
<h1>Company Profile</h1>
Hydrotech International Limited is a publicly listed company that has official quotation on the Australian Stock Exchange Limited. The company trades under the stock code of "HTI". Hydrotech is a total water ingress solution provider and owns 100% of the intellectual and commercial property rights to the Multi Pulse Sequencing System (MPS System). The company is a specialist design and installation supplier of proprietary technology and know-how in the area of prevention of water ingress into subterranean concrete and masonry structures. In other areas, such as water table protection, irrigation and oil retrieval, Hydrotech is presently developing solutions. The company operates in various jurisdictions under which it trades by way of its fully owned subsidiaries, Hydrotech Europe plc and Hydrotech Asia Limited. These fully owned operating subsidiaries have expertise in civil engineering, architecture, electronics and project management.
<br /><br />
Hydrotech commercialises its intellectual property by providing water ingress solutions to corporations that own structures requiring a reliable and highly sophisticated process to de-water them. Hydrotech is a registered company with offices in United Kingdom, Hong Kong, China and Australia. 

<br /><br /><br /><br />

<h1>What is the MPS system?</h1>
The MPS System is evolutionary technology built upon a proven scientific theory. It gives a new life to existing brick, masonry and concrete structures avoiding expensive reconstruction and allows a broad field of application in new concrete structures. Existing methods used by the building industry today can be characterised as temporary solutions to the water ingress problem for which there has been no apparent permanent solution until now.
<br /><br />
The MPS System can waterproof existing and new concrete, brick and masonry structures/basement walls through a complex low voltage positive/negative pulsating charge.
Concrete, brick and masonry structures consist of a mass containing capillary formations. Water may penetrate structures in a multitude of ways, the simplest form of which is as a result of gravity. Water can also penetrate structures through capillary action, very much in the same manner as plants and trees receive and distribute water to smaller branches.
<br /><br />
The MPS system is utilised for transporting water encapsulated within the capillaries out of structures, as well as permanently preventing the penetration of water into structures. A control unit produces a low voltage electrical charge, which passed through electrodes in the form of probes or wires strategically placed within portion of the walls and/or floors which are wet.

		</div>	
		</div>
		</div>
        </div>
		<div id="credits">
			<div class="toolbar">
				<h1>Credits</h1>
                <a class="back" href="#">Back</a>
			</div>
		<div id="wrapper">
		<div id="scroller">
		<div id="content">	
			<ul class="rounded">
				<li class="arrow"><a href="http://www.davidkaneda.com" target="_blank"><img rel="external" style="float:left" src="bar_img/jqt.png" /> &nbsp; jQTouch by David Kaneda</a></li>
				<li class="arrow"><a href="https://github.com/beedesk/jQTouch" target="_blank"><img rel="external" style="float:left" src="bar_img/85-trophy.png" /> &nbsp; BeeDesk Fork by Thomas Yip</a></li>
				<li class="arrow"><a href="http://glyphish.com" target="_blank"><img rel="external" style="float:left" src="bar_img/145-persondot.png" /> &nbsp; Glyphish by Joseph Wain</a></li>
				<li class="arrow"><a href="https://github.com/DataZombies/jQTouch" target="_blank"><img rel="external" style="float:left" src="bar_img/111-user.png" /> &nbsp; Tabbar by Daniel J. Pinter</a></li>
			</ul>
		</div>	
		</div>
		</div>
		</div>
		<div id="login">
                <div class="toolbar">
                    <h1>Login</h1>
                    <a class="back" href="#">Back</a>
                </div>
		<div id="wrapper">
		<div id="scroller">
		<div id="content">
<?php include("login.php"); ?>
		</div>	
		</div>
		</div>
		</div>
		<div id="help">
			<div class="toolbar">
				<h1>Help</h1>
				<a class="back" href="#">Back</a>
			</div>
		<div id="wrapper">
		<div id="scroller">
		<div id="content">
			<h1>How to use the HydroMonitor</h1>
				<p>Use the bottom navigation bar to navigate through the pages: Home, Status, Chart and More.</p>
				<p><strong>Home:</strong> The home button will bring the user back to the homepage.</p>
				<p><strong>Status:</strong> The status button will bring the user to the page where the status of their structres can be viewed in table form.</p>
				<p><strong>Chart:</strong> The chart button will bring the user to the page where the status of their structures can be viewed in graph form.</p>
				<p><strong>More:</strong> The More button will bring the user to the page where they can log in, sign out and find out about the HydroMonitor application.</p>

				<p>&nbsp;</p>

			<h1>How to contact support</h1>
				<p>If the user requires support regarding the usage of the application, or would like to contact support to report a bug in the application, they can contact support through this form:</p>
				<?php include('contact.php'); ?>
				<p>If the form does not work, contact details are given below:</p>
				<p>Support Hotline: (852) 1234-5678</p>
				<p>E-mail:  Email&#64;Domain&#46;com</p>

		</div>
		</div>
		</div>
		</div>
</div>
		<!-- tabbar -->
		<div id="tabbar">
				<div>
				<ul>
				  <li>
					<!-- Action & navigation -->
					<a href="#home" mask="bar_img/53-house.png">
					  <strong>Home</strong>
					</a>
				  </li>
				  <li>
					<a href="#status" mask="bar_img/73-radar.png">
						<strong>Status</strong>
					</a>
				  </li>
				  <li>
					<a href="#weather" mask="bar_img/25-weather.png">
					  <strong>Weather</strong>
					</a>
				  </li>
				  <li>
					<a href="#More" mask="bar_img/20-gear2.png">
					  <strong>More</strong>
					</a>
				  </li>
				</ul>
			  </div>
		</div>
</html>			