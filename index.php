<?php
    include_once "ceann.php";
?>

<html>
    <head>
        <title>Baile</title>
    </head>
    <body>
        <p>Ag cruthú comhaid</p>
    </body>
</html>

<?php
    $aschur = fopen("aschur.txt", "a") or die("Theip ar an comhad a oscailt!");
    $eolas = "Seo é an comhad téaca atá scríofa ag index.php";
    fwrite($aschur, $eolas . PHP_EOL);
    fclose($aschur);
?>