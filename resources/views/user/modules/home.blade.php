@extends('user.master')
@section('content')
<!-- Search -->
@include('user.common.search')

<!-- Intro -->
<div class="intro">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center">We have the best tours</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="intro_text text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. </p>
                </div>
            </div>
        </div>
        <div class="row intro_items">
            <!-- Intro Item -->
            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(dist/img/intro_1.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">see more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>Mauritius</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Intro Item -->
            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@hellolightbulb -->
                    <div class="intro_item_background" style="background-image:url(dist/img/intro_1.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">see more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>Greece</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Intro Item -->
            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@willianjusten -->
                    <div class="intro_item_background" style="background-image:url(dist/img/intro_1.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div>
                            <a href="#">see more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>Scotland</h1>
                            <div class="intro_price">From $1450</div>
                            <div class="rating rating_4">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CTA -->
<div class="cta">
    <!-- Image by https://unsplash.com/@thanni -->
    <div class="cta_background" style="background-image:url(dist/img/cta.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- CTA Slider -->
                <div class="cta_slider_container">
                    <div class="owl-carousel owl-theme cta_slider">
                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <div class="button_bcg"></div>
                                <a href="#">book now</a>
                            </div>
                        </div>
                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <div class="button_bcg"></div>
                                <a href="#">book now</a>
                            </div>
                        </div>
                    </div>
                    <!-- CTA Slider Nav - Prev -->
                    <div class="cta_slider_nav cta_slider_prev">
                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='cta_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                                M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                                C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
                                11.042,18.219 " />
                        </svg>
                    </div>
                    <!-- CTA Slider Nav - Next -->
                    <div class="cta_slider_nav cta_slider_next">
                        <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='cta_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                                M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                                C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
                                17.046,15.554 " />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Offers -->
<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">the best offers with rooms</h2>
            </div>
        </div>
        <div class="row offers_items">
            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@nevenkrcmarek -->
                                <div class="offers_image_background" style="background-image:url(dist/img/offer_3.jpg)"></div>
                                <div class="offer_name"><a href="#">island dream</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$90<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="dist/img/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="dist/img/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="dist/img/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="dist/img/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@mantashesthaven -->
                                <div class="offers_image_background" style="background-image:url(dist/img/offer_4.jpg)"></div>
                                <div class="offer_name"><a href="#">travel light</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$30<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="dist/img/post.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="dist/img/compass.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="dist/img/bicycle.png" alt=""></li>
                                        <li class="offers_icons_item"><img src="dist/img/sailboat.png" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="testimonials">
    <div class="test_border"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">what our clients say about us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                
                <!-- Testimonials Slider -->
                <div class="test_slider_container">
                    <div class="owl-carousel owl-theme test_slider">

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="dist/img/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
                                <div class="test_icon"><img src="dist/img/backpack.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="dist/img/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
                                <div class="test_icon"><img src="dist/img/island_t.png" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials Slider Nav - Prev -->
                    <div class="test_slider_nav test_slider_prev">
                        <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='test_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                                M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                                C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
                                11.042,18.219 " />
                        </svg>
                    </div>

                    <!-- Testimonials Slider Nav - Next -->
                    <div class="test_slider_nav test_slider_next">
                        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='test_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                                M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                                C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
                                17.046,15.554 " />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
@include('user.common.contact')
@endsection