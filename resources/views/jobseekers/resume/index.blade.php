@extends('jobseekers.index')
@section('title')
	<title>My resume | Job seeker dashboard</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<div class="fright">
				<a class="small-tile blue-back" href="">
					<img class="pull-right" width="32" src="{{ asset('images/icons/welcome.png') }}">
					<h3 class="h3-tile">Dashboard</h3>
				</a>
			</div>
			<div class="clear"></div>
			<h3>
				Your resume
			</h3>
			<br>
			<div class="clear"></div>
			<form action="" id="table-form" method="post" enctype="multipart/form-data">
				<div class="table-responsive">
					<table cellpadding="3" cellspacing="0" class="table table-striped table-fw-widget">
						<thead>
							<tr class="table-tr" nowrap="">
								<td width="70" nowrap="">
									<a class="header-td underline-link" href="">
										Name
									</a>
								</td>
								<td width="140" nowrap="">
									Salary
								</td>
								<td width="330" nowrap="">
									Last Update
								</td>
								<td width="80" nowrap="">
									Action
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