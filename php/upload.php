<?php

include_once 'dbconnect.php';

$today_date = mysqli_real_escape_string($db, $_POST['todaydate']);
$note_memo = mysqli_real_escape_string($db, $_POST['note']);

$memo_insert = "INSERT INTO MemoPad (todaydate, note) VALUES ('$today_date', '$note_memo')";

if(mysqli_query($db, $memo_insert)) {
	echo '<br> Records Added. ';
} else {
	echo '<br> Could not add records: ' . mysqli_error($db);
}
?>