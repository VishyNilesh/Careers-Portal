<?php 
//Template Name:about job
?>
<?php 
get_header();
?>
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/about_jobs.css">

<div class="container bread-crumbs-div">
    <ul class="bread-crumbs">
    <a href="<?php echo esc_url( home_url('') ); ?>"><li style="opacity:0.5">Careers</li></a>
        <li class="view-all" style="opacity:0.5">> View All Openings </li>
        <li class="bold" >> <?php the_field('job_designation_value',114) ?>, <?php the_field('job_category',114)?></li>
    </ul>
</div>
<p><?php  $post_id = get_the_ID();?></p>

<div class="container post_name">
    <div class="col-lg-12">
        <div class="col-lg-5">
            <p class="designation"><a href="javascript:history.back()"><span class="grey-color"><</span></a> <?php the_field('job_designation_value',120) ?>, <?php the_field('job_category',120)?></p>
        </div>
        <div class="col-lg-3 btn-div">
        <a data-action="share/whatsapp/share"
                        href="https://web.whatsapp.com/send?text=Apply for,<?php the_field('job_designation_value',$post_id) ?>">
                        <img class="share-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/share.png" alt=""></a>        <button class="jo-apply">Apply</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="container">
            <div class="col-lg-6">
                <div class="col-lg-6 pr-0 pl-0">
                    <div class="col-lg-2"><img class="jo-loc-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""></div>
                    <div class="col-lg-7 pl-0 pr-0"><p class="green-color"><?php the_field('job_location_value',120) ?></p></div>
                </div>
                <div class="col-lg-3  pl-0 pr-0">
                    <div class="col-lg-2"><img class="jo-brief-img" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon awesome-briefcase.png" alt=""></div>
                    <div class="col-lg-7"><p class="no-wrap black-color"><?php the_field('year_of_experience_value',120) ?></p></div>
                </div>
                <div class="col-lg-3  pl-0 pr-0">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-7  pl-0 pr-0"><p class="fadish-color"><?php the_field('job_category',120)?></p></div>
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
                    <?php the_field('about_the_job',120)?>
                </ul>
            </div>    
        </div>
</div>

<div class="container job-req">
        <div class="container">
            <div class="container">
                <h2>Job Requirements</h2>
                <ul>
                    <?php the_field('job_requirements',120)?>
                 </ul>
            </div>    
        </div>
</div>

<div class="container job-req">
        <div class="container">
            <div class="container">
                <h2>Skills</h2>
                <ul class="lt-type">
                    <?php the_field('skills',120)?>
                </ul>
            </div>    
        </div>
</div>

<div class="container what-we-offer">
        <div class="container">
            <div class="container">
                <h2>What we offer</h2>
                <ul>
                <?php the_field('what_we_offer',120)?>
                </ul>
            </div>    
        </div>
</div>
<br><br>
<div class="container">
    <div class="container">
        <div class="container">
            <a href="<?php the_permalink(143)?>"><button class="jo-apply-now">Apply</button></a>
        </div>
    </div>
</div>
<?php 
get_footer();
?>