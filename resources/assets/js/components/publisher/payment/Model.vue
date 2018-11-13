<template>
    <div class="modal fade" id="modal-withdraw">
		<form class="form-shorten" id="payment" @submit.prevent="submit" action="" method="post">
			<div class="modal-dialog modal-shorten">
				<div class="modal-content bg-dark">
					<div class="modal-header" style="border-bottom: 1px solid rgba(229, 229, 229, 0.15);">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="exampleModalLabel">New message</h4>
					</div>
					<div class="modal-body">
						<div class="padder">
							<div class="form-group">
								<label class="label-control">Recipient</label>
								<input type="text" v-model="form.phone" class="form-control1">
							</div>
							
							<div class="form-group">
								<label class="label-control">Amount</label>
								<input type="text" id="input-amount" v-model="form.amount" class="form-control1" value="">
							</div>
							
						</div>
					</div>
					<div class="modal-footer" style="padding-top: 0px !important;border-top: 0 !important;">
						<span class="pay-response pull-left"></span>
						<input type="hidden" v-model="form.processor" id="payProcessor">
						<button type="submit" class="btn btn-info">
							<img class="m-r-xs" src="/images/ajax-loader.gif" alt="loading">
							Submit
						</button>
					</div>
				</div> 
			</div>
		</form>
	</div>
</template>
<script>
export default{
    props:[
        'phone',
        'process'
    ],
    data(){
    	return {
    		validation: [],
    		form: {
    			phone: this.phone,
    			processor: this.process,
    			amount: null
    		}
    	}
	},
	methods: {
		submit(){
			console.log(this.form)
		}
	}
}
</script>