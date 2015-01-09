<?php
	
	header('Content-Type: text/xml');
	
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
	
	echo '<response>';
		
		$food = $_GET['food'];
		$foodArray = array('tuna', 'bacon', 'beef', 'loaf', 'ham');
		
		if(in_array($food, $foodArray)){
			
			echo "We have $food";
		}
		
		elseif ($food=='') {
			echo "Enter a food you idiot";
			
		}
		
		else {
			echo "sorry punk! We dont sell no $food";
		}
	
	echo '</response>';

?>