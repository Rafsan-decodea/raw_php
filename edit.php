<?php 
include("DB.php") ;
include('dd.php');
$db = new DB();
$sql = "SELECT * FROM number ORDER BY id DESC";
$data = $db->getData($sql);

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
    <?php include('nav.php');?>
        
        
            <br>
            <br>
            <div class="container">
                <form action="update.php"  method="POST" enctype="multipart/form-data">
               <?php
                if (!empty($data))
                 {
                 while($d = $data->fetch_assoc()){
                  ?>
                  <input type="hidden" name="id" value="<?= $d['id'] ?>" />                  h
                    <div class="form-group">
                        <label >Name</label>
                        <input class="form-control"   placeholder="Name" name="title" value= "<?= $d['title']?>" >
                    </div>
                    <div class="form-group">
                        <label >Mobile_number</label>
                        <input class="form-control"  placeholder="Number" name="number" value="<?= $d['number']?>">
                    </div>
                    <div class="form-group">
                        <label >Pic Upload</label>
                        <input type="file"  name="image" />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <?php
                    }}?>
                </form>
                
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php include('fotter.php');?>

</body>

</html>