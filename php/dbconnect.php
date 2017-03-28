<?php
$servername = getenv('127.0.0.1');
$username = 'webstudent';
$password = 'sublimetext';
$dbname = 'memo';
$dbport = 'memo';
$dbport = 8888;

$db = new mysqli($servername, $username, $password, $database, $dbport);

if($db -> connect_error) {
	die('Connection Failed:' . $db -> connect_error);
}

echo 'Connection Successful: ' . $db -> host_info;

mysqli_select_db($db, $dbname);

if (empty($result)) {
	$sql = "CREATE TABLE MemoPad(
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		todaydate VARCHAR(30) NOT NULL,
		note VARCHAR(500) NOT NULL
		)";

	if ($db -> query($sql) === TRUE) {
		echo '<br> Table Created Successfully';
	} else {
		echo '<br> Table Creation Failed: ' . $db -> error;
	};
}


?>