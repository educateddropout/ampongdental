<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
    <link rel="stylesheet" href="node_modules\bulma-extensions\bulma-checkradio\dist\css\bulma-checkradio.min.css">
    <link rel="stylesheet" href="node_modules\bulma-extensions\bulma-calendar\dist\css\bulma-calendar.min.css">

    <script src="node_modules\bulma-extensions\bulma-calendar\dist\js\bulma-calendar.min.js"></script>
</head>
<body>

	<nav class="navbar is-transparent is-light">
		<div class="navbar-brand">
			<a class="navbar-item" href="https://bulma.io">
				<img src="images/logo.jpg"  width="112" height="110">
			</a>
			<div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

		<div id="navbarExampleTransparentExample" class="navbar-menu">

			<div class="navbar-end">
				<div class="navbar-item">
					<div class="field is-grouped">
						<p class="control">
							<a class="button" href="#">
								<span>Sign in</span>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<br>
	tests
	<div class="row" id="root">
		<div class="columns">
			<div class="column is-offset-one-quarter is-half">
				<div class="row box">

					<div class="row">
						<div class="is-size-2">Patient Information Record</div>
						<span class="">Please complete this patient information record </span>
					</div>
					<hr>

					<!-- Patient Name -->
					<div class="row">
						<div class="columns">
							<div class="column is-one-quarter">
								Patient Name
							</div>
							<div class="column">
								<div class="columns">
									<div class="column">
										<input class="input is-primary" type="text" placeholder="First Name" v-model="first_name" name="first_name">
									</div>
									<div class="column">
										<input class="input is-primary" type="text" placeholder="Last Name" v-model="last_name" name="last_name">
									</div>
									<div class="column">
										<input class="input is-primary" type="text" placeholder="Nickname" v-model="nickname" name="nickname">
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End of Patient Name -->

					<!-- Sex -->
					<div class="row">
						<div class="columns">
							<div class="column is-one-quarter">
								Sex
							</div>
							<div class="column">
								<div class="field">
									<input class="is-checkradio" id="sexRadio1" type="radio" value="1" name="sex_radio" checked="checked" v-model="sex_radio">
									<label for="sexRadio1">Male</label>
									<input class="is-checkradio" id="sexRadio2" type="radio" value="2" name="sex_radio" v-model="sex_radio">
									<label for="sexRadio2">Female</label>
								</div>
							</div>
						</div>
					</div>
					<!-- End of Sex -->

					<!-- Date of Birth -->
					<input-div>
						<template slot="fieldName">
			                Date of Birth
			            </template>
			            <input id="" class="input is-primary" type="date" placeholder="mm/dd/yyyy" v-model="date_of_birth" name="date_of_birth">
					</input-div>
					<!-- End of Date of birth -->

					<!-- Mobile No. -->
					<div class="row">
						<div class="columns">
							<div class="column is-one-quarter">
								Mobile No.
							</div>
							<div class="column">
								<div class="columns">
								<div class="column is-half">
									<div class="field is-horizontal">
										<div class="field-body">
											<div class="field is-expanded">
												<div class="field has-addons">
													<p class="control">
														<a class="button is-static">
														+63
														</a>
													</p>
													<p class="control is-expanded" >
														<input class="input is-primary" type="tel" placeholder="Your phone number" maxlength="10" name="mobile_no" v-model="mobile_no">
													</p>
												</div>
												<p class="help">Do not enter the first zero</p>
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End of Mobile No. -->

					<!-- Email Address -->
					<input-div>
						<template slot="fieldName">
			                Email Address
			            </template>
			            <input class="input is-primary" type="email" placeholder="Your email address" v-model="email" name="email">
					</input-div>
					<!-- End of Email Address -->
					

					<!-- Address -->
					<input-div>
						<template slot="fieldName">
			                Address
			            </template>
			            <textarea class="textarea is-primary" type="text" placeholder="Your home address" v-model="address" name="address"></textarea>
					</input-div>
					<!-- End of Address -->

					<!-- Occupation -->
					<input-div>
						<template slot="fieldName">
			                Occupation
			            </template>
			            <input class="input is-primary" type="text" placeholder="" v-model="occupation" name="occupation">
					</input-div>
					<!-- End of Occupation -->

					<!-- Referral -->
					<input-div>
						<template slot="fieldName">
			                To whom may we thank referring you?
			            </template>
			            <input class="input is-primary" type="text" placeholder="" v-model="referral" name="referral">
					</input-div>
					<!-- End of Referral -->

					<!-- Reason -->
					<input-div>
						<template slot="fieldName">
			               What is your reason for dental consultation?
			            </template>
			            <input class="input is-primary" type="text" placeholder="" v-model="reason_for_dental" name="reason_for_dental">
					</input-div>
					<!-- End of Reason -->
					
					<!-- Dental Insurance -->
					<div class="row">
						<div class="columns">
							<div class="column is-one-quarter">
								Dental Insurance
							</div>
							<div class="column">
								<div class="columns">
									<div class="column is-one-fifth">
										<div class="field">
											<input class="is-checkradio" id="exampleRtlCheckbox" type="checkbox" name="dental_insurance" checked="checked" v-model="dental_insurance">
											<label for="exampleRtlCheckbox">Yes</label>
										</div>
									</div>
									<div class="column " v-if="dental_insurance">
										<div class="field is-horizontal">
											<div class="field-body">
												<div class="field is-expanded">
													<div class="field ">
														<p class="control " >
															<input class="input is-primary" type="text" placeholder="" maxlength="40" name="insurance_name" v-model="insurance_validity">
														</p>
													</div>
													<p class="help">Insurance name</p>
												</div>
											</div>
										</div>
									</div>
									<div class="column " v-if="dental_insurance">
										<div class="field is-horizontal">
											<div class="field-body">
												<div class="field is-expanded">
													<div class="field ">
														<p class="control " >
															<input class="input is-primary" type="date" placeholder="" name="insurance_validity" v-model="insurance_validity">
														</p>
													</div>
													<p class="help">Insurance validity</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End of Dental Insurance -->
					
					<hr>


					<div class="row">
						<div class="is-size-4">Dental History</div>
					</div>
					<br>

					<!-- Previous Dentist -->
					<input-div>
						<template slot="fieldName">
			               Previous Dentist Dr.
			            </template>
			            <input class="input is-primary" type="text" placeholder="" v-model="previous_dentist" name="previous_dentist">
					</input-div>
					<!-- End of Previous Dentist -->


					<!-- Last Dentist Visit -->
					<input-div>
						<template slot="fieldName">
			               Last Dental visit
			            </template>
			            <input class="input is-primary" type="date" placeholder="" v-model="last_visit" name="last_visit">
					</input-div>
					<!-- End of Last Dentist Visit-->


					<hr>

				</div>
			</div>
		</div>
	</div>	


	<!-- script frame -->
	
	<script src="node_modules/vue/dist/vue.js"></script>
	<script src="components/inputDiv.js"></script>

</body>

</html>