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
					<a href="/simulation" class="btn-get-started scrollto">Get Started</a>
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 icon-cc">
				<img src="assets/img/icon-cc.png" class="img-fluid animated" alt="">
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
				@if ($errors->any())
   		 <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
				<br>
				<br>
				<div class="x_content">
					<br>

					<form action="/simulation" method="POST" id="demo-form2" data-parsley-validate=""
						class="form-horizontal form-label-left" novalidate="">
						@csrf

						<div class="form-group col">
							<div class="row">
								<label class="control-label col-md-2 col-sm-2 ">Gender <span class="required">*</span></label>
							<div class="col-md-4 col-sm-4 ">
								<div id="CODE_GENDER" class="btn-group" data-toggle="buttons">
									<label class="btn btn-secondary" data-toggle-class="btn-primary"
										data-toggle-passive-class="btn-default">
										<input type="radio" name="CODE_GENDER" value="0" class="join-btn"
											data-parsley-multiple="CODE_GENDER"> &nbsp; Male &nbsp;
									</label>
									<label class="btn btn-primary" data-toggle-class="btn-primary"
										data-toggle-passive-class="btn-default">
										<input type="radio" name="CODE_GENDER" value="1" class="join-btn"
											data-parsley-multiple="CODE_GENDER"> Female
									</label>
								</div>
							</div>
								<label class="control-label col-md-2 col-sm-2 ">Have a Car<span
										class="required">*</span></label>
								<div class="col-md-4 col-sm-4 ">
									<select name="FLAG_OW0_CAR" class="select2_single form-control" tabindex="-1">
										<option></option>
										<option value="1">YES</option>
										<option value="0">NO</option>
									</select>
								</div>
							</div>
						</div>

							<br></br>

						<div class="form-group col">
							<div class="row">
							<label class="control-label col-md-2 col-sm-2 ">Have a Realty<span
										class="required">*</span></label>
								<div class="col-md-4 col-sm-4 ">
									<select name="FLAG_OW0_REALT1" class="select2_single form-control" tabindex="-1">
										<option></option>
										<option value="1">YES</option>
										<option value="0">NO</option>
									</select>
								</div>
								<label class="control-label col-md-2 col-sm-2 ">Have a Children<span
										class="required">*</span></label>
								<div class="col-md-4 col-sm-4 ">
								<select name="CNT_CHILDREN" class="select2_single form-control" tabindex="-1">
										<option></option>
										<option value="0">NO</option>
										<option value="1">1</option>
										<option value="2">2+</option>
									</select>
								</div>
							</div>

							<br></br>
			
							<div class="form-group col">
								<div class="row">
									<label class="control-label col-md-2 col-sm-2 ">Amount Income<span
											class="required">*</span></label>
									<div class="col-md-4 col-sm-4 ">
									<select name="AMT_INCOME_TOTAL" class="select2_single form-control"
											tabindex="-1">
											<option></option>
											<option value="0">Rp.3.000.000 - < Rp.10.000.000</option>
											<option value="1">Rp.10.000.000 - < Rp.30.000.000</option>
											<option value="2">Rp.30.000.000 or more</option>
										</select>
									</div>
									<label class="control-label col-md-2 col-sm-2 ">Education Type<span
											class="required">*</span></label>
									<div class="col-md-4 col-sm-4 ">
										<select name="NAME_EDUCATION_TYPE" class="select2_single form-control"
											tabindex="-1">
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
										<label class="control-label col-md-2 col-sm-2 ">Family Status<span
												class="required">*</span></label>
										<div class="col-md-4 col-sm-4 ">
											<select name="NAME_FAMILY_STATUS" class="select2_single form-control"
												tabindex="-1">
												<option></option>
												<option value="0">Single</option>
												<option value="1">Married</option>
												<option value="2">Civil Marriage</option>
												<option value="3">Separate</option>
												<option value="4">Widow</option>
											</select>
										</div>
										<label class="control-label col-md-2 col-sm-2 ">House Type<span
												class="required">*</span></label>
										<div class="col-md-4 col-sm-4 ">
											<select name="NAME_HOUSING_TYPE" class="select2_single form-control"
												tabindex="-1">
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
											<label class="control-label col-md-2 col-sm-2 ">Age<span
													class="required">*</span></label>
													<div class="col-md-4 col-sm-4 ">
								<select name="DAYS_BIRTH" class="select2_single form-control" tabindex="-1">
										<option></option>
										<option value="0">Less Than 30 Years Old</option>
										<option value="1">30 Years Old or More</option>
									</select>
								</div>
											<label class="control-label col-md-2 col-sm-2 ">Work Period<span
													class="required">*</span></label>
											<div class="col-md-4 col-sm-4 ">
											<select name="DAYS_EMPLOYED" class="select2_single form-control" tabindex="-1">
										<option></option>
										<option value="0">Less Than 3 Years </option>
										<option value="1">3 Years until 6 Years</option>
										<option value="2">More than 6 Years</option>
									</select>
											</div>
										</div>

												<br></br>
												<div class="form-group row">
													<label class="control-label col-md-2 col-sm-2 ">Job<span
															class="required">*</span></label>
													<div class="col-md-10 col-sm-10 ">
														<select name="JOB" class="select2_single form-control"
															tabindex="-1">
															<option></option>
															<option value="0">Manager</option>
															<option value="1">Private Service Staff</option>
															<option value="2">Laborers</option>
															<option value="3">Core Staff</option>
															<option value="4">Drivers</option>
															<option value="5">High Skill Staff</option>
															<option value="6">Realty Agents</option>
															<option value="7">Secretary</option>
															<option value="8">Accountant</option>
															<option value="9">Sales Staff</option>
															<option value="10">Medicine Staff</option>
															<option value="11">Waiters/ Barmen Staff</option>
															<option value="12">Low Skill Laborers</option>
															<option value="13">Cleaning Staff</option>
															<option value="14">Human Resource Staff</option>
															<option value="15">Cooking Staff</option>
															<option value="16">Security Staff</option>
															<option value="17">IT Staff</option>
														</select>
													</div>
												</div>

												<br></br>

										<div class="item form-group">
											<center>
												<button class="btn btn-outline-primary" type="reset">Reset</button> &nbsp; &nbsp;
												<button class="btn btn-primary" type="submit">Submit</button>
											</center>
										</div>


												

					</form>
				</div>
			</div>
		</div>
	</div>



</div>
<!-- End About Section -->


@stop