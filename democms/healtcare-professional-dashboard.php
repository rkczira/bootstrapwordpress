<?php
/**
* Template Name: Healtcare Professional Dashboard
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
if(!is_user_logged_in()){
	header('Location:'.get_site_url().'/healthcare-login/');
}
get_header();

?> 
<div class="row">
<!-- Registration 8 - Bootstrap Brain Component -->
<section class="bg-light p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xxl-11">
		<section class="py-5">
			<div class="container">
				<div class="row justify-content-center text-center mb-3">
					<div class="col-lg-8 col-xl-7">
						<span class="text-muted"></span>
						<h2 class="display-5 fw-bold">Welcome </h2>
						<p class="lead">-</p>
					</div>
				</div>
<div class="row justify-content-center">
    <!-- Left Side Menu -->
    <div class="col-md-4">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">No. of Patients Screened</a>
            <a href="#" class="list-group-item list-group-item-action">No. of Patients Enrolled</a>
            <a href="#" class="list-group-item list-group-item-action">No. of Centers</a>
        </div>
    </div>

    <!-- Right Side Content -->
    <div class="col-md-8">
        <!-- Heading -->
        <h3 class="fw-bold mb-3 text-center">Details</h3>

        <!-- Table -->
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Date</th>
                        <th>Patients Screened</th>
                        <th>Patients Enrolled</th>
                        <th>Centers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025-03-01</td>
                        <td>50</td>
                        <td>30</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>2025-03-02</td>
                        <td>60</td>
                        <td>40</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>2025-03-03</td>
                        <td>70</td>
                        <td>50</td>
                        <td>3</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>
</div>

			</div>
		</section>
      </div>
    </div>
  </div>
</section>
</div><!-- /.row -->
<?php

get_footer();