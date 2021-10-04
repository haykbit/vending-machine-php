<?php
session_start();
include("../database/db.php");

function updateStock($conn)
{
    $query = "SELECT name, price, stock, selector FROM product WHERE selector='$_POST[selector]'";
    $exec = $conn->query($query);
    $row = $exec->fetch_assoc();
    $name = $row["name"];
    $price = $row["price"];
    $stock = $row["stock"];


    if ($_POST["coins"] >= $price && strcmp($stock, "0") != 0 && $_POST["selector"] != "") {
        $_SESSION["succes"] = $row["selector"];
        $sql = "UPDATE product SET stock=GREATEST(stock-1, 0) WHERE selector='$_POST[selector]'";
        $result = $conn->query($sql);
        if ($result) {
            coinChange($price);
            headerIndex();
        } else {
            echo "Error";
        }
    } else if (strcmp($stock, "0") == 0) {
        $_SESSION["errorStock"] = "$name is empty";
        headerIndex();
    } else if ($_POST["coins"] == "" && $_POST["selector"] != "") {
        $_SESSION["error"] = "Please insert coins";
        headerIndex();
    } else if ($_POST["selector"] == "" && $_POST["coins"] != "") {
        $_SESSION["error"] = "Please select product";
        headerIndex();
    } else {
        if ($_POST["coins"] < $price) {
            $_SESSION["error"] = "Please insert " . $price . "0 €";
            headerIndex();
        } else {
            $_SESSION["error"] = "Please select product and insert coins";
            headerIndex();
        }
    }
}

function coinChange($amount)
{
    $coins = floatval($_POST['coins']);
    $res = $coins - $amount;
    if ($res != 0) {
        $_SESSION["change"] = $res;
    }
}

function headerIndex()
{
    header("Location: ../index.php");
}

if (isset($_POST["buy_product"])) {
    updateStock($conn);
}
