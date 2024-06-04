<?php
include 'db.php';

$tab_id = $_GET['tab_id'];
$sql = "SELECT * FROM slides WHERE tab_id = $tab_id";
$result = $conn->query($sql);
$slides = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $slides .= "<div class='carousel-item'>
        <img src='{$row['image']}' class='d-block w-100' alt='{$row['title']}'>
        <div class='carousel-caption d-none d-md-block'>
            <h5>{$row['title']}</h5>
            <p>{$row['description']}</p>
        </div>
    </div>";
    }
}

echo $slides;
?>
