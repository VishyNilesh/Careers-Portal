<?php 
get_header()
?>

<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/career.css">
<style>
    .nav-div{
        z-index:1030;
    }
    .footer-base{
        margin-bottom:0px;
    }
    @media(min-width:1200px){
        .second-fold{
            margin-left: 12px;
        }
    }
  
</style>
<div class="parent first-fold">
 <div class="container first-fold-sub">
        <div class="">
            <div class="col-lg-6 col-md-5 first-fold-img visible-xs visible-sm">
                <img class="img-responsive  ffc" src="<?php bloginfo( 'template_directory' )?>/assets/img/hero.png" />
            </div>
            <div class="col-lg-6 col-md-5 first-fold-fc">
               <h1>Invest in a <span class="font-purple"> Career </span>that <br class="visible-lg"> <span class="font-purple"> Bonds </span> Passion with <br class="visible-lg"> Purpose</h1>
               <br>
               <p>Join us as we build India’s Fixed <br class="visible-lg"> Income Landscape</p>
               <br><br>
               <a href="<?php echo esc_url( home_url( '/job-opening-list/' ) ); ?>"><button id="View-opening" class="first-fold-btn"><span class="first-fold-btn-txt">View Openings</span></button></a>
            </div>
            <div class="col-lg-6 col-md-7 first-fold-img hidden-xs hidden-sm ">
                <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/hero.png" />
            </div>
        </div>
    </div>
</div>
<div class="shadow-to-top"></div>



<div class="second-fold">
    <div class="container">
        <div class="">
            <div class="col-lg-10 col-md-9 col-sm-8 col-xs-6" style="padding-left:0px">
                <h2>Latest Job Openings</h2>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 second-fold-view-all-div">
            <a href="<?php echo esc_url( home_url( '/all-openings-list/' ) ); ?>"><button id="View-all-opening" class="second-fold-view-all"> 
                    <span class="second-fold-view-all-text">View All</span> 
                    <img class="second-fold-arrow" src="<?php bloginfo( 'template_directory' )?>/assets/img/carrers-right-arrow.png" alt="">
                </button>
            </a>
            </div>
        </div>
    </div>
    <br>

    <?php 
    $latest_posts = get_latest_posts_data(4);

if ( ! empty( $latest_posts ) ) {
        $data_array = array(); // Initialize an empty array    foreach ( $latest_posts as $post ) {
            foreach ($latest_posts as $post) {
                setup_postdata($post);

        // Access the post data
        $post_title    = get_the_title();
        $post_content  = get_the_content();
        $post_author   = get_the_author();
        $post_date     = get_the_date();
        $post_thumbnail = get_the_post_thumbnail_url();
        $custom_field1_value = get_post_meta( get_the_ID(), 'job_desgination_thumbnail', true );
        $custom_field2_value = get_post_meta( get_the_ID(), 'job_designation_value', true );
        $custom_field3_value = get_post_meta( get_the_ID(), 'job_city', true );
        $custom_field4_value = get_post_meta( get_the_ID(), 'year_of_experience_value', true );
        $custom_field5_value = get_post_meta( get_the_ID(), 'custom_field1', true );
        $image_url      = wp_get_attachment_url( $custom_field1_value );
        $post_date_formatted = human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) . ' ago';
        $post_id = get_the_ID();
        $data_array[] = array(
            'post_title' => $post_title,
            'post_content' => $post_content,
            'post_author' => $post_author,
            'post_date' => $post_date,
            'post_thumbnail' => $post_thumbnail,
            'custom_field1_value' => $custom_field1_value,
            'custom_field2_value' => $custom_field2_value,
            'custom_field3_value' => $custom_field3_value,
            'custom_field4_value' => $custom_field4_value,
            'custom_field5_value' => $custom_field5_value,
            'image_url' => $image_url,
            'post_date_formatted' => $post_date_formatted,
            'post_id'=>$post_id,
        );
            
    }

    // Restore original post data
    wp_reset_postdata();
}
 else {
    // No posts found
}
?>

<?php
include get_template_directory() . '/jobcards.php';
?>
   
    
</div>
<br><br><br><br>
<div class="third-fold">
    <!-- Desktop View -->
    
        <div class="container">
            <div class="col-lg-6" style="padding-left:0px"><h2>Nurturing Talent with Innovation and Collaboration</h2></div>
            <div class="col-lg-6 title-para-div"style="padding-left:0px"><p class="title-para">Unleash your true growth potential at IndiaBonds, where your opinions matter</p></div>
        </div>
        <br>
        <div class="visible-lg">
            <div class="container">
                <div class="col-lg-12" style="padding-left:0px">
                    <div class="col-lg-6" style="padding-left:0px">
                        <div class=""></div>
                    <img id="img-1" class="img-responsive third-fold-images" src="<?php bloginfo( 'template_directory' )?>/assets/img/nurture-img-1.png" />
                    <img id="spin-in-1" class="expand-img slide" src="<?php bloginfo( 'template_directory' )?>/assets/img/expand-right.png" onclick="rotateImage();"/>
                </div>
                    <div id="fade-in"  class="col-lg-6">
                        <div class="col-lg-6 on-click-cards on-click-card-1">
                            <div class="">
                                <h3 class="card-1-header">New-Age Fintech Environment</h3>
                                <p class="card-1-details">We develop groundbreaking technologies and engineer new tech solutions that have revolutionized and disrupted India’s Bond Market. Here is your chance to 
                                    play a vital role in contributing to the growth story of India's Fixed Income industry!
                                </p>
                                <div class="star">
                                <img class="star-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/star_blue.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="">
                <div class="col-lg-6" id="fade-in-1">
                        <div class="col-lg-6 on-click-cards on-click-card-2">
                            <div class="">
                                <h3 class="card-1-header">Equal Opportunities for All</h3>
                                <p class="card-1-details">Your gender, age and designations do not matter... but you do. We welcome anyone who possesses the talent and aptitude to solve challenging business issues. That is all that matters.
                                </p>
                                <div style="padding-bottom:55px"></div>
                                <div class="star">
                                <img class="star-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/star_green.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <img id="img-2" class="img-responsive third-fold-images" src="<?php bloginfo( 'template_directory' )?>/assets/img/nurture-img-2.png" alt="">
                <img id="spin-in-2" class="expand-img-1 slide-1" src="<?php bloginfo( 'template_directory' )?>/assets/img/expand-left.png"  onclick="rotateImage1();"/>
                </div>
                
            </div>

            <div class="container">
                <div class="col-lg-12" style="padding-left:0px">
                    <div class="col-lg-6" style="padding-left:0px">
                    <img id="img-3" class="img-responsive third-fold-images" src="<?php bloginfo( 'template_directory' )?>/assets/img/nurture-img-3.png" />
                    <img id="spin-in-3" class="expand-img slide-2" src="<?php bloginfo( 'template_directory' )?>/assets/img/expand-right.png" onclick="rotateImage2();"/>
                    </div>
                    <div id="fade-in-2" class="col-lg-6">
                        <div class="col-lg-6 on-click-cards on-click-card-3">
                            <div class="">
                                <h3 class="card-1-header">Learn and Grow</h3>
                                <p class="card-1-details">The pursuit of knowledge never ends! Work with India’s finest domain leaders, collaborate in teams to build market innovations and develop to unveil an enhanced version of yourself!
                                </p>
                                <div style="padding-bottom:55px"></div>
                                <div class="star">
                                <img class="star-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/star_orange.png" />
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="">
                <div class="col-lg-6" id="fade-in-3">
                        <div class="col-lg-6 on-click-cards on-click-card-4">
                            <div class="">
                                <h3 class="card-1-header">Creation meets Recreation</h3>
                                <p class="card-1-details">At IndiaBonds, we are committed to creating a workplace that is not only productive and stimulating, but also enjoyable and fun. A place where you feel comfortable and can celebrate being yourself.
                                </p>
                                <div style="padding-bottom:30px"></div>
                                <div class="star">
                                <img class="star-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/star_pink.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                <img id="img-4" class="img-responsive third-fold-images" src="<?php bloginfo( 'template_directory' )?>/assets/img/nurture-img-4.png" alt="">
                <img id="spin-in-4"  class="expand-img-1 slide-3" src="<?php bloginfo( 'template_directory' )?>/assets/img/expand-left.png" onclick="rotateImage3();"/>
                </div>
                
            </div>
        </div>

    <!-- Non Desktop View -->
        <div class="hidden-lg mobile-view-collab">
                    <div class="">
                        <div class="">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                            <img class="nurture-images img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/nurture-img-1.png" id="image1" onclick="toggleCard(this, 'card-container1')">
                            <img id="spin-in-5" class="expand-img slide mobile-star-green visible-xs visible-sm visible-md" src="<?php bloginfo( 'template_directory' )?>/assets/img/expand-mobile.png" onclick="rotateImage4();toggleCard(this, 'card-container1');"/>
                        </div>
                        </div>
                        <div class="">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card-container" id="card-container1">
                                <div class="card mobile-card-1">
                                <h3 class="card-1-header-mobile">New-Age Fintech Environment</h3>
                                    <p class="card-1-details">We develop groundbreaking technologies and engineer new tech solutions that have revolutionized and disrupted India’s Bond Market. Here is your chance to 
                                        play a vital role in contributing to the growth story of India's Fixed Income industry!
                                    </p>
                                    <div class="star">
                                    <img class="star-img-mobile" src="<?php bloginfo( 'template_directory' )?>/assets/img/star_blue.png" />
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                            <img class="nurture-images img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/nurture-img-2.png" id="image2" onclick="toggleCard(this, 'card-container2')">
                            <img id="spin-in-6" class="expand-img slide mobile-star-green visible-xs visible-sm visible-md" src="<?php bloginfo( 'template_directory' )?>/assets/img/expand-mobile.png" onclick="rotateImage5();toggleCard(this, 'card-container2');"/>    
                        </div>
                        </div>
                        <div class="">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card-container" id="card-container2">
                                <div class="card mobile-card-1 green-card-mobile">
                                <h3 class="card-1-header-mobile">Equal Opportunities for All</h3>
                                    <p class="card-1-details">Your gender, age and designations do not matter... but you do. We welcome anyone who possesses the talent and aptitude to solve challenging business issues. That is all that matters.
                                    </p>
                                    <div style="padding-bottom:20px"></div>
                                    <div class="star">
                                    <img class="star-img-mobile" src="<?php bloginfo( 'template_directory' )?>/assets/img/star_green.png" />
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-lg-6">
                            <img class="nurture-images img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/nurture-img-3.png" id="image3" onclick="toggleCard(this, 'card-container3')">
                            <img id="spin-in-7" class="expand-img slide mobile-star-green visible-xs visible-sm visible-md" src="<?php bloginfo( 'template_directory' )?>/assets/img/expand-mobile.png" onclick="rotateImage6();toggleCard(this, 'card-container3');"/>        
                        </div>
                        </div>
                        <div class="">
                            <div class="col-lg-6">
                            <div class="card-container" id="card-container3">
                                <div class="card mobile-card-1 orange-card-mobile">
                                <h3 class="card-1-header-mobile">Learn and Grow</h3>
                                    <p class="card-1-details">The pursuit of knowledge never ends! Work with India’s finest domain leaders, collaborate in teams to build market innovations and develop to unveil an enhanced version of yourself!
                                    </p>
                                    <div style="padding-bottom:20px"></div>
                                    <div class="star">
                                    <img class="star-img-mobile" src="<?php bloginfo( 'template_directory' )?>/assets/img/star_orange.png" />
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="col-lg-6">
                            <img class="nurture-images img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/nurture-img-4.png" id="image4" onclick="toggleCard(this, 'card-container4')">
                            <img id="spin-in-8" class="expand-img slide mobile-star-green visible-xs visible-sm visible-md" src="<?php bloginfo( 'template_directory' )?>/assets/img/expand-mobile.png" onclick="rotateImage7();toggleCard(this, 'card-container4');"/>    
                        </div>
                        </div>
                        <div class="">
                            <div class="col-lg-6">
                            <div class="card-container" id="card-container4">
                                <div class="card mobile-card-1 pink-card-mobile">
                                <h3 class="card-1-header-mobile">Creation meets Recreation</h3>
                                    <p class="card-1-details">At IndiaBonds, we are committed to creating a workplace that is not only productive and stimulating, but also enjoyable and fun. A place where you feel comfortable and can celebrate being yourself.
                                    </p>
                                    <div style="padding-bottom:20px"></div>
                                    <div class="star">
                                    <img class="star-img-mobile" src="<?php bloginfo( 'template_directory' )?>/assets/img/star_pink.png" />
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

</div>
</div>
</div>
<br><br><br><br>
<div class="fourth-fold visible-lg">
    <div class="container" style="
    margin-bottom: -46px;
">
        <h2>Life at IndiaBonds – Where you can be You</h2>
        <p class="para">Discover the dynamic atmosphere of our workplace</p>
    </div>
    <div class="container">
        <div id="myCarousel" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-list">
            <div class="">
                <div class="col-lg-12 carousel-control-outer-div">
                <div class="col-lg-2 carousel-control-inner-div carousel-control-inner-div-1 carousel-control-inner-div-onclick" data-target="#myCarousel" data-slide-to="0" class="active">Ideate</div>
                <div class="col-lg-2 carousel-control-inner-div carousel-control-inner-div-2" data-target="#myCarousel" data-slide-to="1">Activate</div>
                <div class="col-lg-2 carousel-control-inner-div carousel-control-inner-div-3" data-target="#myCarousel" data-slide-to="2">Play</div>
            </div>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
      
            <div class="item active">
              <div class="container"> 
                <div class="col-lg-6">
                    <div>
                    <img class="ideate-1-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/ideate-1.png" />
                    </div>
                    <div class="carousel-caption hidden carousel-caption-1">
                        <p class="hidden">Think up ideas that shape the future</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/ideate-2.png" />
                    <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/ideate-3.png" />
                </div>
              </div> 
            </div>
      
            <div class="item">
                <div class="container"> 
                  <div class="col-lg-6">
                      <img class="activate-1-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/activate-1.png" />
                      <div class="carousel-caption hidden carousel-caption-2">
                        <p class="hidden">Transforming ideas into reality</p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                      <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/activate-2.png" />
                      <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/activate-3.png" />
                  </div>
                </div> 
              </div>
          
              <div class="item">
                <div class="container"> 
                  <div class="col-lg-6">
                      <img class="play-1-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/play-1.png" />
                      <div class="carousel-caption hidden carousel-caption-3">
                        <p class="hidden">We know that Play is as important as Work!</p>
                    </div>
                  </div>
                  <div class="col-lg-6">
                      <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/play-2.png" />
                      <img class="img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/play-3.png" />
                  </div>
                </div> 
              </div>    
          </div>
        </div>
    </div>
    
    <br><br>
</div>

<?php
include get_template_directory() . '/image-slider.php';
?>

<br class="hidden-lg"><br class="hidden-lg">
<div class="fifth-fold visible-lg container">
    <div class="container" style="display: flex;
        justify-content: center;">
            <div class="col-lg-7 col-md-9 col-sm-6"><h2>Be a <span class="font-purple">Changemaker</span>. <br class="visible-xs"> Join IndiaBonds</h2></div>
            <br class="visible-xs">
            <div class="col-lg-3 col-md-3 col-sm-6"><a href="<?php echo esc_url( home_url( '/job-opening-list/' ) ); ?>"><button id="fourth-fold-button" class="fourth-fold-btn"><span class="fourth-fold-btn-txt">View Openings</span></button></a>
        </div>
    </div>  

    <br><br><br><br>
    </div>
</div>

<div class="fifth-fold hidden-lg">
    <div class="container">
            <div class="col-lg-7 col-md-9 col-sm-6"><h2>Be a <span class="font-purple">Changemaker</span>. <br class="visible-xs"> Join IndiaBonds</h2></div>
            <div class="col-lg-3 col-md-3 col-sm-6"><a href="<?php echo esc_url( home_url( '/job-opening-list/' ) ); ?>"><button id="fourth-fold-button" class="fourth-fold-btn"><span class="fourth-fold-btn-txt">View Openings</span></button></a>
        </div>
    </div>  

    <br><br><br><br>
    </div>
</div>

<script>
$("document").ready(function(){ 
        $(".second-fold-view-all-div").mouseenter(function(){       
            $('.second-fold-arrow').attr('src',"<?php bloginfo( 'template_directory' )?>/assets/img/Group 3112.png");  
            $('.second-fold-view-all-text').css('color','white');
        });     
        $(".second-fold-view-all-div").mouseleave(function(){       
            $('.second-fold-arrow').attr('src',"<?php bloginfo( 'template_directory' )?>/assets/img/carrers-right-arrow.png");    
            $('.second-fold-view-all-text').css('color','#292828');

        }); 
    });
</script>
<script>

// Desktop

$('.slide-1').on('click', function(){
    $('#fade-in-1').toggleClass('show');
});
$('.slide-2').on('click', function(){
    $('#fade-in-2').toggleClass('show');
});
$('.slide-3').on('click', function(){
    $('#fade-in-3').toggleClass('show');
});

var isCardVisible1 = true;
var isCardVisible2 = true;
var isCardVisible3 = true;
var isCardVisible4 = false;

function toggleCard(image, cardContainerId) {
  var cardContainer = document.getElementById(cardContainerId);
  var card = cardContainer.querySelector('.card');
  var images = document.getElementsByTagName('img');

  if (cardContainerId === 'card-container1') {
    if (isCardVisible1) {
      cardContainer.classList.remove('show');
      card.classList.remove('slide-down');
      card.classList.add('slide-up');
      document.getElementById('image2').style.marginTop="380px";
   
    } else {
      cardContainer.classList.add('show');
      card.classList.remove('slide-up');
      card.classList.add('slide-down');
      document.getElementById('image2').style.marginTop="50px";
    }
    isCardVisible1 = !isCardVisible1;

  } else if (cardContainerId === 'card-container2') {
    // Similar logic for image2

    if (isCardVisible2) {
      cardContainer.classList.remove('show');
      card.classList.remove('slide-down');
      card.classList.add('slide-up');
      document.getElementById('image3').style.marginTop="380px";
    
    } else {
      cardContainer.classList.add('show');
      card.classList.remove('slide-up');
      card.classList.add('slide-down');
      document.getElementById('image3').style.marginTop="50px";

    }
    isCardVisible2 = !isCardVisible2;
  } else if (cardContainerId === 'card-container3') {

    // Similar logic for image3
    if (isCardVisible3) {
      cardContainer.classList.remove('show');
      card.classList.remove('slide-down');
      card.classList.add('slide-up');
      document.getElementById('image4').style.marginTop="380px";

    } else {
      cardContainer.classList.add('show');
      card.classList.remove('slide-up');
      card.classList.add('slide-down');
      document.getElementById('image4').style.marginTop="50px";

    }
    isCardVisible3 = !isCardVisible3;
  } else if (cardContainerId === 'card-container4') {

    // Similar logic for image4
    if (isCardVisible4) {
      cardContainer.classList.remove('show');
      card.classList.remove('slide-down');
      card.classList.add('slide-up');
      document.querySelector('.mobile-view-fourth-fold').style.marginTop="280px";

    } else {
      cardContainer.classList.add('show');
      card.classList.remove('slide-up');
      card.classList.add('slide-down');
      document.querySelector('.mobile-view-fourth-fold').style.marginTop="50px";
    }
  }isCardVisible4 = !isCardVisible4;
}

function rotateImage() {
  var image1 = document.getElementById('spin-in-1');
  image1.classList.toggle('rotate-180');
}
function rotateImage1() {
  var image2 = document.getElementById('spin-in-2');
  image2.classList.toggle('rotate-180');
}
function rotateImage2() {
  var image3 = document.getElementById('spin-in-3');
  image3.classList.toggle('rotate-180');
}
function rotateImage3() {
  var image4 = document.getElementById('spin-in-4');
  image4.classList.toggle('rotate-180');
}
function rotateImage4() {
  var image4 = document.getElementById('spin-in-5');
  image4.classList.toggle('rotate-180');

}
function rotateImage5() {
  var image4 = document.getElementById('spin-in-6');
  image4.classList.toggle('rotate-180');
}
function rotateImage6() {
  var image4 = document.getElementById('spin-in-7');
  image4.classList.toggle('rotate-180');
}
function rotateImage7() {
  var image4 = document.getElementById('spin-in-8');
  image4.classList.toggle('rotate-180');
}

</script>
<script>
    // When the user scrolls down , change the background of header
    $(document).ready(function () {
        if ($(window).scrollTop() > 25) {
            $(".nav-div").addClass("navbar-white");
        }

        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 25) {
                $(".nav-div").addClass("navbar-white");
            } else {
                $(".nav-div").removeClass("navbar-white");
            }
        }
    });
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        $("body").addClass("dark-back");
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        $("body").removeClass("dark-back");
    }
</script>
<script>
var addclass = 'carousel-control-inner-div-onclick';
var $cols = $('.carousel-control-inner-div').click(function(e) {
    $cols.removeClass(addclass);
    $(this).addClass(addclass);
});

$("document").ready(function(){ 
        $(".ideate-1-img").mouseenter(function(){       
            $(this).attr('src',"<?php bloginfo( 'template_directory' )?>/assets/img/ideate-1.1.png");      
            $(this).addClass("img-hover");
            $(".carousel-caption-1").removeClass("hidden");
            $(".carousel-caption-1 p").removeClass("hidden");
        });     
        $(".ideate-1-img").mouseleave(function(){       
            $(this).attr('src',"<?php bloginfo( 'template_directory' )?>/assets/img/ideate-1.png");  
            $(this).removeClass("img-hover");
            $(this).css({"transition":"0.4s"});
            $(".carousel-caption-1").addClass("hidden");
            $(".carousel-caption-1 p").addClass("hidden"); 
        }); 
        $(".activate-1-img").mouseenter(function(){       
            $(this).attr('src',"<?php bloginfo( 'template_directory' )?>/assets/img/activate-1.1.png");      
            $(this).addClass("img-hover");
            $(".carousel-caption-2").removeClass("hidden");
            $(".carousel-caption-2 p").removeClass("hidden");
        });     
        $(".activate-1-img").mouseleave(function(){       
            $(this).attr('src',"<?php bloginfo( 'template_directory' )?>/assets/img/activate-1.png");  
            $(this).removeClass("img-hover");  
            $(".carousel-caption-2").addClass("hidden");
            $(".carousel-caption-2 p").addClass("hidden"); 
        }); 
        $(".play-1-img").mouseenter(function(){       
            $(this).attr('src',"<?php bloginfo( 'template_directory' )?>/assets/img/play-1.1.png");      
            $(this).addClass("img-hover");
            $(".carousel-caption-3").removeClass("hidden");
            $(".carousel-caption-3 p").removeClass("hidden");
        });     
        $(".play-1-img").mouseleave(function(){       
            $(this).attr('src',"<?php bloginfo( 'template_directory' )?>/assets/img/play-1.png");  
            $(this).removeClass("img-hover");  
            $(".carousel-caption-3").addClass("hidden");
            $(".carousel-caption-3 p").addClass("hidden"); 
        }); 
    });
</script>


<script>

var eventFired1 = false;
var eventFired2 = false;
var eventFired3 = false;
var eventFired4 = false;
var eventFired5 = false;
var eventFired6 = false;
var eventFired7 = false;
var eventFired8 = false;
objectPositionTop =  $('#img-1').offset().top-300;
objectPositionTop2 = $('#img-2').offset().top-300;
objectPositionTop3 = $('#img-3').offset().top-300;
objectPositionTop4 = $('#img-4').offset().top-300;

objectPositionTop6 = $('#image1').offset().top-500;
objectPositionTop7 = $('#image2').offset().top-400;
objectPositionTop8 = $('#image3').offset().top+300;
objectPositionTop9 = $('#image4').offset().top+700;

$(window).on('scroll', function() {

 var currentPosition = $(document).scrollTop();
 
 if (currentPosition > objectPositionTop && eventFired1 === false) {
   eventFired1 = true;
   $("#spin-in-1").trigger('click');
   $('#fade-in').addClass('show');
}

 else if (currentPosition > objectPositionTop2 && eventFired2 === false) {
   eventFired2 = true;
   $("#spin-in-2").trigger('click');
  
 }

 else if (currentPosition > objectPositionTop3 && eventFired3 === false) {
   eventFired3 = true;
   $("#spin-in-3").trigger('click');
 }

 else if (currentPosition > objectPositionTop4 && eventFired4 === false) {
   eventFired4 = true;
   $("#spin-in-4").trigger('click');
 }

 if (currentPosition > objectPositionTop6 && eventFired5 === false) {
   eventFired5 = true;
   $("#spin-in-5").trigger('click');
 }

 else if (currentPosition > objectPositionTop7 && eventFired6 === false) {
   eventFired6 = true;
   $("#spin-in-6").trigger('click');
 }

 else if (currentPosition > objectPositionTop8 && eventFired7 === false) {
   eventFired7 = true;
   $("#spin-in-7").trigger('click');
 }

 else if (currentPosition > objectPositionTop9 && eventFired8 === false) {
   eventFired8 = true;
   $("#spin-in-8").trigger('click');
 }
});

 
</script>

<script>
$('#spin-in-1').on('click', function(){
    $('#fade-in').toggleClass('show');
});

</script>
<?php 
get_footer();
?>