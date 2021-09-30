<?php
session_start();
include("../database/db.php");

function updateStock($conn)
{
    $query = "SELECT name, price, stock, selector FROM products WHERE selector='$_POST[selector]'";
    $exec = $conn->query($query);
    $row = $exec->fetch_assoc();
    $name = $row["name"];
    $price = $row["price"];
    $stock = $row["stock"];


    if ($_POST["coins"] >= $price && strcmp($stock, "0") != 0 && $_POST["selector"] != "") {
        $_SESSION["succes"] = $row["selector"];
        $sql = "UPDATE products SET stock=GREATEST(stock-1, 0) WHERE selector='$_POST[selector]'";
        $result = $conn->query($sql);
        if ($result) {
            header("Location: ../index.php");
        } else {
            header("Location: ../index.php");
        }
    } else if (strcmp($stock, "0") == 0) {
        $_SESSION["errorStock"] = "$name is empty";
        header("Location: ../index.php");
    } else if ($_POST["coins"] == "") {
        $_SESSION["error"] = "Please insert more coins";
        header("Location: ../index.php");
    } else if ($_POST["selector"] == "") {
        $_SESSION["error"] = "Please select product";
        header("Location: ../index.php");
    } else {
        header("Location: ../index.php");
    }
}

if (isset($_POST["buy_product"])) {
    updateStock($conn);
}
