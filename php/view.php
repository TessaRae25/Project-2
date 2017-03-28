<?php

include_once 'dbconnect.php';

?>

<?php

echo '<h1>Accumulated Accomplishments</h1>';

$sql = "SELECT id, todaydate, note FROM MemoPad";
$memos = $db -> query($sql);

if ($memos -> num_rows > 0) {

	while($row = $memos -> fetch_assoc()) {
		echo 'Note: ' . $row['id'] . '<br>Date: ' . $row['todaydate'] . ' ' . $row['note'] . '<br><br>'; }

	} else {
		echo 'No results to display.';
}

$db -> close();

echo '<br><a href="../index.php">Home</a>';

?>
