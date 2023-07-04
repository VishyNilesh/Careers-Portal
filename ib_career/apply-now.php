<?php 
//Template Name:apply now
?>
<?php 
get_header();
?>
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/about_jobs.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/apply-now.css">

<?php  $post_id = get_the_ID();?>
<div class="container bread-crumbs-div">
    <ul class="bread-crumbs">
    <a href="<?php echo esc_url( home_url('') ); ?>"><li style="opacity:0.5">Careers</li></a>
        <li class="view-all" style="opacity:0.5">> View All Openings </li>
        <li class="bold" >> <?php the_field('job_designation_value',$post_id) ?>, <?php the_field('job_category',$post_id)?></li>
    </ul>
</div>

<div class="container post_name">
    <div class="col-lg-12">
        <div class="col-lg-5">
            <p class="designation"> <span class="grey-color"><</span> <?php the_field('job_designation_value',$post_id) ?>, <?php the_field('job_category',$post_id)?></p>
        </div>
        <div class="col-lg-3 btn-div">
        
        <a data-action="share/whatsapp/share"
                        href="https://web.whatsapp.com/send?text=Apply for,<?php the_field('job_designation_value',$post_id) ?>">
                        <img class="share-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/share.png" alt=""></a>        <button class="jo-apply" data-toggle="modal" data-target="#myModal">Apply</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-2 pr-0 pl-0">
                    <div class="col-lg-2"><img class="jo-loc-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""></div>
                    <div class="col-lg-7 pl-0 pr-0"><p class="green-color"><?php the_field('job_location_value',$post_id) ?></p></div>
                </div>
                <div class="col-lg-2  pl-0 pr-0">
                    <div class="col-lg-2"><img class="jo-brief-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon awesome-briefcase.png" alt=""></div>
                    <div class="col-lg-7"><p class="no-wrap black-color"><?php the_field('year_of_experience_value',$post_id) ?></p></div>
                </div>
                <div class="col-lg-3  pl-0 pr-0">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-7  pl-0 pr-0"><p class="fadish-color"><?php the_field('job_category',$post_id)?></p></div>
                </div>
            </div>
    </div>
<hr>
</div>


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
                <ul>
                    <?php the_field('job_requirements',$post_id)?>
                 </ul>
            </div>    
        </div>
</div>

<div class="container what-we-offer">
        <div class="container">
            <div class="container">
                <h2>What we offer</h2>
                <ul>
                <?php the_field('what_we_offer',$post_id)?>
                </ul>
            </div>    
        </div>
</div>
<br><br>
<div class="container">
    <div class="container">
        <div class="container">
        <button class="jo-apply-now" data-toggle="modal" data-target="#myModal">Apply Now</button>
        </div>
    </div>
</div>


<!-- Button trigger modal -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog form-popup" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                <div class="form-group col-lg-6">
                    <input type="number" class="form-control" id="mobileno" minlength="10" maxlength="10"  placeholder="Mobile No." name="mobileno" required onchange="resetButtonStatus();">
                </div>
                <div class="form-group col-lg-6">
                    <input type="email" class="form-control" id="emailid" placeholder="Email ID" name="email" required onchange="resetButtonStatus();">
                </div>
                <div class="form-group col-lg-6">
                <select class="form-control" id="yoe" name="yoe" required onchange="resetButtonStatus();">
                    <option value=""  selected hidden>Total Years of experience</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
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
                    <input type="file" id="files" class="hidden" name="resume" onchange="showFileName(this);resetButtonStatus();" accept=".pdf,.doc,.docx"/>
                    <label for="files" class="text-center-leao">
                        <span >Drag and Drop your resume here <br></span>
                        <span class="chota-text">File format: .pdf, .docs, .docx  File Size: .Max 2 mb <br><br></span>
                        <span class="btns">Browse</span>
                        <span id="file-name"></span>
                    </label>
                </div>
                <span id="errorMsg" style="display: none;">Please fill all the required field!</span>
                <div class="col-lg-12 submit-btn-div">
                    <button id="submitButton" class="submit-btn" type="submit" value="submit" onclick="validateForm()">    
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

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
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
</div>

<script>

function resetButtonStatus() {
    document.querySelector("#errorMsg").style.display="none";
}

$(document).ready(function() {
  // Submit form and show thank you modal
  $('#myForm').submit(function(e) {
    e.preventDefault(); // Prevent form submission

    // Perform form submission using AJAX or other methods if needed

    // Hide the form modal
    $('#modal1').hide();

    // Show the thank you modal
    $('#modal2').show();
  });

  // Close button event listener for the thank you modal
  $('.close').click(function() {
    $('#modal2').hide();
  });
});

</script>
<?php 
get_footer();
?>
