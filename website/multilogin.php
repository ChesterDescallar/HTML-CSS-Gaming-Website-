<?php
$username1 = $_POST['username'];
$password1 = $_POST['password'];


$GET_USERS = mysql_query{"SELECT * from useraccounts WHERE username = '$username1'");
while ($row_users = mysql_fetch_array($GET_USERS)){
	$username2 = $ROW_USERS['username'];
	$password2 = $ROW_users['passwprd'];
	
	/*password start */
	if($password2 == $password1){
		/* ADMIN START */
		
		?>Yep worked
<?php

/* ADMIN FINISHED */
	}
	elseif ($password2 != $password1){
		?>Password Error <?php ?> <br/>
        <?php /*PASSWORD FINISHED */?>
	








?>
