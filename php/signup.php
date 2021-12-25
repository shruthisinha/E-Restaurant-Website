<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);



$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "myfirst";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO newaccount (name, email, password) 
VALUES ('$name', '$email', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('Values have been inserted');
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}
echo"<script>
window.location.href='../index.html';
</script>";


?>
