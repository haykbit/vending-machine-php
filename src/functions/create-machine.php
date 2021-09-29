<?php
function build_table($array)
{
    $count = 0;
    foreach ($array as $key => $value) {
        echo '
                <div class="product-item">
                    <div class="image">
                        <img src="assets/product-' . $count . '.png " alt="" width="30px" height="30px"/>
                    </div>';
        foreach ($value as $key2) {
            echo '
                    <div class="product-info">';
            echo $key2;
            echo '
                    </div>
                </div>';
        }
        $count = $count + 1;
    }
}

$array = array();

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        array_push($array, array('name' => $row["name"], 'price' => $row["price"], 'email' => $row["selector"]),);
    }
} else {
    echo "0 results";
}
