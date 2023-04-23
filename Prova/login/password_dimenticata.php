<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: /");
}
else {
    $dbconn = pg_connect("host= port= dbname= 
                user= password=") 
                or die('Could not connect: ' . pg_last_error());
}
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            if ($dbconn) {
                echo "connesso";
            }
            else {
                echo "non";
            }
        ?> 
    </body>
</html>