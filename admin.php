<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for adding a new image
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn'])) {
    $iurl = $_POST['iurl'];
    $sql = "INSERT INTO `images`(`image_url`) VALUES ('$iurl')";
    if ($conn->query($sql)) {
        echo "<script>alert('Image added');</script>";
    } else {
        echo $conn->error;
    }
}

// Check if the form is submitted for deleting an image
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete'])) {
    $imageId = $_POST['delete'];
    $sql = "DELETE FROM `images` WHERE id = $imageId";
    if ($conn->query($sql)) {
        echo "<script>alert('Image deleted');</script>";
    } else {
        echo $conn->error;
    }
}

// Fetch image URLs from the database
$sql = "SELECT id, image_url FROM images";
$result = $conn->query($sql);

$images = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .image-container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .image-card {
            margin: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .image-card img {
            max-width: 200px;
            max-height: 200px;
        }
        .delete-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Admin Portal</h1>
    <form action="#" method="post">
        <label for="iurl">Enter the Image URL</label>
        <input type="url" name="iurl">
        <button name="btn">Add Image</button>
    </form>

    <div class="image-container">
        <?php foreach ($images as $image) : ?>
            <div class="image-card">
                <button class="delete-button" onclick="deleteImage(<?php echo $image['id']; ?>)">Delete</button>
                <img src="<?php echo $image['image_url']; ?>" alt="Image">
            </div>
        <?php endforeach; ?>
    </div>
    <form action="#" method="post">
        <label for="selected_image">Select Image for About Section:</label>
        <select name="selected_image">
            <option value="">Select an image</option>
            <?php foreach ($images as $image) : ?>
                <option value="<?php echo $image['image_url']; ?>"><?php echo $image['image_url']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="select_image_btn">Select Image</button>
    </form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['select_image_btn'])){
        $selected_image=$_POST['selected_image'];
       setcookie("my_cookie", $selected_image, time() + (10 * 365 * 24 * 60 * 60), "/");
       ?>
       <script> alert("Image Uploaded!");</script>
       <?php

    }
}
?>
    <script>
        function deleteImage(imageId) {
            if (confirm("Are you sure you want to delete this image?")) {
                document.querySelector('[name="delete"]').value = imageId;
                document.querySelector('[name="deleteForm"]').submit();
            }
        }
        function showSelectedImageAlert() {
            var selectedImage = document.querySelector('[name="selected_image"]').value;
            if (selectedImage !== "") {
                alert("Image selected: " + selectedImage);
                return true; // Allow form submission
            } else {
                alert("Please select an image.");
                return false; // Prevent form submission
            }
        }

    <form action="#" method="post" name="deleteForm">
        <input type="hidden" name="delete">
    </form>
</body>
</html>
