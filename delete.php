<?php
include ("DB.php");
include ("dd.php");
$db = new DB();
$id = $_GET['imgid'];
$sql = "SELECT * FROM number WHERE id = $id";
$all_data = $db->getData($sql);
$row  = $all_data->fetch_assoc();


if (file_exists('uploads/'.$row['image']))
{
   unlink('uploads/'.$row['image']);
}

$sql2 = "DELETE  FROM number WHERE id = $id";
$delete_data = $db->delete($sql2);


if ($delete_data)
{
    header("location: view.php");
}
else
{
    header("location: view.php");
}
