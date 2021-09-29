<?php
session_start();
include("../database/db.php");

function updateStock($conn)
{
    $sql = "UPDATE products SET stock=stock-1 WHERE selector='$_POST[selector]'";
    $result = $conn->query($sql);

    if ($result && $_POST["selector"]) {
        $_SESSION["error"] = "";
        file_put_contents('../utils/json/coins.json', '');
        header("Location: ../index.php");
    } else {
        $_SESSION["error"] = "Please choose a product";
        header("Location: ../index.php");
    }
}

if (isset($_POST["buy_product"])) {
    updateStock($conn);
}
