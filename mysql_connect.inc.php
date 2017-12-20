<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$link = mysqli_connect("localhost","104021097","#3mjF3uFV","104021097_");
if(!$link){
    echo "Error:Unable to connect to MySQL.".PHP_EOL;
    echo "Debugging error:".mysqli_connect_error().PHP_EOL;
    echo "Debugging error:".mysqli_connect_error().PHP_EOL;
    exit;
}

?>