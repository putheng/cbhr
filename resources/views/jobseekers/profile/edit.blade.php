@extends('jobseekers.index')
@section('title')
	<title>Edit profile | Job seeker dashboard</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<div class="fright">
				<a class="small-tile blue-back" href="">
					<img class="pull-right" width="32" src="{{ asset('images/icons/edit.png') }}">
					<h3 class="h3-tile">Modify your resume</h3>
				</a>
			</div>
			<div class="clear"></div>
			<h3>Edit Your Profile</h3>
			<br>
			<table width="100%">
				<form id="EditForm" action="index.php" method="post" enctype="multipart/form-data"></form>
				<input type="hidden" name="category" value="profile"><input type="hidden" name="action" value="edit"><input type="hidden" name="id" value="1"><input type="hidden" name="SpecialProcessEditForm" value="1">
				<tbody>
					<tr height="38">
						<td valign="middle" width="170">
							Public Profile(*) :
						</td>
						<td valign="middle">
							<select style="width:390px" name="profile_public">
								<option value="1" selected="">Yes</option>
								<option value="0">No</option>
							</select>
						</td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							Title:
						</td>
						<td valign="middle">
							<select style="width:390px" name="title">
								<option selected="">Mr</option>
								<option>Mrs</option>
								<option>Miss</option>
							</select>
						</td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							First Name:
						</td>
						<td valign="middle"><input type="text" value="John" name="first_name" id="first_name" size="50" style="width:390px"></td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							Last Name:
						</td>
						<td valign="middle"><input type="text" value="Smith" name="last_name" id="last_name" size="50" style="width:390px"></td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							Address:
						</td>
						<td valign="middle">
							<input type="hidden" id="post_address" name="post_address">
							<textarea name="address" id="address" cols="49" rows="4" style="width:390px">what address</textarea>
						</td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							Phone:
						</td>
						<td valign="middle"><input type="text" value="1234567890" name="phone" id="phone" size="50" style="width:390px"></td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							Mobile:
						</td>
						<td valign="middle"><input type="text" value="1234567890" name="mobile" id="mobile" size="50" style="width:390px"></td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							D.O.B. (dd/mm/yyyy):
						</td>
						<td valign="middle"><input type="text" value="26/12/1986" name="dob" id="dob" size="50" style="width:390px"></td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							Gender:
						</td>
						<td valign="middle">
							<select style="width:390px" name="gender">
								<option value="">Please Select</option>
								<option value="1" selected="">Male</option>
								<option value="2">Female</option>
							</select>
						</td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							Picture:
						</td>
						<td valign="middle"><input style="width:390px" type="file" name="logo" id="logo"></td>
					</tr>
					<tr height="38">
						<td valign="middle" width="170">
							Subscribe for newsletter:
						</td>
						<td valign="middle">
							<select style="width:390px" name="newsletter">
								<option value="1" selected="">Yes</option>
								<option value="0">No</option>
							</select>
						</td>
					</tr>
					<tr height="38">
						<td valign="middle">When did you graduate?:</td>
						<td valign="middle">
							<select name="pfield0" style="width:390px !important">
								<option>Less than 3 years ago</option>
								<option>3-8 years ago</option>
							</select>
						</td>
					</tr>
				</tbody>
			</table>
			<br><input class="btn btn-primary" type="submit" value=" Save "><br>
			<br>
			<i>(*) Please note that if your profile is set to not public, it won't be available for the employers when they search the jobseeker database and resumes.</i>
			<div class="clearfix"></div>
			<br><br><br>
			<br>
			<a href="javascript:DeleteAccount()" class="btn btn-lg btn-danger white-font pull-right">Delete my user account</a>
			<br>
			<br>
		</div>
	</div>
</div>
@endsection

@section('script')
<script>
function DeleteAccount(){
	if(confirm("Are you sure you would like to delete your account and all information associated with it?"))
	document.location.href='index.php?category=profile&action=edit&delete_account=1';
}
</script>
@endsection