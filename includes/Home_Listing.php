<link rel="stylesheet" href="includes/css/Home_Listing.css">

<?php
include 'db/categories.php';
function renderListingCard($data)
{
    echo
    '
                <div class="listing-card">
                    <div class="listing-card-container">

                        <div class="listing-image">

                            <div class="Rego-bookmark-btn">
                                <button
                                    type="button"
                                    class="wishList"
                                    data-listing="71"
                                    data-user=""><i class="far fa-heart position-absolute"></i>
                                </button>
                            </div>

                            <div class="listing-image-tags">
                                <div class="listing-status">' . $data['status'] . '</div>
                                <div class="listing-feature">' . $data['feature'] . '</div>
                            </div>

                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><a href="listing-item?id=' . $data['id'] . '"><img src="' . $data['images'][0] . '" alt="" /></a></div>
                                    <div class="swiper-slide"><a href="listing-item?id=' . $data['id'] . '"><img src="' . $data['images'][1] . '" alt="" /></a></div>
                                    <div class="swiper-slide"><a href="listing-item?id=' . $data['id'] . '"><img src="' . $data['images'][2] . '" alt="" /></a></div>
                                    <div class="swiper-slide"><a href="listing-item?id=' . $data['id'] . '"><img src="' . $data['images'][3] . '" alt="" /></a></div>
                                    <div class="swiper-slide"><a href="listing-item?id=' . $data['id'] . '"><img src="' . $data['images'][4] . '" alt="" /></a></div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="listing-text-content">
                            <h2>' . $data['location'] . '</h2>
                            <h4>' . $data['title'] . '</h4>
                            <h4>' . $data['name'] . '</h4>
                            <h4 style="color: #121212; margin-top: 10px !important;"><span style="font-weight: 500;">$' . $data['price'] . '</span> hour</h4>
                        </div>

                    </div>
                </div>
    ';
}

?>

<section class="home-listing">
    <div class="home-listing-container">
        <!-- row -->
        <div class="home-listing-items" data-category="models">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="ft-bold theme-cl">Models</h2>
                    </div>
                </div>
            </div>
            <div class="category-items-container" data-category="models">

                <?php

                foreach ($listings as $listing) {
                    if ($listing['category'] == 'model') {
                        renderListingCard($listing);
                    }
                }

                ?>


            </div>
        </div>

        <!-- row -->
        <div class="home-listing-items" data-category="singers">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="ft-bold theme-cl">Singers</h2>
                    </div>
                </div>
            </div>
            <div class="category-items-container" data-category="singers">

                <?php

                foreach ($listings as $listing) {
                    if ($listing['category'] == 'singer') {
                        renderListingCard($listing);
                    }
                }

                ?>

            </div>
        </div>

        <!-- row -->
        <div class="home-listing-items" data-category="rappers">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="ft-bold theme-cl">Rappers</h2>
                    </div>
                </div>
            </div>
            <div class="category-items-container">

                <?php

                foreach ($listings as $listing) {
                    if ($listing['category'] == 'rapper') {
                        renderListingCard($listing);
                    }
                }

                ?>

            </div>
        </div>

        <!-- row -->
        <div class="home-listing-items" data-category="painters">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="ft-bold theme-cl">Painters</h2>
                    </div>
                </div>
            </div>
            <div class="category-items-container">

                <?php

                foreach ($listings as $listing) {
                    if ($listing['category'] == 'painter') {
                        renderListingCard($listing);
                    }
                }

                ?>>

            </div>
        </div>

        <!-- row -->
        <div class="home-listing-items" data-category="dancers">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="ft-bold theme-cl">Dancers</h2>
                    </div>
                </div>
            </div>
            <div class="category-items-container">

                <?php

                foreach ($listings as $listing) {
                    if ($listing['category'] == 'dancer') {
                        renderListingCard($listing);
                    }
                }

                ?>

            </div>
        </div>

        <!-- row -->
        <div class="home-listing-items" data-category="comedy">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="sec_title position-relative text-center">
                        <h2 class="ft-bold theme-cl">Comedians</h2>
                    </div>
                </div>
            </div>
            <div class="category-items-container">

                <?php

                foreach ($listings as $listing) {
                    if ($listing['category'] == 'comedian') {
                        renderListingCard($listing);
                    }
                }

                ?>

            </div>
        </div>
    </div>

</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        centeredSlides: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    document.addEventListener("DOMContentLoaded", function() {
        const categoryButtons = document.querySelectorAll(".category-item");
        const portfolioItems = document.querySelectorAll(".home-listing-items");

        function filterItems(category) {
            portfolioItems.forEach((item) => {
                if (item.dataset.category === category) {
                    item.style.display = "flex";
                } else {
                    item.style.display = "none";
                }
            });
        }
        categoryButtons.forEach((button) => {
            button.addEventListener("click", function() {
                categoryButtons.forEach((btn) => btn.classList.remove("active"));
                this.classList.add("active");
                const category = this.getAttribute("data-category");
                filterItems(category);
            });
        });
        filterItems("models");
    });
</script>