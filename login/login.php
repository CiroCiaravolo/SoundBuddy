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
                $email = $_POST['inputEmail'];
                $q1 = "select * from utente where email= $1";
                $result = pg_query_params($dbconn, $q1, array($email));
                if (!($tuple=pg_fetch_array($result, null, PGSQL_ASSOC))) {
                    echo "<h1>Non sembra che ti sia registrato/a</h1>
                        <a href=../SoundBuddy.html> Clicca qui per farlo </a>";
                }
                else {
                    $password = $_POST['inputPassword']; //$password = $_POST['inputPassword']; //$password = password_hash($_POST['inputPassword'], PASSWORD_DEFAULT);
                    $q2 = "select * from utente where email = $1 and paswd = $2";
                    $result = pg_query_params($dbconn, $q2, array($email,$password));
                    if (!($tuple=pg_fetch_array($result, null, PGSQL_ASSOC))) {
                        echo "<h1> La password e' sbagliata! </h1>
                            <a href=../SoundBuddy.html> Clicca qui per loggarti </a>";
                    }
                    else {
                        $username = $tuple['username'];
                        echo "<a href=../welcome.php?username=$username> Premi qui </a>
                            per inziare a usare il sito";
                    }
                }
            }
        ?> 
    </body>
</html>