<style>
    .see-details p img:hover{
        margin-left:14px;
    }
</style>

<div class="container" style="
    padding-right: 0px;
">
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  see-details see-details">
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
                <p class="loc-text-2"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location-2.png" alt=""><?php echo esc_html( $data_array[1]['custom_field3_value'] ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6  yoe-div">
            <p class="yoe-text"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/icons8-briefcase-48.png" alt=""><?php echo esc_html( $data_array[1]['custom_field4_value'] ); ?></p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  see-details see-details-2">
           <a href="<?php the_permalink( $data_array[1]['post_id'] )?>"><p>See details <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/back-1.png" alt="" style="padding-left:14px;"></p></a>
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
                <p class="loc-text-3"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location-3.png" alt=""><?php echo esc_html( $data_array[2]['custom_field3_value'] ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6  yoe-div">
            <p class="yoe-text"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/icons8-briefcase-48.png" alt=""><?php echo esc_html( $data_array[2]['custom_field4_value'] ); ?></p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  see-details see-details-3">
           <a href="<?php the_permalink( $data_array[2]['post_id'] )?>"><p>See details <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/back-2.png" alt="" style="padding-left:14px;"></p></a>
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
                <p class="loc-text-4"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/Icon metro-location-4.png" alt=""><?php echo esc_html( $data_array[3]['custom_field3_value'] ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 co-sm-6 col-xs-6  yoe-div">
            <p class="yoe-text"><img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/icons8-briefcase-48.png" alt=""><?php echo esc_html( $data_array[3]['custom_field4_value'] ); ?></p>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  see-details see-details-4">
           <a href="<?php the_permalink( $data_array[3]['post_id'] )?>"><p>See details <img class="" src="<?php bloginfo( 'template_directory' )?>/assets/img/back-3.png" alt="" style="padding-left:14px;"></p></a>
        </div>
    </div>
</div>  
</div>  