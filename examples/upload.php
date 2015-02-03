<?php

/**
 * WARNING!
 *
 * This file serves only for demonstration purposes. For using in production, please remember to think about security.
 */
/*
?>
<form enctype="multipart/form-data" action="?" method="POST">
	<input type="file" name="file">
	<input type="submit"></button>
</form>
<?php */
if(empty($_FILES['file']))
{
	exit();	
}
$destination = 'uploads/'. $_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'], $destination);
echo $destination;
