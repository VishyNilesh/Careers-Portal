
<!--Common footer page-->
<div class="footer-base hide-footer">
    <div class="container ib-footer-container">
        <div class="row logo-row">
            <div class="col-md-8 col-xs-6">
                <div class="row footer-row">
                    <div class="col-md-4 footer-col"><a title="About India Bonds" class="footer-anchor" href="<?php get_site_url(); ?>/about-us/">About Us</a></div>
                    <div class="col-md-4 footer-col"><a title="Explore" class="footer-anchor" href="<?php get_site_url(); ?>/explore/">Explore</a></div>
                    <div class="col-md-4 footer-col"><a title="Bonds Directory" class="footer-anchor" href="<?php get_site_url(); ?>/bond-directory/">Bond Directory</a></div>

                </div>
                <div class="row footer-row">
                    <div class="col-md-4 footer-col"><a title="Privacy Policy" class="footer-anchor" href="<?php get_site_url(); ?>/privacy-policy/">Privacy Policy</a></div>
                    <div class="col-md-4 footer-col"><a title="How it works?" class="footer-anchor" href="<?php get_site_url(); ?>/how-to-buy-bonds/">How it works?</a></div>
                    <div class="col-md-4 footer-col"><a title="News and Insights" class="footer-anchor" href="<?php get_site_url(); ?>/news-and-insight/">Learn</a></div>
                    

                </div>
                <div class="row footer-row">
                    <div class="col-md-4 footer-col"><a title="Terms & Conditions" class="footer-anchor" href="<?php get_site_url(); ?>/terms-and-conditions/">Terms & Conditions</a></div>
                    <div class="col-md-4 footer-col"><a title="Contact Us" class="footer-anchor" href="<?php get_site_url(); ?>/contact-us/">Contact Us</a></div>
                    <div class="col-md-4 footer-col"><a title="Frequently Asked Questions" class="footer-anchor" href="<?php get_site_url(); ?>/frequently-asked-questions/">Frequently Asked Questions</a></div>
                    

                </div>
                <div class="row footer-row">
                  
                    <div class="col-md-4 footer-col"><a title="Disclaimer" class="footer-anchor" href="<?php get_site_url(); ?>/disclaimer/">Disclaimer</a></div>
                    <div class="col-md-4 footer-col"><a title="Contact Us" class="footer-anchor" href="<?php get_site_url(); ?>/investor-grievance/">Investor Grievance</a></div>
                </div>
                
            </div>
            <div class="col-md-4  col-xs-6 logo-holder">
                <div>
                    <a href="<?php get_site_url(); ?>/" ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/india-bonds-white-logo.png" class="logo-style logo-style-footer" alt="India Bonds" /></a> 
                </div>
            </div>
        </div>
        
      

        <div class="row">
            <div class="col-xs-12 footer-line"></div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <ul class="footer-bond-links">
                    <p class="footer-offering-title">Offerings :</p>
                    <li><a href="<?php get_site_url(); ?>/high-yield-bonds/" title="High Yield Bonds">High Yield Bonds</a></li>
                    <li>|</li>
                    <li><a href="<?php get_site_url(); ?>/tax-free-bonds/" title="Tax Free Bonds">Tax Free Bonds</a></li>
                     <li>|</li>
                    <li><a href="<?php get_site_url(); ?>/bank-bonds/" title="Bank Bonds">Bank Bonds</a></li>
                     <li>|</li>
                    <li><a href="<?php get_site_url(); ?>/capital-gain-54ec-bonds/" title="Capital Gain Bonds">Capital Gain Bonds</a></li>
                     <li>|</li>
                    <li><a href="https://sgb.indiabonds.com/sovereignGoldBondWelcome" title="Sovereign Gold Bonds">Sovereign Gold Bonds</a></li>
                     <li>|</li>
                    <li><a href="<?php get_site_url(); ?>/debt-pms/" title="Bonds IPO">Debt PMS</a></li>
                    <li>|</li>
                    <li><a href="<?php get_site_url(); ?>/public-issue/" title="Bonds IPO">Bond IPO</a></li>
                    <li>|</li>
                     <li><a href="<?php get_site_url(); ?>/bond-calculator/" title="Bond Pricer & YTM Calculator">Bond Calculator</a></li>
                  </ul>
            </div>
        </div>

        <div class="row copyright-row">
            <div class="col-xs-6 copyright-info">
                © 2020-2022 <a href="<?php get_site_url(); ?>/" class="footer-link-color">India Bond</a> Pvt Ltd. | CIN: U67100MH2008PTC178990
            </div>
            <div class="col-xs-6 social-icon-base">
               <a href="https://www.facebook.com/IndiaBondsOfficial/" target="_blank" rel="nofollow"> <div class="social-icon-holder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/awesome-facebook-square.svg" alt="facebook logo"
                        class="social-icon facebook" /></div></a>
                <a href="https://twitter.com/india_bonds" target="_blank"  rel="nofollow"><div class="social-icon-holder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/awesome-twitter-square.svg" alt="twitter logo"
                        class="social-icon twitter" /></div></a>
                <a href="https://www.linkedin.com/company/indiabonds" target="_blank" rel="nofollow"><div class="social-icon-holder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/awesome-linkedin.svg" alt="linkedin logo"
                        class="social-icon linkedin" /></div></a>
                        <a href="https://www.instagram.com/indiabonds/" target="_blank" rel="nofollow"> <div class="social-icon-holder"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg"   alt="instagram logo" class="social-icon instagram" />
                </div></a>              
                <a href="https://www.youtube.com/channel/UC-DE1oUSTBMXJlp2IyFa7Ug" target="_blank" rel="nofollow"> 
                    <div class="social-icon-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube-white.svg"   alt="instagram logo" class="social-icon instagram" />
                    </div>
                </a>
              
            </div>
        </div>
    </div>
</div>
<script>
    function getCookie(cName) {
        console.log(cName);
  const name = cName + "=";
  const cDecoded = decodeURIComponent(document.cookie); //to be careful
  const cArr = cDecoded.split('; ');
  let res;
  cArr.forEach(val => {
    if (val.indexOf(name) === 0) res = val.substring(name.length);
  });
  if (res){
    user_name = JSON.parse(JSON.parse(res.replace(/\\054/g,','))).user_name;
    flag_kyc = JSON.parse(JSON.parse(res.replace(/\\054/g,','))).is_kyc_verified;
    <?php	
    global $post;	
    $page_slug = $post->post_name;	
    ?>
    if(flag_kyc){
        $("#user-id").html(`<li class="navbar-link">
       <div class="user-profile-div"> <div class="user-pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-black.svg" alt="user"/></div> <p class="p-no-margin user-name"></p><img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-tick.png" class="user-green-tick" alt="user"/>
                <a href="#" class="user-options" title="Header" data-html="true" data-toggle="popover"  data-placement="bottom" data-template="
                  <div  class='logout-div custom-logout-menu'>
                    <a href='<?php get_site_url(); ?>/customer/profile/'>
                        <div class='logout-anchor p-no-margin logout-text custom-logout-text kyc-verified-green kyc-verified' id='profile_block'>KYC Verified</div>	
                        </a>	
                        <a href='<?php get_site_url(); ?>/customer/profile/'>
                            <div class='logout-anchor p-no-margin logout-text custom-logout-text' id='profile_block'>My Profile</div>
                        </a>
                        <a href='<?php get_site_url(); ?>/customer/order-book/'>
                            <div class='logout-anchor p-no-margin logout-text custom-logout-text' id='profile_block'>My Orders</div>
                        </a>
                   <a href='<?php get_site_url(); ?>/sign-out'><div class='logout-anchor p-no-margin logout-text custom-logout-text' id='logout_block'>Logout</div></a>
                  </div>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow-1.png" alt="down-arrow"/>
                </a>
            </div>
</li>`);
    $("#kyc-tick-mobile").show();
    }
    else {
        $("#user-id").html(`<li class="navbar-link">
       <div class="user-profile-div"> <div class="user-pic"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-black.svg" alt="user"/></div> <p class="p-no-margin user-name"></p>
                <a href="#" class="user-options" title="Header" data-html="true" data-toggle="popover"  data-placement="bottom" data-template="
                  <div class='logout-div custom-logout-menu'>
                        <a href='<?php get_site_url(); ?>/customer/profile/'>
                            <div class='logout-anchor p-no-margin logout-text custom-logout-text' id='profile_block'>My Profile</div>
                        </a>
                        <a href='<?php get_site_url(); ?>/customer/order-book/'>
                            <div class='logout-anchor p-no-margin logout-text custom-logout-text' id='profile_block'>My Orders</div>
                        </a>
                   <a href='<?php get_site_url(); ?>/sign-out'><div class='logout-anchor p-no-margin logout-text custom-logout-text' id='logout_block'>Logout</div></a>
                  </div>">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/down-arrow-1.png" alt="down-arrow"/>
                </a>
            </div>
</li>`);
    $("#kyc-tick-mobile").hide();

    }
$(".user-name").html(user_name);
$(".user-name-mobile").html(user_name);
$(".user-name-sidenav").html(user_name);
$("#login-div").hide();
$(".side_nav_top_row").hide();
$(".campaign-sign-up-btn").hide();
$("#logout-div").show();
}
else{
    $("#user-id").html(`<li class="navbar-link"><a id="login-link" class="login-link" href="<?php get_site_url(); ?>/customer/login/?next=/news-and-insight/">Login</a></li>
       <li><a title="Sign Up"  href="<?php get_site_url(); ?>/customer/register/?next=/news-and-insight/" class="navbar-link no-top-pad" style="margin-top:-5px"><button class="primary-btn sign-up-btn">Sign Up</button></a></li>`);
       $("#login-div").show();
       $(".campaign-sign-up-btn").show();
       $("#logout-div").hide();
       $(".profile-name-div").hide();
}
}
var current_url = window.location.href;
cookie_name = "dev_cms_logged_in_user";
if(current_url.includes("dev-www")){
        cookie_name = "dev_cms_logged_in_user";
}
else if(current_url.includes("qa-www")){
        cookie_name = "qa_cms_logged_in_user";
}
else {
        cookie_name = "prod_cms_logged_in_user";
}
getCookie(cookie_name);
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});

$('body').on('click', function (e) {
        $('[data-toggle=popover]').each(function () {
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false;
            }
        });
    });
    $(".user-options").on('click', function(e) {e.preventDefault(); return true;});
    $(".copy-btn").click(function () {
    $(".copied").css("display", "block");
    setTimeout(function () {
        $(".copied").hide(1000);
    }, 1000);
});
function copyToClipboard(text) {
    var $temp = $("<input>");
    $("body").append($temp);
    // var text =  document.getElementById("copy-btn").value;
    $temp.val(text).select();
    document.execCommand("copy");
    $temp.remove();
}

    </script>
 

