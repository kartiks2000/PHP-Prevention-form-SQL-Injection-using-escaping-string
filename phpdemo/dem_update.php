<?php 
    include "db.php";
    include "show.php";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $myid = $_POST['selid'];

        $query = "UPDATE users SET username='$username',password='$password' WHERE id='$myid'" ;

        $result = mysqli_query($connect,$query);

        if(!$result){
            die("Sorry, cant update...");
        }
        else{
            echo "Successfully updated....";
        }

    }

?>


<html>
    <head>
        <title>Updating data...</title>
    </head>
    <body>
        <form action="dem_update.php" method="post">
            <h2>please enter the new USERNAME :</h2>
            <input type="text" placeholder="username" name="username"/>
            <h2>please enter the new PASSWORD :</h2>
            <input type="text" placeholder="password" name="password"/>
            <h1>Please select the id you want to update</h1>
            <select name="selid">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        echo "<option value='$id' >$id</option>"; 
                    }
                ?>
            </select>
            <input type="submit" value="update" name="submit"/>
        </form>
    <body>    
<html> 