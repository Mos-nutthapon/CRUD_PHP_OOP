<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'Moshaza123pb$');
    define('DB_NAME', 'register_oop');

    class DB_con {
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;
            
            if (mysqli_connect_errno()) {
                echo "Failed to connect to Database: "  . mysqli__connect_error(); 
            }else{
                
            }
        }
        
        function usernameavailable($uname){
            $checkuser = mysqli_query($this->dbcon, "SELECT username FROM tblusers WHERE username = '$uname'");
            return $checkuser;
        }

        function insert($firstname,	$lastname,	$email,	$phonenumber){
            $result = mysqli_query($this->dbcon, "INSERT INTO datausers(firstname,	lastname,	email,	phonenumber) VALUES('$firstname',	'$lastname',	'$email',	'$phonenumber')"); 
            return $result;
        }

        function fetchdata(){
            $result = mysqli_query($this->dbcon, "SELECT * FROM datausers");
            return $result;
        }

        function fetchonerecord($userid){
            $result = mysqli_query($this->dbcon, "SELECT * FROM datausers WHERE  id = '$userid'");
            return $result;
        }


        function update($firstname,	$lastname,	$email,	$phonenumber, $userid){
            $result = mysqli_query($this->dbcon, "UPDATE datausers SET 
                firstname = '$firstname',
                lastname = '$lastname',
                email = '$email',
                phonenumber = '$phonenumber'
                where id = '$userid'
            ");
            return $result; 
        }

        function delete($userid){
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM datausers WHERE  id = '$userid'");
            return $deleterecord;
        }

        function registration($fname, $uname, $uemail, $password){
            $reg = mysqli_query($this->dbcon, "INSERT INTO tblusers(fullname,username,useremail,password,userlevel)VALUES('$fname','$uname', '$uemail', '$password','u') ");
            return $reg;
        } 
    
        function signin($uname,$password){
            $singinquery = mysqli_query($this->dbcon, "SELECT id, fullname, userlevel FROM tblusers WHERE username = '$uname' AND password = '$password'");
            return $singinquery;
        }
    
    }
    
        #$testcon = new DB_con(); //เรียกใช้class DB_con
       
?>