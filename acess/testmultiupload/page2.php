<html>

<head>
    <title>ThaiCreate.Com Tutorial</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
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
    
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
?>
    <table width="340" border="1">
        <tr>
            <th width="50">
                <div align="center">Files ID </div>
            </th>
            <th width="150">
                <div align="center">Picture</div>
            </th>
            <th width="150">
                <div align="center">Name</div>
            </th>
            <th width="150">
                <div align="center">Edit</div>
            </th>
        </tr>
        <?php
    while($row = $stmt->fetch())
    
	{
?>
        <tr>
            <td>
                <div align="center"><?php echo $row["FilesID"];?></div>
            </td>
            <td>
                <center><img height="50px" src="<?php echo $row["FilesName"];?>"></center>
            </td>
            <td>
                <center><?php echo $row["Name"];?></center>
            </td>
            <td>
                <center><a href="PageUploadToMySQL4.php?FilesID=<?php echo $row["FilesID"];?>">Edit</a></center>
            </td>
        </tr>
        <?php
	}
?>
    </table>
    <?php
?>
</body>

</html>