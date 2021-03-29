<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="GCESports" />

    <title>Gallery Page</title>

    <link rel="stylesheet" href="../css/gallery.css" />
    <link rel="stylesheet" href="../css/lightbox.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

    <!-- 
        HEADER:
        Contains LOGO & NAV-BAR
    -->

    <header>
        <img class="logo" src="../../media/logo.png" alt="logo" />
        
        <nav>
            <ul class="nav-links">
                <li><a href="./index.php" class="navlink">Home</a></li>
                <li><a href="./news.php" class="navlink">News</a></li>
                <li><a href="./gallery.php" class="navlink">Gallery</a></li>
                <li><a href="#" class="navlink">Teams</a></li>
                <li><a href="#" class="navlink">Fixtures</a></li>
                <li><a href="#" class="navlink">Results</a></li>
                <li><a href="#" class="navlink">More</a></li>
            </ul>
            
        </nav>

        <a class="login" href="./login.php"><i class="fas fa-user"></i></a>
    </header>

    <section class="section-container">
        <div class="gallery-container">
            <div class="gallery-heading">
                GALLERY
            </div>
            <div class="gallery-section">
                <a href="../../media/Gallery/gallery11.jpeg" data-lightbox="gallery01"><img src="../../media/Gallery/gallery11.jpeg" /></a>
                <a href="../../media/Gallery/gallery02.jpg" data-lightbox="gallery02"><img src="../../media/Gallery/gallery02.jpg" /></a>
                <a href="../../media/Gallery/gallery03.jpg" data-lightbox="gallery03"><img src="../../media/Gallery/gallery03.jpg" /></a>
                <a href="../../media/Gallery/gallery18.jpg" data-lightbox="gallery04"><img src="../../media/Gallery/gallery18.jpg" /></a>
                <a href="../../media/Gallery/gallery15.jpg" data-lightbox="gallery05"><img src="../../media/Gallery/gallery15.jpg" /></a>
                <a href="../../media/Gallery/gallery13.jpg" data-lightbox="gallery06"><img src="../../media/Gallery/gallery13.jpg" /></a>
                <a href="../../media/Gallery/gallery07.jpg" data-lightbox="gallery07"><img src="../../media/Gallery/gallery07.jpg" /></a>
                <a href="../../media/Gallery/gallery04.jpg" data-lightbox="gallery08"><img src="../../media/Gallery/gallery04.jpg" /></a>
                <a href="../../media/Gallery/gallery09.jpg" data-lightbox="gallery09"><img src="../../media/Gallery/gallery09.jpg" /></a>
                <a href="../../media/Gallery/gallery01.jpg" data-lightbox="gallery10"><img src="../../media/Gallery/gallery01.jpg" /></a>
                <a href="../../media/Gallery/gallery10.jpg" data-lightbox="gallery11"><img src="../../media/Gallery/gallery10.jpg" /></a>
                <a href="../../media/Gallery/gallery12.jpeg" data-lightbox="gallery12"><img src="../../media/Gallery/gallery12.jpeg" /></a>
                <a href="../../media/Gallery/gallery16.jpg" data-lightbox="gallery13"><img src="../../media/Gallery/gallery16.jpg" /></a>
                <a href="../../media/Gallery/gallery14.jpg" data-lightbox="gallery14"><img src="../../media/Gallery/gallery14.jpg" /></a>
                <a href="../../media/Gallery/gallery05.jpg" data-lightbox="gallery15"><img src="../../media/Gallery/gallery05.jpg" /></a>
                <a href="../../media/Gallery/gallery06.jpg" data-lightbox="gallery16"><img src="../../media/Gallery/gallery06.jpg" /></a>
                <a href="../../media/Gallery/gallery17.jpg" data-lightbox="gallery17"><img src="../../media/Gallery/gallery17.jpg" /></a>
                <a href="../../media/Gallery/gallery08.jpg" data-lightbox="gallery18"><img src="../../media/Gallery/gallery08.jpg" /></a>
            </div>
            <div class="more-galley">
                <a href="#" class="more-gallery-links"><i>See more...</i></a>
            </div>
        </div>
    </section>

    <script src="../javascript/gallery.js"></script>
    <script src="../javascript/lightbox-plus-jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/d3be705053.js" crossorigin="anonymous"></script>

</body>
</html>