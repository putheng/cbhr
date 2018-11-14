@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		
		<div class="xs">
			<h3>Manage Advertiser Wallet</h3>
			<p class="text-justify">
				<small>
				<span class="text-info">
					The Advertiser's Wallet allows you to make a larger deposit to your CambodiaHR account and use these funds to purchase multiple packages.
					You can also transfer funds from previous package back to your wallet balance ready to fund a different package. 
					It gives you complete control over the money in your CambodiaHR advertising account and is ideal for testing many small packages. 
				</span>
				</small>
			</p>
				<br/>
			<div class="well1 white">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>DATE</th>
							<th>PSP</th>
							<th>AMOUNT</th>
							<th>CODE</th>
							<th>STATUS</th>
						</tr>
					</thead>
					<tbody>
					@if($deposits->count())
						@foreach($deposits as $deposit)
							<tr>
								<td>{{ $deposit->created_at->format('l jS \\of F Y h:i:s A') }}</td>
								<td>{{ $deposit->processor->name }}</td>
								<td>${{ number_format($deposit->amount, 2) }}</td>
								<td style="letter-spacing: 2px;">{{ $deposit->transaction }}</td>
								<td>{{ $deposit->status }}</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td class="text-center" colspan="5">
								<span>You don't have any deposit yet.</span> <a href="#" class="text-success">Make a deposit</a>
							</td>
						</tr>
					@endif
					</tbody>
				</table>
			</div>
		</div>

		
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection