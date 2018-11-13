@extends('admin.index')

@section('content')
@include ('layouts.partials.alert')
<!--main content area-->
<div class="fright">
	<a class="small-tile blue-back" href="index.php?category=home&amp;action=connections">
		<img class="hide-sm pull-right" width="32" src="/images/icons/default.png">
		<h3 class="h3-tile">Login Report</h3>
	</a>
	<a class="small-tile yellow-back" href="index.php?category=security&amp;action=admin">
		<img class="hide-sm pull-right" width="32" src="/images/icons/default.png">
		<h3 class="h3-tile">Users</h3>
	</a>
</div>
<div class="clear"></div>
<span class="medium-font">Change your password</span>
<br><br><br>
<form action="{{ route('admin.account.password') }}" method="post">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
	<table summary="" border="0">
		<tbody>
			<tr>
				<td>Current password:</td>
				<td>
				    <input class="{{ $errors->has('password_current') ? 'bdr' : '' }}" type="password" name="password_current" size="30">
				    @if ($errors->has('password_current'))
                        <span class="text-danger">{{ $errors->first('password_current') }}</span>
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
				    <input class="{{ $errors->has('password') ? 'bdr' : '' }}" type="password" name="password" size="30">
				    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
				</td>
			</tr>
			<tr>
				<td>Confirm the new password: </td>
				<td>
				    <input class="{{ $errors->has('password_confirmation') ? 'bdr' : '' }}" type="password" name="password_confirmation" size="30">
				    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
				</td>
			</tr>
		</tbody>
	</table>
	<br><br>
	<input type="submit" value=" Update password " class="btn btn-primary min-width-100">
</form>
<!--end main content area-->


@endsection