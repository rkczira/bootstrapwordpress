<?php
/**
* Template Name: Register
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();

?> 

<div class="row">
<!-- Registration 8 - Bootstrap Brain Component -->
<section class="bg-light p-3 p-md-4 p-xl-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-xxl-11">
        <div class="card border-light-subtle shadow-sm">
			<div class="progress-container mb-4 text-center mt-4">
				<span class="step active">1</span> →
				<span class="step">2</span> →
				<span class="step">3</span> →
				<span class="step">4</span> →
				<span class="step">5</span>
			</div>
          <div class="row g-0">
            <div class="col-12 col-md-6">
              <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="https://pgi.aneektechindia.com/wp-content/uploads/2025/03/Doctor-Consultation-2-1000x10001-1.png" alt="Welcome back you've been missed!">
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
              <div class="col-12 col-lg-11 col-xl-10">
                <div class="card-body p-3 p-md-4 p-xl-5">
					<h2 class="h4 text-center">Patient Registration Form</h2>
					<form id="patient-registration-form">
						<div class="mb-3">
							<input type="text" class="form-control" name="name" placeholder="Full Name" required>
						</div>
						<div class="mb-3">
							<input type="number" class="form-control" name="age" placeholder="Age" required>
						</div>
						<div class="mb-3">
							<select class="form-control" name="gender" required>
								<option value="">Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="mb-3">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>
						<div class="mb-3">
							<input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
						</div>
						<div class="mb-3">
							<input type="text" class="form-control" name="country" placeholder="Country" required>
						</div>
						<div class="mb-3">
							<input type="text" class="form-control" name="state" placeholder="State" required>
						</div>
						<div class="mb-3">
							<input type="text" class="form-control" name="city" placeholder="City" required>
						</div>
						<div class="mb-3">
							<textarea class="form-control" name="address" placeholder="Address" required></textarea>
						</div>
						<button type="submit" class="btn btn-dark btn-lg">Register</button>
					</form>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div><!-- /.row -->
<?php

get_footer();