@extends('admin.index')

@section('content')

<div class="fright">
	<a class="small-tile green-back" href="">
		<img class="hide-sm pull-right" width="32" src="{{ asset('images/icons/default.png') }}">
		<h3 class="h3-tile">Add a new employer</h3>
	</a>
</div>
<div class="clear"></div>
<h3>Manage the registered publishers</h3>
<br>
<div style="float:right">
	<form action="index.php" method="post">
		Search in 
		<select name="comboSearch" class="table-combo-search">
			<option value="id">id</option>
			<option value="name">Name</option>
			<option value="fbid">Facebook id</option>
			<option value="phone">Phone</option>
		</select>
		<input class="table-search-field" value="" type="text" required="" name="textSearch"> 
		<input type="submit" class="btn btn-default btn-gradient" value=" Search ">
	</form>
</div>
<div class="clear"></div>
<form action="index.php" id="table-form" method="post" enctype="multipart/form-data">
	<div class="table-responsive">
		<table cellpadding="3" cellspacing="0" width="100%" style="border-color:#eeeeee;border-width:1px 1px 1px 1px;border-style:solid">
			<tbody>
				<tr class="table-tr" nowrap="">
					<td class="header-td">id</td>
					<td class="header-td">Name</td>
					<td class="header-td">Facebook ID</td>
					<td class="header-td">Balance</td>
					<td class="header-td">Phone</td>
					<td class="header-td">Active</td>
				</tr>
				@foreach($users as $user)
    				<tr height="30">
    					<td>{{ $user->id }}</td>
    					<td>{{ $user->name }}</td>
    					<td>{{ $user->email }}</td>
    					<td>{{ number_format($user->usd, 2) }}</td>
    					<td>{{ $user->publisher->phone }}</td>
    					<td>
    					    <a href="">
    					        <img border="0" src="{{ asset('images/active_1.gif') }}">
    					    </a>
    				    </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<br>
</form>

@endsection