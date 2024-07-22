<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @include('home.css')
    <style>
        /* Custom styles can be added here */
    </style>
</head>

<body class="bg-black">
    <div class="hero_area bg-black text-white">
        @include('home.header')
    </div>

    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-indicators">
            <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
                type="button"></button>
            <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators"
                type="button"></button>
            <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators"
                type="button"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="..." class="d-block w-100" src="image/1.jpeg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s; font-size: 45px; font-weight: bold;">
                        DEVELOPMENT</h5>
                    <p class="animated bounceInLeft d-md-block"
                        style="animation-delay: 2s; font-size: 20px;">System
                        Development, Android Apps, Website, Desktop Apps, Web Based Apps, Macro / Sripting.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s font-weight: bold;"><a
                            href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="image/2.jpeg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s; font-size: 45px; font-weight: bold;">
                        DEVELOPMENT</h5>
                    <p class="animated bounceInLeft d-md-block"
                        style="animation-delay: 2s; font-size: 20px;">System
                        Development, Android Apps, Website, Desktop Apps, Web Based Apps, Macro / Sripting.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s font-weight: bold;"><a
                            href="#">Learn More</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img alt="..." class="d-block w-100" src="image/3.jpeg">
                <div class="carousel-caption">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s; font-size: 45px; font-weight: bold;">
                        DEVELOPMENT</h5>
                    <p class="animated bounceInLeft d-md-block"
                        style="animation-delay: 2s; font-size: 20px;">System
                        Development, Android Apps, Website, Desktop Apps, Web Based Apps, Macro / Sripting.</p>
                    <p class="animated bounceInRight" style="animation-delay: 3s font-weight: bold;"><a
                            href="#">Learn More</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
            type="button">
            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators"
            type="button">
            <span aria-hidden="true" class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</body>

</html>
