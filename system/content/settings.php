<?php
/*
 * settings
 */
 require_once('functions.php');
?>
<form method="POST" action="?action=updateSettings">
	<input type="hidden" value="<?php echo get_user_data('uid'); ?>" readonly />
	<label>Email address</label><br />
	<input type="email" value="<?php echo get_user_data('email'); ?>" required="required" /><br />
	<label>Nickname:</label><br />
	<input type="email" value="<?php echo get_user_data('nickname'); ?>" required="required" /><br />
	<button type="submit">Update setings</button>
</form>
