<?php
// Uncomment if you want to test actually saving. This requires running a SQL database with parameters saved in dbConfig.php
// This file will just echo your input to the test page.

/*
require_once('../DbConnect/pdoConnect.php');

$data = $_POST['testData'];

// If you put this inside of a function instead of just a PHP script, add $pdo = getDbPDO();
$stmt = $pdo->prepare("INSERT INTO TableName (ColumnName) VALUES (:testData)");
$stmt->bindParam(':testData', $data, PDO::PARAM_LOB); // Inserting as "lob" (Large Object) should prevent any issue with the data exceeding max packet size.

// Alternatively you can execute just like this
//$successful = $stmt->execute([':testData' => $data]);

$successful = $stmt->execute();
if (!$successful) {
    die("Unable to save data." . print_r($stmt->errorInfo()));
}
*/

$data = $_POST['testData'];
echo $data;

?>
