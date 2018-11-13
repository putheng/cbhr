<template>
	<div class="row col-md-6 col-md-offset-3">
		<form action="#" @submit.prevent="submit">
			
			<div class="form-group" :class="{ 'has-error': validation.name }">
				<label for="name" class="control-label">Email address</label>
				<input type="text" class="form-control" id="name" v-model="form.name">
				
				<span class="help-block" v-if="validation.name">
					{{ validation.name[0] }}
				</span>
			</div>
			<div class="form-group" :class="{ 'has-error': validation.phone }">
				<label for="phone" class="control-label">Password</label>
				<input type="password" class="form-control" v-model="form.phone">
				
				<span class="help-block" v-if="validation.phone">
					{{ validation.phone[0] }}
				</span>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-info" value="Sign in">
			</div>
			
		</form>
	</div>
</template>
<script>
import axios from 'axios'

export default {
	name: 'signin',
	data(){
		return {
			validation: [],
			form: {
				name: null,
				phone: null
			}
		}
	},
	methods: {
		submit(){
			axios.patch('/publisher/settings/profile', this.form).then((response) => {
				alert(response)
			}).catch((error) => {
				this.validation = error.response.data.errors
			})
		}
	}
}

</script>




