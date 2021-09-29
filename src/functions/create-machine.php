<?php
function build_table($array)
{
    $html = '<table>';
    $html .= '<tr>';
    foreach ($array[0] as $key => $value) {
        $html .= '<th>' . htmlspecialchars($key) . '</th>';
    }
    $html .= '</tr>';

    foreach ($array as $key => $value) {
        $html .= '<tr>';
        foreach ($value as $key2 => $value2) {
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</table>';
    return $html;
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
