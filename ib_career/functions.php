<?php 
function ib_setup(){
    wp_enqueue_style("bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), "all");
    wp_enqueue_script("jquery", get_theme_file_uri("https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"), NULL, microtime(), true);
    wp_enqueue_script("main", get_theme_file_uri("/assets/scripts/main.js"), NULL, microtime(), false);
}
add_action("wp_enqueue_scripts", "ib_setup");
function create_form_post_type() {
    $labels = array(
        'name'               => 'Form Data',
        'singular_name'      => 'Form Entry',
        'menu_name'          => 'Applicant Details',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Form Entry',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Form Entry',
        'new_item'           => 'New Form Entry',
        'view'               => 'View',
        'view_item'          => 'View Form Entry',
        'search_items'       => 'Search Form Data',
        'not_found'          => 'No form entries found',
        'not_found_in_trash' => 'No form entries found in Trash',
        'parent'             => 'Parent Form Entry'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array( 'title', 'editor', 'custom-fields' ),
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-admin-post',
        'show_in_rest'        => true // Enable Gutenberg editor support
    );

    register_post_type( 'form_entry', $args );
}
add_action( 'init', 'create_form_post_type' );

function submit_form_data() {
     // Sanitize and retrieve form data
     $name = sanitize_text_field($_POST['name']);
     $email = sanitize_email($_POST['email']);
     $mobileno = sanitize_text_field($_POST['mobileno']);
     $mobileno = preg_replace( '/[^0-9]/', '', $mobileno );
     $mobileno = sanitize_text_field( $mobileno );
     $yoe = isset( $_POST['yoe'] ) ? absint( $_POST['yoe'] ) : 0;
     $nperiod = isset( $_POST['nperiod'] ) ? absint( $_POST['nperiod'] ) : 0;
     $applied_position =isset( $_POST['applied_position'] ) ? sanitize_text_field( $_POST['applied_position'] ) : '';
     $post_id = $_POST['post_id'];
     // Handle file upload
     $upload_dir = wp_upload_dir();
     $target_dir = $upload_dir['path'] . '/';
     $file_name = $_FILES['resume']['name'];
     $file_path = $target_dir . $file_name;

         // Attach the resume file to the form entry post
    $attachment = array(
        'guid'           => $file_path,
        'post_mime_type' => wp_check_filetype( basename( $file_path ) )['type'],
        'post_title'     => basename( $file_path ),
        'post_content'   => '',
        'post_status'    => 'inherit'
    );
    $attach_id = wp_insert_attachment( $attachment, $file_path, $post_id );
    require_once( ABSPATH . 'wp-admin/includes/image.php' );
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file_path );
    wp_update_attachment_metadata( $attach_id, $attach_data );
    set_post_thumbnail( $post_id, $attach_id );
    
 
     if (move_uploaded_file($_FILES['resume']['tmp_name'], $file_path)) {
         // Create a new form entry post
         $post_id = wp_insert_post(
             array(
                 'post_title' => $applied_position,
                 'post_type' => 'form_entry',
                 'post_status' => 'publish'
             )
         );
 
         // Save additional meta data
         update_post_meta($post_id, 'name', $name);
         update_post_meta($post_id, 'email', $email);
         update_post_meta($post_id, 'mobileno', $mobileno);
         update_post_meta($post_id, 'yoe', $yoe);
         update_post_meta($post_id, 'nperiod', $nperiod);
         update_post_meta($post_id, 'applied_position', $applied_position);
         update_post_meta($post_id, 'resume', $file_path);

         // Create an array of data to send to the API
         $data = array(
            "application_id" => "IB_Test",
            "client_id"      => "Client Id for API if any",
            "event_name"     => "careers-candidate-mail",
            "email"          =>  $email,
            "email_details"  => array($name, $applied_position, $mobileno, $yoe, $nperiod, $applied_position)
         );
     
         // Convert the data to JSON
         $payload = json_encode($data);
     
         // Set the API URL
         $apiUrl = '// Replace with your API URL'; // Replace with your API URL
     
         // Initialize curl
         $curl = curl_init($apiUrl);
         $serviceAuthId = '// Replace with your serviceAuthId';
     
         // Set curl options
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
         curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($curl, CURLOPT_HTTPHEADER, array(
             'Content-Type: application/json',
             'Content-Length: ' . strlen($payload),
             'service-auth-id: ' . $serviceAuthId
         ));
     
         // Execute the request
         $response = curl_exec($curl);
     
         // Close curl
         curl_close($curl);
     
         // Handle the API response
         if ($response) {
             // API call was successful
             echo "API response: " . $response;
         } else {
             // API call failed
             echo "API call failed";
         }
     
         // Redirect the user or display a success message
         wp_redirect( home_url( '/thanks' ) );
        // After successful form processing
         exit;
     } else {
      
     }
 }
add_action( 'admin_post_submit_form_data', 'submit_form_data' );
add_action( 'admin_post_nopriv_submit_form_data', 'submit_form_data' );


function display_form_template() {
    ob_start();
    include get_template_directory() . '/single.php'; // Update the path to the form template file
    return ob_get_clean();
}
add_shortcode( 'custom_form', 'display_form_template' );
function add_form_entry_meta_box() {
    add_meta_box(
        'form_entry_fields',
        'Form Entry Details',
        'render_form_entry_fields',
        'form_entry',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_form_entry_meta_box' );

function download_file() {
    // Get the file path
    $file_path = isset($_GET['file_path']) ? $_GET['file_path'] : '';
    // Set the appropriate headers for the download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
    // Output the file
    readfile($file_path);
    exit();
}

function render_form_entry_fields( $post ) {
    // Retrieve existing values, if any
    $name = get_post_meta( $post->ID, 'name', true );
    $email = get_post_meta( $post->ID, 'email', true );
    $resume = get_post_meta($post->ID, 'resume', true);
    $mobileno = get_post_meta( $post->ID, 'mobileno', true );
    $yoe = get_post_meta( $post->ID, 'yoe', true );
    $nperiod = get_post_meta($post->ID, 'nperiod', true);
    $applied_position = get_post_meta($post->ID, 'applied_position', true);



    // Output the custom fields
    ?>

    <label for="applied_position">Job Applied For:</label>
    <input type="text" name="applied_position" id="applied_position" value="<?php echo esc_attr( $applied_position ); ?>" required>
    <br><br>
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo esc_attr( $name ); ?>" required>
    <br><br>

    <label for="mobileno">Mobile No:</label>
    <input type="number" name="mobileno" id="mobileno" value="<?php echo esc_attr( $mobileno ); ?>" required>
    <br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo esc_attr( $email ); ?>" required>
    <br><br>

    <label for="yoe">Year of experience:</label>
    <input type="number" name="yoe" id="yoe" value="<?php echo esc_attr( $yoe ); ?>" required>
    <br><br>

    <label for="nperiod">Notice Period:</label>
    <input type="number" name="nperiod" id="np" value="<?php echo esc_attr( $nperiod ); ?>" required>
    <br><br>

    <?php if ($resume) : ?>
        <label>Resume:</label>
        <a href="<?php echo esc_url(admin_url('admin-ajax.php?action=download_file&file_path=' .urlencode($resume))); ?>" class="button">Download File</a>        
    <?php endif; ?>


    <?php
}
add_action('wp_ajax_download_file', 'download_file');
add_action('wp_ajax_nopriv_download_file', 'download_file');

function save_form_entry_fields( $post_id ) {
    if ( isset( $_POST['name'] ) ) {
        $name = sanitize_text_field( $_POST['name'] );
        update_post_meta( $post_id, 'name', $name );
    }

    if ( isset( $_POST['email'] ) ) {
        $email = sanitize_email( $_POST['email'] );
        update_post_meta( $post_id, 'email', $email );
    }
}
add_action( 'save_post_form_entry', 'save_form_entry_fields' );

?>
<?php 
function get_latest_posts_data() {
    $args = array(
        'post_type'      => 'job-opening', // Replace 'post' with your desired post type
        // 'posts_per_page' => $num_posts,
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        return $query->posts;
    }

    return array();
}

?>