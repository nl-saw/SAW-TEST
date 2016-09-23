<?php include("gethits.php");
if (substr($todays_hits, -2) <10 || substr($todays_hits, -2) >20) {
if 	   (substr($todays_hits, -1) == "1"){ $no_suffix_counter="st"; }
elseif (substr($todays_hits, -1) == "2"){ $no_suffix_counter="nd"; }
elseif (substr($todays_hits, -1) == "3"){ $no_suffix_counter="rd"; }
} 	if (empty($no_suffix_counter))		{ $no_suffix_counter="th"; }
?>
<h2 class="content-heading">Introduction to SaW WebOS</h2>
<p align="justify">Webbased 'OS' - Currently in casual development,.</p>
<p align="justify"><h3>Stay Tuned..</h3></p>
<p align="justify"><br><br></p>
<h5>Thanks for bringing us the <?php echo $todays_hits."<small><sup>$no_suffix_counter</sup></small>"; ?> visit today.</h5>