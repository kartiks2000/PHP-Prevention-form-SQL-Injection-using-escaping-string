

    <?php 
        include "db.php";
        include "show.php";  
        
    ?>            

    <html>
        <head>
            <title>PHP fetch data...</title>
        </head>
        <body>
            <div>
                <?php

                    // while($row = mysqli_fetch_row($result)){
                    //     print_r($row);
                    // }

                    // OR... it gives us a associative array

                    while($row = mysqli_fetch_assoc($result)){
                        print_r($row);
                    }

                ?>
            </div>
        </body>
    </html>    