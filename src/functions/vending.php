<?php
session_start();

include("../database/db.php");

function updateStock($conn)
{
    $sql = "UPDATE products SET stock=stock-1 WHERE selector='$_POST[selector]'";
    $result = $conn->query($sql);

    if ($result && $_POST["selector"]) {
        echo "Stock Updated";
    } else {
        echo "Choose a product";
    }
}

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
    countCoins();
    //header("Location: ../index.php");
}

function countCoins()
{
    $inp = file_get_contents('../utils/json/coins.json');
    $tempArray = json_decode($inp);
    var_dump(array_sum($tempArray));
}


if (isset($_POST["buy_product"])) {
    updateStock($conn);
}

if (isset($_POST["coin"])) {
    insertCoin($_POST["coin"]);
}
