<?php
include ("db.php");
$db = new DB();
$id = $_GET['imgid'];
$sql = "SELECT  *  FROM number WHERE  id = $id ";
$data =  $db->getData($sql);

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <?php include('nav.php')?>
        
            <br>
            <br>
            <?php 
                if ($data->num_rows >0)
                {
                    while($row = $data->fetch_assoc()){
            ?>
            <div class="container">
                <form action="update_action.php"  method="POST" enctype="multipart/form-data">
                 <input name="id" value="<?= $row['id']?>" />
                    <div class="form-group">
                        <label >Name</label>
                        <input class="form-control" required  placeholder="Name" name="title"  value="<?= $row['name']?>">
                    </div>
                    <div class="form-group">
                        <label >Mobile_number</label>
                        <input class="form-control" required placeholder="Number" name="number" value="<?= $row['number'] ?>">
                    </div>
                    <img src="uploads/<?= $row['image']?>" />
                    <div class="form-group">
                        
                        <label >Pic Upload</label>
                        <input type="file" required name="image" />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">update</button>
                </form>

                <?php 
                }}
                else
                   {
                       echo "No Contucts Found";

                   }

            ?>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php include('fotter.php');?>

</body>

</html>