<?php
session_start();
if($_SESSION['signed_in']==false)
header("Location:../login");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <link href="jsgrid-php-master/public/css/style.css" rel="stylesheet" />
    <link href="./jsgrid/dist/jsgrid.min.css" rel="stylesheet" />
    <link href="./jsgrid/dist/jsgrid-theme.min.css" rel="stylesheet" />
    <title>Library</title>
</head>
<body>
<header>
    <h1>Library</h1>
</header>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select CSV file to import:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
<div>
    <a href="./export.php">Click here to export data</a>
</div>
<div id="jsGrid"></div>

<script src="../assets/jquery.min.js"></script>
<script src="./jsgrid/dist/jsgrid.min.js"></script>
<script src="jsgrid-php-master/public/js/sample.js"></script>
</body>
</html>