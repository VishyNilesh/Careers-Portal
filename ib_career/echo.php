<?php 
//Template Name:All openings list
?>
<?php 
get_header();
?>
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/opening_post.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/assets/css/career.css">
<style>
    .nav-div{
        position: sticky !important;
    }
</style>
<?php
// Custom posts per page function
function custom_posts_per_page($query) {
    if ($query->is_main_query()) {
        $query->set('posts_per_page', 8); // Set 8 posts per page for this specific page
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');
?>
<body>
   <div class="container">
        <div class="bread-crumbs-div">
                <ul class="bread-crumbs">
                <a href="<?php echo esc_url( home_url('') ); ?>"><li style="opacity:0.5">Careers <strong>></strong> </li></a>
                    <a href="<?php echo esc_url( home_url( '/job-opening-list/' ) ); ?>"><li class="view-all"><strong>View All Openings </strong></li></a>
                </ul>
        </div>
    </div>
    <div class="container">
        <div class="container">
        <h3 class="opening-header">Job openings</h3>
        </div>
    </div>
<?php
// the query
$args = array(
    'post_type'=>'job-opening',
    'post_status'=>'publish'
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

<!-- pagination here -->

<!-- the loop -->
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<p><?php  $post_id = get_the_ID();?></p>
<div class="container jo-panel visible-lg">
    <div class="col-lg-12 pl-0">
        <div class="col-lg-6 jo-panel-1">
            <div class="col-lg-1"><img src="<?php bloginfo( 'template_directory' )?>/assets/img/design.png" alt=""></div>
            <div class="col-lg-6"><p class="jo-title"><?php the_title(); ?></p></div>
            <div class="col-lg-2"><p class="jo-brief"><?php the_field('job_category',$post_id); ?></p></div>
        </div>
        <div class="col-lg-6 jo-panel-2">
            <div class="col-lg-2 pr-0 pl-0">
                <p class="jo-loc"><img class="pr-10" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt="">
                <?php the_field('job_location_value',$post_id); ?></p></div>
            <div class="col-lg-3 pr-0 pl-30"><p class="jo-loc jo-yoe"><img class="pr-10" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon awesome-briefcase.png" alt=""><?php the_field('year_of_experience_value',$post_id); ?></p></span></div>
            <div class="col-lg-3 jo-vd-div pl-30"><a href="<?php the_permalink()?>"><button class="jo-vd">View details</button></a></div>
            <div class="col-lg-3 pl-30"><a href="<?php the_permalink()?>"><button class="jo-apply">Apply</button></a></div>
        </div>
    </div>
</div>
<div class="container hidden-lg">
<div class="panel panel-default">
  <div class="panel-body">
   <div class="row-1">
    <p class="mob-title"><img class="pr-20" src="<?php bloginfo( 'template_directory' )?>/assets/img/design.png" alt=""><?php the_title(); ?></p>
   </div>
   <div class="row-2">
        <span class="mobile-desig"><?php the_field('job_category',$post_id); ?></span> 
        <span class="mobile-loc"><img class="pr-7" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""><?php the_field('job_location_value',$post_id); ?></span> 
        <span class="mobile-yoe"><img class="pr-7" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon awesome-briefcase.png" alt=""><?php the_field('year_of_experience_value',$post_id); ?></span>
    </div>
</span></p>
   </div>
   <div class="row-3"><div class=""style="padding-left: 44px; padding-right: 44px;"><a href="<?php the_permalink()?>"><button class="jo-apply jo-apply-mobile">Apply</button></a></div></div>
  </div>
</div>
</div>
<?php endwhile; ?>
<!-- end of the loop -->

<div class="container">
    <p class="more-text-header">Jobs not matching your skillset?</p>
    <p class="more-text-para">We are open and all ears! Submit your details and résumé here</p>
</div>
<div class="second-fold">
    <div class="container">
        <div class="">
            <div class="col-lg-10 col-md-9 col-sm-8 col-xs-6">
                <h2>Latest Job Openings</h2>
            </div>
        </div>
    </div>
    <br>

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

<div class="container">
<div class="ljo">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 latest-posts bg-0">
        <div class="">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 jo-first-row"><img class="jo-mini-img" src="<?php echo esc_url( $data_array[0]['image_url'] ); ?>" alt=""></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 jo-first-row-date">
                <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon ionic-md-calendar.png" alt="">
                <?php echo esc_html( $data_array[0]['post_date_formatted'] ); ?>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jo-card-1-title-div">
           <h4 class="jo-card-1-title"><?php echo esc_html( $data_array[0]['custom_field2_value']); ?></h4>
        </div>
        <div class="">
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6 loc-div">
                <p class="loc-text-1"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""><?php echo esc_html( $data_array[0]['custom_field3_value'] ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6  yoe-div">
            <p class="yoe-text"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/icons8-briefcase-48.png" alt=""><?php echo esc_html( $data_array[0]['custom_field4_value'] ); ?></p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  see-details">
           <a href="<?php the_permalink( $data_array[0]['post_id'] )?>"><p>See details <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/blue-arrow.png" alt="" style="padding-left:14px;"></p></a>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 latest-posts bg-1">
        <div class="">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 jo-first-row"><img class="jo-mini-img" src="<?php echo esc_url( $data_array[1]['image_url'] ); ?>" alt=""></div>
            <div class="col-lg-8  col-md-8 col-sm-8 col-xs-8 jo-first-row-date">
                <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon ionic-md-calendar.png" alt="">
                <?php echo esc_html( $data_array[1]['post_date_formatted'] ); ?>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jo-card-1-title-div">
           <h4 class="jo-card-1-title"><?php echo esc_html( $data_array[1]['custom_field2_value']); ?></h4>
        </div>
        <div class="">
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6 loc-div">
                <p class="loc-text-1"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""><?php echo esc_html( $data_array[1]['custom_field3_value'] ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6  yoe-div">
            <p class="yoe-text"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/icons8-briefcase-48.png" alt=""><?php echo esc_html( $data_array[1]['custom_field4_value'] ); ?></p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  see-details">
           <a href="<?php the_permalink( $data_array[1]['post_id'] )?>"><p>See details <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/blue-arrow.png" alt="" style="padding-left:14px;"></p></a>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 latest-posts bg-2">
        <div class="">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 jo-first-row"><img class="jo-mini-img" src="<?php echo esc_url( $data_array[2]['image_url'] ); ?>" alt=""></div>
            <div class="col-lg-8  col-md-8 col-sm-8 col-xs-8 jo-first-row-date">
                <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon ionic-md-calendar.png" alt="">
                <?php echo esc_html( $data_array[2]['post_date_formatted'] ); ?>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jo-card-1-title-div">
           <h4 class="jo-card-1-title"><?php echo esc_html( $data_array[2]['custom_field2_value']); ?></h4>
        </div>
        <div class="">
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6 loc-div">
                <p class="loc-text-1"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""><?php echo esc_html( $data_array[2]['custom_field3_value'] ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6  yoe-div">
            <p class="yoe-text"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/icons8-briefcase-48.png" alt=""><?php echo esc_html( $data_array[2]['custom_field4_value'] ); ?></p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  see-details">
           <a href="<?php the_permalink( $data_array[2]['post_id'] )?>"><p>See details <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/blue-arrow.png" alt="" style="padding-left:14px;"></p></a>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 latest-posts bg-3">
        <div class="">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 jo-first-row"><img class="jo-mini-img" src="<?php echo esc_url( $data_array[3]['image_url'] ); ?>" alt=""></div>
            <div class="col-lg-8  col-md-8 col-sm-8 col-xs-8 jo-first-row-date">
                <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon ionic-md-calendar.png" alt="">
                <?php echo esc_html( $data_array[3]['post_date_formatted'] ); ?>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 jo-card-1-title-div">
           <h4 class="jo-card-1-title"><?php echo esc_html( $data_array[3]['custom_field2_value']); ?></h4>
        </div>
        <div class="">
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6 loc-div">
                <p class="loc-text-1"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location.png" alt=""><?php echo esc_html( $data_array[3]['custom_field3_value'] ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6  yoe-div">
            <p class="yoe-text"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/icons8-briefcase-48.png" alt=""><?php echo esc_html( $data_array[3]['custom_field4_value'] ); ?></p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  see-details">
           <a href="<?php the_permalink( $data_array[3]['post_id'] )?>"><p>See details <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/blue-arrow.png" alt="" style="padding-left:14px;"></p></a>
        </div>
    </div>
</div>  
</div>    
   
    
</div>
<br><br><br><br>
<!-- pagination here -->
<?php wp_reset_postdata(); ?>

<?php else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
        
<?php 
get_footer()
?>