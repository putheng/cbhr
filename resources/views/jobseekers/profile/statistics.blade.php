@extends('jobseekers.index')
@section('title')
	<title>Profile static | Job seeker dashboard</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<div class="fright">
				<a class="small-tile blue-back" href="{{ route('seeker.index') }}">
					<img class="pull-right" width="32" src="{{ asset('images/icons/welcome.png') }}">
					<h3 class="h3-tile">Dashboard</h3>
				</a>
				<a class="small-tile green-back" href="{{ route('seeker.profile.edit') }}">
					<img class="pull-right" width="32" src="{{ asset('images/icons/edit.png') }}">
					<h3 class="h3-tile">Edit Your Profile</h3>
				</a>
			</div>
			<div class="clear"></div>
			<style>
				.small-drop-down{
					width:100px !important;
				}
			</style>
			<br><br><br>
			Your profile has been displayed		<b>
			8		</b>times for the selected time period		<br><br>
			<br>
			<h4>Detailed report</h4>
			<br>
			<center>
				<div style="float:right;position:relative;top:-5px">
					<form action="index.php" method="post">
						<input type="hidden" name="category" value="profile"><input type="hidden" name="action" value="statistics">
						Search in: 
						<select name="comboSearch" class="table-combo-search">
							<option value="date">Date</option>
							<option value="ip">IP</option>
						</select>
						<input class="table-search-field" value="" type="text" required="" name="textSearch"> 
						<input type="submit" class="btn btn-default extra-padding-left-right" value=" Search " style="position:relative;top:-2px">
					</form>
				</div>
				<div class="clear"></div>
				
				<form action="index.php" id="table-form" method="post" enctype="multipart/form-data">
					<div class="table-responsive">
						<table cellpadding="3" cellspacing="0" class="table table-striped table-fw-widget">
							<thead>
								<tr class="table-tr" nowrap="">
									<td width="18" nowrap="">
										Company
									</td>
									<td width="18" nowrap="">
										<a class="header-td underline-link" href="">
										Date
										</a>
									</td>
									<td width="18" nowrap="">
										<a class="header-td underline-link" href="">
										IP
										</a>
									</td>
									<td width="18" nowrap="">
										Details
									</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Robert Walters</td>
									<td>02/10/18 5:01</td>
									<td>::1</td>
									<td><a target="_blank" href=""><img src="{{ asset('images/job-details.png') }}"></a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
			</center>
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
	function CheckAll(source) {
	  	checkboxes = document.getElementsByName('CheckList[]');
	  	for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		}
	}
	function SubmitForm(){
		document.getElementById('table-form').submit();
	}
</script>
@endsection