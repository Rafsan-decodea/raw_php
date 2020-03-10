<?php 
include("dd.php");
include("DB.php");
$db = new DB();

if (isset($_POST['id']))
{
    $id = $_POST['id'];
    $sql = "SELECT * FROM number WHERE id = $id";
    $data = $db->getData($sql);
    if ($data)
    {
       $img_file = $data->fetch_assoc()['image'];
       if (file_exists("uploads/".$img_file))
       {
           dd( $img_file);
       }
       else
       {
           echo "KUTTA";
       }
  
    }

    
}
else{

    echo "Fuck";
}