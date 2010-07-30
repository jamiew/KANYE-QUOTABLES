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
	a:hover { color: #808080; }
	a img { border: 0; }
	#header h1 { margin: 20px 0 10px 0px; padding: 0; }
	#header h1 a { background-color: #dadada; color: white; text-transform: uppercase; text-decoration: none; padding: 10px 10px 5px 10px; }
	#header h1 a:hover { background-color: #d0d0d0; color: #f9f9f9; }
	#header { color: #888; font-size: 8pt; text-transform: uppercase; }
	#footer { clear: both; margin-top: 520px; text-align: right; margin-right: 100px; color: #bbb; font-size: 9pt; }
	#footer a { color: #bbb; }
	#footer a:hover { color: #999; }
	#footer img { float: right; margin-left: 20px; }
	#quote { position: absolute; left: 90px; width: 600px; margin-top: 50px; background: url(images/frame2-550.png) no-repeat; color: #9f9f9f; padding: 20px; }
  #quote blockquote { width: 400px; height: 350px; overflow: hidden; font-size: 24pt; padding: 70px 70px 50px 60px; margin: 0 0px; }
	#quote cite a { display: block; text-align: left; margin-top: 20px; text-decoration: none; color: #dadada; font-size: 10pt; font-family: serif; }
	#quote cite a:hover { color: #faa; }
	#kanye { position: absolute; left: 695px; margin-top: 65px; z-index: 100; border: 4px solid #fafafa; }
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#quote blockquote").hide().fadeIn('fast');
  });
</script>

	<div id="header">
		<h1><a href="/">QUOTABLE KANYE</a></h1>
		ALLCAPS GOODNESS FROM KANYE'S BLOG<br />
		REFRESH FOR ADDITIONAL YEEZY WISDOM<br />
		<a href="http://fffff.at/quotable-kanye/">MORE INFO HERE</a> (INCLUDING API)
	</div>

	<div id="kanye">
		<a href="<?php print $PHP_SELF ?>"><img src="images/kanye.jpg" /></a>
	</div>

	<div id="quote">
		<h2>
			<?php
			  // PHP shuffle() breaks hashes
        function shuffle_assoc(&$array) {
          $keys = array_keys($array);
          shuffle($keys);
          foreach($keys as $key) {
            $new[$key] = $array[$key];
          }
          $array = $new;
          return true;
        }

        include "quotes.php";
        shuffle_assoc($quotes);
        $keys = array_keys($quotes);
        $values = array_values($quotes);
        ?>
        <blockquote>
          <?php print $keys[0]; ?>
  			  <?php if(!empty($values[0])){ ?>
  			    <cite><a href="<?php print $values[0]; ?>">link</a></cite>
  			  <?php }; ?>
			  </blockquote>
		</h2>
	</div>

	<div id="footer">
		<a href="http://fffff.at"><img src="http://fffff.at/images/copyleft_drips_sm.jpg" height="100" alt=""></a>
		<br />
    Made by <a href="http://jamiedubs.com">Jamie Wilkinson</a> and <a href="http://irenepolnyi.com">Irene Polnyi</a><br />
    Download the <a href="http://github.com/jamiew/kanye-quotables">source code</a> &mdash; <strong><a href="http://fffff.at">F.A.T. Lab</a></strong><br />
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
