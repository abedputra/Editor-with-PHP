<?php

// configuration
include once "configuration.php";

// check if form has been submitted
if (isset($_POST['text'])) //check text is isset
{
    // save the text contents
    file_put_contents($file, $_POST['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($file);

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Editor</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery Scripts -->
	<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
