@extends('layouts.publisher')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>Withdraw Transactions</h3>
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
    			<br><hr>
    	        <div class="table-responsive">
    	        	<table class="table table-striped">
    	        		<thead>
    	        			<th>ID</th>
    	        			<th>PSP</th>
    	        			<th>Amount</th>
    	        			<th>Date</th>
    	        			<th>Status</th>
    	        		</thead>
    	        		<tbody>
    	        			@if($withdraws->count())
    	        				@foreach($withdraws as $withdraw)
			    	        		<tr>
			    	        			<td>{{ $withdraw->id }}</td>
			    	        			<td>{{ $withdraw->processor }}</td>
			    	        			<td>{{ $withdraw->amounts }}</td>
			    	        			<td>{{ $withdraw->created }}</td>
			    	        			<td>{{ $withdraw->status }}</td>
			    	        		</tr>
		    	        		@endforeach
    	        			@else
    	        				<tr>
    	        					<td colspan="5" class="text-center">
    	        						You don't have any payment request yet.
    	        						<a href="{{ route('publisher.withdraw.index') }}">Request a payment</a>
    	        					</td>
    	        				</tr>
    	        			@endif
    	        		</tbody>
    	        	</table>
    	        </div>
    	        <br>
    			{{ $withdraws->links() }}
			</div>
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection

@section('script')


@endsection