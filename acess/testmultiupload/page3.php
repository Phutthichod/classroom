<html>

<head>
    <title>ThaiCreate.Com Tutorial</title>
</head>

<body>
    <?php
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],$_FILES["filUpload"]["name"]))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "workme";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO files ";
            $sql .="(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$_FILES["filUpload"]["name"]."')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "New record created successfully";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    }
?>
    <a href="page2.php">View files</a>
</body>

</html>