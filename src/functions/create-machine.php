<?php

function createMachine($array)
{
    $count = 0;
    foreach ($array as $key => $value) {
        echo '
                <div class="product-item">
                    <div class="image">
                        <img id="image-' . $count . '" src="assets/product-' . $count . '.png " alt="" width="30px" height="30px"/>
                    </div>';
        echo '
                    <div class="product-info">';
        echo '<div class="section-info">';
        foreach ($value as $key2 => $value) {
            if (is_numeric($value)) {
                if ($value == 1) {
                    echo '<h3 id="price-text">' . $value . '.00 €</h3></div>';
                } else {
                    echo '<h3 id="price-text">' . $value . ' €</h3></div>';
                }
            } else echo '<h3 id="selector-text">' . $value . '</h3>';
        }
        echo '
        </div>
    </div>';
        $count = $count + 1;
    }
}

$array = array();

$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        array_push($array, array('name' => $row["name"], 'price' => $row["price"], 'email' => $row["selector"]),);
    }
} else {
    echo "0 results";
}
