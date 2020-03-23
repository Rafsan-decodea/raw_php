<?php
include "DB.php";
include "dd.php";
$db = new DB();

if (isset($_POST['submit'])){
  $id = $_POST["id"];
  $title = $_POST["title"];
  $number = $_POST["number"];
  $file_name = $_FILES['image']['name'];
  $file_size = $_FILES['image']['size'];
  $file_tmp = $_FILES['image']['tmp_name'];
  
  $xpd = explode('.',$file_name); 
  $ext  = strtolower(end($xpd));
  $new_name = time().".".$ext;
  $sql1 = "SELECT * FROM number where id = '$id'";
  $data = $db->getData($sql1);
  $row = $data->fetch_assoc(); 
 
  if(file_exists('uploads/'. $row['image']))
    {
        unlink('uploads/'. $row['image']);
    }
  $sql = "UPDATE number SET title='$title', number ='$number',image='$new_name' WHERE id = '$id' ";
  if($db->insert($sql))
  {
    move_uploaded_file($file_tmp, 'uploads/'. $new_name);
    header('location: edit.php');
    exit;
  }
  else{echo "wrong";}



}
{
  echo "Some thing is wring";    
}
