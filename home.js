document.addEventListener('DOMContentLoaded', function(){
    const  images=[
        '1.png',
        '1.jpg',
    ];
    const carouselImage = document.querySelector('.carousel-image');
    let currentIndex = 0;

    function changeBackgroundImage() {
        carouselImage.style.backgroundImage = `url(${images[currentIndex]})`;
        currentIndex = (currentIndex + 1) % images.length;
    }
    changeBackgroundImage();
    // Change background image every 3 seconds (adjust as needed)
    setInterval(changeBackgroundImage, 5000);
})
