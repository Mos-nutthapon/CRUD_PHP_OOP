<?php

    include_once('functions.php');

    if(isset($_GET['id'])){
        $userid = $_GET['id'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($userid);

        if ($sql) {
            echo "<script>alert('Delete Successful!');</script>";
            echo "<script>window.location.href='data.php'</script>";
        }
    }

?>