<?php
include  "DB.php";
include  "dd.php";
$db = new DB();

if(isset($_POST['submit']))
{
    
  
    $title = $_POST['title'];
    $number = $_POST['number'];
    $file = $_FILES['image'];
    $file_tmp = $_FILES['image']['tmp_name'];
    if (empty($title)||empty($file))
    {
        header("location: create.php");
        exit;
    }
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    
    $xpd = explode('.',$file_name);
    $ext  = strtolower(end($xpd));
    $new_name = time().".".$ext;
    $sql = "INSERT INTO number (number, title ,image) VALUES('$number', '$title','$new_name')";
    if($db->insert($sql))
    {
        move_uploaded_file($file_tmp, 'uploads/'. $new_name);
        header("location: view.php");
        exit;  
    }
    else
    {
        echo "Faild To Upload";
        exit;
    } 

    
}
else
{
    header('location: create.php');
        exit;
}