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
                $q1="select * from utente where email= $1";
                $result=pg_query_params($dbconn, $q1, array($email));
                if ($tuple=pg_fetch_array($result, null, PGSQL_ASSOC)) {
                    echo "<h1> Spiacente, l'indirizzo email non e' disponibile</h1>
                        Se vuoi, <a href=../SoundBuddy.html> clicca qui per loggarti </a>";
                }
                else {
                    $username = $_POST['inputUsername'];
                    $password = password_hash($_POST['inputPassword'], PASSWORD_DEFAULT);
                    $q2 = "insert into utente values ($1,$2,$3)";
                    $data = pg_query_params($dbconn, $q2,
                        array($username, $email, $password));
                    if ($data) {
                        echo "<h1> Registrazione completata. 
                            Puoi iniziare a usare il sito <br/></h1>
                            <a href=../SoundBuddy.html> Clicca qui </a>
                            per loggarti!";
                    }
                }
            }
        ?> 
    </body>
</html>