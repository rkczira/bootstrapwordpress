<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

//add_action( 'wp_enqueue_scripts', 'ranchotech_style' );
function ranchotech_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

/**
 * Your code goes below.
 */

// Create "healthprofessional" role if it doesn't exist
function create_professional_roles() {
    if (!get_role('healthprofessional')) {
        add_role(
            'healthprofessional',
            __('Healthcare Professional'),
            [
                'read' => true,
                'edit_posts' => false,
                'delete_posts' => false,
            ]
        );
    }
	if (!get_role('patient')) {
        add_role(
            'patient',
            __('Patient'),
            [
                'read' => true,
                'edit_posts' => false,
                'delete_posts' => false,
            ]
        );
    }
}
add_action('init', 'create_professional_roles');



function register_patient() {
    $name = sanitize_text_field($_POST['name']);
    $age = intval($_POST['age']);
    $gender = sanitize_text_field($_POST['gender']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $country = sanitize_text_field($_POST['country']);
    $state = sanitize_text_field($_POST['state']);
    $city = sanitize_text_field($_POST['city']);
    $address = sanitize_textarea_field($_POST['address']);
    $center = sanitize_text_field($_POST['center']);
    $password = $_POST['password'];

    // Validate phone
    if (!preg_match('/^\+91[6-9]\d{9}$/', $phone)) {
        wp_send_json_error(['message' => 'Invalid phone number format.']);
    }

    // Check if email already exists
    if (email_exists($email)) {
        wp_send_json_error(['message' => 'Email already registered.']);
    }

    // Create user
    $user_id = wp_create_user($email, $password, $email);
    if (is_wp_error($user_id)) {
        wp_send_json_error(['message' => 'Failed to create user.']);
    }

    // Set user role as "patient"
    wp_update_user(['ID' => $user_id, 'role' => 'patient']);

    // Save user meta
    update_user_meta($user_id, 'name', $name);
    update_user_meta($user_id, 'age', $age);
    update_user_meta($user_id, 'gender', $gender);
    update_user_meta($user_id, 'phone', $phone);
    update_user_meta($user_id, 'country', $country);
    update_user_meta($user_id, 'state', $state);
    update_user_meta($user_id, 'city', $city);
    update_user_meta($user_id, 'address', $address);
    update_user_meta($user_id, 'center', $center);

    wp_send_json_success(['message' => 'Patient registration successful!']);
}

add_action('wp_ajax_register_patient', 'register_patient');
add_action('wp_ajax_nopriv_register_patient', 'register_patient');


add_action('wp_ajax_patient_login', 'patient_login');
add_action('wp_ajax_nopriv_patient_login', 'patient_login');

function patient_login() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        wp_send_json_error(['message' => 'Invalid request.']);
    }

    $credentials = [
        'user_login' => sanitize_text_field($_POST['email']),
        'user_password' => sanitize_text_field($_POST['password']),
        'remember' => true,
    ];

    $user = wp_signon($credentials, false);

    if (is_wp_error($user)) {
        wp_send_json_error(['message' => 'Invalid email or password.']);
    }

    wp_send_json_success(['message' => 'Login successful.', 'redirect' => home_url('/patient-dashboard')]);
}


function register_healthcare_professional() {
    $name = sanitize_text_field($_POST['name']);
    $age = intval($_POST['age']);
    $gender = sanitize_text_field($_POST['gender']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $country = sanitize_text_field($_POST['country']);
    $state = sanitize_text_field($_POST['state']);
    $city = sanitize_text_field($_POST['city']);
    $address = sanitize_textarea_field($_POST['address']);
    $institute_name = sanitize_text_field($_POST['institute_name']);
    $department_name = sanitize_text_field($_POST['department_name']);
    $designation = sanitize_text_field($_POST['designation']);
    $studies = sanitize_text_field($_POST['studies']);
    $center = sanitize_text_field($_POST['center']);
    $password = $_POST['password'];

    // Validate phone
    if (!preg_match('/^\+91[6-9]\d{9}$/', $phone)) {
        wp_send_json_error(['message' => 'Invalid phone number format.']);
    }

    if (email_exists($email)) {
        wp_send_json_error(['message' => 'Email already registered.']);
    }

    $user_id = wp_create_user($email, $password, $email);
    if (is_wp_error($user_id)) {
        wp_send_json_error(['message' => 'Failed to create user.']);
    }

    wp_update_user(['ID' => $user_id, 'role' => 'healthprofessional']);

    // Save user meta
    update_user_meta($user_id, 'name', $name);
    update_user_meta($user_id, 'age', $age);
    update_user_meta($user_id, 'gender', $gender);
    update_user_meta($user_id, 'phone', $phone);
    update_user_meta($user_id, 'country', $country);
    update_user_meta($user_id, 'state', $state);
    update_user_meta($user_id, 'city', $city);
    update_user_meta($user_id, 'address', $address);
    update_user_meta($user_id, 'institute_name', $institute_name);
    update_user_meta($user_id, 'department_name', $department_name);
    update_user_meta($user_id, 'designation', $designation);
    update_user_meta($user_id, 'studies', $studies);
    update_user_meta($user_id, 'center', $center);

    wp_send_json_success(['message' => 'Registration successful!']);
}

add_action('wp_ajax_register_healthcare_professional', 'register_healthcare_professional');
add_action('wp_ajax_nopriv_register_healthcare_professional', 'register_healthcare_professional');









add_action('wp_ajax_healthcare_login', 'healthcare_login');
add_action('wp_ajax_nopriv_healthcare_login', 'healthcare_login');

function healthcare_login() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        wp_send_json_error(['message' => 'Invalid request.']);
    }

    $credentials = [
        'user_login' => sanitize_text_field($_POST['email']),
        'user_password' => sanitize_text_field($_POST['password']),
        'remember' => true,
    ];

    $user = wp_signon($credentials, false);

    if (is_wp_error($user)) {
        wp_send_json_error(['message' => 'Invalid email or password.']);
    }

    wp_send_json_success(['message' => 'Login successful.', 'redirect' => home_url('/healthcare-professional-dashboard')]);
}