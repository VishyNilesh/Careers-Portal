<?php 
//Template Name:form submission
?>
<?php 
    $latest_posts = get_latest_posts_data();

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
        $custom_field3_value = get_post_meta( get_the_ID(), 'job_location_value', true );
        $custom_field4_value = get_post_meta( get_the_ID(), 'year_of_experience_value', true );
        $custom_field5_value = get_post_meta( get_the_ID(), 'custom_field1', true );
        $custom_field6_value = get_post_meta( get_the_ID(), 'skills', true );
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
            'skills'              => $custom_field6_value,
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
get_header();
?>
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/about_jobs.css?q=1005">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/apply-now.css?q=1005">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/career.css?q=1005">
<style>
    .bread-crumbs-div {
        padding-top:10px;
    }
    @media (min-width:1200px){
        .bread-crumbs-div {
        padding-left:30px;
        padding-top:80px;
        }
        .btn-div{
        padding-left:44px;
    }
    }
    @media(max-width:991px){
        .footer-base {
            margin-bottom:25px;
    }
}
</style>
<?php  $post_id = get_the_ID();?>
<div class="container bread-crumbs-div">
    <ul class="bread-crumbs">
        <a href="<?php echo esc_url( home_url('') ); ?>"><li style="opacity:0.5">Careers</li></a>
        <a href="<?php echo esc_url( home_url( '/all-openings-list/' ) ); ?>"><li class="view-all" style="opacity:0.5">> View All Openings </li></a>
        <li class="bold" >> <?php the_field('job_designation_value',$post_id) ?>, <?php the_field('job_category',$post_id)?></li>
    </ul>
</div>

<div class="container post_name visible-lg">
    <div class="col-lg-12">
        <div class="col-lg-6">
            <p class="designation"><a href="javascript:history.back()"><span class="grey-color"><</span></a> <?php the_field('job_designation_value',$post_id) ?>, <?php the_field('job_category',$post_id)?></p>
        </div>
        <div class="col-lg-3 btn-div visible-lg">    
        <img class="share-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/share.png" alt="" data-toggle="modal" data-target="#shareModal">
        <button class="jo-apply" data-toggle="modal" data-target="#myModal">Apply</button>
        </div>
    </div>
</div>
<div class="container visible-lg">
    <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 pr-0 pl-0 rm-50">
                    <div class="col-lg-2"><img class="jo-loc-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""></div>
                    <div class="col-lg-7 pl-0 pr-0"><p class="green-color"><?php the_field('job_location_value',$post_id) ?></p></div>
                </div>
                <div class="col-lg-3  pl-0 pr-0">
                    <div class="col-lg-2"><img class="jo-brief-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon awesome-briefcase.png" alt=""></div>
                    <div class="col-lg-7"><p class="no-wrap black-color"><?php the_field('year_of_experience_value',$post_id) ?></p></div>
                </div>
                <div class="col-lg-3  pl-0 pr-0">
                    <div class="col-lg-12  pl-0 pr-0"><p class="fadish-color"><?php the_field('job_category',$post_id)?></p></div>
                </div>
            </div>
    </div>
    <hr style="margin-bottom:0px;margin-top:0px;">
</div>


<div class="container hidden-lg">
    <br>
    <div class="container">
        <p class="mobile-designation"> 
            <?php the_field('job_designation_value',$post_id) ?>, 
            <?php the_field('job_category',$post_id)?>
        </p>
    </div> 
    <nav class="navbar navbar-default navbar-fixed-bottom hidden-lg navbar-mobile">
            <div class="container">
            <div class="">                        
                    <img class="share-img share-img-nav" src="<?php bloginfo( 'template_directory' )?>/assets/img/share-mobile-nav.png" alt="" data-toggle="modal" data-target="#shareModal">
                    <button class="jo-apply jo-apply-nav" data-toggle="modal" data-target="#myModal">Apply Now</button>
                    </div>
            </div>
    </nav> 
</div>
<div class="container hidden-lg">
    <div class="container">
    <p class="mobile-spans">
    <span class="mobile-loc"><img class="pr-7" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""><?php the_field('job_location_value',$post_id); ?></span> 
    <span class="mobile-yoe"><img class="pr-7" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon awesome-briefcase.png" alt=""><?php the_field('year_of_experience_value',$post_id); ?></span>
    <span class="mobile-desig"><?php the_field('job_category',$post_id); ?></span> 
    </p>
    </div>
    <hr>
</div>

<div class="visible-lg">
<div class="container job-req">
        <div class="container">
            <div class="container">
                <h2>About the Job</h2>
                <ul class="lt-type">
                    <?php the_field('about_the_job',$post_id)?>
                </ul>
            </div>    
        </div>
</div>

<div class="container job-req">
        <div class="container">
            <div class="container">
                <h2>Job Requirements</h2>
                <ul class="jr">
                    <?php the_field('job_requirements',$post_id)?>
                 </ul>
            </div>    
        </div>
</div>

<div class="container job-req">
        <div class="container">
            <div class="container">
                <h2>Skills</h2>
                <ul class="lt-type">
                    <?php the_field('skills',$post_id)?>
                </ul>
            </div>    
        </div>
</div>

<div class="container what-we-offer">
        <div class="container">
            <div class="container">
                <h2>What we offer</h2>
                <ul class="wr">
                <?php the_field('what_we_offer',$post_id)?>
                </ul>
            </div>    
        </div>
</div>
</div>

<div class="hidden-lg">
<div class=" job-req">
        <div class="">
            <div class="container">
                <h2>About the Job</h2>
                <ul class="pl-0 reduce-opac">
                    <?php the_field('about_the_job',$post_id)?>
                </ul>
            </div>    
        </div>
</div>

<div class="job-req">
        <div class="">
            <div class="container">
                <h2>Job Requirements</h2>
                <ul class="pl-0 jr">
                    <?php the_field('job_requirements',$post_id)?>
                 </ul>
            </div>    
        </div>
</div>

<div class="what-we-offer">
        <div class="">
            <div class="container">
                <h2>What we offer</h2>
                <ul class="pl-0 wr">
                <?php the_field('what_we_offer',$post_id)?>
                </ul>
            </div>    
        </div>
</div>
</div>
<br><br>
<div class="container hidden-xs">
    <div class="container">
        <div class="container">
        <button class="jo-apply-now" data-toggle="modal" data-target="#myModal">Apply Now</button>
        </div>
    </div>
</div>

<div class="second-fold container">
    <div class="container">
        <div class="">
            <div class="col-lg-10 col-md-9 col-sm-8 col-xs-6" style="padding-left:0px;">
                <h2>More Job Openings</h2>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 second-fold-view-all-div">
              <a href="<?php echo esc_url( home_url( '/all-openings-list/' ) ); ?>"><button  id="View-all-openings" class="second-fold-view-all"> 
                    <span class="second-fold-view-all-text">View All</span> 
                    <img class="second-fold-arrow" src="<?php bloginfo( 'template_directory' )?>/assets/img/carrers-right-arrow.png" alt="">
                </button></a>      
            </div>
        </div>
    </div>
    <br>

    <?php
include get_template_directory() . '/jobcards.php';
?>
         
   
    
</div>
<br><br><br><br>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog form-popup" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="formReset();"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title modal-wala-header" id="myModalLabel">Submit Details</h4>
      </div>
      <div class="modal-body">
      <form id="myForm" method="post" enctype="multipart/form-data">
      <input type="hidden" name="action" value="submit_form_data">
      <input type="hidden" name="applied_position" id="applied_position" value="<?php the_field('job_designation_value',$post_id)?>">
      <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                <div class="form-group col-lg-6">
                    <input type="text" class="form-control" id="fullname" placeholder="Full Name" name="name" required onchange="resetButtonStatus();">
                </div>
                <div class="form-group col-lg-6 mobile-div">
                    <span class="mob-prefix">+91</span>
                    <input type="number" class="form-control" id="mobileno"  minlength="10" maxlength="10" placeholder="Mobile No." name="mobileno" required onchange="resetButtonStatus();">
                </div>
                <div class="form-group col-lg-6">
                    <input type="email" class="form-control" id="emailid" placeholder="Email ID" name="email" required onchange="resetButtonStatus();IsEmail();" oninput="IsEmail();">
                </div>
                <div class="form-group col-lg-6">
                <select class="form-control" id="yoe" name="yoe" required onchange="resetButtonStatus();">
                    <option value=""  selected hidden>Total Years of experience</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5+</option>
                </select>        
            </div>
                <div class="form-group col-lg-6">
                <select class="form-control custom-select" id="np" name="nperiod" required onchange="resetButtonStatus();">
                    <option id="np1" value=""  selected hidden>Notice Period</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>        
            </div>
                <div class="form-group col-lg-12">
                <div class="form-group" id="resume">
                    <!-- <input type="file" " placeholder="Browse"> -->
                    <input type="file" id="files" class="hidden" name="resume" onchange="showFileName(this);resetButtonStatus();"  oninput="resetButtonStatus();" accept=".pdf,.doc,.docx"/>                    <label for="files" class="text-center-leao">
                        <span >Upload your resume here <br></span>
                        <span class="chota-text">File format: .pdf, .docs, .docx  File Size: .Max 2 mb <br><br></span>
                        <span class="btns">Browse</span>
                        <span id="file-name"></span>
                    </label>
                </div>
                <span id="errorMsg" style="display: none;">Please fill all the required field!</span>
                <span id="errorMsg1" style="display: none;"></span>
                <div class="col-lg-12 submit-btn-div">
                    <button id="submitButton" class="submit-btn" type="submit" value="submit" onclick="validateForm();">    
                        Submit
                    </button>        
                </div>
                </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
      </div>

    </div>
  </div>
</div>

<!-- <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <img class="center-block" src="<?php bloginfo( 'template_directory' )?>/assets/img/Component 8.png" alt="">
      <br>
      <p class="text-center thankyou-header">Thank you for Applying</p>
      <p class="text-center thankyou-para">We will get back to you soon.</p>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><button class="submit-btn center-block">    
                Home
     </a> 
    </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div> -->



<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog share-modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title share-head" id="myModalLabel">Share Via</h4>
      </div>
      <div class="modal-body">
        <a data-action="share/whatsapp/share" href="https://wa.me/?text=Indiabonds is looking for <?php the_field('job_designation_value',$post_id)?>  - May be you should also checkout <?php the_permalink() ?>">
            <p style="text-decoration:none;color:#515151;"><img src="<?php bloginfo( 'template_directory' )?>/assets/img/whatsapp-square.png" alt="" class="whatsapp-img"> Whatsapp</p>
        </a>
        <a href="mailto:?subject=IndiaBonds is looking for - <?php the_field('job_designation_value',$post_id)?> &body= May be you should also checkout <?php the_permalink() ?>">
        <p style="text-decoration:none;color:#515151;"><img src="<?php bloginfo( 'template_directory' )?>/assets/img/mail-square.png" alt="" class="Email-img"> Email</p>
        </a>
        <br>
        <p>Copy Link</p>
         <div class="share-div">
        <input class="copy-link" type="text" value="<?php the_permalink()?>" id="myInput">
        <button onclick="myFunction()"><img src="<?php bloginfo( 'template_directory' )?>/assets/img/copy.svg" alt="" class="Email-img"></button>
        </div>
        <br><br>
        <div class="copy-status-div">
          <p id="copy-status" class="" style="display:none">
          <img src="<?php bloginfo( 'template_directory' )?>/assets/img/green-tick.png" class="Email-img" alt="tick"/>
            Link copied successfully</p>
        </div>
    </div>
    </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog share-modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title share-head" id="myModalLabel">Share Via</h4>
      </div>
      <div class="modal-body">
        <a data-action="share/whatsapp/share" href="whatsapp://send/?text=Indiabonds is looking for <?php the_field('job_designation_value',$post_id)?>">
        <p style="text-decoration:none;color:#515151;"><img src="<?php bloginfo( 'template_directory' )?>/assets/img/whatsapp-square.png" alt="" class="whatsapp-img"> Whatsapp</p>
        </a>
        <a href="mailto:?subject=IndiaBonds - <?php the_field('job_designation_value',$post_id)?> &body=I was looking forward to connect for <?php the_field('job_designation_value',$post_id)?> opportunity at IndiaBonds ">
        <p style="text-decoration:none;color:#515151;"><img src="<?php bloginfo( 'template_directory' )?>/assets/img/mail-square.png" alt="" class="Email-img"> Email</p>
        </a>
        <br>
        <p>Copy Link</p>
         <div class="share-div">
        <input class="copy-link" type="text" value="https://www.indiabonds.com/careers/job-opening/<?php the_field('job_designation_value',$post_id)?>" id="myInput">
        <button onclick="myFunction()"><img src="<?php bloginfo( 'template_directory' )?>/assets/img/copy.svg" alt="" class="Email-img"></button>
        </div>
        <br><br>
        <div class="copy-status-div">
          <p id="copy-status" class="" style="display:none">
          <img src="<?php bloginfo( 'template_directory' )?>/assets/img/green-tick.png" class="Email-img" alt="tick"/>
            Link copied successfully</p>
        </div>
    </div>
    </div>
    </div>
  </div>
</div>
<script>
    //emailvalidation
var is_email_flag = false;	
var is_mobile_flag = false;	
var is_name_flag = false;
var is_file_flag = false;
var empty_email=true;
var empty_name =true;
var empty_mobile = true;
var empty_file = true;


function IsEmail() {
   var email = $('#emailid').val();
   var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if(!regex.test(email)) {
    document.getElementById("errorMsg").innerHTML="Please provide valid email address";
    document.querySelector("#errorMsg").style.display="block";
    is_email_flag = false;
    }

else{ 
    is_email_flag = true;
    empty_email = false;
    document.getElementById("errorMsg").innerHTML="Please fill all the required field!";
    document.querySelector("#errorMsg").style.display="none";
   }
 
 }
</script>
<script>



function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
document.getElementById('copy-status').style.display="block";
$('#copy-status').delay(5000).fadeOut('slow');
}
</script>
<script>
    $('INPUT[type="file"]').change(function () {
    var fileNameElement = document.getElementById('file-name');
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'pdf':
        case 'doc':
        case 'docx':
            break;
            $('#files').attr('disabled', false);
            fileNameElement.textContent = input.files[0].name;
            empty_file = false;
        default:
        document.getElementById("errorMsg").innerHTML="Please provide valid file format";
        document.querySelector("#errorMsg").style.display="block";
        fileNameElement.textContent = '';
    }
});
$("input[type='file']").on("change", function () {
    document.querySelector("#file-name").style.display="contents";
     if(this.files[0].size > 2000000) {
        document.getElementById("files").value=null;
        document.querySelector("#errorMsg").style.display="block";
        document.getElementById("errorMsg").innerHTML="Please upload file less than 2 mb";
        $('#submitButton').attr('disabled', true);
        is_file_flag = false;
     }
     else{
        empty_file = false;
        is_file_flag = true;
        $('#submitButton').attr('disabled', false);	
        document.querySelector("#errorMsg1").innerHTML="";	
        document.querySelector("#errorMsg1").style.display="none";
     }
   });
   $("input[type='number']").on("input", function () {	
 var regex = /^(0|91)?[6-9][0-9]{9}$/;	
            if (regex.test($("#mobileno").val())) {	
             document.querySelector("#errorMsg").innerHTML="";	
             is_mobile_flag = true;	
            } else {	
                is_mobile_flag = false;	
                empty_mobile =false;
                document.getElementById("errorMsg").innerHTML="Please enter 10 digit valid mobile no.";	
                document.querySelector("#errorMsg").style.display="block";	
            }	
});	
$("input[type='text']").on("input", function () {	
var regex = /^[a-zA-Z ]*$/;	
            if (regex.test($("#fullname").val())) {	
             document.querySelector("#errorMsg").innerHTML="";	
             is_name_flag = true;	
             empty_name =false;
            } else {	
                is_name_flag = false;	
                document.getElementById("errorMsg").innerHTML="Please enter characters only.";	
                document.querySelector("#errorMsg").style.display="block";	
            }	
});
$("input[type='text']").on("change", function () {	
var regex = /^[a-zA-Z ]*$/;	
            if (regex.test($("#fullname").val())) {	
             document.querySelector("#errorMsg").innerHTML="";	
             is_name_flag = true;	
             empty_name =false;
            } else {	
                is_name_flag = false;	
                document.getElementById("errorMsg").innerHTML="Please enter characters only.";	
                document.querySelector("#errorMsg").style.display="block";	
            }	
});
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
function showFileName(input) {
    document.querySelector("#file-name").style.display="contents";
    var fileNameElement = document.getElementById('file-name');
    if (input.files && input.files.length > 0) {
        fileNameElement.textContent = input.files[0].name;
    } else {
        fileNameElement.textContent = 'No file selected';
    }
}
function formReset(){
    document.getElementById('myForm').reset();
    document.querySelector("#errorMsg").style.display="none";
    document.querySelector("#file-name").style.display="none";

}
function resetButtonStatus() {
    document.querySelector("#errorMsg").style.display="none";
    document.querySelector("#errorMsg1").style.display="none";
    $('#files').attr('disabled', false);
    var email = $('#emailid').val();
    var str1 = $.trim(email);
    $("#emailid").val(str1);  
    var fullname =$('#fullname').val();
    var str2 = $.trim(fullname);
    $("#fullname").val(str2); 
    
}
function validateForm() {
  const form = document.getElementById('myForm');
  const fields = form.querySelectorAll('input[name], select[name]','input[mobileno]');
  const fileInput = form.querySelector('input[type="file"]');
  const submitButton = document.getElementById('submitButton');
  var email = $('#emailid').val();
  var fullname =$('#fullname').val();
  var str1 = $.trim(email);
  $("#emailid").val(str1);  
  var str2 = $.trim(fullname);
  $("#fullname").val(str2); 
  let isFormValid = true;

  fields.forEach(field => {
    if (field.value.trim() === '') {
      isFormValid = false;
      document.querySelector("#errorMsg").innerHTML="Please fill all the required field!";
      document.querySelector("#errorMsg").style.display="block";
   }
  });

  if (fileInput.files.length === 0) {
    isFormValid = false;
    document.querySelector("#errorMsg").innerHTML="Please fill all the required field!";
      document.querySelector("#errorMsg").style.display="block";
  }

  if(!$('#mobileno').val().match('[0-9]{10}'))  {
    isFormValid = false;
    document.querySelector("#errorMsg").innerHTML="Please fill all the required field!";
      document.querySelector("#errorMsg").style.display="block";
    }  

    if(!is_name_flag){	
        document.querySelector("#errorMsg").innerHTML="Please enter characters only in the name field";	
    }	
    if(!is_mobile_flag){	
        document.querySelector("#errorMsg").innerHTML="Please enter 10 digit valid mobile no.";	
    }
    if(!is_email_flag){	
        document.querySelector("#errorMsg").innerHTML="Please provide valid email address";	
    }
    if(!is_file_flag){	
        document.querySelector("#errorMsg").innerHTML="Please upload file less than 2 mb";	
    }
    
    if(empty_mobile || empty_name || empty_email || empty_file){	
        document.querySelector("#errorMsg").innerHTML="Please fill all the required field*";	
    }
  if (isFormValid && is_email_flag && is_name_flag && is_mobile_flag) {
    // All form fields have values, enable the submit button and continue with form submission or desired action
      errorMsg.style.display = "none";
      var target = document.getElementById("submitButton");
    //   target.setAttribute("data-toggle", "modal");
    //   target.setAttribute("data-target", "#myModal1");
      var modal = document.getElementById('myModal');
      modal.classList.remove('show');
      modal.style.display = 'none';
      modal.setAttribute('aria-hidden', 'true');
      document.body.classList.remove('modal-open');
      var backdrop = document.getElementsByClassName('modal-backdrop')[0];
      backdrop.parentNode.removeChild(backdrop);
      form.action="<?php echo esc_url(admin_url('admin-post.php')); ?>";
  } else {
    // There are empty form fields, unchecked checkboxes, or empty file upload, disable the submit button
    errorMsg.style.display = "block";
    event.preventDefault();
  }
}
</script>
<?php 
get_footer();
?>