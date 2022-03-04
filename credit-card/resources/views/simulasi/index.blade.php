@extends('templates.default')

@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1>Classification Credit-Card</h1>
      <h2>Let's input your data to find out the result</h2>
      <div>
        <a href="/simulasi" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img">
      <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<!-- ======= About Section ======= -->
<br>
<br>
<br>
<br>
  <div class="container">

  <div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Input Your Data</h2>
									<div class="clearfix"></div>
								</div>

								<br>
								<br>
								<div class="x_content">
									<br>
									
									<form action="/simulasi" method="POST" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
										@csrf
										
										<div class="item form-group row">
											<label class="control-label col-md-2 col-sm-2 ">CODE GENDER <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<div id="CODE_GENDER" class="btn-group" data-toggle="buttons">
													<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="CODE_GENDER" value="0" class="join-btn" data-parsley-multiple="CODE_GENDER"> &nbsp; Male &nbsp;
													</label>
													<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="CODE_GENDER" value="1" class="join-btn" data-parsley-multiple="CODE_GENDER"> Female
													</label>
												</div>
											</div>
										</div>

                                        <br></br>
										<div class="form-group col">
                                        <div class="row">
											<label class="control-label col-md-2 col-sm-2 ">FLAG OWN CAR<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
												<select name="FLAG_OW0_CAR" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="1">YES</option>
													<option value="0">NO</option>
												</select>
											</div>
                                        <label class="control-label col-md-2 col-sm-2 ">FLAG OWN REALTY<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
											<select name="FLAG_OW0_REALT1" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="1">YES</option>
													<option value="0">NO</option>
												</select>
											</div>
                                            </div>

                                            <br></br>
										<div class="form-group col">
                                        <div class="row">
											<label class="control-label col-md-2 col-sm-2 ">AMOUNT INCOME TOTAL<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
                                            <input name="AMT_INCOME_TOTAL" type="text" id="first-name" required="required" class="form-control ">
											</div>
                                    	   <label class="control-label col-md-2 col-sm-2 ">NAME EDUCATION TYPE<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
											<select name="NAME_EDUCATION_TYPE" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="0">Lower Secondary</option>
													<option value="1">Secondary</option>
													<option value="2">Academic</option>
													<option value="3">Incomplate</option>
													<option value="4">Higher</option>
												</select>
											</div>
                                            </div>

                                            <br></br>
										<div class="form-group col">
                                        <div class="row">
											<label class="control-label col-md-2 col-sm-2 ">NAME FAMILY STATUS<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
                                            <select name="NAME_FAMILY_STATUS" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="0">Single</option>
													<option value="1">Married</option>
													<option value="2">Civil Marriage</option>
													<option value="3">Separate</option>
													<option value="4">Widow</option>
												</select>
											</div>
                                        <label class="control-label col-md-2 col-sm-2 ">NAME HOUSING TYPE<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
											<select name="NAME_HOUSING_TYPE" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="0">With Parents</option>
													<option value="1">House</option>
													<option value="2">Rented</option>
													<option value="3">Municipal</option>
													<option value="4">Co-op</option>
													<option value="5">Office</option>
												</select>
											</div>
                                            </div>

                                            <br></br>
										<div class="form-group col">
                                        <div class="row">
											<label class="control-label col-md-2 col-sm-2 ">DAYS BIRTH<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
                                            <input name="DAYS_BIRTH" type="text" id="DAYS_BIRTH" required="required" class="form-control ">
											</div>
                                        <label class="control-label col-md-2 col-sm-2 ">DAYS EMPLOYED<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
											<input name="DAYS_EMPLOYED" type="text" id="DAYS_EMPLOYED" required="required" class="form-control ">
											</div>
                                            </div>

                                            <br></br>
										<div class="form-group col">
                                        <div class="row">
											<label class="control-label col-md-2 col-sm-2 ">FLAG MOBIL<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
                                            <select name="FLAG_MOBIL" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="1">YES</option>
													<option value="0">NO</option>
												</select>
											</div>
                                        <label class="control-label col-md-2 col-sm-2 ">FLAG WORK PHONE<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
											<select name="FLAG_WORK_PHONE" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="1">YES</option>
													<option value="0">NO</option>
												</select>
											</div>
                                            </div>
                                        
                                            <br></br>
										<div class="form-group col">
                                        <div class="row">
											<label class="control-label col-md-2 col-sm-2 ">FLAG PHONE<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
                                            <select name="FLAG_PHONE" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="1">YES</option>
													<option value="0">NO</option>
												</select>
											</div>
                                        <label class="control-label col-md-2 col-sm-2 ">FLAG EMAIL<span class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
											<select name="FLAG_EMAIL" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="1">YES</option>
													<option value="0">NO</option>
												</select>
											</div>
                                            </div>

										<br></br>
                                        <div class="form-group row">
											<label class="control-label col-md-2 col-sm-2 ">JOB<span class="required">*</span></label>
											<div class="col-md-10 col-sm-10 ">
											<select name="JOB" class="select2_single form-control" tabindex="-1">
													<option></option>
													<option value="0">Manager</option>
													<option value="1">Private</option>
													<option value="2">Laborers</option>
													<option value="3">Core Staff</option>
													<option value="4">Drivers</option>
													<option value="5">High Skill</option>
													<option value="6">Realty</option>
													<option value="7">Secretary</option>
													<option value="8">Accountant</option>
													<option value="9">Sales</option>
													<option value="10">Medicidine</option>
													<option value="11">Waiters</option>
													<option value="12">Low Skill</option>
													<option value="13">Cleaning</option>
													<option value="14">Human Resource</option>
													<option value="15">Cooking</option>
												</select>
											</div>
										</div>

                                        <br></br>

											<div class="col-5">
												<button class="btn btn-outline-primary" type="reset">Reset</button>
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					

</div>
<!-- End About Section -->


@stop