<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading gray-gradient">
				<i class="fa fa-briefcase fa-fw"></i> 
				Latest Employers	
			</div>
			<!-- /.panel-heading -->
			<div style="padding:10px" class="btn-block">
				<div class="xpanel-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Date</th>
									<th>Company</th>
									<th>Contact Person</th>
									<th>Address</th>
									<th>Phone</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
							    @foreach($companies as $company)
    								<tr>
    									<td>{{ $company->created_at->diffForHumans() }}</td>
    									<td>{{ $company->name }}</td>
    									<td>{{ $company->user->name }}</td>
    									<td>{{ $company->address }}</td>
    									<td>{{ $company->phone }}</td>
    									<td>{{ $company->user->email }}</td>
    								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<a href="{{ route('admin.employer.index') }}" class="btn btn-default btn-block">View All</a>
			</div>
		</div>
	</div>
</div>