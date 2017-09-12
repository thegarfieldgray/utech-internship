<?php require_once 'header.php'; ?>
<?php require_once 'conn/conn.php'; ?>

<?php
if (isset($_POST['submit'])) {

	$id_num = sanitizeInput($handler,$_POST['user_id']);
	$email = sanitizeInput($handler,$_POST['email']);
	$password = sanitizeInput($handler,$_POST['password']);

		$password = password_hash($password, PASSWORD_DEFAULT);

			$id_num = encode($id_num, $key);
			$email = encode($email, $key);

			$query = $handler->prepare("INSERT INTO Student (id, email, password) VALUES (?,?,?)");
			$query->bind_param("iss",$id_num, $email, $password);
			$query->execute();

			echo '<div class="card">
					<div class="card-panel">
						<h2>SUCCESS</h2>
					</div>
					</div?>';
			$email = decode($email, $key);
			echo $email;
			echo " decoded";
	
}else {
	echo "didnt get any data.";
}

mysqli_close($handler);

?>
