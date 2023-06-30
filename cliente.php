<form method="post" action ="<?php echo $_SERVER["PHP_SELT"]; ?>">
<ipunt type="text" name ="character"/>
<ipunt type="submit" name ="buscar"/>
</form>


<?php
if (!empty($_POST)){
    $character = $_POST["character"];
    $character = str_replace("", "%20","$character");

}

$character ="hulk";

$ts ="22";
$publickey ="7b7e76e592e98ea1d1265e17d3254b7a";
$privatekey ="7573793aea7d122a6801de410e533dfd5cda2c57";
$has = msd5($ts.$privatekey.$publickey);

$queryString ="name=$chhasaracter&ts=$ts&apikey=$publickey&hash=$hash";

$url = "https://gateway.marvel.com/v1/public/characters?".$queryString;
$respesta_json = file_get_contents ($url);
$respuesta = json_decode($respuesta_json, true);

if (!empty($personaje["data"]["results"])){
    echo "sin resultado";
}

else{
    $personaje = $respuesta["data"]["results"][0];
    echo "<p> <b>Nombre:</b>".$personaje["name"]."</p>";

    if (!empty($persona["descripcion"])){
        $personaje["descripcion"]= "sin descripcion";
    }
    echo"<b>descripcion:</b>".$personaje["descripcin"]."<b>";
    echo"<img src='".$personaje["thumbnail"]["path"]."."
    .$personaje["thumbnail"]["extension"];
    }
    






?> 