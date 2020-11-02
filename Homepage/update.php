<?php
    session_start();

    if ($_SESSION['id'] == ""){
        header("location: signin.php");
    }else{
?>

<?php
    include_once('functions.php');
    $updatedata = new DB_con();

    if(isset($_POST['update'])){

        $userid = $_GET['id'];
        $fname =$_POST['firstname'];
        $lname =$_POST['lastname'];
        $email =$_POST['email'];
        $phonenumber =$_POST['phonenumber'];

        $sql = $updatedata->update($fname,$lname,$email,$phonenumber,$userid);

        if($sql){
            echo "<script>alert('Update Successfully');</script>?";
            echo "<script>window.location.href='data.php'</script>";
         } else{
            echo "<script>alert('Something went wrong');</script>?";
            echo "<script>window.location.href='update.php'</script>";
         }
    }
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

    <div class="container">
        <h1 class="mt-5">Update Data</h1>
        <hr>
        <?php
            $userid = $_GET['id'];
            $updateuser = new DB_con();
            $sql = $updateuser->fetchonerecord($userid);
            while($row = mysqli_fetch_array($sql)) {
        ?>
        <form action="" method='post'>
            <div class="mb-3">
                <label for="firstname" class="form-label">FirstName</label>
                <input type="text" class="form-control" name="firstname"  value="<?php echo $row['firstname'];?>" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">LastName</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname'];?>" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">PhoneNumber</label>
                <input type="text" class="form-control" name="phonenumber" value="<?php echo $row['phonenumber'];?>" required>
            </div>
            <?php  } ?>
            <button type="submit" name="update" class="btn btn-success" required>Update</button>
            
        </form>

        
    </div>




    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
}
?>