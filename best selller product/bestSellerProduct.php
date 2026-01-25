<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sunset Bouquet</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="product-minimal">
        <h1 class="product-name">Sunset Bouquet</h1>

        <div class="image-wrapper">
            <img id="sliderImage" src="../assets/img/1 1 (1).png" alt="Sunset Bouquet">
        </div>

        <div class="slider-controls">
            <button id="prevBtn">‹</button>
            <button id="nextBtn">›</button>
        </div>

        <p class="product-text">
            This is a detailed view of the Sunset Bouquet.
        </p>

        <a href="../Best Sellers/bestSellers.html" class="back-btn">
            ← Back to Best Sellers
        </a>
    </section>

    <script>
        
const images = [
    "../assets/img/1 1 (1).png",
    "../assets/img/flower.jpg",
    "../assets/img/yellow.jpg",
];

let currentIndex = 0;

const sliderImage = document.getElementById("sliderImage");
const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");

nextBtn.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % images.length;
    sliderImage.src = images[currentIndex];
});

prevBtn.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    sliderImage.src = images[currentIndex];
});


    </script>

</body>

</html>