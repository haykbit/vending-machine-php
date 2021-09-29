<?php
include("../database/db.php");

if (isset($_POST["buy_product"])) {
    $sql = "UPDATE products SET stock=stock-1 WHERE selector='$_POST[selector]'";
    $result = $conn->query($sql);

    if ($result) {
        echo "Stock Updated";
    } else {
        echo "0 results";
    }
}
