<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "workme";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM files"); 
        $stmt->execute();
        echo json_encode($stmt->fetchAll());
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>