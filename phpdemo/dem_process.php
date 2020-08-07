<?php include "db.php";

    if(isset($_POST['sub'])){
        $name = $_POST['uname'];
        $pswd = $_POST['password'];

        if(strlen($name) < 4){
            echo "<h1>Sorry cant auth... you....</h1>";
        }
        else{

            $name = mysqli_real_escape_string($connect,$name);
            $pswd = mysqli_real_escape_string($connect,$pswd);

            $query = "INSERT INTO users(username,password) VALUE('$name','$pswd')";
            $result = mysqli_query($connect,$query);
            if(!$result){
                die("Sorry".mysqli_error);
            }
            else{
                echo "<br><h1>WELCOME</h1>";
            }
        }

        
    }

?>