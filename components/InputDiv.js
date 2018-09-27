Vue.component('input-div', {

		template: `
			<div class="row">
				<div class="columns">
					<div class="column is-one-quarter">
						<slot name="fieldName"></slot>
					</div>
					<div class="column">
						<div class="columns">
							<div class="column is-two-thirds">
								<div class="field">
									<slot></slot>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		`

});

Vue.component('input-div2', {

		template: `
			<div class="row">
				<div class="columns">
					<div class="column is-one-third">
						<slot name="fieldName"></slot>
					</div>
					<div class="column">
						<div class="columns">
							<div class="column is-four-fifths">
								<slot></slot>
							</div>
						</div>
					</div>
				</div>
			</div>
		`

});

Vue.component('input-div3', {

		template: `
			<div class="row">
				<div class="columns">
					<div class="column is-two-thirds">
						<slot name="fieldName"></slot>
					</div>
					<div class="column">
						<div class="columns">
							<div class="column">
								<slot></slot>
							</div>
						</div>
					</div>
				</div>
			</div>
		`

});

Vue.component('input-add-question', {

		template: `
			<div class="row">
				<div class="columns">
					<div class="column is-half is-offset-1">
						<slot name="fieldName"></slot>
					</div>
					<div class="column">
						<div class="columns">
							<div class="column">
								<slot></slot>
							</div>
						</div>
					</div>
				</div>
			</div>
		`

});


new Vue ({

	el: '#root',

	data: {

		first_name :  "",
		first_name_err :  false,
		last_name : "",
		last_name_err : false,
		nickname : "",
		sex_radio : 1,
		date_of_birth : "",
		date_of_birth_err : false,
		mobile_no : "",
		email : "",
		address : "",
		address_err : false,
		occupation : "",
		referral : "",
		reason_for_dental : "",
		dental_insurance : false,
		insurance_name : "",
		insurance_name_err : false,
		insurance_validity : "",
		insurance_validity_err : false,
		previous_dentist : "",
		last_visit : "",
		firstPage : false, // indicator if first page will show
		secondPage : true, // indicator if first page will show
		q1 : 2,
		q2 : 2,
		q3 : 2,
		q4 : 2,
		q5 : 2,
		q6 : 2,
		q7 : 2,
		q9 : 2,
		q8_other : false,
		type_of_disease : ["High Blood Pressure", "Low Blood Pressure", "Epilepsy/Convulsion", " AIDS or HIV Infection",
							"Sexually Transmitted Disease", "Stomach Trouble/Ulcers","Fainting Seizure","Rapid Weight Loss",
							"Radiation Therapy", "Joint Replacement Implant", "Heart Surgery", "Heart Attack",
							"Thyroid Problem", "Heart Disease", "Heart Murmur", "Hepatitis/Liver Disease",
							"Rheumatic Fever", "Hay Fever/Allergies", "Respiratory Problems", "Hepatitis/Jaundice",
							"Tuberculosis","Swollen ankles", "Kidney Disease", "Diabetes",
							"Chest pain", "Stroke", "Cancer/Tumors", "Anemia",
							"Angina","Asthma","Emphysema","Bleeding Problems",
							"Blood Diseases", "Head Injuries", "Arthritis/Rheumatism"]

	},

	methods : {

		onNext() {

			this.first_name_err = validateRequired(this.first_name);
			this.last_name_err = validateRequired(this.last_name);
			this.date_of_birth_err = validateRequired(this.date_of_birth);
			this.address_err = validateRequired(this.address);

			if(this.dental_insurance){ //truthy
				this.insurance_name_err = validateRequired(this.insurance_name);
				this.insurance_validity_err = validateRequired(this.insurance_validity);
			}
			else{
				this.insurance_name_err = false;
				this.insurance_validity_err = false;
			}

			if(!this.first_name_err && !this.last_name_err && !this.date_of_birth_err && !this.address_err && !this.insurance_name_err && !this.insurance_validity_err){
				this.firstPage = false;
				this.secondPage = true;
			}
			else{
				alert("Please provide necessary input to the required fields.");
			}
			

		}
	}

});

function validateRequired(field) {

	if(field == "")
		return true;

	return false;
}