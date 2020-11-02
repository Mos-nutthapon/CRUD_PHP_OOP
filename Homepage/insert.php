<?php
    session_start();
    
    if ($_SESSION['id'] == ""){
        header("location: signin.php");
    }else{
?>
<?php
  include_once('functions.php');

  $insertdata = new DB_con();
  if(isset($_POST['insert'])){
     $fname =$_POST['firstname'];
     $lname =$_POST['lastname'];
     $email =$_POST['email'];
     $phonenumber =$_POST['phonenumber'];

     $sql = $insertdata->insert($fname,$lname,$email,$phonenumber);

     if($sql){
        echo "<script>alert('Insert Successfully');</script>?";
        echo "<script>window.location.href='data.php'</script>";
     } else{
        echo "<script>alert('Something went wrong');</script>?";
        echo "<script>window.location.href='insert.php'</script>";
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
                        <a href="homepageadmin.php" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="data.php.php" class="nav-link active" aria-current="page">Data</a>
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
        <a href="data.php" class="btn btn-primary mt-3">Go Back</a>
        <hr> 
        <h1 class="mt-5">Insert Data</h1>
        <form action="" method='post'>
            <div class="mb-3">
                <label for="firstname" class="form-label">FirstName</label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">LastName</label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phonenumber">PhoneNumber</label>
                <input type="text" class="form-control" name="phonenumber" required>
            </div>
            <button type="submit" name="insert" class="btn btn-success" required>Insert</button>
            
        </form>
    </div>



    <script src="js/bootstrap.min.js"></script>
</body>

</html>

<?php
}
?>