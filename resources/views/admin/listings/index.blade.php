@extends('admin.index')

@section('content')

<div class="fright">
	<a class="small-tile green-back" href="index.php?category=jobs&amp;action=add">
		<img class="hide-sm pull-right" width="32" src="/images/icons/add.png">
		<h3 class="h3-tile">New Job Ad</h3>
	</a>
</div>
<div class="clear"></div>
<h3>Manage the job ads ({{ $listings->total() }})</h3>
<div style="float:right">
	<form action="index.php" method="post">
		<input type="hidden" name="category" value="jobs"><input type="hidden" name="action" value="list">
		Search in 
		<select name="comboSearch" class="table-combo-search">
			<option value="date">Date</option>
			<option value="title">Title</option>
			<option value="employer">EMPLOYER</option>
		</select>
		<input class="table-search-field" value="" type="text" required="" name="textSearch"> 
		<input type="submit" class="btn btn-default btn-gradient" value=" Search ">
	</form>
</div>
<div class="clear"></div>

<form action="index.php" id="table-form" method="post" enctype="multipart/form-data">
	<input type="hidden" name="FormSubmitted" value="1"><input type="hidden" name="category" value="jobs"><input type="hidden" name="action" value="list">
	<div class="table-responsive">
		<table cellpadding="3" cellspacing="0" width="100%" style="border-color:#eeeeee;border-width:1px 1px 1px 1px;border-style:solid">
			<tbody>
				<tr class="table-tr" nowrap="">
					<td width="40" class="header-td">
						ID
					</td>
					<td class="header-td" width="100" nowrap="">
						<a class="header-td underline-link" href="#">
						    Created Date
						</a>
					</td>
					<td class="header-td" width="100" nowrap="">
						<a class="header-td underline-link" href="#">
						    Expires
						</a>
					</td>
					<td class="header-td" width="-600" nowrap="">
						Title
					</td>
					<td class="header-td" width="120" nowrap="">
						Category
					</td>
					<td class="header-td" width="200" nowrap="">
						EMPLOYER
					</td>
					<td class="header-td" width="40" nowrap="">
						Active
					</td>
				</tr>
				@foreach($listings as $listing)
    				<tr height="30">
    				    <td nowrap="">
    					    {{ $listing->id }}
    				    </td>
    					<td class="oMain">{{ $listing->created_at->diffForHumans() }}</td>
    					<td class="oMain">{{ $listing->expires_at }}</td>
    					<td>
    					    <a href="{{ route('listing.show', $listing) }}" target="_blank">{{ $listing->title }}</a>
    					</td>
    					<td>{{ $listing->category->name }}</td>
    					<td>
    					    <a href="{{ route('company.show', $listing->company) }}" target="_blank">
    					        {{ $listing->company->name }}
    					    </a>
    				    </td>
    					<td>
    					    <a href="">
    					        <img border="0" src="{{ asset('/images/active_1.gif') }}">
    					    </a>
    				    </td>
    				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<br>
</form>
<div class="clearfix"></div>
{{ $listings->links() }}
<br><br>
<!--
	<i>Note: The expired job ads are colored in dark gray</i>
		-->


@endsection