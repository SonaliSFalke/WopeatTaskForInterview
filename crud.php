<?php
include 'db.php';

// Create a new slide
function createSlide($tab_id, $title, $description, $image) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO slides (tab_id, title, description, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $tab_id, $title, $description, $image);
    $stmt->execute();
    $stmt->close();
}

// Read slides by tab
function getSlidesByTab($tab_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM slides WHERE tab_id = ?");
    $stmt->bind_param("i", $tab_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $slides = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $slides;
}

// Update a slide
function updateSlide($id, $title, $description, $image) {
    global $conn;
    $stmt = $conn->prepare("UPDATE slides SET title = ?, description = ?, image = ? WHERE id = ?");
    $stmt->bind_param("sssi", $title, $description, $image, $id);
    $stmt->execute();
    $stmt->close();
}

// Delete a slide
function deleteSlide($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM slides WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}
?>
