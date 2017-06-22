<?php
// There are other ways to handle database connections. This seemed simplest to me.
require_once "dbConfig.php";

$dsn = "mysql:host=$dbhost;dbname=$dbname;charset=$dbcharset";
$pdo = new PDO($dsn, $dbuser, $dbpassword);

/**
 * Gets and returns the PDO instance created by this file. Useful for PHP functions if they don't have global scope or you don't want them to.
 *
 * @return {PDO} The PDO connection to the database.
 */
function getDbPDO() {
    global $pdo;
    return $pdo;
}
?>
