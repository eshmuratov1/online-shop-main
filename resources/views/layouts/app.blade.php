<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>@yield('title')</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
          href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('css/home_1.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

</head>

<body>

<div id="page">

    <header class="version_1">
        <div class="layer"></div><!-- Mobile menu overlay mask -->
        <!-- /main_header -->

        <div class="main_nav Sticky">
            <div class="container">
                <div class="row small-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <nav class="categories">
                            <ul class="clearfix">
                                <li>
                                    <span>
										<a href="#">
											<span class="hamburger hamburger--spin">
												<span class="hamburger-box">
													<span class="hamburger-inner"></span>
												</span>
											</span>
											Categories
										</a>
									</span>
                                    <div id="menu">
                                        <ul>
                                            <li><span><a href="#">Collections</a></span>
                                                <ul>
                                                    <li><a href="#">Trending</a></li>
                                                    <li><a href="#">Life style</a></li>
                                                </ul>
                                            </li>
                                            <li><span><a href="#">Men</a></span>
                                                <ul>
                                                    <li><a href="#">Offers</a></li>
                                                    <li><a href="#">Shoes</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
                        <div class="custom-search-input">
                            <input type="text" placeholder="Search over 10.000 products">
                            <button type="submit"><i class="header-icon_search_custom"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <ul class="top_tools">
                            <li>
                                <div class="dropdown dropdown-cart">
                                    <a href="#" class="cart_bt"><strong>2</strong></a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <figure><img
                                                            src="{{asset('img/products/product_placeholder_square_small.jpg')}}"
                                                            data-src="{{asset('img/products/shoes/thumb/1.jpg')}}"
                                                            alt="" width="50" height="50" class="lazy"></figure>
                                                    <strong><span>1x Armor Air x Fear</span>$90.00</strong>
                                                </a>
                                                <a href="#" class="action"><i class="ti-trash"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <figure><img
                                                            src="{{asset('img/products/product_placeholder_square_small.jpg')}}"
                                                            data-src="{{asset('img/products/shoes/thumb/2.jpg')}}"
                                                            alt="" width="50" height="50" class="lazy"></figure>
                                                    <strong><span>1x Armor Okwahn II</span>$110.00</strong>
                                                </a>
                                                <a href="#" class="action"><i class="ti-trash"></i></a>
                                            </li>
                                        </ul>
                                        <div class="total_drop">
                                            <div class="clearfix"><strong>Total</strong><span>$200.00</span></div>
                                            <a href="#" class="btn_1 outline">View Cart</a><a
                                                href="#" class="btn_1">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /dropdown-cart-->
                            </li>
                            <li>
                                <a href="#" class="wishlist"><span>Wishlist</span></a>
                            </li>
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="access_link"><span>Account</span></a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="btn_1">Sign In or Sign Up</a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ti-truck"></i>Track your Order</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ti-package"></i>My Orders</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ti-user"></i>My Profile</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ti-help-alt"></i>Help and Faq</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /dropdown-access-->
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="btn_search_mob"><span>Search</span></a>
                            </li>
                            <li>
                                <a href="#menu" class="btn_cat_mob">
                                    <div class="hamburger hamburger--spin" id="hamburger">
                                        <div class="hamburger-box">
                                            <div class="hamburger-inner"></div>
                                        </div>
                                    </div>
                                    Categories
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <div class="search_mob_wp">
                <input type="text" class="form-control" placeholder="Search over 10.000 products">
                <input type="submit" class="btn_1 full-width" value="Search">
            </div>
            <!-- /search_mobile -->
        </div>
        <!-- /main_nav -->
    </header>
    <!-- /header -->

    <main>
        <div id="carousel-home">
            <div class="owl-carousel owl-theme">
                <div class="owl-slide cover" style="background-image: url({{asset('img/slides/slide_home_2.jpg')}});">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-end">
                                <div class="col-lg-6 static">
                                    <div class="slide-text text-right white">
                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Max 720 Sage Low
                                        </h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Limited items available at this price
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                                                         href="#"
                                                                                         role="button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover" style="background-image: url({{asset('img/slides/slide_home_1.jpg')}});">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-6 static">
                                    <div class="slide-text white">
                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax Flyknit 3
                                        </h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Limited items available at this price
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                                                         href="#"
                                                                                         role="button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/owl-slide-->
                <div class="owl-slide cover" style="background-image: url({{asset('img/slides/slide_home_3.jpg')}});">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(255, 255, 255, 0.5)">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start">
                                <div class="col-lg-12 static">
                                    <div class="slide-text text-center black">
                                        <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>Monarch IV SE</h2>
                                        <p class="owl-slide-animated owl-slide-subtitle">
                                            Lightweight cushioning and durable support with a Phylon midsole
                                        </p>
                                        <div class="owl-slide-animated owl-slide-cta"><a class="btn_1"
                                                                                         href="#"
                                                                                         role="button">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/owl-slide-->
                </div>
            </div>
            <div id="icon_drag_mobile"></div>
        </div>
        <!--/carousel-->

        <ul id="banners_grid" class="clearfix">
            <li>
                <a href="#" class="img_container">
                    <img src="{{asset('img/banners_cat_placeholder.jpg')}}" data-src="{{asset('img/banner_1.jpg')}}"
                         alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Men's Collection</h3>
                        <div><span class="btn_1">Shop Now</span></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="img_container">
                    <img src="{{asset('img/banners_cat_placeholder.jpg')}}" data-src="{{asset('img/banner_2.jpg')}}"
                         alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Womens's Collection</h3>
                        <div><span class="btn_1">Shop Now</span></div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="img_container">
                    <img src="{{asset('img/banners_cat_placeholder.jpg')}}" data-src="{{asset('img/banner_3.jpg')}}"
                         alt="" class="lazy">
                    <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <h3>Kids's Collection</h3>
                        <div><span class="btn_1">Shop Now</span></div>
                    </div>
                </a>
            </li>
        </ul>
        <!--/banners_grid -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Top Selling</h2>
                <span>Products</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
            </div>
            
            <div class="row small-gutters">
            <x-product></x-product>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

        <div class="featured lazy" data-bg="url({{asset('img/featured_home.jpg')}})">
            <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <div class="container margin_60">
                    <div class="row justify-content-center justify-content-md-start">
                        <div class="col-lg-6 wow" data-wow-offset="150">
                            <h3>Armor<br>Air Color 720</h3>
                            <p>Lightweight cushioning and durable support with a Phylon midsole</p>
                            <div class="feat_text_block">
                                <div class="price_box">
                                    <span class="new_price">$90.00</span>
                                    <span class="old_price">$170.00</span>
                                </div>
                                <a class="btn_1" href="#" role="button">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /featured -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Featured</h2>
                <span>Products</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
            </div>
            <div class="owl-carousel owl-theme products_carousel">
                <div class="item">
                    <div class="grid_item">
                        <span class="ribbon new">New</span>
                        <figure>
                            <a href="#">
                                <img class="owl-lazy"
                                     src="{{asset('img/products/product_placeholder_square_medium.jpg')}}"
                                     data-src="{{asset('img/products/shoes/4.jpg')}}" alt="">
                            </a>
                        </figure>
                        <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i
                                class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i>
                        </div>
                        <a href="#">
                            <h3>ACG React Terra</h3>
                        </a>
                        <div class="price_box">
                            <span class="new_price">$110.00</span>
                        </div>
                        <ul>
                            <li><a href="#" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a>
                            </li>
                            <li><a href="#" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a>
                            </li>
                            <li><a href="#" class="tooltip-1" data-toggle="tooltip" data-placement="left"
                                   title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                        </ul>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /item -->
            </div>
            <!-- /products_carousel -->
        </div>
        <!-- /container -->

        <div class="bg_gray">
            <div class="container margin_30">
                <div id="brands" class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="#"><img src="{{asset('img/brands/placeholder_brands.png')}}"
                                         data-src="{{asset('img/brands/logo_1.png')}}"
                                         alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#"><img src="{{asset('img/brands/placeholder_brands.png')}}"
                                         data-src="{{asset('img/brands/logo_2.png')}}"
                                         alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#"><img src="{{asset('img/brands/placeholder_brands.png')}}"
                                         data-src="{{asset('img/brands/logo_3.png')}}"
                                         alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#"><img src="{{asset('img/brands/placeholder_brands.png')}}"
                                         data-src="{{asset('img/brands/logo_4.png')}}"
                                         alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#"><img src="{{asset('img/brands/placeholder_brands.png')}}"
                                         data-src="{{asset('img/brands/logo_5.png')}}"
                                         alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                    <div class="item">
                        <a href="#"><img src="{{asset('img/brands/placeholder_brands.png')}}"
                                         data-src="{{asset('img/brands/logo_6.png')}}"
                                         alt="" class="owl-lazy"></a>
                    </div><!-- /item -->
                </div><!-- /carousel -->
            </div><!-- /container -->
        </div>
        <!-- /bg_gray -->

        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Latest News</h2>
                <span>Blog</span>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <a class="box_news" href="#">
                        <figure>
                            <img src="{{asset('img/blog-thumb-placeholder.jpg')}}"
                                 data-src="{{asset('img/blog-thumb-1.jpg')}}" alt="" width="400"
                                 height="266" class="lazy">
                            <figcaption><strong>28</strong>Dec</figcaption>
                        </figure>
                        <ul>
                            <li>by Mark Twain</li>
                            <li>20.11.2017</li>
                        </ul>
                        <h4>Pri oportere scribentur eu</h4>
                        <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse
                            ullum vidisse....</p>
                    </a>
                </div>
                <!-- /box_news -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->

    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_1">Quick Links</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_1">
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Help</a></li>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_2">Categories</h3>
                    <div class="collapse dont-collapse-sm links" id="collapse_2">
                        <ul>
                            <li><a href="#">Clothes</a></li>
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Furniture</a></li>
                            <li><a href="#">Glasses</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Watches</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_3">Contacts</h3>
                    <div class="collapse dont-collapse-sm contacts" id="collapse_3">
                        <ul>
                            <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                            <li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
                            <li><i class="ti-email"></i><a href="#">info@allaia.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 data-target="#collapse_4">Keep in touch</h3>
                    <div class="collapse dont-collapse-sm" id="collapse_4">
                        <div id="newsletter">
                            <div class="form-group">
                                <input type="email" name="email_newsletter" id="email_newsletter" class="form-control"
                                       placeholder="Your email">
                                <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="follow_us">
                            <h5>Follow Us</h5>
                            <ul>
                                <li><a href="#"><img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                            data-src="{{asset('img/twitter_icon.svg')}}" alt="" class="lazy"></a></li>
                                <li><a href="#"><img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                            data-src="{{asset('img/facebook_icon.svg')}}" alt="" class="lazy"></a></li>
                                <li><a href="#"><img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                            data-src="{{asset('img/instagram_icon.svg')}}" alt="" class="lazy"></a></li>
                                <li><a href="#"><img
                                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                            data-src="{{asset('img/youtube_icon.svg')}}" alt="" class="lazy"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row add_bottom_25">
                <div class="col-lg-6">
                    <ul class="footer-selector clearfix">
                        <li>
                            <div class="styled-select lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="styled-select currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img
                                src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                data-src="{{asset('img/cards_all.svg')}}" alt="" width="198" height="30" class="lazy">
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="additional_links">
                        <li><a href="#">Terms and conditions</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><span>© 2020 Allaia</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
</div>
<!-- page -->

<div id="toTop"></div><!-- Back to top button -->

<!-- COMMON SCRIPTS -->
<script src="{{asset('js/common_scripts.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{asset('js/carousel-home.min.js')}}"></script>

</body>
</html>
