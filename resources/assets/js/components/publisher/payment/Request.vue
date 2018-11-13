<template>
    <div>
        <div class="list-group">
			<a data-type="TrueMoney" v-on:click="sendProcessor('TrueMoney')" data-whatever="TrueMoney" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/truemoney.png">
				&nbsp; <span class="h5">TrueMoney</span>
			</a>
			<a data-type="Wing" v-on:click="sendProcessor('Wing')" data-whatever="Wing Xpress" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/wing.png">
				&nbsp; <span class="h5">Wing Xpress</span>
			</a>
			<a data-type="Smartluy" v-on:click="sendProcessor('SmartLuy')" data-whatever="Smartluy" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/smartluy.png">
				&nbsp; <span class="h5">Smartluy</span>
			</a>
			<a data-type="Emoney" v-on:click="sendProcessor('Emoney')" data-whatever="Emoney" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/emoney.png">
				&nbsp; <span class="h5">Emoney</span>
			</a>
		</div>
        <br>
        <h4 class="font-thin">Cellular Companies (mobile top up)</h4>
        <div class="line line-dashed line-lg pull-in"></div>
        <br>
        
		<div class="list-group">
			<a data-type="Metfone" v-on:click="sendProcessor('Metfone')" data-whatever="Metfone" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/metfone.gif">
				&nbsp; <span class="h5">Metfone</span>
			</a>
			<a data-type="QB" v-on:click="sendProcessor('QB')" data-whatever="QB" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/qb.jpg">
				&nbsp; <span class="h5">QB</span>
			</a>
			<a data-type="Cellcard" v-on:click="sendProcessor('Cellcard')" data-whatever="Cellcard" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/cellcard.png">
				&nbsp; <span class="h5">Cellcard</span>
			</a>
			<a data-type="CooTel" v-on:click="sendProcessor('CooTel')" data-whatever="CooTel" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/cootel.png">
				&nbsp; <span class="h5">CooTel</span>
			</a>
			<a data-type="Smart" v-on:click="sendProcessor('Smart')" data-whatever="Smart" href="#modal-withdraw" data-toggle="modal" class="list-group-item">
				<img class="img-thumbnail" width="50" height="50" src="/images/smart.jpg">
				&nbsp; <span class="h5">Smart Axiata</span>
			</a>
		</div>
    	
    <div class="modal fade" id="modal-withdraw">
		<form class="form-shorten" id="payment" @submit.prevent="submit" action="" method="post">
			<div class="modal-dialog modal-shorten">
				<div class="modal-content bg-dark">
					<div class="modal-header" style="border-bottom: 1px solid rgba(229, 229, 229, 0.15);">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="exampleModalLabel">
							New message
							<span v-if="validation.processor">
								{{ validation.processor[0] }}
							</span>
						</h4>
					</div>
					<div class="modal-body">
						<div class="padder">
							<div class="form-group" :class="{ 'has-error': validation.phone }">
								<label class="control-label">Recipient</label>
								<input type="text" v-model="form.phone" class="form-control1">
								<span class="help-block" v-if="validation.phone">
									{{ validation.phone[0] }}
								</span>
							</div>
							
							<div class="form-group" :class="{ 'has-error': validation.amount }">
								<label class="control-label">Amount($)</label>
								<input type="text" id="input-amount" v-model="form.amount" class="form-control1" value="">
								<span class="help-block" v-if="validation.amount">
									{{ validation.amount[0] }}
								</span>
							</div>
							
						</div>
					</div>
					<div class="modal-footer" style="padding-top: 0px !important;border-top: 0 !important;">
						<span class="pull-left">
							<small><span class="text-danger">{{ balance }}</span></small>
						</span>
						<input type="hidden" v-model="form.processor" id="payProcessor">
						<button type="submit" class="btn btn-info">
							<div v-if="loading" class="lds-dual-ring"></div>
							Submit
						</button>
					</div>
				</div> 
			</div>
		</form>
	</div>
    	
    </div>
</template>
<script>
    export default{
        props:[
        	'phone',
        	'endpoin',
        	'balance'
        ],
        data(){
	    	return {
	    		validation: [],
	    		loading: false,
	    		form: {
	    			phone: this.phone,
	    			processor: null,
	    			amount: null
	    		}
	    	}
        },
        methods:{
        	sendProcessor(pro){
        		this.form.processor = pro
        	},
        	submit(){
        		this.loading = true
				axios.patch(this.endpoin, this.form).then((response) => {
					location.href = '/publisher/payment/pending'
				}).catch((error) => {
					this.validation = error.response.data.errors
					this.loading = false
				})
			}
        }
    }
</script>