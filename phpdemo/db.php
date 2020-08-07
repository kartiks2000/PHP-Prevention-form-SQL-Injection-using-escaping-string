
<?php
    $connect = mysqli_connect('localhost','root','','loginapp');

    if($connect){
        echo "Connection established....";
        
    }
    else{
        die("Connection failed....");
    }

?>