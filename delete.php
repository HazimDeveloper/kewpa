<?php
require_once __DIR__ . '/lib/DataSource.php';
$database = new DataSource();
$sql = "DELETE FROM kewpa WHERE id=?";
$paramType = 'i';
$paramValue = array(
    $_GET["id"]
);
$database->delete($sql, $paramType, $paramValue);
header("Location:action.php");
exit();
?>
