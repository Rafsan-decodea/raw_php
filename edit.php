<<<<<<< HEAD
<?php 
include("DB.php") ;
include('dd.php');
$db = new DB();
$sql = "SELECT * FROM number ORDER BY id DESC";
$data = $db->getData($sql);

?>

=======
<?php
include ("db.php");
$db = new DB();
$id = $_GET['imgid'];
$sql = "SELECT  *  FROM number WHERE  id = $id ";
$data =  $db->getData($sql);

?>



>>>>>>> 53775333120a4325b528464200b3b0fe82665434
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<<<<<<< HEAD
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
                
=======
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
>>>>>>> 53775333120a4325b528464200b3b0fe82665434
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <?php include('fotter.php');?>

</body>

</html>