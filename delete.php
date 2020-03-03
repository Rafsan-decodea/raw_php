<?
include ("DB.php");
include ("dd.php");
$db = new DB();
$id = $_GET['imgid'];
$sql = "SELECT * FROM images WHERE id = $id";
$all_data = $db->getData($sql);

