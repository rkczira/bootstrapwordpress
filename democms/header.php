<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php //twentytwentythree_the_html_classes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap-icons.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/templatemo-topic-listing.css?ver=123" rel="stylesheet">      
		<?php wp_head(); ?>
		<style>
			.sticky-wrapper {
			  position: relative;
			  top: 0;
			  right: 0;
			  left: 0;
			}
			.navbar-brand {
			  color: #fff;
			}
			body {
			  font-size: 1rem;
			}
		</style>
		<style>
.progress-container {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}
.step {
    width: 40px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    background-color: #ddd;
    color: #555;
    font-weight: bold;
    margin: 0 10px;
    transition: 0.3s;
}
.step.active {
    background-color: #007bff;
    color: white;
}
.btn.btn-primary{
	 background: linear-gradient(90deg,#f05e22,#f99747);
	 border: 1px solid #f05e22;
	 color:#fff;
	 font-weight:600;
}
.btn.btn-outline-primary{
	 border: 1px solid #f05e22;
	 color: #f05e22;
	  font-weight:600;
}
.btn.btn-primary:hover{
	  background:#fff;
	  border: 1px solid #f05e22;
	  color: #f05e22;
	  font-weight:600;
}
.btn.btn-outline-primary:hover{
	 background: linear-gradient(90deg,#f05e22,#f99747);
	 border: 1px solid #f05e22;
	 color:#fff;
	 font-weight:600;
}
.h4.text-center{
	 color: #f05e22;
}
</style>

<!-- header css -->
<style>
/* Apply gradient background and styling to navbar */
#header.navbar {
    background: linear-gradient(90deg,#f05e22,#f99747);
    padding: 15px 0;
    font-family: 'Poppins', sans-serif;
}

/* Style navbar brand */
#header .navbar-brand {
    color: #fff;
    font-size: 1.8rem;
    font-weight: bold;
    letter-spacing: 1px;
}

/* Navbar menu items */
#header .navbar-nav .nav-link {
    color: #fff !important;
    font-size: 1.1rem;
    font-weight: 500;
    padding: 8px 15px;
    transition: all 0.3s ease-in-out;
}

/* Hover effect on menu items */
#header .navbar-nav .nav-link:hover,
#header .navbar-nav .nav-link.active {
    color: #FFD700 !important; /* Golden color for active and hover */
}

/* Navbar toggler button */
#header .navbar-toggler {
    border: none;
}

#header .navbar-toggler-icon {
    filter: invert(1); /* Makes toggler icon white */
}

/* Search bar styling */
#header .search-form .form-control {
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
    border: none;
    border-radius: 25px;
    padding: 10px 15px;
}

#header .search-form .form-control::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

#header .search-form .btn {
    background: #FFD700;
    color: grey;
    border: none;
    padding: 10px 15px;
    border-radius: 25px;
    font-weight: bold;
	margin-left: 10px;
}

#header .search-form .btn:hover {
    background: #FFC107; /* Slightly darker golden */
    color: #0056b3;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    #header .navbar-nav {
        text-align: center;
    }

    #header .navbar-nav .nav-item {
        margin: 5px 0;
    }

    #header .search-form {
        text-align: center;
        margin-top: 10px;
    }
}
nav#header{
	z-index:10;
}
</style>
<!-- footer css -->
<style>
/* Footer Styling */
.container-fluid.bg-dark {
    background: linear-gradient(90deg,#151918,#253948);
    padding: 30px 0;
    font-family: 'Poppins', sans-serif;
}

/* Footer Navigation Links */
footer .nav .nav-link {
    color: rgba(255, 255, 255, 0.8);
    font-size: 1rem;
    font-weight: 500;
    transition: all 0.3s ease-in-out;
}

footer .nav .nav-link {
    color: #fff !important;
}

/* Hover Effect for Links */
footer .nav .nav-link:hover {
    color: #FFD700; /* Golden hover effect */
}

/* Border & Padding Adjustments */
footer .border-bottom {
    border-color: rgba(255, 255, 255, 0.3) !important;
}

/* Footer Text */
footer p.text-muted {
    color: rgba(255, 255, 255, 0.7) !important;
    font-size: 0.9rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    footer .nav {
        flex-direction: column;
        text-align: center;
    }

    footer .nav-item {
        margin-bottom: 10px;
    }
}

</style>

    </head>
   <body  id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?> 

	<main>
	<nav id="header" class="navbar navbar-expand-md navbar-light bg-dark">
		<div class="container">
			<a class="navbar-brand" href="https://pgi.aneektechindia.com" title="PGI" rel="home">
				LOGO				
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<?php 
					global $post;
			
					$last_slug ="";
					if (is_front_page()) { $activeClass=' current-menu-item'; }  else 
					if (is_single() || is_page()) {
						$last_slug = $post->post_name;
					} elseif (is_category()) {
						$category = get_queried_object();
						$last_slug = $category->slug;
					} elseif (is_author()) {
						$last_slug = get_query_var('author_name');
					}
					?>

			<div id="navbar" class="collapse navbar-collapse">
				<ul id="menu-main-menu" class="navbar-nav me-auto">
				<?php
					$activeClass=""; 
					if($last_slug==''){	$activeClass=" active"; 	}
					?>
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home nav-item menu-item-24<?php echo $activeClass; ?>"><a title="Home" role="menuitem" href="https://pgi.aneektechindia.com/" class="nav-link<?php echo $activeClass; ?>">Home</a></li>
					<?php
					$activeClass=""; 
					if($last_slug=='project'){	$activeClass=" active"; 	}
					?>
				
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-22<?php echo $activeClass; ?>"><a title="Contact Us" role="menuitem" href="https://pgi.aneektechindia.com/project/" class="nav-link<?php echo $activeClass; ?>">Project</a></li>
					<?php
					$activeClass=""; 
					if($last_slug=='for-patient'){	$activeClass=" active"; 	}
					?>
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-23<?php echo $activeClass; ?>"><a title="About Us" role="menuitem" href="https://pgi.aneektechindia.com/for-patient/" class="nav-link<?php echo $activeClass; ?>">For Patient</a></li>
					<?php
					$activeClass=""; 
					if($last_slug=='for-healthcare-professional'){	$activeClass=" active"; 	}
					?>
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page nav-item menu-item-20"<?php echo $activeClass; ?>><a title="Login" role="menuitem" href="https://pgi.aneektechindia.com/for-healthcare-professional/" class="nav-link<?php echo $activeClass; ?>">For Health Care Person</a></li>
				</ul>
				<form class="search-form my-2 my-lg-0" role="search" method="get" action="https://pgi.aneektechindia.com/">
					<div class="input-group">
						<input type="text" name="s" class="form-control" placeholder="Search" title="Search">
						<button type="submit" name="submit" class="btn btn-outline-secondary">Search</button>
					</div>
				</form>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>


