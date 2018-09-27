<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules\bulma\css\bulma.min.css">
    <link rel="stylesheet" href="node_modules\@fortawesome\fontawesome-free\css\all.css">
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

	<div class="row" id="root">
		<form>
		<div class="columns" >
			<div class="column is-offset-1 is-10">
				<div class="row box" >
					<div v-if="firstPage">
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
											<input class="input is-primary" :class="{ 'is-danger' : first_name_err }"  type="text" placeholder="First Name" v-model="first_name" name="first_name" >
											<p class="help has-text-danger" v-if="first_name_err">This is required</p>
										</div>
										<div class="column">
											<input class="input is-primary" :class="{ 'is-danger' : last_name_err }" type="text" placeholder="Last Name" v-model="last_name" name="last_name" >
											<p class="help has-text-danger" v-if="last_name_err">This is required</p>
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
				            <input id="" class="input is-primary" :class="{ 'is-danger' : date_of_birth_err}" type="date" placeholder="mm/dd/yyyy" v-model="date_of_birth" name="date_of_birth">
				            <p class="help has-text-danger" v-if="date_of_birth_err">This is required</p>
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
									<div class="column is-two-thirds">
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
				            <textarea class="textarea is-primary" :class="{ 'is-danger' : address_err}" type="text" placeholder="Your home address" v-model="address" name="address"></textarea>
				            <p class="help has-text-danger" v-if="address_err">This is required</p>
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
																<input class="input is-primary" type="text" :class="{ 'is-danger' : insurance_name_err}" placeholder="" maxlength="40" name="insurance_name" v-model="insurance_name">
															</p>
														</div>
														<p class="help">Insurance name</p>
														<p class="help has-text-danger" v-if="insurance_name_err">This is required</p>
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
																<input class="input is-primary" :class="{ 'is-danger' : insurance_validity_err}" type="date" placeholder="" name="insurance_validity" v-model="insurance_validity">
															</p>
														</div>
														<p class="help">Insurance validity</p>
														<p class="help has-text-danger" v-if="insurance_validity_err">This is required</p>
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
						<div class="row has-text-centered">
							<a class="button is-primary is-outlined" @click="onNext()">
								<span>Next</span>
							</a>
						</div>
					</div>
					<!-- End of First Page -->

					<!-- Start of Second Page -->
					<div class="row" v-if="secondPage">

						<div class="row">
							<div class="is-size-4">Medical History</div>
						</div>
						<hr>

						<div class="row">
							<div class="is-size-6"><strong>Physician Details:</strong></div>
						</div>
						<br>
						<!-- Name of Physician -->
						<input-div2>
							<template slot="fieldName">
				               Name
				            </template>
				            <input class="input is-primary" type="text" placeholder="" v-model="physician_name" name="physician_name">
						</input-div2>
						<!-- End of Physician -->

						<!-- Specialty -->
						<input-div2>
							<template slot="fieldName">
				               Specialty
				            </template>
				            <input class="input is-primary" type="text" placeholder="" v-model="specialty" name="specialty">
						</input-div2>
						<!-- End of Specialty -->

						<!-- Name of Office Address -->
						<input-div2>
							<template slot="fieldName">
				               Office Address
				            </template>
				            <textarea class="textarea is-primary" type="text" placeholder="Your physician office address" v-model="physician_address" name="physician_address"></textarea>
						</input-div2>
						<!-- End of Office Address -->

						<!-- Physician No. -->
						<div class="row">
							<div class="columns">
								<div class="column is-one-third">
									Office No.
								</div>
								<div class="column">
									<div class="columns">
									<div class="column is-four-fifths">
										<div class="field is-horizontal">
											<div class="field-body">
												<div class="field is-expanded">
													<div class="field ">
														<p class="control is-expanded" >
															<input class="input is-primary" type="tel" placeholder="" maxlength="11" name="mobile_no" v-model="mobile_no">
														</p>
													</div>
													<p class="help">Telephone or Mobile #</p>
												</div>
											</div>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Physician No. -->

						<hr>

						<!-- Q1 -->
						<input-div3>
							<template slot="fieldName">
				               <strong>1. Are you in good health?</strong>
				            </template>
							<input class="is-checkradio" id="q1Yes" type="radio" value="1" name="q1" checked="checked" v-model="q1">
							<label for="q1Yes">Yes</label>
							<input class="is-checkradio" id="q1No" type="radio" value="2" name="q1" v-model="q1">
							<label for="q1No">No</label>
						</input-div3>
						<!-- End of Q1 -->
						<br>
						<!-- Q2 -->
						<input-div3>
							<template slot="fieldName">
				               <strong>2. Are you under medical treatment now?</strong>
				            </template>
							<input class="is-checkradio" id="q2Yes" type="radio" value="1" name="q2" checked="checked" v-model="q2">
							<label for="q2Yes">Yes</label>
							<input class="is-checkradio" id="q2No" type="radio" value="2" name="q2" v-model="q2">
							<label for="q2No">No</label>
						</input-div3>

						<input-add-question>
							<template slot="fieldName">
				               What is the condition being treated?
				            </template>
				             <input class="input is-primary" type="text" placeholder="" v-model="q2Additional" name="q2Additional" :disabled="q2 == 2">
						</input-add-question>
						<!-- End of Q2 -->
						<br>
						<!-- Q3 -->
						<input-div3>
							<template slot="fieldName">
				               <strong>3. Have you ever had serious illness or surgical operation?</strong>
				            </template>
							<input class="is-checkradio" id="q3Yes" type="radio" value="1" name="q3" checked="checked" v-model="q3">
							<label for="q3Yes">Yes</label>
							<input class="is-checkradio" id="q3No" type="radio" value="2" name="q3" v-model="q3">
							<label for="q3No">No</label>
						</input-div3>

						<input-add-question>
							<template slot="fieldName">
				               What illness or operation?
				            </template>
				             <input class="input is-primary" type="text" placeholder="" v-model="q3Additional" name="q3Additional" :disabled="q3 == 2">
						</input-add-question>
						<!-- End of Q3 -->
						<br>
						<!-- Q4 -->
						<input-div3>
							<template slot="fieldName">
				               <strong>4. Have you ever been hospitalized?</strong>
				            </template>
							<input class="is-checkradio" id="q4Yes" type="radio" value="1" name="q4" checked="checked" v-model="q4">
							<label for="q4Yes">Yes</label>
							<input class="is-checkradio" id="q4No" type="radio" value="2" name="q4" v-model="q4">
							<label for="q4No">No</label>
						</input-div3>

						<input-add-question>
							<template slot="fieldName">
				               Why?
				            </template>
				             <input class="input is-primary" type="text" placeholder="" v-model="q4Additional" name="q4Additional" :disabled="q4 == 2">
						</input-add-question>
						<!-- End of Q4 -->
						<br>
						<!-- Q5 -->
						<input-div3>
							<template slot="fieldName">
				               <strong>5. Are you taking prescription/non-prescription medication?</strong>
				            </template>
							<input class="is-checkradio" id="q5Yes" type="radio" value="1" name="q5" checked="checked" v-model="q5">
							<label for="q5Yes">Yes</label>
							<input class="is-checkradio" id="q5No" type="radio" value="2" name="q5" v-model="q5">
							<label for="q5No">No</label>
						</input-div3>

						<input-add-question>
							<template slot="fieldName">
				               Please specify?
				            </template>
				            <input class="input is-primary" type="text" placeholder="" v-model="q5Additional" name="q5Additional" :disabled="q5 == 2">
						</input-add-question>
						<!-- End of Q5 -->
						<br>
						<!-- Q6 -->
						<input-div3>
							<template slot="fieldName">
				               <strong>6. Do you use tobacco products?</strong>
				            </template>
							<input class="is-checkradio" id="q6Yes" type="radio" value="1" name="q6" checked="checked" v-model="q6">
							<label for="q6Yes">Yes</label>
							<input class="is-checkradio" id="q6No" type="radio" value="2" name="q6" v-model="q6">
							<label for="q6No">No</label>
						</input-div3>
						<!-- End of Q6 -->
						<br>
						<!-- Q7 -->
						<input-div3>
							<template slot="fieldName">
				               <strong>7. Do you use alcohol, coccaine or other dangerous drugs?</strong>
				            </template>
							<input class="is-checkradio" id="q7Yes" type="radio" value="1" name="q7" checked="checked" v-model="q7">
							<label for="q7Yes">Yes</label>
							<input class="is-checkradio" id="q7No" type="radio" value="2" name="q7" v-model="q7">
							<label for="q7No">No</label>
						</input-div3>
						<!-- End of Q7 -->
						<br>
						<!-- Q8 -->
						<div class="row">
							<strong>8. Are you allergic to any of the following:</strong>
						</div>
						<br>
						<div class="row">
							<div class="columns">
								<div class="column is-offset-1 is-10">
									<div class="row">
										<div class="columns">
											<div class="column">
												<div class="field">
													<input class="is-checkradio" id="q8_1" type="checkbox" name="q8_1">
													<label for="q8_1">Local Anesthetic</label>
												</div>
											</div>
											<div class="column">
												<div class="field">
													<input class="is-checkradio" id="q8_2" type="checkbox" name="q8_2">
													<label for="q8_2">Antibiotics</label>
												</div>
											</div>
											<div class="column">
												<div class="field">
													<input class="is-checkradio" id="q8_3" type="checkbox" name="q8_3">
													<label for="q8_3">Sulfa Drugs</label>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="columns">
											<div class="column">
												<div class="field">
													<input class="is-checkradio" id="q8_4" type="checkbox" name="q8_4">
													<label for="q8_4">Aspirin</label>
												</div>
											</div>
											<div class="column">
												<div class="field">
													<input class="is-checkradio" id="q8_5" type="checkbox" name="q8_5">
													<label for="q8_5">Latex</label>
												</div>
											</div>
											<div class="column">
												<div class="field">
													<input class="is-checkradio" id="q8_6" type="checkbox" name="q8_6">
													<label for="q8_6">Penicillin</label>
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="field">
											<div class="columns">
												<div class="column is-one-fifth">
													<input class="is-checkradio" id="q8_other" type="checkbox" name="q8_other" v-model="q8_other">
													<label for="q8_other">Other</label>
												</div>
												<div class="column is-four-fifths">
													<input class="input is-primary" type="text" placeholder="" v-model="q8_other_text" name="q8_other_text" v-if="q8_other">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Q8 -->
						<br>
						<!-- Q9 -->
						<div class="row">
							<strong>9. For woman only:</strong>
						
							<div class="row">
								<div class="columns">
									<div class="column is-offset-1 is-7">
										Are you pregnant?
									</div>
									<div class="column ">
										<input class="is-checkradio" id="q9Yes_1" type="radio" value="1" name="q9_1" >
										<label for="q9Yes_1">Yes</label>
										<input class="is-checkradio" id="q9No_1" type="radio" value="2" name="q9_1" checked="checked">
										<label for="q9No_1">No</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="columns">
									<div class="column is-offset-1 is-7">
										Are you nursing?
									</div>
									<div class="column ">
										<input class="is-checkradio" id="q9Yes_2" type="radio" value="1" name="q9_2" >
										<label for="q9Yes_2">Yes</label>
										<input class="is-checkradio" id="q9No_2" type="radio" value="2" name="q9_2" checked="checked">
										<label for="q9No_2">No</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="columns">
									<div class="column is-offset-1 is-7">
										Are you taking birth control pills?
									</div>
									<div class="column ">
										<input class="is-checkradio" id="q9Yes_3" type="radio" value="1" name="q9_3" >
										<label for="q9Yes_3">Yes</label>
										<input class="is-checkradio" id="q9No_3" type="radio" value="2" name="q9_3" checked="checked">
										<label for="q9No_3">No</label>
									</div>
								</div>
							</div>
						</div>
						<!-- End of Q9 -->
						
						<br>
						<!-- Q10 -->
						<input-div>
							<template slot="fieldName">
				                <strong>10. Blood Type</strong>
				            </template>
				            <input class="input is-primary" type="text" v-model="blood_type" name="blood_type">
						</input-div>
						<!-- End of Q10 -->

						<br>
						<!-- Q11 -->
						<input-div>
							<template slot="fieldName">
				                <strong>11. Blood Pressure</strong>
				            </template>
				            <input class="input is-primary" type="text" v-model="blood_pressure" name="blood_pressure">
						</input-div>
						<!-- End of Q11 -->
						<br>

						<!-- Q12 -->
						<div class="row">
							<strong>12. Do you have or have you had any of the following? Please check which apply.</strong>
							<div class="row">
								<br>
								<div class="columns">
									<div class="column is-offset-1 is-10">
										
										<div class="row">
											<div class="field">
												<div class="columns">
													<div class="column is-one-fifth">
														<input class="is-checkradio" id="q8_other" type="checkbox" name="q8_other" v-model="q8_other">
														<label for="q8_other">Other</label>
													</div>
													<div class="column is-four-fifths">
														<input class="input is-primary" type="text" placeholder="" v-model="q8_other_text" name="q8_other_text" v-if="q8_other">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Q12 -->

					</div>
					
				</div>
				

				
			</div>
		</div>
	</form>
	</div>	


	<!-- script frame -->
	
	<script src="node_modules/vue/dist/vue.js"></script>
	<script src="components/inputDiv.js"></script>

</body>

</html>