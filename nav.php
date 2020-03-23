<?php 
   $var = $_SERVER['REQUEST_URI'] ;
   $var  = trim($var,'/');
?>

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand" href="#">Contuct Manager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  ">
                    <a class="nav-link <?php if($var==''){echo 'active';}?> " href="/">Home  <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if($var=='create.php'){echo 'active';} ?> " href="create.php">Add Contuct</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php if($var=='view.php'){echo 'active';} ?> " href="view.php">See Contuct</a>
                </li>
                

            </ul>
            <form class="form-inline my-2 my-lg-0"  method="GET" action="search.php">
                <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-danger my-2 my-sm-0"  type="submit">Search</button>
            </form>
        </div>
    </nav>