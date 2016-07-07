<?php

if($_POST)
{

	$phone = $_POST['phone'];
if(!preg_match("/^[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}$/", $phone)) {
	
  echo "vrai";
}
else
{
	echo "faux";
}
}
?>
<form method="post" action="">
<input type="text" name="phone" >
<button type="submit">submit</button>
</form>