
<?php
if(move_uploaded_file($_FILES["file"]["tmp_name"],"".$_FILES["file"]["name"]))
{

	//*** Insert Record ***//
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "workme";
	
	try {
		$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	} catch(PDOException $message) {
		print $message->getMessage();
	}
	$query = $db->prepare("INSERT INTO files (Name,FilesName) VALUES ('ppp','".$_FILES["file"]["name"]."')");
	$query->execute();
	$data = $query->fetchAll(PDO::FETCH_ASSOC);
	
	print json_encode($data);
	$conn = null;
}




?>