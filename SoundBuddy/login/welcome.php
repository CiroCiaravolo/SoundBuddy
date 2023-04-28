<html lang="it"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatibile" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SuondBuddy</title>
    <link rel="stylesheet" href="../stili.css" >

</head>

<body>
<header>
        <p class="welcome-message">
        <?php
            $username=$_GET['username'];
            echo "Welcome $username";
        ?>
        </p>
        <img src="../logo.jpg.png"/>
        <nav class="navigation">
            <a href="#"> Home</a>
            <a href="#"> About</a>
            <a href="#"> Servizi</a>
            <a href="#"> Contatti</a>
        </nav>  
</header>

<video src="../video_ragazza.mp4" muted loop autoplay></video>

<div class="overlay"></div>
<div class="text">
    <p>Soundbuddy è un sito progettato per consigliarti la musica migliore per TE, in funzione del tuo umore, tutto questo con un solo click</p>
    <h2>LE TUE SENSAZIONI LA NOSTRA PREOCCUPAZIONE</h2>
</div>
<div class="box">
    <h1>Come ti senti?</h1>
    <form>
        <input type="text" id="emozioni" name="emozioni" placeholder="Inserisci...">
        <input type="submit" name="" value="Start">
    </form>


<script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>