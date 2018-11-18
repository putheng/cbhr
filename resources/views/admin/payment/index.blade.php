@extends('admin.index')

@section('content')

<div class="fright">
	<a class="small-tile green-back" href="">
		<img class="hide-sm pull-right" width="32" src="/images/icons/add.png">
		<h3 class="h3-tile">Transfer</h3>
	</a>
</div>
<div class="clear"></div>
<h3>Transactions</h3>
<div style="float:right">
	<form action="" method="post">
		Search in
		<select name="comboSearch" class="table-combo-search">
			<option value="date">Date</option>
			<option value="title">Title</option>
			<option value="employer">EMPLOYER</option>
		</select>
		<input class="table-search-field" value="" type="text" name="textSearch"> 
		<input type="submit" class="btn btn-default btn-gradient" value=" Search ">
	</form>
</div>
<div class="clear"></div>

<form action="index.php" id="table-form" method="post" enctype="multipart/form-data">
	<input type="hidden" name="FormSubmitted" value="1"><input type="hidden" name="category" value="jobs"><input type="hidden" name="action" value="list">
	<div class="table-responsive">
		<table cellpadding="3" class="table table-bordered" cellspacing="0" width="100%" 
			style="border-color:#eeeeee; border-width:1px 1px 1px 1px; border-style:solid">
			<tbody>
				<tr class="table-tr" nowrap="">
					<td width="40" class="header-td">
						ID
					</td>
					<td class="header-td">
						<a class="header-td underline-link" href="#">
						    Employer Name
						</a>
					</td>
					<td class="header-td">
						Amount
					</td>
					<td class="header-td">
						Transaction
					</td>
					<td class="header-td">
						Date
					</td>
					<td class="header-td">
						Processor
					</td>
					<td class="header-td">
						Status
					</td>
					<td class="header-td text-center">
						Action
					</td>
				</tr>
				@foreach($deposits as $deposit)
					<tr>
						<td>
							{{ $deposit->id }}
							<form action="{{ route('admin.payment.deposit.approve', $deposit) }}" method="POST"></form>
							<form id="form-id-{{ $deposit->id }}" action="{{ route('admin.payment.deposit.approve', $deposit) }}" method="POST">
								{{ csrf_field() }}
							</form>
							<form id="reject-id-{{ $deposit->id }}" 
								action="{{ route('admin.payment.deposit.cancel', $deposit) }}"
								 method="POST">
								 <input name="comment" type="hidden" id="comment-id-{{ $deposit->id }}">
								{{ csrf_field() }}
							</form>
						</td>
						<td>{{ $deposit->user->company->name }}</td>
						<td>${{ number_format($deposit->amount, 2) }}</td>
						<td>{{ $deposit->transaction }}</td>
						<td>{{ $deposit->created_at }}</td>
						<td>{{ $deposit->processor->name }}</td>
						<td>{{ $deposit->status }}</td>
						<td class="text-center">
						@if($deposit->status == 'complete' || $deposit->status == 'pending')
							<div class="btn-group">
								<button type="button" class="btn btn-danger btn-sm">
									<small>Cancel</small>
								</button>
								<button style="padding: 10.3px 6px;" type="button" class="btn btn-danger dropdown-toggle" 
										data-toggle="dropdown" aria-haspopup="true" 
										aria-expanded="false">
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<a href="#" onclick="formReject('{{ $deposit->id }}', 'Incurrect transaction code')">
											Incurrect transaction code
										</a>
									</li>
									<li>
										<a href="#" onclick="formReject('{{ $deposit->id }}', 'Wrong reception number')">Wrong reception number</a>
									</li>
									<li>
										<a href="#" onclick="formReject('{{ $deposit->id }}', 'Already withdrawn')">
											Already withdrawn
										</a>
									</li>
								</ul>
							</div>
						@endif

						@if($deposit->status == 'cancel' || $deposit->status == 'pending')
							<button onclick="formSubmit('{{ $deposit->id }}')" class="btn btn-primary btn-sm"><small>Approve</small></button>
						@endif
						</td>
					</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
	<br>
</form>
<div class="clearfix"></div>
{{ $deposits->links() }}
<br><br>
@endsection
@section('script')
<script type="text/javascript">
	function formSubmit(id)
	{
		event.preventDefault();
		if(confirm('Are you sure you confirm this payment ?')){
			document.getElementById('form-id-'+ id).submit();
		}
	}

	function formReject(id, text)
	{
		if(confirm('Are you sure you reject this payment ?')){
			$('#comment-id-'+ id).val(text);
			document.getElementById('reject-id-'+ id).submit();
		}
	}
</script>
@endsection