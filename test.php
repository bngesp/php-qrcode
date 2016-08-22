<?php
include "lib/fonction.php";
if(isset($_POST['text'])){
	$src=genererQRCode($_POST['text']);
	echo "<img src=$src>";
}
?>
<div>
	<form method='post' action=#>
		<label>texte</label>
		<input type='text' name='text' value="test">
		<input type='submit' value='qrcode'>
	</form>
</div>
 
