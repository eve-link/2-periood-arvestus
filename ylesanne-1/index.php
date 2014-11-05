<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
</head>

<body>

	<?php 
	$username = "Eve";
	$age = "22";
	?> 
	
	<a href="<?php echo $page_link . '?username=' . $username . '&age=' . $age; ?>">Result</a>

</body>
</html>
