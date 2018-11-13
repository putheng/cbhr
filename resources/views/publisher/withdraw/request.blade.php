@extends('layouts.publisher')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>Withdraw Request</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
    			<div class="row wrapper text-center">
    				<div class="col-xs-6 col-md-6 b-r b-light">
    					<span class="h3 text-danger font-bold m-t m-b-xs block">
    						${{ number_format(auth()->user()->usd, 3) }}
    					</span>
    					<small class="h5 text-muted m-b help-block">
    					    Available Earnings
    					</small>
    				</div>
    				<div class="col-xs-6 col-md-6 b-r b-light">
    					<span class="h3 text-danger font-bold m-t m-b-xs block">
    						$0.00
    					</span>
    					<small class="h5 text-muted m-b help-block">
    					    Last Pay Period
    					</small>
    					
    				</div>
    			</div>
    			<br>
    			<p class="small">Your earnings will be automatically paid everyday of each week but only if your earnings have reached a total of $1.00 or more for the previous day(s).<br> 
    			Please note,
    			</p>
    			<ul>
    			    <li><small>Payments Transfer (Wing, TrueMoney, SmartLuy, EMoney) currently has a minimum withdrawal of $5</small></li>
    			    <li><small>Cellular Companies (mobile top up) currently has a minimum withdrawal of $1</small></li>
    			</ul>
    			<p class="small">In order to receive the payment you must fill up all the required fields in the settings section.</p>
			    <br>

                <div class="row text-center padder-v m-b-xl b-t b-b b-light bg-light lter pull-in">
                	<div class="col-md-4">
                		<span class="h4 font-bold m-t-xs m-b-xs block">Notification Phone</span>
                		<small class="h5 t-success m-b-xs block">
                			<i class="fa fa-check"></i> 
                	    </small>
                	</div>
                	<div class="col-md-4">
                		<span class="h4 font-bold m-t-xs m-b-xs block">Withdraw Phone</span>
                		<small class="h5 t-success m-b-xs block">
                			<i class="fa fa-check"></i> 
                	    </small>
                	</div>
                	<div class="col-md-4">
                		<span class="h4 font-bold m-t-xs m-b-xs block">Next Payment Date</span>
                		<small class="h5 t-success m-b-xs block text-center">
                		    {{ date_tomorrow() }}
                		</small>
                	</div>
                </div>
                <br>
                <h4 class="font-thin">Payments Transfer</h4>
                <div class="line line-dashed line-lg pull-in"></div>
                <br>
				<publisher-payment-request balance="{{ auth()->user()->usd < 1 ? 'You don\'t have enought balance for withdraw' : '' }}" endpoin="{{ route('publisher.withdraw.index') }}" phone="{{ auth()->user()->password }}"></publisher-payment-request>
                
			</div>
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')

	<script type="text/javascript">
	
		$('#modal-withdraw').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget)
			var recipient = button.data('whatever')
			var type = button.data('type')
			
			var modal = $(this)
			
			$('.pay-response').html('');
			modal.find('.modal-title').text(recipient)
			//modal.find('#payProcessor').val(type)
		})
	</script>

@endsection