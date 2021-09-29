<?php
function insertCoin($coin)
{
    $inp = file_get_contents('../utils/json/coins.json');
    $tempArray = json_decode($inp);

    if ($tempArray) {
        array_push($tempArray, $coin);
        $jsonData = json_encode($tempArray);
    } else {
        $jsonData = json_encode(array($coin));
    }

    file_put_contents('../utils/json/coins.json', $jsonData);
    $inp = file_get_contents('../utils/json/coins.json');
    $tempArray = json_decode($inp);
    header("Location: ../index.php");
}

function countCoins()
{
    $inp = file_get_contents('utils/json/coins.json');
    $tempArray = json_decode($inp);

    if (filesize('utils/json/coins.json')) var_dump(array_sum($tempArray));
}


if (isset($_POST["coin"])) {
    insertCoin($_POST["coin"]);
}
