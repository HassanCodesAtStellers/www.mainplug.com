<link rel="stylesheet" href="includes/css/Navbar.css">

<section class="nav-bar">
    <!-- <div class="nav-toggle"></div> -->
    <div class="navbar-container">
        <div class="navbar-logo">
            <a href="home"><img src="assets/images/mainplug-logo.png" alt="logo" /></a>
        </div>

        <div class="navbar-search-bar">
            <form action="">
                <input type="text" placeholder="Search Talent" />

                <div class="navbar-divider"></div>

                <input type="text" placeholder="Location" class="navbar-search-location " />

                <div class="navbar-divider"></div>

                <select name="cats" id="">
                    <option value="">Categories</option>
                    <option value="">Models</option>
                    <option value="">Singers</option>
                    <option value="">Rappers</option>
                    <option value="">Painters</option>
                    <option value="">Dancers</option>
                    <option value="">Comedy</option>
                </select>

                <button><i class="fas fa-search"></i></button>
            </form>
        </div>

        <div class="navbar-profile">

            <div class="icon navbar-menu">
                <div class="hamburger"></div>
            </div>

            <div class="navbar-menu-dropdown">
                <ul>
                    <li><a href="listings">Listing</a></li>
                    <li><a href="blogs">Blog</a></li>
                    <li><a href="pricing-plans">Picing</a></li>
                    <li><a href="about">About</a></li>
                    <hr>
                    <li><a href="login">Sign In</a></li>
                </ul>
            </div>

            <a href="login" class="add-listing-btn"><i class="fas fa-plus"></i></a>
            </a>
        </div>
    </div>
</section>



<section class="bottom-navbar">
    <div class="bottom-navbar-container">
        <ul>
            <li><a href="home"><i class="fas fa-home"></i></a></li>
            <li><a href="listings"><i class="fas fa-th-list"></i></a></li>

            <li><a href="login"><i class="fas fa-plus"></i></a></li>

            <li><a href="blogs"><i class="fas fa-blog"></i></a></li>
            <li><a href="login"><i class="fas fa-user"></i></a></li>
        </ul>
    </div>
</section>