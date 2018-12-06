@extends('jobseekers.index')
@section('title')
	<title>Reply messages | Job seeker dashboard</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<div class="fright">
				<a class="small-tile blue-back" href="{{ route('seeker.messages.index') }}">
					<img class="pull-right" width="32" src="{{ asset('images/icons/back.png') }}">
					<h3 class="h3-tile">Go Back</h3>
				</a>
			</div>
			<div class="clear"></div>
			<h3>Reply to this message</h3>
			<br>
			<form id="add-form" action="index.php" method="post" enctype="multipart/form-data">
				<table>
					<tbody>
						<tr height="42">
							<td valign="top" width="80">
								Subject:
							</td>
							<td valign="top"><input type="text" id="subject" name="subject" size="50"></td>
						</tr>
						<tr height="42">
							<td valign="top" width="80">
								Message:
							</td>
							<td valign="top"><input type="hidden" id="post_message" name="post_message">
								<textarea id="message" name="message" cols="49" rows="6"></textarea>
							</td>
						</tr>
					</tbody>
				</table>
				<input id="submit-button" type="submit" value="Send" class="btn btn-primary">
			<br><br>
			</form>
			<br>
		</div>
	</div>
</div>
@endsection