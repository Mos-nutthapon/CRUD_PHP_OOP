<?php 
    session_start();
    include_once('functions.php');
    $userdata = new DB_con();
    
    if (isset($_POST['login'])){
        $uname = $_POST['username'];
        $password = md5($_POST['password']);

        $result = $userdata->signin($uname, $password);
        $num = mysqli_fetch_array($result);

        if ($num > 0 ){
            $_SESSION['id'] = $num['id'];
            $_SESSION['fname'] = $num['fullname'];
            $_SESSION['userlevel'] = $num['userlevel'];
            if ($_SESSION['userlevel'] == 'u'){
                echo "<script>alert('User level!!');</script>";
                echo "<script>alert('Login Successful!');</script>";
                echo "<script>window.location.href='homepage.php'</script>";    
            }

            if ($_SESSION['userlevel'] == 'A'){
                echo "<script>alert('Admin level!!');</script>";
                echo "<script>alert('Login Successful!');</script>";
            echo "<script>window.location.href='homepageadmin.php'</script>";
            }

        }else{
            echo "<script>alert('Something went wrong! Please try again.');</script>";
            echo "<script>window.location.href='signin.php'</script>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Login Page</h1>
        <hr>
        <form  id="form" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" name="username" required>
            <span id="usernameavailable"></span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" name="login" class="btn btn-success">Login</button>
        <a href="register.php" class="btn btn-primary">Register</a>
        </form>
    </div>
    




    <script>
        < src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></>
        < src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></>
    </script>
</body>
</html>