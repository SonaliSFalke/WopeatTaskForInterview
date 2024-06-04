<?php
// include 'db.php';
include 'db.php';

$sql = "SELECT * FROM tabs";
$result = $conn->query($sql);
$tabs = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tabs .= "<li class='nav-item'><a class='nav-link tab-link' data-id='{$row['id']}' href='#'><img src='{$row["img"]}'>{$row['name']} </a></li>";
    }
}

echo $tabs;
?>
