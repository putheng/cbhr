<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="white-link fa fa-list-alt fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">7</div>
						<div>Jobs</div>
					</div>
				</div>
			</div>
			<a href="#jobs-list">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-users fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">2</div>
						<div>Jobseekers</div>
					</div>
				</div>
			</div>
			<a href="#users-jobseekers">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-institution fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">6</div>
						<div>Employers</div>
					</div>
				</div>
			</div>
			<a href="#users-employers">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-bar-chart-o fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">0</div>
						<div>Job Applications</div>
					</div>
				</div>
			</div>
			<a href="#jobs-applications">
				<div class="panel-footer gray-gradient">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div>
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
									<th>Website</th>
								</tr>
							</thead>
							<tbody>
								<tr onclick="document.location.href='index.php?category=users&folder=employers&page=edit&id=8'" style="cursor: pointer">
									<td>3 years ago</td>
									<td>Test Company</td>
									<td>John Smith</td>
									<td>Amman</td>
									<td>555-908-1234</td>
									<td>www.google.com</td>
								</tr>
								<tr onclick="document.location.href='index.php?category=users&folder=employers&page=edit&id=7'" style="cursor: pointer">
									<td>3 years ago</td>
									<td>Hewlett-Packard</td>
									<td>Test</td>
									<td>Palo Alto, California, United States</td>
									<td>650-231-8943</td>
									<td>www.hp.com</td>
								</tr>
								<tr onclick="document.location.href='index.php?category=users&folder=employers&page=edit&id=6'" style="cursor: pointer">
									<td>3 years ago</td>
									<td>Dell Inc</td>
									<td>Test</td>
									<td> Round Rock, TX, United States of America</td>
									<td>800-723-7843</td>
									<td>www.dell.com</td>
								</tr>
								<tr onclick="document.location.href='index.php?category=users&folder=employers&page=edit&id=5'" style="cursor: pointer">
									<td>3 years ago</td>
									<td>Amazon.com Inc.</td>
									<td>Test</td>
									<td>1200 12th Ave. South, Ste. 1200. Seattle, WA</td>
									<td>1-800-456-7123</td>
									<td>www.amazon.com</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<a href="#users-employers" class="btn btn-default btn-block">View All</a>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading gray-gradient">
				<i class="fa fa-bar-chart-o"></i> 
				Job Statistics	
			</div>
			<div class="panel-body">
				<br/>
				<div class="flot-chart">
					<div class="flot-chart-content" id="flot-bar-chart"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading gray-gradient">
				<i class="fa fa-calendar fa-fw"></i> Latest Jobs			
			</div>
			<div class="panel-body">
				<div class="list-group">
					<a href="index.php?category=jobs&action=list_edit&id=33" class="list-group-item">
						<i class="fa fa-list-alt"></i>
						Data Center Manager						
						<span class="pull-right text-muted small"><em>3 years ago</em>
						</span>
						<div class="clearfix"></div>
					</a>
					<a href="index.php?category=jobs&action=list_edit&id=32" class="list-group-item">
						<i class="fa fa-list-alt"></i>
						Claims Data Entry Clerk						
						<span class="pull-right text-muted small"><em>3 years ago</em>
						</span>
						<div class="clearfix"></div>
					</a>
					<a href="index.php?category=jobs&action=list_edit&id=31" class="list-group-item">
						<i class="fa fa-list-alt"></i>
						Software Development Analyst						
						<span class="pull-right text-muted small"><em>3 years ago</em>
						</span>
						<div class="clearfix"></div>
					</a>
					<a href="index.php?category=jobs&action=list_edit&id=30" class="list-group-item">
						<i class="fa fa-list-alt"></i>
						Hardware Product Manager						
						<span class="pull-right text-muted small"><em>3 years ago</em>
						</span>
						<div class="clearfix"></div>
					</a>
					<a href="index.php?category=jobs&action=list_edit&id=29" class="list-group-item">
						<i class="fa fa-list-alt"></i>
						Client Technical Support Associate						
						<span class="pull-right text-muted small"><em>3 years ago</em>
						</span>
						<div class="clearfix"></div>
					</a>
					<a href="index.php?category=jobs&action=list_edit&id=28" class="list-group-item">
						<i class="fa fa-list-alt"></i>
						Administrative Analyst						
						<span class="pull-right text-muted small"><em>3 years ago</em>
						</span>
						<div class="clearfix"></div>
					</a>
					<a href="index.php?category=jobs&action=list_edit&id=27" class="list-group-item">
						<i class="fa fa-list-alt"></i>
						Public Cloud Senior Test Developer (Java/JavaEE)						
						<span class="pull-right text-muted small"><em>3 years ago</em>
						</span>
						<div class="clearfix"></div>
					</a>
				</div>
				<a href="#jobs-list" class="btn btn-default btn-block">View All</a>
			</div>
		</div>
	</div>
</div>