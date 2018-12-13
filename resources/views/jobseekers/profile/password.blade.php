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
			<form action="{{ route('seeker.profile.password') }}" method="post">
				{{ csrf_field() }}
				<table summary="" border="0">
					<tbody>
						<tr>
							<td>Current password:</td>
							<td>
								<input {!! $errors->has('password_current') ? 'class="has-errorb"' : '' !!} type="password" name="password_current" size="40">
								@if ($errors->has('password_current'))
			                        <p class="text-danger">
			                            <strong>{{ $errors->first('password_current') }}</strong>
			                        </p>
			                    @endif
							</td>
						</tr>
						<tr height="30">
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>New password:</td>
							<td>
								<input {!! $errors->has('password') ? 'class="has-errorb"' : '' !!} type="password" name="password" size="40">
								@if ($errors->has('password'))
			                        <p class="text-danger">
			                            <strong>{{ $errors->first('password') }}</strong>
			                        </p>
			                    @endif
							</td>
						</tr>
						<tr>
							<td>Confirm the new password: </td>
							<td>
								<input {!! $errors->has('password_confirmation') ? 'class="has-errorb"' : '' !!} type="password" name="password_confirmation" size="40">
								@if ($errors->has('password_confirmation'))
			                        <p class="text-danger">
			                            <strong>{{ $errors->first('password_confirmation') }}</strong>
			                        </p>
			                    @endif
							</td>
						</tr>
					</tbody>
				</table>
				<br><br>
				<input class="btn btn-primary" type="submit" value="Change password">
			</form>
		</div>
	</div>
</div>
@endsection