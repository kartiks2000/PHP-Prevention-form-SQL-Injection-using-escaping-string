<?php include "db.php";

$query = "SELECT * FROM users";
                $result = mysqli_query($connect,$query);

                if(!$result){
                    echo "sorry...";
                }

?>                