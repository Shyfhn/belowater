<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Belowater</title>
    <style>
        .galeri-card {
            display: flex;
        }

        .container-content {
            align-content: center;
            justify-content: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 70%;
            height: 30%;
        }
        .content {
            padding-left: 2rem;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
        }

        .content h2 {
            font-size: 12pt;
            margin-bottom: 10px;
        }

        .content p {
            font-size: 8pt;
            text-align: justify;
        }

        .slider {
            max-width: 40%;
            overflow: hidden;
            position: relative;
            margin: 10 20px;
            margin-bottom: 8rem;
            border-radius: 10px;
        }

        .slides {
            display: flex;
            width: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .slides img {
            width: 100%;
            height: auto;
            flex-shrink: 0; 
        }

        .prev, .next {
            position: absolute;
            top: 50%;
            width: 48px;
            height: 48px;
            margin-top: -24px;
            color: #fff;
            background: rgba(0,0,0,0.4);
            border-radius: 50%;
            border: none;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
            transition: background 0.3s ease;
        }
        .prev:hover, .next:hover {
            background: rgb(56, 124, 192);
        }
        .prev {
            left: 10px;
        }
        .next {
            right: 10px;
        }
        .dots {
            text-align: center;
            position: absolute;
            bottom: 15px;
            width: 100%;
        }
        .dot {
            cursor: pointer;
            height: 14px;
            width: 14px;
            margin: 0 6px;
            background-color: rgba(255,255,255,0.5);
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .dot.active {
            background-color: rgb(56, 124, 192);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <h1 class="logo">
                <a href=""></a>
            </h1>
            <a href="" class="btn-sign-up">Sign Up</a>
        </nav>
        <div class="header-title">Belowater</div>
        <div class="header-bottom">
            <ul class="navbar">
                <li><a href="index.php">Beranda.</a></li>
                <li><a href="#galeri">Galeri.</a></li>
                <li><a href="#wisata">Wisata.</a></li>
            </ul>
        </div>
    </header>

    <!-- Main -->
    <main>
        <section id="about">
            <div class="about-container">
                <div class="about-text">
                    <h2>Wisata Perjalanan Bawah Laut</h2>
                </div>
                <div class="about-info">
                    Indonesia memiliki banyak kekayaan alam dan keindahan bawah laut yang beragam. Ada banyak berbagai tempat wisata yang dapat anda kunjungi dan menikmati indahnya pesona bawah laut indonesia.
                </div>
                <div class="image-gallery">
                    <div class="image-box">
                        <img src="img/laut (1).jpg" alt="img2">
                    </div>
                    <div class="image-box">
                        <img src="img/laut (2).jpg" alt="img2">
                    </div>
                    <div class="image-box">
                        <img src="img/laut (3).jpg" alt="img3">
                    </div>
                    <div class="image-box">
                        <img src="img/laut (4).jpg" alt="img4">
                    </div>
                    <div class="image-box">
                        <img src="img/laut (5).jpg" alt="img5">
                    </div>
                </div>
            </div>
            <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/u7syk5CaTXk?si=rd7jqdVCGCEjOv_o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <!-- SECTION GALERI -->
        <section id="galeri">
            <div class="about-container">
                <div class="about-text">
                    <h2>Galeri</h2>
                </div>
                
                <div class="galeri-card">
                    <div class="slider">
                    <div class="slides">
                        <img src="img/Banda Neira.jpg" alt="Gallery Image 1">
                        <img src="img/Bunaken.jpg" alt="Gallery Image 2">
                        <img src="img/Karimunjawa.jpg" alt="Gallery Image 3">
                        <img src="img/Likupang.jpg" alt="Gallery Image 4">
                        <img src="img/Rajaampat.jpg" alt="Gallery Image 5">
                        <img src="img/Wakatobi.jpg" alt="Gallery Image 6">
                    </div>
                    <button class="prev" aria-label="Previous slide"><</button>
                    <button class="next" aria-label="Next slide">></button>
                    <div class="dots" aria-label="Slide navigation">
                        <span class="dot" aria-label="Slide 1"></span>
                        <span class="dot" aria-label="Slide 2"></span>
                        <span class="dot" aria-label="Slide 3"></span>
                        <span class="dot" aria-label="Slide 4"></span>
                        <span class="dot" aria-label="Slide 5"></span>
                        <span class="dot" aria-label="Slide 6"></span>
                    </div>
                </div>
                <div class="container-content">
                    <div class="content">
                        <h2>Banda Neira</h2>
                        <p>Banda Neira adalah sebuah pulau di Kepulauan Banda, Maluku, Indonesia. Pulau ini terkenal dengan keindahan alamnya, sejarahnya yang kaya, dan merupakan salah satu destinasi wisata yang menarik bagi para penyelam dan pecinta alam bawah laut.</p>
                    </div>
                    <div class="content">
                        <h2>Bunaken</h2>
                        <p>Bunaken adalah sebuah pulau kecil yang terletak di Sulawesi Utara, Indonesia. Pulau ini terkenal dengan keindahan bawah lautnya yang menakjubkan, menjadikannya sebagai salah satu destinasi wisata selam terbaik di dunia.</p>
                    </div>
                    <div class="content">
                        <h2>Karimunjawa</h2>
                        <p>Karimunjawa adalah sebuah kepulauan yang terletak di Laut Jawa, Indonesia. Kepulauan ini terkenal dengan pantainya yang indah, terumbu karangnya yang kaya, dan merupakan destinasi wisata bahari yang populer.</p>
                    </div>
                    <div class="content">
                        <h2>Likupang</h2>
                        <p>Likupang adalah sebuah kawasan wisata yang terletak di Sulawesi Utara, Indonesia. Kawasan ini dikenal dengan pantai-pantainya yang indah, terumbu karang yang kaya, dan merupakan salah satu destinasi wisata bahari yang menarik.</p>
                    </div>
                    <div class="content">
                        <h2>Raja Ampat</h2>
                        <p>Raja Ampat adalah sebuah kepulauan yang terletak di Papua Barat, Indonesia. Kepulauan ini terkenal dengan keindahan alamnya yang spektakuler, terumbu karang yang kaya, dan merupakan salah satu destinasi wisata selam terbaik di dunia.</p>
                    </div>
                    <div class="content">
                        <h2>Wakatobi</h2>
                        <p>Wakatobi adalah sebuah kepulauan yang terletak di Sulawesi Tenggara, Indonesia. Kepulauan ini terkenal dengan keindahan bawah lautnya yang menakjubkan, menjadikannya sebagai salah satu destinasi wisata selam terbaik di dunia.</p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- SECTION WISATA -->
        <section id="wisata">
            <div class="about-text">
                <h2>Wisata</h2>
            </div>
            <div class="container">
                <div class="card">
                    <img class="image-card" src="img/coral.jpg">
                    <div class="text-box">
                        <h2>Paket 1</h2>
                        <p>Keuntungan Paket 1 
                            <ul>
                                <li>1 Hari Destinasi wisata bawah laut</li>
                                <li>Paket alat penyelam</li>
                                <li>Fotografer Profesional</li>
                            </ul>
                        </p>
                        <h1>Rp. 1.830.000</h1>
                        <form action="" method="post">
                            <button type="submit" name="paket" value="paket1">Beli</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <img class="image-card" src="img/fish.jpg">
                    <div class="text-box">
                        <h2>Paket 2</h2>
                        <p>Keuntungan Paket 2 
                            <ul>
                                <li>3 hari Destinasi wisata bawah laut</li>
                                <li>Paket alat penyelam</li>
                                <li>Fotografer Profesional</li>
                            </ul>
                        </p>
                        <h1>Rp. 3.460.000</h1>
                        <form action="" method="post">
                            <button type="submit" name="paket" value="paket2">Beli</button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <img class="image-card" src="img/diving.jpg">
                    <div class="text-box">
                        <h2>Paket 3</h2>
                        <p>Keuntungan Paket 3 
                            <ul>
                                <li>5 Hari Destinasi wisata bawah laut</li>
                                <li>Paket alat penyelam</li>
                                <li>Fotografer Profesional</li>
                            </ul>
                        </p>
                        <h1>Rp. 6.350.000</h1>
                        <form action="" method="post">
                            <button type="submit" name="paket" value="paket3">Beli</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy Belowater 2024</p>
    </footer>

    <script>
        const slides = document.querySelector('.slides');
        const images = document.querySelectorAll('.slides img');
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        const dots = document.querySelectorAll('.dot');
        let currentIndex = 0;
        const totalSlides = images.length;

        function updateSlider() {
            slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });
        }

        function showNext() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateSlider();
        }

        function showPrev() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateSlider();
        }

        prevBtn.addEventListener('click', showPrev);
        nextBtn.addEventListener('click', showNext);

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateSlider();
            });
        });

        let autoSlide = setInterval(showNext, 5000);

        document.querySelector('.slider').addEventListener('mouseenter', () => {
            clearInterval(autoSlide);
        });
        document.querySelector('.slider').addEventListener('mouseleave', () => {
            autoSlide = setInterval(showNext, 5000);
        });
        updateSlider();
    </script>
</body>
</html>
