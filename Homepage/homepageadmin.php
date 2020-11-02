<?php
    session_start();

    if ($_SESSION['id'] == ""){
        header("location: signin.php");
    }else{
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#" >Moshaza</a>
            <button class="navbar-toggler" type="button" data-toggle=collapse data-target="#navbarDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="homepageadmin.php" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="data.php" class="nav-link">Data</a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
                    <ul class="navbar-nav ml-auto flex-nowrap">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page"><?php echo $_SESSION['fname']; ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                        </li>
                    </ul>
                </div>
             </div>    
        </div>
    </nav>

    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1534791548804-ccf7e66bc710?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                    width="100%" alt="">
                <div class="card-body">
                    <h5 class="class-title"></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident animi
                        nobis vero ullam et voluptas sit reprehenderit ut sint.</p>
                    <a href="http://" class="btn btn-primary">Lean mor</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1534791548804-ccf7e66bc710?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                    width="100%" alt="">
                <div class="card-body">
                    <h5 class="class-title"></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident animi
                        nobis vero ullam et voluptas sit reprehenderit ut sint.</p>
                    <a href="http://" class="btn btn-primary">Lean mor</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1534791548804-ccf7e66bc710?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                    width="100%" alt="">
                <div class="card-body">
                    <h5 class="class-title"></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident animi
                        nobis vero ullam et voluptas sit reprehenderit ut sint.</p>
                    <a href="http://" class="btn btn-primary">Lean mor</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1534791548804-ccf7e66bc710?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                    width="100%" alt="">
                <div class="card-body">
                    <h5 class="class-title"></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident animi
                        nobis vero ullam et voluptas sit reprehenderit ut sint.</p>
                    <a href="http://" class="btn btn-primary">Lean mor</a>
                </div>
            </div>
        </div>
    </div>




    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
}
?>