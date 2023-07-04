<?php 
//Template Name:thanks
?>
<?php 
get_header();
?>
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/opening_post.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/about_jobs.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/apply-now.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/career.css">;

<style>
    .footer-base{
        display:none;
    }
    .nav-div{
        display:none;
    }
</style>
<img class="center-block hidden-xs" src="<?php bloginfo( 'template_directory' )?>/assets/img/Capture.png" alt="" style="width:100%;margin-top:-20px;height:100vh;">
<img class="center-block visible-xs img-responsive" src="<?php bloginfo( 'template_directory' )?>/assets/img/mobile-cap.png" alt="" style="margin-top:-20px;">
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document" style="
    top: 17%;
">
    <div class="modal-content">
      <div class="modal-header">
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><a style="color:grey" href="https://www.indiabonds.com/">&times;</a></span>      

      </button>
      </div>
      <div class="modal-body">
      <img class="center-block" src="<?php bloginfo( 'template_directory' )?>/assets/img/Component 8.png" alt="">
      <br>
      <p class="text-center thankyou-header">Thank you for Applying</p>
      <p class="text-center thankyou-para">We will get back to you soon.</p>
      <a style="color:white" href="https://www.indiabonds.com/"><button class="submit-btn center-block">    
                Home
     </a> 
    </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal1').modal('show');
    });

    $(".modal").on("hidden.bs.modal", function () {
    window.location = "https://www.indiabonds.com/";
});
</script>
<?php 
get_footer();
?>
