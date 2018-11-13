@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			<h3>List of the jobseekers applied for your jobs</h3>
			
			<div class="well1 white">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>DATE</th>
							<th>NAME</th>
							<th>POSITION</th>
							<th class="text-center">ACTION</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center" colspan="5">
								<span>You don't have any application.</span>
							</td>
						</tr>
						<tr>
							<td>2018/Jan/03</td>
							<td>Wing</td>
							<td><strong>$100</strong></td>
							<td class="text-center">
								<a href="#" class="h6 text-uppercase">Reject</a>&nbsp;&nbsp;
								<a href="#" class="h6 text-uppercase">Approved</a>&nbsp;&nbsp;
								<a href="#" class="h6 text-uppercase">View</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection