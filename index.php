<?php
    if (session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
?>

<html>
    <!--Initialization-->
    <head>
        <title>Home</title>
    </head>

    <!--Webpage Elems-->
    <body>
        <p>Creating a file!</p>
    </body>
</html>

<?php
        $aschur = fopen("aschur.txt", "a") or die("Theip ar an comhad a oscailt!");
        $eolas = "Seo é an comhad téaca atá scríofa ag index.php";
        fwrite($aschur, $eolas . PHP_EOL);
        fclose($aschur);
?>