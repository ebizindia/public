<?php
$hr = date('G');
if($hr<12)
	$greeting = 'Good morning guest!';
else if($hr>=12 && $hr<=17)	
	$greeting = 'Good afternoon guest!';
else	
	$greeting = 'Good evening guest!';

echo '<h2>' . $greeting . '</h2>';