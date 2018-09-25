Vue.component('input-div', {

		template: `
			<div class="row">
				<div class="columns">
					<div class="column is-one-quarter">
						<slot name="fieldName"></slot>
					</div>
					<div class="column">
						<div class="columns">
							<div class="column is-half">
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


new Vue ({

	el: '#root',

	data: {

		first_name = "",
		last_name = "",
		nickname = "",
		
		sex_radio : 1,
		date_of_birth : "",
		email : "",
		dental_insurance : false
	}

});