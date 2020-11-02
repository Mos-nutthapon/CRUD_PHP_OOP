<?php 
    include_once('functions.php');
    $userdata = new DB_con();

    if (isset($_POST['submit'])){
        $fname = $_POST['fullname'];
        $uname = $_POST['username'];
        $uemail = $_POST['email'];
        $password = md5($_POST['password']);
        
        $sql = $userdata->registration($fname, $uname, $uemail, $password);
        
        if ($sql) {
            echo "<script>alert('Registor Successful!');</script>";
            echo "<script>window.location.href='homepage.php'</script>";
        } else {
            echo "<script>alert('Something went wrong! Please try again.');</script>";
            echo "<script>window.location.href='register.php'</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Register Page</h1>
        <hr>
        <form  id="form" method="POST">
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" name="username" require  onblur="checkusername(this.value)">
            <span id="usernameavailable"></span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-success">Register</button>
        </form>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function checkusername(val){
            $.ajax({
                type: 'POST',
                url:  'checkuser_available.php',
                data: 'username='+val,
                success: function(data){
                    $('#usernameavailable').html(data);
                } 


            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
</body>
</html>