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
            <div class="container">
                <form action="action.php"  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >Name</label>
                        <input class="form-control" required  placeholder="Name" name="title">
                    </div>
                    <div class="form-group">
                        <label >Mobile_number</label>
                        <input class="form-control" required placeholder="Number" name="number">
                    </div>
                    <div class="form-group">
                        <label >Pic Upload</label>
                        <input type="file" required name="image" />
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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