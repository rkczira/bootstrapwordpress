<?php
/**
* Template Name: Healthcare Register
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
			<!-- <div class="progress-container mb-4 text-center mt-4">
				<span class="step active">1</span> →
				<span class="step">2</span> →
				<span class="step">3</span> →
				<span class="step">4</span> →
				<span class="step">5</span>
			</div> -->
          <div class="row g-0">
            <div class="col-12 col-md-6">
              <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="https://pgi.aneektechindia.com/wp-content/uploads/2025/03/Doctor-Consultation-2-1000x10001-1.png" alt="Welcome back you've been missed!">
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
              <div class="col-12 col-lg-11 col-xl-10">
                <div class="card-body p-3 p-md-4 p-xl-5">
					<h2 class="h4 text-center">Healthcare Professional Registration Form</h2>


<form id="healthcareprofessional-registration-form">
    <!-- Personal Details -->
    <div class="mb-3">
        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
    </div>
    <div class="mb-3">
        <input type="number" class="form-control" name="age" placeholder="Age" required>
    </div>
    <div class="mb-3">
        <select class="form-control" name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="phone" placeholder="Phone Number (+91XXXXXXXXXX)" required>
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

    <h3> Medical Registration Details </h3>
    <div class="mb-3">
        <input type="text" class="form-control" name="institute_name" placeholder="Institute Name" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="department_name" placeholder="Department Name" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="designation" placeholder="Designation" required>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="studies" placeholder="Studies" required>
    </div>

    <!-- New Center Dropdown -->
    <div class="mb-3">
        <select class="form-control" name="center" required>
            <option value="">Select Center</option>
            <option value="Center 1">Center 1</option>
            <option value="Center 2">Center 2</option>
            <option value="Center 3">Center 3</option>
        </select>
    </div>

    <!-- Password Fields -->
    <div class="mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
    </div>

    <input type="hidden" name="action" value="register_healthcare_professional">

    <button type="submit" class="btn btn-outline-primary btn-lg w-100">Register</button>
</form>

<div id="form-message" class="mt-3"></div>



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