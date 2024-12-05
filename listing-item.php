<?php

include("db/categories.php");

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$listing = $listings[$id];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/Head.php") ?>

    <title><?php echo $listing["name"] ?></title>
</head>

<body>
    <?php include("includes/Navbar.php") ?>
    <div class="listing-item">
        <div class="listing-item-container">

            <div class="listing-item-image">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($listing['images'] as $image) {
                            echo '<div class="swiper-slide"><img src="' . $image . '" alt="" /></div>';
                        } ?>
                    </div>
                </div>
            </div>


            <div class="listing-item-head">
                <h1><?php echo $listing["title"] ?></h1>
                <div class="item-rating">
                    <p>4.0</p>
                    <p>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-icons">star</i>
                        <i class="material-symbols-outlined">star</i>
                    </p>
                    <p>(56)</p>
                </div>
                <div class="item-category">
                    <!-- <h4>Category</h4> -->
                    <p><strong>Category:</strong> <?php echo $listing["category"] ?></p>
                </div>
            </div>

            <div class="listing-item-links">
                <div class="item-links">
                    <a href=""><i class="material-icons">call</i></a>
                    <p>Call</p>
                </div>
                <div class="item-links">
                    <a href=""><i class="material-icons">share</i></a>
                    <p>Share</p>
                </div>
                <div class="item-links">
                    <a href=""><i class="material-symbols-outlined">bookmark</i></a>
                    <p>Save</p>
                </div>
                <div class="item-links">
                    <a href=""><i class="material-symbols-outlined">public</i></a>
                    <p>Website</p>
                </div>


            </div>


            <div class="listing-item-description">

                <div class="listing-item-contact">

                    <div class="item-number">
                        <i class="material-icons">call</i>
                        <p>+00 000 000 0000</p>
                    </div>

                    <div class="item-hours">
                        <i class="material-symbols-outlined">schedule</i>
                        <h4><span style="color: red;">Closed</span> . <span>Open</span></h4>
                    </div>
                    <p>8 AM Tue</p>

                    <div class="listing-item-map">
                        <div class="item-address">
                            <i class="material-icons">location_on</i>
                            <h4>Address</h4>
                        </div>
                        <p>New York, NY, United States of America, USA</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.2528000654!2d-74.14448744699546!3d40.69763123333061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1733345420006!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="listing-item-text">
                    <h1>Description</h1>
                    <p>Bring your events to life with the power of music! As a professional singer with a dynamic voice and a passion for captivating audiences, I specialize in delivering unforgettable performances tailored to any occasion. Whether it’s a wedding, corporate event, private party, or live concert, my versatile repertoire spans genres like pop, jazz, classical, and more. Let me add a touch of elegance, energy, and emotion to your special moments. Book now to make your event truly remarkable!</p>
                </div>

            </div>


        </div>
    </div>
    <?php include("includes/Footer.php") ?>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1.3,
        // centeredSlides: true,
        loop: true,
        breakpoints: {
            768: {
                slidesPerView: 1.2
            },
            900: {
                slidesPerView: 1.2
            },
            1280: {
                slidesPerView: 1.2
            },
        },
    });
</script>