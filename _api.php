<?php
	include "quotes.php";
	$format = ($_REQUEST['format'] ? $_REQUEST['format'] : 'txt');
  $quotes = array_keys($quotes); // Ignore the URLs
  $quote = $quotes[shuffle($quotes)];
	$lines = $_REQUEST['lines'] ? $_REQUEST['lines'] : 1;
	if($format == 'txt' || $format == 'text') {
		header("Content-Type: text/plain");
		print $quote;
	}
	elseif($format == 'xml') {
		header("Content-type: application/xml");
		print "<quote>".$quote."</quote>";
	}
	elseif($format == 'json' || $format == 'js') {
		header("Content-Type: application/json");
		print '{ "quote": "'.$quote.'" }'."\n";
	}
	else {
		print "ERROR: I don't speak '$format'";
	}
?>
