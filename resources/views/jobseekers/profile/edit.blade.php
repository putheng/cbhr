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
				<a class="small-tile blue-back" href="{{ route('seeker.resume.index') }}">
					<img class="pull-right" width="32" src="{{ asset('images/icons/edit.png') }}">
					<h3 class="h3-tile">Modify your resume</h3>
				</a>
			</div>
			<div class="clear"></div>
			<h3>Edit Your Profile</h3>
			<br>
			<form action="{{ route('seeker.profile.edit') }}" method="post">
				{{ csrf_field() }}
				<table width="100%">
					<tbody>
						<tr height="38">
							<td valign="middle" width="170">
								Name:
							</td>
							<td valign="middle">
								<input {!! $errors->has('name') ? 'class="has-errorb"' : '' !!} type="text" value="{{ old('name') ? old('name') : $user->name }}" name="name" size="50" style="width:390px">
							</td>
						</tr>

						<tr height="38">
							<td valign="middle" width="170">
								Address:
							</td>
							<td valign="middle">
								<input type="hidden" id="post_address" name="address">
								<textarea {!! $errors->has('address') ? 'class="has-errorb"' : '' !!} name="address" cols="49" rows="4" style="width:390px">{{ old('address') ? old('address') : $user->seeker->address }}</textarea>
							</td>
						</tr>

						<tr height="38">
							<td valign="middle" width="170">
								Phone:
							</td>
							<td valign="middle">
								<input {!! $errors->has('phone') ? 'class="has-errorb"' : '' !!} type="text" value="{{ old('phone') ? old('phone') : $user->seeker->phone }}" name="phone" size="50" style="width:390px">
						</td>

						<tr height="38">
							<td valign="middle" width="170">
								Email:
							</td>
							<td valign="middle">
								<input {!! $errors->has('email') ? 'class="has-errorb"' : '' !!} type="text" value="{{ old('email') ? old('email') : $user->email }}" name="email" size="50" style="width:390px">
						</td>
						</tr>

						<tr height="38">
							<td valign="middle" width="170">
								Birthday
							</td>
							<td valign="middle">
								<input {!! $errors->has('birthday') ? 'class="has-errorb"' : '' !!} type="date" value="{{ old('birthday') ? old('birthday') : $user->seeker->birthday }}" name="birthday" size="50" style="width:390px">
							</td>
						</tr>

						<tr height="38">
							<td valign="middle" width="170">
								Gender:
							</td>
							<td valign="middle">
								<select style="width:390px" name="gender" {!! $errors->has('gender') ? 'class="has-errorb"' : '' !!}>
									<option value="1" {{ $user->seeker->gender == '1' ? 'selected' : '' }}>Male</option>
									<option value="2" {{ $user->seeker->gender == '2' ? 'selected' : '' }}>Female</option>
								</select>
							</td>
						</tr>

						<tr height="38">
							<td valign="middle" width="170">
								Picture:
							</td>
							<td valign="middle">
								<avatar-upload endpoint="{{ route('account.store.avatar') }}" send-as="image" current-avatar="{{ Auth::user()->avatarPath() }}"></avatar-upload>
							</td>
						</tr>
						<tr height="38">
							<td valign="middle" width="170">
								Subscribe for newsletter:
							</td>
							<td valign="middle">
								<select style="width:390px" name="newsletter">
									<option value="1" {{ $user->seeker->newsletter == 1 ? 'selected' : '' }}>Yes</option>
									<option value="0" {{ $user->seeker->newsletter == 0 ? 'selected' : '' }}>No</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<input class="btn btn-primary" type="submit" value=" Save ">
				
			</form>
			<br>
			<div class="clearfix"></div>
			<br><br><br><br>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/app.js?v=9') }}"></script>
<script>
function DeleteAccount(){
	if(confirm("Are you sure you would like to delete your account and all information associated with it?"))
	document.location.href='index.php?category=profile&action=edit&delete_account=1';
}
</script>
@endsection