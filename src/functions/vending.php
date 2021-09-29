<?php
session_start();
include("../database/db.php");

function updateStock($conn)
{
    $query = "SELECT price FROM products WHERE selector='$_POST[selector]'";
    $exec = $conn->query($query);
    $row = $exec->fetch_assoc();
    $price = $row["price"];

    if ($_POST["coins"] >= $price) {
        $sql = "UPDATE products SET stock=stock-1 WHERE selector='$_POST[selector]'";
        $result = $conn->query($sql);
        if ($result) {
            header("Location: ../index.php");
        } else {
            header("Location: ../index.php");
        }
    } else {
        $_SESSION["error"] = "Please insert more coins";
        header("Location: ../index.php");
    }
}

if (isset($_POST["buy_product"])) {
    session_unset();
    updateStock($conn);
}
