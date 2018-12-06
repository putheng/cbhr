@extends('jobseekers.index')
@section('title')
	<title>Messages | Job seeker dashboard</title>
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
			<h3>
				Message Box
			</h3>
			<br>
			<div style="float:right;position:relative;top:-5px">
				<form action="index.php" method="post">
					Search in: 
					<select name="comboSearch" class="table-combo-search">
						<option value="date">Date</option>
						<option value="user_from">From</option>
						<option value="subject">Subject</option>
						<option value="message">Message</option>
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
								<td width="40">
									<input type="checkbox" title="Delete All" onclick="CheckAll(this)">
								</td>
								<td width="14" nowrap="">
									Reply
								</td>
								<td width="14" nowrap="">
									<a class="header-td underline-link" href="">
									Date
									</a>
								</td>
								<td width="14" nowrap="">
									<a class="header-td underline-link" href="i">
									From
									</a>
								</td>
								<td width="14" nowrap="">
									<a class="header-td underline-link" href="">
									Subject
									</a>
								</td>
								<td width="14" nowrap="">
									<a class="header-td underline-link" href="">
									Message
									</a>
								</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td nowrap=""><input title="Delete" type="checkbox" name="CheckList[]" value="4"></td>
								<td width="20"><a href="{{ route('seeker.messages.reply') }}"><img src="{{ asset('images/edit-icon.gif') }}" border="0"></a></td>
								<td>22/06/15 6:16</td>
								<td>employer@employer.com</td>
								<td>fdsfg</td>
								<td>dsfgsdfg</td>
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
	function SubmitForm(){
		document.getElementById('table-form').submit();
	}
	function CheckAll(source) {
		checkboxes = document.getElementsByName('CheckList[]');
			for(var i=0, n=checkboxes.length;i<n;i++) {
			checkboxes[i].checked = source.checked;
		}
	}
</script>
@endsection