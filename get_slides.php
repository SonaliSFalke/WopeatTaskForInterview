

<?php

include 'db.php';
// include 'style.css';

$tab_id = $_GET['tab_id'];
$sql = "SELECT * FROM slides WHERE tab_id = $tab_id";
$result = $conn->query($sql);
$slides = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $slides .= "<div class='carousel-item' style='text-align:center;'>
        <img src='{$row['image']}' class='d-none w-100 ' alt='{$row['title']}'>
        <div class='carousel-caption d-none d-md-block'>
            
        </div>
        <div>
           <p>Digital Learning Infrastructure</p>
           <h4>Usability enhancement  and <br> Trainning For Transaction <br>portal for Customers</h4>
        
           <a style='padding-top:3%'>Learn More -> </a>
        </div>
    </div>";
    }
}

echo $slides;
?>

<link rel='stylesheet' type='text/css' href='style.css'>