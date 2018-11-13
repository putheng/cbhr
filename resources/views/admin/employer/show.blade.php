@extends('admin.index')

@section('content')

<div class="fright">
	<a class="small-tile green-back" href="index.php?category=users&amp;action=new_employer">
		<img class="hide-sm pull-right" width="32" src="{{ asset('images/icons/default.png') }}">
		<h3 class="h3-tile">Add a new employer</h3>
	</a>
</div>
<div class="clear"></div>
<h3>Manage the registered employers</h3>
<br>
<div style="float:right">
	<form action="index.php" method="post">
		<input type="hidden" name="category" value="users"><input type="hidden" name="action" value="employers">
		Search in 
		<select name="comboSearch" class="table-combo-search">
			<option value="username">Email</option>
			<option value="company">Company</option>
			<option value="phone">Phone</option>
			<option value="date">Date</option>
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
					<td width="40" class="header-td">
						<input type="checkbox" title="Delete All" onclick="CheckAll(this)">
					</td>
					<td class="header-td" width="10">Modify</td>
					<td class="header-td" width="10">Name</td>
					<td class="header-td" width="10">Email</td>
					<td class="header-td" width="10">Company</td>
					<td class="header-td" width="10">Phone</td>
					<td class="header-td" width="10">Logo</td>
					<td class="header-td" width="10">Active</td>
				</tr>
				@foreach($users as $user)
    				<tr height="30">
    					<td nowrap="">
    					    <input title="Delete" type="checkbox" name="CheckList[]" value="7">
    					</td>
    					<td width="20">
    					    <a href="">
    					        <img src="{{ asset('images/edit-icon.gif') }}">
    					    </a>
    					</td>
    					<td>{{ $user->name }}</td>
    					<td>{{ $user->email }}</td>
    					<td>{{ $user->company->name }}</td>
    					<td>{{ $user->company->phone }}</td>
    					<td>
    					    <img height="22" src="{{ $user->company->avatarPath() }}">
    					</td>
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