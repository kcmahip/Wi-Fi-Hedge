<!DOCTYPE html> 
<!-- Second page of the Project where the user selects the web services they would be using.
	Contains the check-boxes whose values are recorded. Those web services are pinged and 
	then access is provided. Besides the checked options, all other services are still forbidden. 
	This helps mitigate MITM attacks since any requests to other sites (possible redirects) are dropped.
	The dropped packet info is stored in the Snort Logs.
-->
<html>
<head> 
	<title>Wi-Fi</title>
	<!--Please make the changes to background pictures as required-->
</head> 
<style> 
             body {
                background-image: url(./bg.jpg);            
                background-size: 100%; 
		background-origin: content;
                background-repeat: no-repeat;
               
             }
          </style>
 <div class="container">
	<div class="main">
		
		<h2>This is A Secure Network..</h2><hr/>
		<form action="index1.php" method="post">
		<label class="heading"><?php echo "<b>Please select the websites you will be visiting: "."</b>" ?></label><br/>
                <br/>
		<input type="checkbox" name="check_list[0]" value="www.google.com"><label>www.google.com</label><br/>
		<input type="checkbox" name="check_list[1]" value="www.facebook.com"><label>www.facebook.com</label><br/>
		<input type="checkbox" name="check_list[2]" value="www.youtube.com"><label>www.youtube.com</label><br/>
		<input type="checkbox" name="check_list[3]" value="www.twitter.com"><label>www.twitter.com</label><br/>
		<input type="checkbox" name="check_list[4]" value="www.whatsapp.com"><label>www.whatsapp.com</label><br/>		
		<input type="checkbox" name="check_list[5]" value="www.gmail.com"><label>www.gmail.com</label><br/>
		<input type="checkbox" name="check_list[6]" value="www.hotmail.com"><label>www.hotmail.com</label><br/>
		<input type="checkbox" name="check_list[7]" value="www.yahoo.com"><label>www.yahoo.com</label><br/>
		<input type="checkbox" name="check_list[8]" value="www.amazon.com"><label>www.amazon.com</label><br/>
		<input type="checkbox" name="check_list[9]" value="www.flipkart.com"><label>www.flipkart.com</label><br/>
		<input type="checkbox" name="check_list[10]" value="www.ebay.com"><label>www.ebay.com</label><br/>
		<input type="checkbox" name="check_list[11]" value="www.linkedin.com"><label>www.linkedin.com</label><br/>
		<input type="checkbox" name="check_list[11]" value="www.flipkart.com"><label>www.flipkart.com</label><br/>
		<input type="checkbox" name="check_list[12]" value="www.quora.com"><label>www.quora.com</label><br/>
		<input type="checkbox" name="check_list[13]" value="www.netfilx.com"><label>www.netfilx.com</label><br/>
		<input type="checkbox" name="check_list[14]" value="www.twitter.com"><label>www.twitter.com</label><br/>
		<input type="checkbox" name="check_list[15]" value="www.imdb.com"><label>www.imdb.com</label><br/>
		<input type="checkbox" name="check_list[16]" value="www.alibaba.com"><label>www.alibaba.com</label><br/>
		<input type="checkbox" name="check_list[17]" value="www.kat.cr"><label>www.kat.cr</label><br/>
		<input type="checkbox" name="check_list[18]" value="www.adobe.com"><label>www.adobe.com</label><br/>
		<input type="checkbox" name="check_list[19]" value="www.myntra.com"><label>www.myntra.com</label><br/>
		<input type="checkbox" name="check_list[20]" value="www.msrit.edu"><label>www.msrit.edu</label><br/>
		
		
	<form action="index1.php" method="post">
		<?php echo "<b>Enter any websites not listed above..</b>"."</br>" ?>
		<?php $arrlength=5 ?>
		<?php for($x = 0; $x < $arrlength; $x++){?>
		<input type="text" name="check_list[<?php $x ?>]" ><label>Please enter the website</label><br/><br/>
		<?php }?>		
		<input type="submit" name="submit" Value="Submit"/>
		<br>
		<?php include 'checkbox_value.php';?>
		
		
	</form>
		
	</div>
	
 </div>
</body>
</html>

