@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		
		<div class="xs">
			<h3>Publish Listings</h3>
			<div class="well1 white">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Location</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>
								<a target="_blank" href="#">Web Developer</a>
							</td>
							<td>Phnom Penh</td>
							<td class="text-center">
								<ul class="list-inline no-margin">
									<li><a href="">Edit</a></li>
									<li><a href="">Delete</a></li>
								</ul>
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