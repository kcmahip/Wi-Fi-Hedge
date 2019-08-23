<?php
	$ip = $_SERVER['REMOTE_ADDR'];
	$file = 'people.txt';
	$sunil="";	
	if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])) {
	
	//Counting number of checked checkboxes 
	$checked_count = count($_POST['check_list']);
	
	#echo "You have selected following ".$checked_count." option(s): <br>";
	 	
	echo "You have selected following  option(s): <br>";
	//Loop to store and display values of individual checked checkbox
		foreach($_POST['check_list'] as $selected) {
				echo "<p>".$selected ."</p>"; 
		$sunil .= $selected.PHP_EOL;	
		#echo $sunil;
		file_put_contents($file,$sunil);
				
		}		
	echo "<center> <b> You now have internet access on your mobile phone :) Happy Surfing!! </b></center><br>";
	exec("sudo bash /home/mahip/Desktop/hackathon\ docs/arper.sh $ip");		
	}
	else{
	echo "<b>For security reasons selecting website is mandatory!!!</b>";
	}
	}
?>

