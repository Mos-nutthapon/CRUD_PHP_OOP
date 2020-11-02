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
                        <a href="homepageadmin.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="data.php" class="nav-link active" aria-current="page">Data</a>
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

    <div class="container">
    <h1 class="mt-5">Data</h1>
    <a href="insert.php" class="btn btn-success">Go to Insert</a>
    <hr>
        <table id="mytable" class="table table-bordered table-striped">
            <thead>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Posting Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <?php
                    include_once('functions.php');
                    $fetchdata = new DB_con();
                    $sql = $fetchdata->fetchdata();
                    while($row = mysqli_fetch_array($sql)){

                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['firstname']; ?></td>
                        <td><?php echo $row['lastname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phonenumber']; ?></td>
                        <td><?php echo $row['postingdate']; ?></td>
                        <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
                    </tr>


                <?php
                    }
                ?>  
            </tbody>
        </table>
    </div>




    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
}
?>