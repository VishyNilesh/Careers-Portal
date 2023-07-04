<!DOCTYPE html>

<html lang="en">
<head>

    <title>
        <?php wp_title( '|', true, 'right' ) . bloginfo('name'); ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/header-footer.css">
    <?php wp_head(); ?>

</head>

<body>
    <div class="parent nav-div navbar-white plain-white-navbar">
        <div class="nav-div">
            <nav class="navbar">
                <div class="`nav-container` nav-contain">
                    <div class="navbar-header">
                        <a class="" href="<?php get_site_url(); ?>/">
                            <img class="logo-style" src="<?php echo get_template_directory_uri(); ?>/assets/images/indiabonds-logo.png" alt="logo" />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right ">
                            <li>
                                <a href="<?php get_site_url(); ?>/explore/" class="active navbar-link">Explore</a>
                            </li>
                            <li>
                                <a href="<?php get_site_url(); ?>/how-to-buy-bonds/" class="navbar-link">How it works?</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#"> Products <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php get_site_url(); ?>/explore/" class="navbar-link">Bond Trading</a>
                                    </li>
                                    <li>
                                        <a href="<?php get_site_url(); ?>/public-issue/" class="navbar-link">Public Issue</a>
                                    </li>
                                    <li>
                                        <a href="<?php get_site_url(); ?>/explore/government-bonds/" class="navbar-link">G-Sec/SDL</a>
                                    </li>
                                    <li>
                                        <a href="<?php get_site_url(); ?>/bond-calculator/" class="navbar-link">Bond Calculator</a>
                                    </li>
                                  
                                    <li>
                                        <a href="https://sgb.indiabonds.com/sovereignGoldBondWelcome" class="navbar-link">Sovereign Gold Bonds</a>
                                    </li>
                                    <li>
                                        <a href="https://capital-gain-54ec.indiabonds.com/capital-gain-54ec-bonds/" class="navbar-link">Capital Gain 54EC</a>
                                    </li>
                                    <li>
                                        <a href="<?php get_site_url(); ?>/debt-pms/" class="navbar-link">Debt PMS<span class="new-tag">New</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php get_site_url(); ?>/bond-directory/" class="navbar-link">Bond Directory</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#"> Learn <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="blogs-header-icon">
                                        <a href="<?php get_site_url(); ?>/news-and-insight/category/blogs/" class="navbar-link">
                                            <span class="navbar-menu-icon"><img
                                            src = "<?php echo get_template_directory_uri(); ?>/assets/images/blogs-purple-icon.svg"/></span>
                                        Blogs</a>
                                    </li>
                                    <li class="News-header-icon">
                                        <a href="<?php get_site_url(); ?>/news-and-insight/category/news/" class="navbar-link">
                                            <span class="navbar-menu-icon"><img
                                            src = "<?php echo get_template_directory_uri(); ?>/assets/images/news-purple-icon.svg"/></span>
                                        News</a>
                                    </li>
                                    <li class="Video-header-icon">
                                        <a href="<?php get_site_url(); ?>/news-and-insight/videos/" class="navbar-link">
                                            <span class="navbar-menu-icon"><img
                                            src = "<?php echo get_template_directory_uri(); ?>/assets/images/video-purple-icon.svg"/></span>
                                        Videos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="https://kyc.indiabonds.com" class="navbar-link">KYC</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle navbar-link" data-toggle="dropdown" href="#"> More <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="about-header-icon">
                                        <a href="<?php get_site_url(); ?>/about-us/" class="navbar-link">
                                            <span class="navbar-menu-icon"><img
                                            src = "<?php echo get_template_directory_uri(); ?>/assets/images/about-purple-icon.svg"/></span>
                                        About Us</a>
                                    </li>
                                    <li class="contact-header-icon">
                                        <a href="<?php get_site_url(); ?>/contact-us/" class="navbar-link">
                                            <span class="navbar-menu-icon"><img
                                            src = "<?php echo get_template_directory_uri(); ?>/assets/images/contact-purple-icon.svg"/></span>
                                        Contact Us</a>
                                    </li>
                                    <li class="investors-header-icon">
                                        <a href="<?php get_site_url(); ?>/investor-grievance/" class="navbar-link">
                                            <span class="navbar-menu-icon"><img
                                            src = "<?php echo get_template_directory_uri(); ?>/assets/images/investors-purple-icon.svg"/></span>
                                        Investor Grievance</a>
                                    </li>
                                </ul>
                            </li>
                            <span id="user-id"></span>
                        </ul> 
                    </div>
                    <div class="collapse-block">
                        <span style="margin-right: 15px;">
                            <a href="<?php get_site_url(); ?>/customer/register/?next=/news-and-insight/" class="navbar-link no-top-pad  no-show-desktop" style="margin-top:-5px">
                                <button class="primary-btn sign-up-btn campaign-sign-up-btn">Sign Up</button>
                            </a>
                        </span>
                        <span>
                            <a href="<?php get_site_url(); ?>/explore/"><img class="header-search-icon no-show-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icon.svg" alt="search" /></a>
                        </span>
                        <span class="sidenav-trigger" style="font-size:24px;cursor:pointer" onclick="openNav()">&#9776;</span>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div id="mySidenav" class="sidenav">
    <div class="sidenav-content">
   <div class="sidebar-close-btn"> <btn  onclick="closeNav()">&times;</btn></div>

   <div class="side_nav_top_row">
        <a href="<?php get_site_url(); ?>/customer/register/?next=/news-and-insight/"><button class="primary-btn sign-up-btn">Sign Up</button></a>
        <a href="<?php get_site_url(); ?>/customer/login/?next=/news-and-insight/">Login</a>
    </div> 
    
    <div class="profile-name-div">
    <a href="<?php get_site_url(); ?>/customer/profile/" class="profile-anchor">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-black.svg" class="user-icon" alt="user"/>
        <span class="user-name-sidenav" style="text-transform: capitalize;"></span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-tick.png" class="user-green-tick" id="kyc-tick-mobile" alt="user">
        </a>
    <div class="dropdown sidenav-profile-dd">
    <div data-toggle="dropdown" class="goto-profile-div dropdown-toggle">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-angle-purple.png" class="goto-profile-icon" alt="user">
    </div>
    <ul class="dropdown-menu dropdown-menu-profile">
        <li>          
            <a href="<?php get_site_url(); ?>/customer/order-book/">
                <div class='logout-anchor p-no-margin' id='my_orders_block'>My Orders</div>
            </a>
        </li>
        <li>
            <a href='<?php get_site_url(); ?>/sign-out' onclick="destroySalesiq()">Logout</a>
        </li>
      </ul>
    </div>
    </div>
    

    <!--{% if SHOW_PROFILE %}
        <a href="{% url 'profile_view' host settings.CUSTOMER_HOST %}">
            <div class='logout-anchor p-no-margin id='profile_block'>My Profile</div>
        </a>
    {% endif %}
    {% if SHOW_ORDER_BOOK %}
    <a href="{% url 'order_book' host settings.CUSTOMER_HOST %}">
        <div class='logout-anchor p-no-margin ib-padding-left-0' id='my_orders_block'>My Orders</div>
    </a>
    {% endif %}-->
        
    <!-- {% else %} -->
    <!-- {% if request.get_full_path %} -->
    <!-- <div class="side_nav_top_row">
        <a href="{% url settings.SIGN_UP_VIEW host settings.CUSTOMER_HOST %}?next={{request.get_full_path|urlencode }}"><button class="primary-btn sign-up-btn">Sign Up</button></a>
        <a href="{% url settings.SIGN_IN_VIEW host settings.CUSTOMER_HOST %}?next={{request.get_full_path|urlencode }}">Login</a>
    </div> -->
    <!-- {% else %} -->
    <!-- <div class="side_nav_top_row">
        <a href="{% url settings.SIGN_UP_VIEW host settings.CUSTOMER_HOST %}"><button class="primary-btn sign-up-btn">Sign Up</button></a>
        <a href="{% url settings.SIGN_IN_VIEW host settings.CUSTOMER_HOST %}">Login</a>
    </div> -->
    <!-- {% endif %} -->
<!-- {% endif %} -->
    <hr class="hr-mobile-menu profile-menu-space" />
    <a href="<?php get_site_url(); ?>/explore/">Explore</a>
    <a href="<?php get_site_url(); ?>/how-to-buy-bonds/">How it works?</a>

    <div class="collapse-menu">
    <a data-toggle="collapse" data-target="#products-dd" ><span>Products</span> <span><img class="sidenav-caret" src="<?php echo get_template_directory_uri(); ?>/assets/images/down-angle-purple.png" /></span></a>
    <div id="products-dd" class="collapse">
        <a href="<?php get_site_url(); ?>/explore/" class="sub-menu">Bond Trading</a>
        <a href="<?php get_site_url(); ?>/public-issue/" class="sub-menu">Public Issue</a>
        <a href="<?php get_site_url(); ?>/explore/government-bonds/" class="navbar-link">G-Sec/SDL</a>
        <a href="<?php get_site_url(); ?>/bond-calculator/" class="navbar-link">Bond Calculator</a>
        <a href="https://sgb.indiabonds.com/sovereignGoldBondWelcome" class="navbar-link">SGB</a>
        <a href="https://capital-gain-54ec.indiabonds.com/capital-gain-54ec-bonds/" class="navbar-link">Capital Gain 54EC</a>
        <a href="<?php get_site_url(); ?>/debt-pms/" class="sub-menu">
            <span class="new-tag-span">
                Debt PMS<span class="new-tag">New</span>
            </span>
        </a>
      </div>
    </div>
    <a href="<?php get_site_url(); ?>/bond-directory/">Bond Directory</a>
    <div class="collapse-menu">
    <a data-toggle="collapse" data-target="#learn-dd"><span>Learn</span> <span><img class="sidenav-caret" src="<?php echo get_template_directory_uri(); ?>/assets/images/down-angle-purple.png" /></span></a>
    <div id="learn-dd" class="collapse">
        <a href="<?php get_site_url(); ?>/news-and-insight/category/blogs/">Blogs</a>
        <a href="<?php get_site_url(); ?>/news-and-insight/category/news/">News</a>
        <a href="<?php get_site_url(); ?>/news-and-insight/videos/">Videos</a>
      </div>
      </div>
    <!-- {% if SHOW_KYC %} -->
        <!-- {% if request.user.userkycdetails.ib_kyc_status != 4  %} -->
        <a href="https://kyc.indiabonds.com" title="KYC">KYC</a>
        <!-- {% else %} -->
        <!-- <a href="{% url 'profile_view' host settings.CUSTOMER_HOST %}" title="KYC" class="navbar-link{% if request.path == '/customer/profile/' %} {% endif %}">KYC</a> -->
        <!-- {% endif %} -->
    <!-- {% else %} -->
    <!-- <a href="{% url 'verify_kyc_view' host settings.CUSTOMER_HOST %}">KYC</a> -->
    <!-- {% endif %} -->
    <div class="collapse-menu">
    <a data-toggle="collapse" data-target="#more-dd"><span>More</span> <span><img class="sidenav-caret" src="<?php echo get_template_directory_uri(); ?>/assets/images/down-angle-purple.png" /></span></a>
    <div id="more-dd" class="collapse">
        <a href="<?php get_site_url(); ?>/about-us/">About Us</a>
        <!-- <a >Careers</a> -->
        <!-- <a >Media</a> -->
        <a href="<?php get_site_url(); ?>/contact-us/">Contact Us</a>
        <a href="<?php get_site_url(); ?>/investor-grievance/">Investor Grievance</a>
        <!-- <a >Life at IndiaBonds</a> -->
      </div>
</div>
    <!-- <hr class="hr-mobile-menu" /> -->
    <div class="login-div">
        

        <!-- {% if SHOW_PROFILE %} -->
            <!-- <a href="{% url 'profile_view' host settings.CUSTOMER_HOST %}">
                <div class='logout-anchor p-no-margin' id='profile_block'>My Profile</div>
            </a> -->
        
            <!-- <a href="{% url 'order_book' host settings.CUSTOMER_HOST %}"">
                <div class='logout-anchor p-no-margin ib-padding-left-0' id='my_orders_block'>My Orders</div>
            </a> -->
            <!-- 
                {% if request.user.pms_code %}
                    <a href='{{ settings.PMS_DASHBOARD_URL }}?pmscode={{ request.user.pms_code }}' target='_blank'>
                        <div class='logout-anchor p-no-margin' id='profile_pms_block'>My Debt PMS</div>
                    </a>
                {% endif %}
             -->
        <!-- {% endif %} -->

        <!-- <a href="{% url 'customer_sign_out_view' host settings.CUSTOMER_HOST %}" onclick="destroySalesiq()">Logout</a> -->
  
           
    </div>
    <hr class="hr-mobile-menu" />
    <div class="mobile-menu-bottom">
        <!-- <a title="About India Bonds" href="{% url 'about_us_view' host settings.CUSTOMER_HOST %}">About Us</a> -->
        <a href="<?php get_site_url(); ?>/privacy-policy/">Privacy Policy</a>
        <a href="<?php get_site_url(); ?>/terms-and-conditions/">Terms & Conditions</a>
        <div class="social-div">
            <a href="https://www.facebook.com/IndiaBondsOfficial/" target="_blank" rel="nofollow">
                <img loading = "lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/fb.png" alt="facebook logo" /></a>
            <a href="https://twitter.com/india_bonds" target="_blank" rel="nofollow">
                <img loading = "lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="twitter logo"/></a>
            <a href="https://www.linkedin.com/company/indiabonds" target="_blank" rel="nofollow">
                <img loading = "lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt="linkedin logo" /></a>
            <a href="https://www.instagram.com/indiabonds/" target="_blank" rel="nofollow">
                <img loading = "lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="instagram logo" /></a>
            <a href="https://www.youtube.com/channel/UC-DE1oUSTBMXJlp2IyFa7Ug" target="_blank" rel="nofollow">
                <img loading = "lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube-blue.png" alt="YouTube logo" /></a>
        
        </div>
    </div>
    </div>
</div>
</body>
<script>
    $(document).ready(function(){
        $(".collapse-menu").click(function () {
   $(this).toggleClass("backgrey");
});
});
var menu_state = "hidden";
$(".sidebar-close-btn").hide();

  $(".sidebar-close-btn").click(function () {
    if (menu_state == "open") {
      menu_state = "hidden";
      $(".sidebar-close-btn").hide();
      $(".sidenav").css("background", "radial-gradient(circle at 0px 566px, transparent 0px, #fff 0)");
    }
  });

  $(".sidenav-trigger").click(function () {
    if (menu_state == "hidden") {
      menu_state = "open";
      setTimeout(function () {
        $(".sidenav").css("background", "radial-gradient(circle at 0px 566px, transparent 23px, #fff 0)");
        $(".sidebar-close-btn").show();
      }, 300);
    }
  });
  $(".blogs-header-icon").hover(
    function () {
      $(".blogs-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/blogs-dark-header.svg");
      $(".blogs-header-icon a").css("color", "#8626D5");
    },
    function () {
      $(".blogs-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/blogs-purple-icon.svg");
      $(".blogs-header-icon a").css("color", "#292828");
    });

  $(".News-header-icon").hover(
    function () {
      $(".News-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/news-dark.svg");
      $(".News-header-icon a").css("color", "#8626D5");
    },
    function () {
      $(".News-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/news-purple-icon.svg");
      $(".News-header-icon a").css("color", "#292828");
    });

  $(".Video-header-icon").hover(
    function () {
      $(".Video-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/video-dark.svg");
      $(".Video-header-icon a").css("color", "#8626D5");
    },
    function () {
      $(".Video-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/video-purple-icon.svg");
      $(".Video-header-icon a").css("color", "#292828");
    });

  $(".about-header-icon").hover(
    function () {
      $(".about-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/about-dark.svg");
      $(".about-header-icon a").css("color", "#8626D5");
    },
    function () {
      $(".about-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/about-purple-icon.svg");
      $(".about-header-icon a").css("color", "#292828");
    });

  $(".careers-header-icon").hover(
    function () {
      $(".careers-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/careers-dark.svg");
      $(".careers-header-icon a").css("color", "#8626D5");
    },
    function () {
      $(".careers-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/careers-purple-icon.svg");
      $(".careers-header-icon a").css("color", "#292828");
    });

  $(".media-header-icon").hover(
    function () {
      $(".media-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/media-dark.svg");
      $(".media-header-icon a").css("color", "#8626D5");
    }, function () {
      $(".media-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/media-purple-icon.svg");
      $(".media-header-icon a").css("color", "#292828");
    });

  $(".contact-header-icon").hover(
    function () {
      $(".contact-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/contact-dark.svg");
      $(".contact-header-icon a").css("color", "#8626D5");
    }, function () {
      $(".contact-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/contact-purple-icon.svg");
      $(".contact-header-icon a").css("color", "#292828");
    });

  $(".investors-header-icon").hover(
    function () {
      $(".investors-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/investors-dark.svg");
      $(".investors-header-icon a").css("color", "#8626D5");
    }, function () {
      $(".investors-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/investors-purple-icon.svg");
      $(".investors-header-icon a").css("color", "#292828");
    });

  $(".life-header-icon").hover(
    function () {
      $(".life-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/life-dark.svg");
      $(".life-header-icon a").css("color", "#8626D5");
    }, function () {
      $(".life-header-icon img").attr("src", "<?php echo get_template_directory_uri(); ?>/assets/images/life-purple-icon.svg");
      $(".life-header-icon a").css("color", "#292828");
    });


</script>