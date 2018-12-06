@extends('jobseekers.index')
@section('title')
	<title>Change password | Job seeker dashboard</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<div class="fright">
				<a class="small-tile blue-back" href="{{ route('seeker.profile.edit') }}">
					<img class="pull-right" width="32" src="{{ asset('images/icons/edit.png') }}">
					<h3 class="h3-tile">Edit Profile</h3>
				</a>
			</div>
			<div class="clear"></div>
			<h3>
				Change your password
			</h3>
			<br>
			<form action="index.php" method="post">
				<table summary="" border="0">
					<tbody>
						<tr>
							<td>Current password:</td>
							<td><input type="password" name="oldpassword" size="40"></td>
						</tr>
						<tr height="30">
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>New password:</td>
							<td><input type="password" name="newpassword1" size="40"></td>
						</tr>
						<tr>
							<td>Confirm the new password: </td>
							<td><input type="password" name="newpassword2" size="40"></td>
						</tr>
					</tbody>
				</table>
				<br><br>
				<input class="btn btn-primary" type="submit" value=" Save ">
			</form>
		</div>
	</div>
</div>
@endsection