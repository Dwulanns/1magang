<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    @include('home.css')
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .hero_area {
            position: relative;
            width: 100%;
            height: 50vh; /* Set height to half of the viewport height */
            overflow: hidden;
        }

        .hero_area video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #070D59;
            opacity: 0.6;
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding: 20px;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .img_deg {
            float: right;
            width: 50%;
        }

        .container {
            padding: 20px;
        }
    </style>
</head>

<body>
    @include('home.header')
    <div class="hero_area">
        <video autoplay muted loop>
            <source src="image/1.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="content">
            <h1>Welcome to Our Website</h1>
            <p>Explore our creativity and technology solutions.</p>
        </div>
    </div>

    <div class="container mt-5">
        <img class="img_deg" src="image/4.jpg">
        <h1>Tentang Kami</h1>
        <p>Selamat datang di website kreatifa.</p>
        <p>Web ini merupakan web resmi dari perusahaan CV. Purnama Kreatifa.</p>
        
        <h2>Profile Purnama Kreatifa</h2>
        <p>Purnama Kreatifa adalah Perusahaan yang bergerak di bidang IT (software, hardware, jaringan, dll) dan Elektronik yang berlokasi di daerah Sidoarjo. Usaha ini didirikan dalam rangka memenuhi kebutuhan pasar khususnya di bidang IT dan elektronik yang semakin hari kian meningkat.</p>
    </div>

    <div class="container mt-5">
        <img class="img_deg" src="image/3.jpeg">
        
        <h2>Latar Belakang</h2>
        <p>Untuk menjawab banyaknya permintaan dari masyarakat di area IT dan Elektronik, kami mendirikan perusahaan Purnama Kreatifa. Dengan berdirinya perusahaan ini, kami pun bermaksud menampung dan mengapresiasi seluruh kreatifitas, inovasi, dan hasil karya dari tim kami.</p>
        <p>Dengan melimpahnya sumber daya manusia di negeri ini, baik dari tingkat SMA/SMK, Diploma, maupun Sarjana, kami berharap melalui perusahaan kecil ini, kami bisa memberikan kontribusi yang besar terhadap negara Republik Indonesia kita tercinta ini.</p>
    </div>
</body>

</html>
