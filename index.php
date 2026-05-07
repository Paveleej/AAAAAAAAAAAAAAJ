<!DOCTYPE html>
<head>
    <title>Kevin Lin</title>
</head>
<body>


<?php

$body = 0;

if (isset($_GET["počet_očí"]) && isset($_GET["plochost"]) && isset($_GET["radvánec"])) {
    if ($_GET["počet_očí"] == 2) {
    $body++;
    }
    if ($_GET["plochost"] == "Ne") {
    $body++;
    }
    if ($_GET["radvánec"] == "Ano") {
    $body++;
    }

}


if (isset($_GET["počet_očí"])) {
    echo "<h1> Tvůj počet bodů je $body </h1>";
}
else{
     echo "<h1>Stala se chyba, zkus to znovu</h1>";
     }
?>


<form>
    <label>Kolik očí má člověk</label>
    <input type="number" name="počet_očí">


    <br>


    <label>Je Země plochá?</label>
    <input type="text" name="plochost">


    <br>


    <label>Znamená kolečko radvánec?</label>
    <input type="text" name="radvánec">


    <br>


    <button>Odeslat</button>
</form>
</body>
</html>

