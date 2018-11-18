@extends('admin.index')

@section('content')

<div class="fright">
	<a class="small-tile green-back" href="">
		<img class="hide-sm pull-right" width="32" src="/images/icons/add.png">
		<h3 class="h3-tile">Transfer</h3>
	</a>
</div>
<div class="clear"></div>
<h3>Withdraw request</h3>
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
						    Username
						</a>
					</td>
					<td class="header-td">
						Amount
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
				@foreach($withdraws as $withdraw)
					<tr>
						<td>
							{{ $withdraw->id }}
							<form action="{{ route('admin.publisher.withdraw.approve', $withdraw) }}" method="POST"></form>
							<form id="form-id-{{ $withdraw->id }}" action="{{ route('admin.publisher.withdraw.approve', $withdraw) }}" method="POST">
								{{ csrf_field() }}
							</form>
							<form id="reject-id-{{ $withdraw->id }}" 
								action="{{ route('admin.publisher.withdraw.cancel', $withdraw) }}"
								 method="POST">
								 <input name="comment" type="hidden" id="comment-id-{{ $withdraw->id }}">
								{{ csrf_field() }}
							</form>
						</td>
						<td>{{ $withdraw->user->name }}</td>
						<td>${{ number_format($withdraw->amount, 2) }}</td>
						<td>{{ $withdraw->created_at }}</td>
						<td>{{ $withdraw->processor}}</td>
						<td>{{ $withdraw->status }}</td>
						<td class="text-center">
						@if($withdraw->status == 'complete' || $withdraw->status == 'pending')
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
										<a href="#" onclick="formReject('{{ $withdraw->id }}', 'Incurrect transaction code')">
											Incurrect transaction code
										</a>
									</li>
									<li>
										<a href="#" onclick="formReject('{{ $withdraw->id }}', 'Wrong reception number')">Wrong reception number</a>
									</li>
									<li>
										<a href="#" onclick="formReject('{{ $withdraw->id }}', 'Already withdrawn')">
											Already withdrawn
										</a>
									</li>
								</ul>
							</div>
						@endif

						@if($withdraw->status == 'cancel' || $withdraw->status == 'pending')
							<button onclick="formSubmit('{{ $withdraw->id }}')" class="btn btn-primary btn-sm"><small>Approve</small></button>
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
{{ $withdraws->links() }}
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