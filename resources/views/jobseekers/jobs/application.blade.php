@extends('jobseekers.index')
@section('title')
	<title>Application history | Job seeker dashboard</title>
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
			</div>
			<div class="clear"></div>
			<h3>Your job application history</h3>
			<br>
			<div style="float:right;position:relative;top:-5px">
				<form action="index.php" method="post">
					Search in: 
					<select name="comboSearch" class="table-combo-search">
						<option value="date">Date</option>
						<option value="employer_reply">Employer Reply</option>
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
								<td width="70" nowrap="">
									<a class="header-td underline-link" href="">
									Date
									</a>
								</td>
								<td width="140" nowrap="">
									Status
								</td>
								<td width="330" nowrap="">
									<a class="header-td underline-link" href="">
									Employer Reply
									</a>
								</td>
								<td width="80" nowrap="">
									Details
								</td>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
	function SubmitForm(){
		document.getElementById('table-form').submit();
	}

	function CheckAll(source){
	  checkboxes = document.getElementsByName('CheckList[]');
	  	for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		}
	}
</script>
@endsection