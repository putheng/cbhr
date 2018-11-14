@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">

		<div class="xs">
			<h3>Payment Transactions</h3>
			@include ('users.employer.listing.partials.alert')
			<div class="well1 white">
				<p class="text-right">
					<a href="{{ route('employer.payment.deposit') }}">Make a deposit</a>
				</p>
				<br>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>DATE</th>
							<th>PSP</th>
							<th>AMOUNT</th>
							<th>TRANSACTION</th>
							<th>STATUS</th>
						</tr>
					</thead>
					<tbody>
						@if($transactions->count())
							@foreach($transactions as $transaction)
								<tr>
									<td>{{ $transaction->created_at->format('l jS \\of F Y h:i:s A') }}</td>
									<td>{{ $transaction->process }}</td>
									<td>${{ number_format($transaction->amount, 2) }}</td>
									<td style="letter-spacing: 2px;">{{ $transaction->transaction }}</td>
									<td>{{ $transaction->status }}</td>
								</tr>
							@endforeach
						@else
							<tr>
								<td class="text-center" colspan="6">
									<span>You don't have any transaction yet.</span> <a href="{{ route('employer.payment.deposit') }}" class="text-success">Make a deposit</a>
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