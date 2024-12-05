<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="csrf-token" content="" />
  <title>MainPlug.com</title>
  <?php include("includes/Head.php") ?>
</head>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->

  <div
    class="preloader"
    id="preloader"
    style="
        background: url(assets/images/preloader.gif) no-repeat scroll center
          center #fff;
      "></div>

  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <?php include("includes/Navbar.php") ?>

    <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->

    <!-- ============================ Main Section Start ================================== -->
    <section class="gray py-5">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12">
            <div class="bg-white rounded mb-4">
              <div
                class="sidebar_header d-flex align-items-center justify-content-between px-4 py-3 br-bottom">
                <h4 class="ft-medium fs-lg mb-0">Search Filter</h4>
                <div class="ssh-header">
                  <a
                    href="javascript:void(0);"
                    class="clear_all ft-medium text-muted"
                    id="clearAll">Clear All</a>
                  <a
                    href="#search_open"
                    data-bs-toggle="collapse"
                    aria-expanded="false"
                    role="button"
                    class="collapsed _filter-ico ml-2"><i class="lni lni-text-align-right"></i></a>
                </div>
              </div>

              <!-- Find New Property -->
              <div
                class="sidebar-widgets collapse miz_show"
                id="search_open"
                data-bs-parent="#search_open">
                <div class="search-inner">
                  <div class="side-filter-box">
                    <div class="side-filter-box-body">
                      <!-- Category -->
                      <div class="inner_widget_link">
                        <h6 class="ft-medium">Category</h6>
                        <ul class="no-ul-list filter-list">
                          <li>
                            <input
                              id="cat0"
                              class="checkbox-custom search_cat"
                              value="hyundai"
                              type="checkbox" />
                            <label for="cat0" class="checkbox-custom-label">Models</label>
                          </li>
                          <li>
                            <input
                              id="cat1"
                              class="checkbox-custom search_cat"
                              value="apartment"
                              type="checkbox" />
                            <label for="cat1" class="checkbox-custom-label">Singers</label>
                          </li>
                          <li>
                            <input
                              id="cat2"
                              class="checkbox-custom search_cat"
                              value="real-estate"
                              type="checkbox" />
                            <label for="cat2" class="checkbox-custom-label">Rap Artists</label>
                          </li>
                          <li>
                            <input
                              id="cat3"
                              class="checkbox-custom search_cat"
                              value="beauty-makeup"
                              type="checkbox" />
                            <label for="cat3" class="checkbox-custom-label">Painters</label>
                          </li>
                          <li>
                            <input
                              id="cat4"
                              class="checkbox-custom search_cat"
                              value="fitness"
                              type="checkbox" />
                            <label for="cat4" class="checkbox-custom-label">Dancers</label>
                          </li>
                          <li>
                            <input
                              id="cat5"
                              class="checkbox-custom search_cat"
                              value="shopping"
                              type="checkbox" />
                            <label for="cat5" class="checkbox-custom-label">Comedians</label>
                          </li>
                          <li>
                            <input
                              id="cat6"
                              class="checkbox-custom search_cat"
                              value="hotel"
                              type="checkbox" />
                            <label for="cat6" class="checkbox-custom-label">Fitness</label>
                          </li>
                          <li>
                            <input
                              id="cat7"
                              class="checkbox-custom search_cat"
                              value="restaurant"
                              type="checkbox" />
                            <label for="cat7" class="checkbox-custom-label">Fashion & Beauty</label>
                          </li>
                        </ul>
                      </div>

                      <!-- Location -->
                      <div class="inner_widget_link">
                        <h6 class="ft-medium">Location</h6>
                        <ul class="no-ul-list filter-list">
                          <li>
                            <input
                              id="loc0"
                              class="checkbox-custom search_loc"
                              value="7"
                              type="checkbox" />
                            <label for="loc0" class="checkbox-custom-label">Scottsdale</label>
                          </li>
                          <li>
                            <input
                              id="loc1"
                              class="checkbox-custom search_loc"
                              value="6"
                              type="checkbox" />
                            <label for="loc1" class="checkbox-custom-label">Chicago</label>
                          </li>
                          <li>
                            <input
                              id="loc2"
                              class="checkbox-custom search_loc"
                              value="5"
                              type="checkbox" />
                            <label for="loc2" class="checkbox-custom-label">Lexington</label>
                          </li>
                          <li>
                            <input
                              id="loc3"
                              class="checkbox-custom search_loc"
                              value="4"
                              type="checkbox" />
                            <label for="loc3" class="checkbox-custom-label">Austin</label>
                          </li>
                          <li>
                            <input
                              id="loc4"
                              class="checkbox-custom search_loc"
                              value="3"
                              type="checkbox" />
                            <label for="loc4" class="checkbox-custom-label">San Diego</label>
                          </li>
                          <li>
                            <input
                              id="loc5"
                              class="checkbox-custom search_loc"
                              value="1"
                              type="checkbox" />
                            <label for="loc5" class="checkbox-custom-label">Los Angeles</label>
                          </li>
                        </ul>
                      </div>

                      <!-- Features -->
                      <div class="inner_widget_link">
                        <h6 class="ft-medium">Type</h6>
                        <ul class="no-ul-list filter-list">
                          <li>
                            <input
                              id="type0"
                              class="checkbox-custom search_type"
                              value="hotel"
                              type="checkbox" />
                            <label for="type0" class="checkbox-custom-label">Pop Music</label>
                          </li>

                          <li>
                            <input
                              id="type1"
                              class="checkbox-custom search_type"
                              value="restaurant"
                              type="checkbox" />
                            <label for="type1" class="checkbox-custom-label">Men Fashion</label>
                          </li>

                          <li>
                            <input
                              id="type2"
                              class="checkbox-custom search_type"
                              value="beauty"
                              type="checkbox" />
                            <label for="type2" class="checkbox-custom-label">Women Fashion</label>
                          </li>

                          <li>
                            <input
                              id="type3"
                              class="checkbox-custom search_type"
                              value="real_estate"
                              type="checkbox" />
                            <label for="type3" class="checkbox-custom-label">Stand Up Comedy</label>
                          </li>

                          <li>
                            <input
                              id="type4"
                              class="checkbox-custom search_type"
                              value="doctor"
                              type="checkbox" />
                            <label for="type4" class="checkbox-custom-label">Calisthenics</label>
                          </li>

                          <li>
                            <input
                              id="type5"
                              class="checkbox-custom search_type"
                              value="car"
                              type="checkbox" />
                            <label for="type5" class="checkbox-custom-label">Abstract</label>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Sidebar End -->
          </div>

          <!-- Item Wrap Start -->
          <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
            <!-- row -->
            <div
              class="row justify-content-center gx-3"
              id="show_search_items">
              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="Rego-grid-wrap">
                  <div class="Rego-grid-upper">
                    <div class="Rego-bookmark-btn">
                      <button
                        type="button"
                        class="wishList"
                        data-listing="71"
                        data-user="">
                        <i class="lni lni-heart position-absolute"></i>
                      </button>
                    </div>
                    <div class="Rego-pos ab-left">
                      <div class="Rego-status open me-2">closed</div>
                      <div class="Rego-featured-tag">Featured</div>
                    </div>
                    <div class="Rego-grid-thumb">
                      <a
                        href="listing/new-pop-singer"
                        class="d-block text-center m-auto">
                        <img
                          src="assets/images/singer01.jpg"
                          class="img-fluid"
                          alt="" />
                      </a>
                    </div>
                  </div>
                  <div class="Rego-grid-fl-wrap">
                    <div class="Rego-caption px-3 py-2">
                      <div class="Rego-author">
                        <a href="author/admin">
                          <img
                            src="assets/images/4uIeS41P1678869530.jpg"
                            class="img-fluid circle"
                            alt="" />
                        </a>
                      </div>

                      <div class="Rego-cates">
                        <a href="listing4ebb?category=hyundai">Singer</a>
                      </div>

                      <h4 class="mb-0 ft-medium medium">
                        <a
                          href="listing/new-pop-singer"
                          class="text-dark fs-md">
                          New Pop Singer
                          <span class="verified-badge">
                            <i class="fas fa-check-circle"></i>
                          </span>
                        </a>
                      </h4>
                      <div class="Rego-middle-caption mt-3">
                        <div class="Rego-location">
                          <i class="fas fa-map-marker-alt"></i>San Francisco,
                          USA
                        </div>
                        <div class="Rego-call">
                          <i class="fas fa-phone-alt"></i>0123456789
                        </div>
                      </div>
                    </div>
                    <div class="Rego-grid-footer py-3 px-3">
                      <div class="Rego-ft-first">
                        <div class="Rego-rating">
                          <div class="Rego-pr-average high">5</div>
                          <div class="Rego-rates">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                          </div>
                        </div>
                      </div>

                      <div class="Rego-ft-last">
                        <span class="small">1 year ago</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="Rego-grid-wrap">
                  <div class="Rego-grid-upper">
                    <div class="Rego-bookmark-btn">
                      <button
                        type="button"
                        class="wishList"
                        data-listing="70"
                        data-user="">
                        <i class="lni lni-heart position-absolute"></i>
                      </button>
                    </div>
                    <div class="Rego-pos ab-left">
                      <div class="Rego-status open me-2">closed</div>
                      <div class="Rego-featured-tag">Featured</div>
                    </div>
                    <div class="Rego-grid-thumb">
                      <a
                        href="listing/abstract-painter"
                        class="d-block text-center m-auto">
                        <img
                          src="assets/images/painter01.jpg"
                          class="img-fluid"
                          alt="" />
                      </a>
                    </div>
                  </div>
                  <div class="Rego-grid-fl-wrap">
                    <div class="Rego-caption px-3 py-2">
                      <div class="Rego-author">
                        <a href="author/admin">
                          <img
                            src="assets/images/4uIeS41P1678869530.jpg"
                            class="img-fluid circle"
                            alt="" />
                        </a>
                      </div>

                      <div class="Rego-cates">
                        <a href="listing4ebb?category=hyundai">Painter</a>
                      </div>

                      <h4 class="mb-0 ft-medium medium">
                        <a
                          href="listing/abstract-painter"
                          class="text-dark fs-md">
                          Abstract Painter
                          <span class="verified-badge">
                            <i class="fas fa-check-circle"></i>
                          </span>
                        </a>
                      </h4>
                      <div class="Rego-middle-caption mt-3">
                        <div class="Rego-location">
                          <i class="fas fa-map-marker-alt"></i>Los Angles, USA
                        </div>
                        <div class="Rego-call">
                          <i class="fas fa-phone-alt"></i>0123456789
                        </div>
                      </div>
                    </div>
                    <div class="Rego-grid-footer py-3 px-3">
                      <div class="Rego-ft-first">
                        <div class="Rego-rating">
                          <div class="Rego-pr-average high">2</div>
                          <div class="Rego-rates">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>

                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="Rego-ft-last">
                        <span class="small">1 year ago</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="Rego-grid-wrap">
                  <div class="Rego-grid-upper">
                    <div class="Rego-bookmark-btn">
                      <button
                        type="button"
                        class="wishList"
                        data-listing="69"
                        data-user="">
                        <i class="lni lni-heart position-absolute"></i>
                      </button>
                    </div>
                    <div class="Rego-pos ab-left">
                      <div class="Rego-status open me-2">closed</div>
                      <div class="Rego-featured-tag">Featured</div>
                    </div>
                    <div class="Rego-grid-thumb">
                      <a
                        href="listing/modern-dance-performer"
                        class="d-block text-center m-auto">
                        <img
                          src="assets/images/dancer01.jpg"
                          class="img-fluid"
                          alt="" />
                      </a>
                    </div>
                  </div>
                  <div class="Rego-grid-fl-wrap">
                    <div class="Rego-caption px-3 py-2">
                      <div class="Rego-author">
                        <a href="author/admin">
                          <img
                            src="assets/images/4uIeS41P1678869530.jpg"
                            class="img-fluid circle"
                            alt="" />
                        </a>
                      </div>

                      <div class="Rego-cates">
                        <a href="listing4ebb?category=hyundai">Dancer</a>
                      </div>

                      <h4 class="mb-0 ft-medium medium">
                        <a
                          href="listing/modern-dance-performer"
                          class="text-dark fs-md">
                          Modern Dance Performer
                          <span class="verified-badge">
                            <i class="fas fa-check-circle"></i>
                          </span>
                        </a>
                      </h4>
                      <div class="Rego-middle-caption mt-3">
                        <div class="Rego-location">
                          <i class="fas fa-map-marker-alt"></i>San Francisco,
                          USA
                        </div>
                        <div class="Rego-call">
                          <i class="fas fa-phone-alt"></i>0123456789
                        </div>
                      </div>
                    </div>
                    <div class="Rego-grid-footer py-3 px-3">
                      <div class="Rego-ft-last">
                        <span class="small">1 year ago</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="Rego-grid-wrap">
                  <div class="Rego-grid-upper">
                    <div class="Rego-bookmark-btn">
                      <button
                        type="button"
                        class="wishList"
                        data-listing="68"
                        data-user="">
                        <i class="lni lni-heart position-absolute"></i>
                      </button>
                    </div>
                    <div class="Rego-pos ab-left">
                      <div class="Rego-status open me-2">closed</div>
                      <div class="Rego-featured-tag">Featured</div>
                    </div>
                    <div class="Rego-grid-thumb">
                      <a
                        href="listing"
                        class="d-block text-center m-auto">
                        <img
                          src="assets/images/beauty01.jpg"
                          class="img-fluid"
                          alt="" />
                      </a>
                    </div>
                  </div>
                  <div class="Rego-grid-fl-wrap">
                    <div class="Rego-caption px-3 py-2">
                      <div class="Rego-author">
                        <a href="author/admin">
                          <img
                            src="assets/images/4uIeS41P1678869530.jpg"
                            class="img-fluid circle"
                            alt="" />
                        </a>
                      </div>

                      <div class="Rego-cates">
                        <a href="listinge0ce?category=apartment">Beauty</a>
                      </div>

                      <h4 class="mb-0 ft-medium medium">
                        <a href="listing" class="text-dark fs-md">
                          Art Brush Makeup Artist
                          <span class="verified-badge">
                            <i class="fas fa-check-circle"></i>
                          </span>
                        </a>
                      </h4>
                      <div class="Rego-middle-caption mt-3">
                        <div class="Rego-location">
                          <i class="fas fa-map-marker-alt"></i>G87P,
                          Birmingham, UK
                        </div>
                        <div class="Rego-call">
                          <i class="fas fa-phone-alt"></i>0123456789
                        </div>
                      </div>
                    </div>
                    <div class="Rego-grid-footer py-3 px-3">
                      <div class="Rego-ft-last">
                        <span class="small">1 year ago</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="Rego-grid-wrap">
                  <div class="Rego-grid-upper">
                    <div class="Rego-bookmark-btn">
                      <button
                        type="button"
                        class="wishList"
                        data-listing="71"
                        data-user="">
                        <i class="lni lni-heart position-absolute"></i>
                      </button>
                    </div>
                    <div class="Rego-pos ab-left">
                      <div class="Rego-status open me-2">closed</div>
                      <div class="Rego-featured-tag">Featured</div>
                    </div>
                    <div class="Rego-grid-thumb">
                      <a
                        href="listing/new-pop-singer"
                        class="d-block text-center m-auto">
                        <img
                          src="assets/images/rapper01.jpg"
                          class="img-fluid"
                          alt="" />
                      </a>
                    </div>
                  </div>
                  <div class="Rego-grid-fl-wrap">
                    <div class="Rego-caption px-3 py-2">
                      <div class="Rego-author">
                        <a href="author/admin">
                          <img
                            src="assets/images/4uIeS41P1678869530.jpg"
                            class="img-fluid circle"
                            alt="" />
                        </a>
                      </div>

                      <div class="Rego-cates">
                        <a href="listing4ebb?category=hyundai">Rap Artist</a>
                      </div>

                      <h4 class="mb-0 ft-medium medium">
                        <a
                          href="listing/new-pop-singer"
                          class="text-dark fs-md">
                          Hip Hop Rapper
                          <span class="verified-badge">
                            <i class="fas fa-check-circle"></i>
                          </span>
                        </a>
                      </h4>
                      <div class="Rego-middle-caption mt-3">
                        <div class="Rego-location">
                          <i class="fas fa-map-marker-alt"></i>Las Vegas, USA
                        </div>
                        <div class="Rego-call">
                          <i class="fas fa-phone-alt"></i>0123456789
                        </div>
                      </div>
                    </div>
                    <div class="Rego-grid-footer py-3 px-3">
                      <div class="Rego-ft-first">
                        <div class="Rego-rating">
                          <div class="Rego-pr-average high">5</div>
                          <div class="Rego-rates">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="Rego-ft-last">
                        <span class="small">2 months ago</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="Rego-grid-wrap">
                  <div class="Rego-grid-upper">
                    <div class="Rego-bookmark-btn">
                      <button
                        type="button"
                        class="wishList"
                        data-listing="71"
                        data-user="">
                        <i class="lni lni-heart position-absolute"></i>
                      </button>
                    </div>
                    <div class="Rego-pos ab-left">
                      <div class="Rego-status open me-2">closed</div>
                      <div class="Rego-featured-tag">Featured</div>
                    </div>
                    <div class="Rego-grid-thumb">
                      <a
                        href="listing/new-pop-singer"
                        class="d-block text-center m-auto">
                        <img
                          src="assets/images/comedian01.jpg"
                          class="img-fluid"
                          alt="" />
                      </a>
                    </div>
                  </div>
                  <div class="Rego-grid-fl-wrap">
                    <div class="Rego-caption px-3 py-2">
                      <div class="Rego-author">
                        <a href="author/admin">
                          <img
                            src="assets/images/4uIeS41P1678869530.jpg"
                            class="img-fluid circle"
                            alt="" />
                        </a>
                      </div>

                      <div class="Rego-cates">
                        <a href="listing4ebb?category=hyundai">Comedian</a>
                      </div>

                      <h4 class="mb-0 ft-medium medium">
                        <a
                          href="listing/new-pop-singer"
                          class="text-dark fs-md">
                          Stand-Up Comedian
                          <span class="verified-badge">
                            <i class="fas fa-check-circle"></i>
                          </span>
                        </a>
                      </h4>
                      <div class="Rego-middle-caption mt-3">
                        <div class="Rego-location">
                          <i class="fas fa-map-marker-alt"></i>Toronto, CA
                        </div>
                        <div class="Rego-call">
                          <i class="fas fa-phone-alt"></i>0123456789
                        </div>
                      </div>
                    </div>
                    <div class="Rego-grid-footer py-3 px-3">
                      <div class="Rego-ft-first">
                        <div class="Rego-rating">
                          <div class="Rego-pr-average high">5</div>
                          <div class="Rego-rates">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          </div>
                        </div>
                      </div>

                      <div class="Rego-ft-last">
                        <span class="small">9 months ago</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <nav>
                    <ul class="pagination">
                      <li class="page-item">
                        <a
                          class="page-link"
                          href="listing01?page=1"
                          rel="prev"
                          aria-label="&laquo; Previous">&lsaquo;</a>
                      </li>

                      <li class="page-item">
                        <a class="page-link" href="listing01?page=1">1</a>
                      </li>
                      <li class="page-item active" aria-current="page">
                        <a class="page-link" href="listing02?page=2">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="listing03?page=3">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="listing04?page=4">4</a>
                      </li>

                      <li class="page-item">
                        <a
                          class="page-link"
                          href="listing03?page=3"
                          rel="next"
                          aria-label="Next &raquo;">&rsaquo;</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
            <!-- row -->
          </div>
        </div>
      </div>
    </section>
    <!-- ============================ Main Section End ================================== -->

    <!-- ======================= Newsletter Start ============================ -->

    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    <footer class="light-footer skin-light-footer style-2">
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
              <div class="footer_widget">
                <img
                  src="assets/images/mainplug-logo.png"
                  class="img-footer small mb-2"
                  alt="" />

                <div class="address mt-2">
                  New York, NY, United States of America, USA
                </div>
                <div class="address mt-3">
                  +00 000 000 0000<br />demo@example.com
                </div>
                <div class="address mt-2">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="https://twitter.com/" class="theme-cl">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="https://www.facebook.com/" class="theme-cl">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
              <div class="footer_widget">
                <h4 class="widget_title">Main Navigation</h4>
                <ul class="footer-menu">
                  <li><a href="listing">Explore Listings</a></li>
                  <li><a href="pricing-plans">Pricing Plan</a></li>
                  <li><a href="blogs">Blogs</a></li>
                  <li><a href="contact">Contact</a></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-2 col-sm-12">
              <div class="footer_widget">
                <h4 class="widget_title">Helpful Topics</h4>
                <ul class="footer-menu">
                  <li><a href="about">About Us</a></li>
                  <li><a href="privacy">Privacy &amp; Policy</a></li>
                  <li><a href="support">Support</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-bottom br-top">
        <div class="container">
          <p class="mb-0">© 2024. All Rights Reserved</p>

          <div class="footer-links">
            <p class="mb-0"><i class="fas fa-globe"></i>English</p>
            <p class="mb-0"><i class="fas fa-dollar-sign"></i>USD</p>

            <div class="footer-socials">
              <a href="https://www.facebook.com/">
                <i class="fab fa-facebook-f"></i></a>
              <a href="https://www.x.com/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.instagram.com/"><i class="fab fa-twitter"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <form
      id="search_item"
      class="d-none"
      action="home/listing"
      method="get">
      <input type="text" name="type[]" id="type" value="" />
      <input type="text" name="location[]" id="location" value="" />
      <input type="text" name="category[]" id="categories" value="" />
      <button type="submit" id="search_btn_submit" class="d-none"></button>
    </form>

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fas fa-arrow-up"></i></a>
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->

  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->

  <div class="cookie-bar-wrap show js-cookie-consent cookie-consent">
    <div class="container d-flex justify-content-center">
      <div class="col-xl-10 col-lg-12">
        <div class="row justify-content-center">
          <div class="cookie-bar">
            <div
              class="cookie-bar-action js-cookie-consent-agree cookie-consent__agree">
              <button class="btn btn-accept btn btn-danger border text-white">
                Allow Cookies
              </button>
            </div>
            <div class="cookie-bar-text cookie-consent__message">
              <p>
                Your experience on this site will be improved by allowing
                cookies.<br />
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.laravelCookieConsent = (function() {
      const COOKIE_VALUE = 1;
      const COOKIE_DOMAIN = "";

      function consentWithCookies() {
        setCookie("laravel_cookie_consent", COOKIE_VALUE, 7300);
        hideCookieDialog();
      }

      function cookieExists(name) {
        return (
          document.cookie.split("; ").homeOf(name + "=" + COOKIE_VALUE) !==
          -1
        );
      }

      function hideCookieDialog() {
        const dialogs = document.getElementsByClassName("js-cookie-consent");

        for (let i = 0; i < dialogs.length; ++i) {
          dialogs[i].style.display = "none";
        }
      }

      function setCookie(name, value, expirationInDays) {
        const date = new Date();
        date.setTime(date.getTime() + expirationInDays * 24 * 60 * 60 * 1000);
        document.cookie =
          name +
          "=" +
          value +
          ";expires=" +
          date.toUTCString() +
          ";domain=" +
          COOKIE_DOMAIN +
          ";path=/" +
          "";
      }

      if (cookieExists("laravel_cookie_consent")) {
        hideCookieDialog();
      }

      const buttons = document.getElementsByClassName(
        "js-cookie-consent-agree"
      );

      for (let i = 0; i < buttons.length; ++i) {
        buttons[i].addEventListener("click", consentWithCookies);
      }

      return {
        consentWithCookies: consentWithCookies,
        hideCookieDialog: hideCookieDialog,
      };
    })();
  </script>

  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="assets/front/js/jquery.min.js"></script>
  <script src="assets/front/js/bootstrap.min.js"></script>
  <script src="assets/front/js/popper.min.js"></script>
  <script src="assets/front/js/summernote.js"></script>
  <script src="assets/front/js/slick.js"></script>
  <script src="assets/front/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/front/js/dropzone.js"></script>
  <script src="assets/front/js/counterup.js"></script>
  <script src="assets/front/js/lightbox.js"></script>
  <script src="assets/front/js/moment.min.js"></script>
  <script src="assets/front/js/daterangepicker.js"></script>
  <script src="assets/front/js/lightbox.js"></script>
  <script src="assets/front/js/jQuery.style.switcher.js"></script>
  <script src="assets/front/js/toastr.min.js"></script>
  <script src="assets/front/js/mdtimepicker.js"></script>
  <script src="assets/admin/js/tagify.js"></script>
  <script src="assets/front/js/custom.js"></script>
  <!-- ============================================================== -->
  <!-- This page plugins -->
  <!-- ============================================================== -->

  <script>
    "use strict";
    let mainurl = "home";
    let tawkto = "1";
  </script>

  <script type="text/javascript">
    if (tawkto == 1) {
      var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
      (function() {
        var s1 = document.createElement("script"),
          s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = "https://embed.tawk.to/62305c801ffac05b1d7ea682/1fv7b1dso";
        s1.charset = "UTF-8";
        s1.setAttribute("crossorigin", "*");
        s0.parentNode.insertBefore(s1, s0);
      })();
    }
  </script>

  <script>
    "use strict";

    toastr.options = {
      closeButton: true,
      progressBar: true,
    };
    toastr.warning("login first");
  </script>

  <script>
    "use strict";

    $(document).on("click", ".search_cat", function() {
      let categories = [];
      $.each($(".search_cat"), function(home, value) {
        if ($(this).is(":checked")) {
          categories.push($(this).val());
        }
      });

      $("#search_item #categories").val(categories);
      $("#search_btn_submit").click();
    });

    $(document).on("click", ".search_loc", function() {
      let locations = [];
      $.each($(".search_loc"), function(home, value) {
        if ($(this).is(":checked")) {
          console.log($(this).val());
          locations.push($(this).val());
        }
      });
      $("#search_item #location").val(locations);
      $("#search_btn_submit").click();
    });

    $(document).on("click", ".search_type", function() {
      let types = [];
      $.each($(".search_type"), function(home, value) {
        if ($(this).is(":checked")) {
          types.push($(this).val());
        }
      });
      $("#search_item #type").val(types);
      $("#search_btn_submit").click();
    });

    $(document).on("click", "#clearAll", function() {
      let categories = [];
      let locations = [];
      let types = [];

      $.each($(".search_cat"), function(home, value) {
        if ($(this).is(":checked")) {
          $(this).prop("checked", false);
        }
      });

      $.each($(".search_loc"), function(home, value) {
        if ($(this).is(":checked")) {
          $(this).prop("checked", false);
        }
      });

      $.each($(".search_type"), function(home, value) {
        if ($(this).is(":checked")) {
          $(this).prop("checked", false);
        }
      });

      $("#search_item #categories").val(categories);
      $("#search_item #location").val(locations);
      $("#search_item #type").val(types);
      $("#search_btn_submit").click();
    });

    function doSubmit() {
      $("#__search").submit();
    }

    $(document).on("submit", "#search_item", function(e) {
      e.preventDefault();
      $.ajax({
        method: "GET",
        url: $(this).attr("action"),
        data: $(this).serialize(),
        success: function(data) {
          $("#show_search_items")(data);
        },
      });
    });

    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
    });

    $(document).on("click", ".wishList", function() {
      let $this = $(this);
      let listingId = $(this).data("listing");
      let userId = $(this).data("user");
      if (userId == "") {
        window.location.href = mainurl + "/user/login";
      }

      $.ajax({
        method: "POST",
        url: mainurl + "/listing/wishlist",
        data: {
          listing_id: listingId,
          user_id: userId,
        },
        success: function(data) {
          if (data.success) {
            $this.children().prop("class", "");
            $this
              .children()
              .prop("class", "lni lni-heart-filled  position-absolute");
            toastr.success(data.success);
          } else {
            $this.children().prop("class", "");
            $this
              .children()
              .prop("class", "lni lni-heart  position-absolute");
            toastr.error(data.error);
          }
        },
      });
    });
  </script>

  <script>
    let icon = document.querySelector(".icon")

    icon.addEventListener("click", function(e) {
      icon.classList.toggle("ac")
    })

    $(document).ready(function() {
      $('.icon').click(function() {
        if ($('.navbar-menu-dropdown').css('display') === 'none') {
          $('.navbar-menu-dropdown').css('display', 'block'); // Show the element
        } else {
          $('.navbar-menu-dropdown').css('display', 'none'); // Hide the element
        }
      });
    });
  </script>
</body>

</html>