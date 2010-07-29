<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<title>Quotable Kanye :: Yeezy Wisdom 24/7</title>
</head>
<body id="index" onload="">

<style type="text/css" media="screen">
	body { font-family: sans-serif; }
        a { color: #999; }
	a img { border: 0; }
	#header h1 { margin: 20px 0 10px 0px; padding: 0; }
	#header h1 a { background-color: #dadada; color: white; text-transform: uppercase; text-decoration: none; padding: 10px 10px 5px 10px; }
	#header { color: #888; font-size: 8pt; text-transform: uppercase; }
	#kanye { position: absolute; left: 490px; z-index: 100; }
	#quote { position: absolute; left: 40px; width: 400px; font-size: 20pt; margin-top: 100px; background: #fef; color: #777; padding: 20px; border: 1px solid #f0e0f0; -moz-border-radius: 30px; }
	#footer { clear: both; margin-top: 500px; text-align: right; margin-right: 100px; color: #aaa; font-size: 9pt;}
	#footer a { color: #999; }
</style>

	<div id="header">
		<h1><a href="/">QUOTABLE KANYE</a></h1>
		ALLCAPS GOODNESS FROM KANYE'S BLOG<br />
		REFRESH FOR ADDITIONAL YEEZY WISDOM<br />
                <a href="http://fffff.at/quotable-kanye/">MORE INFO HERE</a> (INCLUDING API)
	</div>
	
	<div id="kanye">
		<a href="<?php print $PHP_SELF ?>"><img src="kanye.jpg" /></a>
	</div>
	
	<div id="quote">
		<?php
			include "quotes.php";
		?>
		
		<h2>
			<!-- YOU ARE THE BIGGEST STAR IN THE UNIVERSE!!!! -->
			<?php print $quotes[shuffle($quotes)]; ?>
		</h2>
	</div>
		
	<div id="footer">
                        By <a href="http://jamiedubs.com">Jamie Wilkinson</a> & <a href="http://irenepolnyi.com">Irene Polnyi</a><br />
			A <a href="http://fffff.at">F.A.T. Lab</a> Production<br />
                        Get the <a href="http://github.com/jamiew/kanye-quotables">Source Code</a> (MIT Licensed)<br />
			<a href="http://fffff.at"><img src="http://fffff.at/images/copyleft_drips_sm.jpg" height="100"></a>
		</div>
	
	</div>

<!-- stats -->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-96220-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>

</body>
