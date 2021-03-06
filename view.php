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
        <?php include("nav.php")?>
            <div class="container">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">pic</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php 
            if (!empty($data))
            {
                while($d = $data->fetch_assoc()){

        ?>
                        <tbody>
                            <tr>
                                <td>
                                  <?= $d['id']?>
                                </td>
                                <td>
                                    <?= $d['number'] ?>
                                </td>
                                <td>
                                    <?= $d['title'] ?>
                                </td>
                                <td>
                                <img height="80px" src="/uploads/<?= $d['image'] ?>" alt="Italian Trulli">
                                </td>
                                <td>
                                
                                  <a class="btn btn-danger" href="delete.php?imgid=<?= $d['id'] ?>">Delete</a>
                                  <a class="btn btn-info" href="edit.php?imgid=<?= $d['id'] ?>">Edit</a>
                                </td>
                            
                            </tr>
                        </tbody>
        <?php 
                 }}
           
             else
            {
              echo "NO Data Found ";
            }   ?>

     
                    </table>
               
            </div>

            <?php include("fotter.php") ?>

    </body>

    </html>