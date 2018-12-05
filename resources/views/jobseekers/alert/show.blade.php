@extends('jobseekers.index')
@section('title')
	<title>Listings alert | Job Seeker</title>
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
				<a class="small-tile green-back" href="">
					<img class="pull-right" width="32" src="{{ asset('images/icons/add.png') }}">
					<h3 class="h3-tile">Add a New Rule</h3>
				</a>
			</div>
			<div class="clear"></div>
			<h3>
				Manage your email alerts
			</h3>
			<br>
			<i>
			You may see below the list of the rules defined  by you  (an email message will be sent when a job ad corresponding to your criteria is added)</i>	
			<div class="clearfix"></div>
			<br><br>
			<div style="float:right;position:relative;top:-5px">
				<form action="index.php" method="post">
					<input type="hidden" name="category" value="jobmail"><input type="hidden" name="action" value="rules">
					Search in: 
					<select name="comboSearch" class="table-combo-search">
						<option value="rule">Containing word</option>
					</select>
					<input class="table-search-field" value="" type="text" required="" name="textSearch"> 
					<input type="submit" class="btn btn-default extra-padding-left-right" value=" Search " style="position:relative;top:-2px">
				</form>
			</div>
			<div class="clear"></div>
			<form action="index.php" id="table-form" method="post" enctype="multipart/form-data">
				<input type="hidden" name="FormSubmitted" value="1"><input type="hidden" name="category" value="jobmail"><input type="hidden" name="action" value="rules">
				<div class="table-responsive">
					<table cellpadding="3" cellspacing="0" class="table table-striped table-fw-widget">
						<thead>
							<tr class="table-tr" nowrap="">
								<td width="40">
									<input type="checkbox" title="Delete All" onclick="CheckAll(this)">
								</td>
								<td width="157" nowrap="">
									<a class="header-td underline-link" href="index.php?category=jobmail&amp;action=rules&amp;order=rule&amp;order_type=desc">
									Containing word
									</a>
								</td>
								<td width="157" nowrap="">
									Category
								</td>
								<td width="157" nowrap="">
									Location
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td nowrap=""><input title="Delete" type="checkbox" name="CheckList[]" value="2"></td>
								<td>anton</td>
								<td>Direct Sales</td>
								<td>Liechtenstein</td>
							</tr>
						</tbody>
					</table>
				</div>
				<input type="hidden" name="Delete" value="1">
				<input type="submit" value=" Delete " class="btn btn-primary extra-padding-left-right pull-right">
			</form>
		</div>
	</div>
</div>
@endsection
@section('script')
	<script>
		function SubmitForm()
		{
			document.getElementById('table-form').submit();
		}
	</script>
	<script>
		function CheckAll(source) 
		{
		  checkboxes = document.getElementsByName('CheckList[]');
		  for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
			}
		}
	</script>
@endsection