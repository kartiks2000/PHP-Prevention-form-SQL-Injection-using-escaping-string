<?php 
    include "db.php";
    include "show.php";

    if(isset($_POST['delete'])){
        $myid = $_POST['selid'];

        $query = "DELETE FROM users WHERE id='$myid'" ;

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
        <form action="dem_delete.php" method="post">
            <h1>Choose ID to delete data : </h1>
            <select name="selid">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        echo "<option value='$id' >$id</option>"; 
                    }
                ?>
            </select>
            <input type="submit" value="Delete" name="delete"/>
        </form>
    <body>    
<html> 