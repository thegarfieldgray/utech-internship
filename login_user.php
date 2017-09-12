<?php require_once 'header.php'; ?>
<?php require_once 'conn/conn.php'; ?>

<?php
if (isset($_POST['submit'])) {

	$user_id = sanitizeInput($handler,$_POST['user_id']);
	$password = sanitizeInput($handler,$_POST['password']);

	$query = "SELECT .'$user_id','$password' FROM Student 
				WHERE user_id = '$user_id'";
	$query->execute();
	while ($row = $query->fetch_assoc()) {
    echo " id = " . $row['user_id'] . "\n";
}
}else {
	echo "didnt get any data.";
}

mysqli_close($handler);

?>