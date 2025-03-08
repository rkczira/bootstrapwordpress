<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<div class="container-fluid bg-dark">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Privacy Policy</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Discrlaimer</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cookie Policy</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact Us</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About Us</a></li>
    </ul>
    <p class="text-center text-muted">© 2025 Funded by Indian Council of Medical Research</p>
  </footer>
</div>
</main>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.sticky.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/click-scroll.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js"></script>
<!-- jQuery AJAX + Validation -->
<script>
jQuery(document).ready(function($) {
    $('#patient-registration-form').on('submit', function(e) {
        e.preventDefault();

        // Indian phone number validation (+91XXXXXXXXXX)
        var phonePattern = /^\+91[6-9]\d{9}$/;
        var phone = $('input[name="phone"]').val();
        if (!phonePattern.test(phone)) {
            $('#form-message').html('<div class="alert alert-danger">Invalid phone number format. Use +91XXXXXXXXXX</div>');
            return;
        }

        // Email validation
        var email = $('input[name="email"]').val();
        if (!validateEmail(email)) {
            $('#form-message').html('<div class="alert alert-danger">Invalid email address.</div>');
            return;
        }

        // Password validation
        var password = $('input[name="password"]').val();
        var confirmPassword = $('input[name="confirm_password"]').val();
        if (password.length < 6) {
            $('#form-message').html('<div class="alert alert-danger">Password must be at least 6 characters.</div>');
            return;
        }
        if (password !== confirmPassword) {
            $('#form-message').html('<div class="alert alert-danger">Passwords do not match.</div>');
            return;
        }

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: formData,
            success: function(response) {
                if (response.success) {
                    $('#form-message').html('<div class="alert alert-success">' + response.data.message + '</div>');
                    $('#patient-registration-form')[0].reset();
                } else {
                    $('#form-message').html('<div class="alert alert-danger">' + response.data.message + '</div>');
                }
            }
        });
    });

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
</script>
<script>
jQuery(document).ready(function($) {
    $('#patient-login-form').on('submit', function(e) {
        e.preventDefault();
        $('#login-error').addClass('d-none').text('');
        let formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: formData + '&action=patient_login',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
					//console.log(response);
                    window.location.href = response.data.redirect;
                } else {
                    $('#login-error').removeClass('d-none').text(response.data.message);
                }
            },
            error: function() {
                $('#login-error').removeClass('d-none').text('An error occurred. Please try again.');
            }
        });
    });
});
</script>

<!-- jQuery AJAX + Validation -->
<script>
jQuery(document).ready(function($) {
    $('#healthcareprofessional-registration-form').on('submit', function(e) {
        e.preventDefault();

        // Indian phone number validation (+91XXXXXXXXXX)
        var phonePattern = /^\+91[6-9]\d{9}$/;
        var phone = $('input[name="phone"]').val();
        if (!phonePattern.test(phone)) {
            $('#form-message').html('<div class="alert alert-danger">Invalid phone number format. Use +91XXXXXXXXXX</div>');
            return;
        }

        var email = $('input[name="email"]').val();
        if (!validateEmail(email)) {
            $('#form-message').html('<div class="alert alert-danger">Invalid email address.</div>');
            return;
        }

        // Password validation
        var password = $('input[name="password"]').val();
        var confirmPassword = $('input[name="confirm_password"]').val();
        if (password.length < 6) {
            $('#form-message').html('<div class="alert alert-danger">Password must be at least 6 characters.</div>');
            return;
        }
        if (password !== confirmPassword) {
            $('#form-message').html('<div class="alert alert-danger">Passwords do not match.</div>');
            return;
        }

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: formData,
            success: function(response) {
                if (response.success) {
                    $('#form-message').html('<div class="alert alert-success">' + response.data.message + '</div>');
                    $('#healthcareprofessional-registration-form')[0].reset();
                } else {
                    $('#form-message').html('<div class="alert alert-danger">' + response.data.message + '</div>');
                }
            }
        });
    });

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
</script>

<script>
jQuery(document).ready(function($) {
    $('#healthcareprofessional-login-form').on('submit', function(e) {
        e.preventDefault();
        $('#login-error').addClass('d-none').text('');
        let formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: formData + '&action=healthcare_login',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
					//console.log(response);
                    window.location.href = response.data.redirect;
                } else {
                    $('#login-error').removeClass('d-none').text(response.data.message);
                }
            },
            error: function() {
                $('#login-error').removeClass('d-none').text('An error occurred. Please try again.');
            }
        });
    });
});
</script>




<?php wp_footer(); ?>
</body>
</html>