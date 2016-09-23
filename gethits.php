<?php
$today = date("Y_m_d");
$logform = $today."_wlog.txt";
$dir = 'traflogs';
$savedLocation=$dir . '/' . $logform;
if(!file_exists($savedLocation)) {
	// Do nothing then,.
} else {
	$todays_hits = 0;
	$handle=fopen($savedLocation,"r");
	while(!feof($handle)) {
	  $line = fgets($handle);
	  $todays_hits++;
	}
	fclose($handle);
}
?>