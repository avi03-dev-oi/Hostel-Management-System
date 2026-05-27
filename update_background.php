<?php
// Database connection
if (isset($_POST['selected_image'])) {
    $selectedImage = $_POST['selected_image'];

    // Output the image URL as JSON
    echo json_encode(array('image_url' => $selectedImage));
}
?>
