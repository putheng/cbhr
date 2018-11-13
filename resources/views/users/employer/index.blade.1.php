@extends('layouts.employer')

@section('content')
<div id="page-wrapper">
	<div class="col-md-12 graphs">
		<div class="xs">
			
			<div class="col_3">
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-thumbs-up icon-rounded"></i>
						<div class="stats">
						  <h5><strong>0</strong></h5>
						  <span>Listing view</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-users user1 icon-rounded"></i>
						<div class="stats">
						  <h5><strong>0</strong></h5>
						  <span>Application</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-comment user2 icon-rounded"></i>
						<div class="stats">
						  <h5><strong>{{ auth()->user()->listings->count() }}</strong></h5>
						  <span>Listing</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget">
					<div class="r3_counter_box">
						<i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
						<div class="stats">
						  <h5><strong>${{ number_format(auth()->user()->usd, 2) }}</strong></h5>
						  <span>Balance</span>
						</div>
					</div>
				 </div>
				<div class="clearfix"> </div>
			</div>
			

			<div class="col-md-8 span_3">
				<h4>Latest Listing</h4>
				<div class="bs-example1" data-example-id="contextual-table">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Category</th>
								<th>Location</th>
							</tr>
						</thead>
						<tbody>
							
							<tr class="active">
								<th scope="row">1</th>
								<td>Column content</td>
								<td>Column content</td>
								<td>Column content</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Column content</td>
								<td>Column content</td>
								<td>Column content</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
<div class="col-md-4 span_4">
	<div class="col_2 stats-info">
		<div class="panel-heading">
			<h4 class="panel-title">Browser Stats</h4>
		</div>
		<div class="panel-body">
			<ul class="list-unstyled">
				<li>
					Google Chrome
					<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div>
				</li>
				<li>
					Firefox
					<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div>
				</li>
				<li>
					Internet Explorer
					<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div>
				</li>
				<li>
					Safari
					<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div>
				</li>
				<li>
					Opera
					<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div>
				</li>
				<li>
					Mobile &amp; tablet
					<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div>
				</li>
				<li class="last">
					Others
					<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div>
				</li>
			</ul>
		</div>
		
	</div>
</div>
			
		</div>
		<!-- /Footer -->
		
		<!-- /End footer -->
	</div>
</div>
<!-- /#page-wrapper -->
@endsection