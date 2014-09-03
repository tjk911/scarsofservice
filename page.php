<?php 
$title = '';
$pagefromurl = $_GET['page'];
	if ($pagefromurl == 'larson'){
		$title = " | War isn't over for wounded vet";
	} elseif ($pagefromurl == 'tbi'){
		$title = ' | St. Cloud VA puts focus on traumatic brain injuries';
	} elseif ($pagefromurl == 'peterson'){
		$title = ' | Forever wounded, still willing to fight';
	} elseif ($pagefromurl == 'suicide'){
		$title = ' | Veterans and suicide: A national issue with local consequences';
	} elseif ($pagefromurl == 'ptsd'){
		$title = ' | PTSD is unending nightmare for vets';
	} elseif ($pagefromurl == 'eagle'){
		$title = ' | Woman creates oasis for vets in pain';
	} elseif ($pagefromurl == 'klutenkamper'){
		$title = " | A vet's sanctuary";
	} elseif ($pagefromurl == 'brockhector'){
		$title = ' | Unlikely pair teams up for vets';
	} elseif ($pagefromurl == 'hector'){
		$title = ' | Message to vets: Embrace vulnerability for balance at home';
	} elseif ($pagefromurl == 'resources'){
		$title = ' | Resources for veterans and their loved ones';
	}
include('header.php'); 
?>
<!-- This is where the magic happens, I think -->
<?php
$path = "page/".$pagefromurl.".php";
include($path);
?>
<?php include('footer.php'); ?>