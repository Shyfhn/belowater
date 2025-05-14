<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Card Carousel</title>
    <style>
    .carousel {
    position: relative;
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    overflow: hidden;
}

.cards {
    display: flex;
    transition: transform 0.5s ease;
}

.card {
    flex: 0 0 auto;
    width: 100%;
}

.card img {
    width: 100%;
    height: auto;
}

.prev,
.next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px;
    z-index: 1;
}

.prev {
    left: 0;
}

.next {
    right: 0;
}

  </style>
</head>
<body>
  <div class="carousel">
    <div class="cards">
      <div class="card">
        <img src="img/laut (1).jpg" alt="Image 1">
      </div>
      <div class="card">
        <img src="img/laut (2).jpg" alt="Image 2">
      </div>
      <div class="card">
        <img src="img/laut (3).jpg" alt="Image 3">
      </div>
    </div>
    <button class="prev" onclick="moveCarousel(-1)">&#10094;</button>
    <button class="next" onclick="moveCarousel(1)">&#10095;</button>
  </div>
  
  <script>
    let currentIndex = 0;
const cards = document.querySelector('.cards');
const cardWidth = document.querySelector('.card').clientWidth;

function moveCarousel(direction) {
  const newIndex = currentIndex + direction;
  if (newIndex < 0 || newIndex >= cards.children.length) return;
  currentIndex = newIndex;
  cards.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}

  </script>
</body>
</html>
