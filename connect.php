 
    <?php

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "graduateretainment";
    
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }
?>