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
$sql = "SELECT image_url FROM images";
$result = $conn->query($sql);

// Store image URLs in an array
$images = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $images[] = $row["image_url"];
    }
}
$sql = "SELECT image_url FROM images LIMIT 1"; // Limit 1 to get only one image URL
$result = $conn->query($sql);

// Variable to store the background image URL
$backgroundImageUrl = "";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $backgroundImageUrl = $row["image_url"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Ram Hostels</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap');
* {
    font-family: "Fjalla One", sans-serif;
    font-weight: 400;
    font-style: normal;
    padding: 0;
    margin: 0;
    
}

body {
    display: flex;
    flex-direction: column;
    background-color: wheat;
}
.top {
    position: relative;
    top: 0px;
    height: 50vw;
    width: 100%;
    background: center/cover no-repeat;
    box-shadow: inset 0 0 200px 70px rgba(255, 0, 0, 0.5);
    color: wheat;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.top::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(84, 1, 1, 0.527); 
}
.navbar {
    padding: 5vw;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    position: relative;
    z-index: 2;
}

.left > a {
    padding-right: 2vw;
    text-decoration: none;
    font-size: 3vh;
    color: white;
}

.left > a:hover {
    text-decoration: underline;
}
.left > .user{
    padding: 1vw 1vw 1vw 1vw;
    font-size: 3vh;
    background: rgb(0, 0, 0, 0);
    color: #ffff;
    border: none;

}
.left > .user:hover{
    border: 2px solid #ffff;
    color: blue;
    cursor: pointer;
}
.right {
    font-size: 5vh;
}
.carousel-image {
    height: calc(100% + 5vw);
    width: 100%;
    background-size: cover;
    position: relative;
    z-index: -1;
    margin-top: -20vw;
    animation: fadeIn 5s infinite alternate; 
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            50%{
                opacity: 1;
            }
            100%{
                opacity: 0;
            }
        }

.top > p {
    position: absolute;
    bottom: 5vw;
    padding: 5vw;
    font-size: 10vh;
    font-family: "Dancing Script", cursive;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: normal;
}

#about {
    margin: 10vw;
    padding: 5vw;
    font-size: 3vh;
    display: flex;
}
#about > .image{
    height: 31vw;
    width: 215vw;
    border: 1px solid red;
    background: url(https://archello.s3.eu-central-1.amazonaws.com/images/2018/12/17/1--1-.1545052926.9013.jpg);
    background-size: cover;
}

#about>.write{
    padding-left: 5vw;
}
#about > .write > h3 {
    padding: 25px 0px 25px 0;
}
.footer{
    position: relative;
    bottom: 0px;
    width: 100%;
    background-color: rgb(114, 1, 1);
    box-shadow: inset 0 0 200px 70px rgba(255, 0, 0, 0.5);
    color: wheat;
    overflow: hidden;
}

.footer-content{
    padding: 3vw;
}
.about > h2{
    padding-bottom: 3vw;
}
.contact{
    padding-top: 2vw;
}
.contact-form{
    padding-top: 3vw;
}
.contact > form >input{
    padding-left: 3vw;
}
.footer-bottom{
    padding: 3vw;
}
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
.register{
    height: 5vh;
    border: 1px solid black;
    padding: 15vw;
    margin: 25vw 0vw 25vw 0vw;
    background-color: rgb(114, 1, 1);
    box-shadow: inset 0 0 200px 70px rgba(255, 0, 0, 0.5);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: wheat;
    overflow: hidden;
}
.register > h2{
    padding: 0vh 0vh 5vh 0vh;
    font-size: 5vw;
    text-shadow: -2px 3px BLACK;
}
.register > button{
    height: 5vw;
    padding: 1vw 5vw 5vw 5vw;
    font-size: 3vw;
    background-color: rgb(0,0,0,0);
    border: 4px solid wheat;
    border-radius: 2vw;
    color: wheat;
}
.register > button:hover {
    animation: shadowMove 1s infinite alternate;
}

@keyframes shadowMove {
    0% {
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    }
    100% {
        box-shadow: 20px 20px 20px rgba(255, 255, 255, 0.5);
    }
}
.register >button.clicked{
    color: blue;
}
    </style>
</head>
<body>
    <div class="bg"></div>
    <div class="top">
        <nav class="navbar">
            <div class="right">
                <h2>Ram Hostels</h2>
            </div>
            <div class="left">
                <a href="#about">About</a><a href="#">Tarrifs</a><a href="#">Contact Us</a><button class="user">Sign in</button>
                <div class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form action="#" method="post">
                            <label for="aid">Aplication ID:</label>
                            <input type="text" name="aid" id="aid"><br><br>
                            <label for="pass">Password</label>
                            <input type="password" name="pass" id="pass"><br><br>
                            <button name="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <div class="carousel-image"></div>
        <p>We give you peace into your daily lifestyle</p>
    </div>
    <div id="about">
    <div class="image" style="background-image: url('<?php if (isset($_COOKIE['my_cookie'])) {
    $data_from_cookie = $_COOKIE['my_cookie'];
    echo $data_from_cookie;
} ?>');"></div>
        <div class="write">
            
        <h3><b>About The Hostel</b></h3>
        <p>Welcome to Ram Hostel,
         your home away from home since 1990! 
         Situated in the heart of Kolkata, 
         our hostel has been providing comfortable
        and affordable accommodation for travelers 
        from around the globe for over three decades.</p>
        <h3><b>Our History</b></h3>
        <p>Established in 1990, Ram Hostel was founded with a vision to create a welcoming and inclusive space for travelers to connect, explore, and create unforgettable memories. Over the years, we have proudly hosted countless guests, each contributing to the vibrant tapestry of experiences that define our hostel.</p>
        <h3><b>Our Accommodation</b></h3>
        <p>At Ram Hostel, we offer a range of accommodation options to suit every traveler's needs. From cozy dormitories to private rooms, each space is designed with your comfort and convenience in mind. Our facilities include [list of amenities], ensuring that your stay with us is both enjoyable and hassle-free.</p></div>
    </div>
    <div class="register">
        <h2>For Hostel aplication register now</h2>
        <button id="reg">Register Now!!</button>
    </div>
    <footer class="footer">
        <div class="footer-content">
            <div class="about">
                <h2>Our Address:</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non mauris vitae erat consequat auctor eu in elit. </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> 123-456-789</span><br>
                    <span><i class="fas fa-envelope"></i> info@example.com</span>
                </div>
            </div>
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form action="#" method="post">
                    <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
                    <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 Hostel Management App. All rights reserved.
        </div>
    </footer>
    <script>
       document.addEventListener('DOMContentLoaded', function(){
        const images = <?php echo json_encode($images); ?>;
        const carouselImage = document.querySelector('.carousel-image');
        let currentIndex = 0;

        function changeBackgroundImage() {
            carouselImage.style.backgroundImage = `url(${images[currentIndex]})`;
            currentIndex = (currentIndex + 1) % images.length;
        }
        changeBackgroundImage();
        // Change background image every 5 seconds (adjust as needed)
        setInterval(changeBackgroundImage, 5000);
})
var modal=document.querySelector(".modal");
var btn=document.querySelector(".user");
var span=document.getElementsByClassName("close")[0];
btn.onclick=function(){
    modal.style.display="block";
}
span.onclick=function(){
    modal.style.display="none";
}
window.onclick=function(event){
    if(event.target==modal){
        modal.style.display="none";
    }
}
const regBtn=document.getElementById("reg");
regBtn.addEventListener("click", function() {
    this.classList.toggle("clicked");
    window.location.href="check.html";
});
    </script>
</body>
</html>
