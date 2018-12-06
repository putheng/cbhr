@extends('jobseekers.index')
@section('title')
	<title>Create resume | Job seeker dashboard</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<div class="fright">
				<a class="small-tile red-back" href="{{ route('seeker.resume.index') }}">
					<img class="pull-right" width="32" src="{{ asset('images/icons/resume_creator.png') }}">
					<h3 class="h3-tile">Resume</h3>
				</a>
			</div>
			<div class="clear"></div>
			<br>
			<form action="index.php" method="post">
				<span style="font-size:14px;font-weight:400">
				<i><strong>Personal Information</strong></i>
				</span>
				<br><br><br>
				You can view or modify your personal information and personal picture from the						<a href="{{ route('seeker.profile.edit') }}">Profile-&gt;Modify</a> 
				page!
				<br><br><br>
				<span style="font-size:14px;font-weight:400">
				<i><strong>Work History</strong></i>
				</span>
				<br><br>
				<font size="1"><i>Includes full and part-time, temporary, volunteer, military, and internships. Please enter your duties, accomplishments, skills and abilities.
				You should start with your most recent work experience.
				and then include up to three past employers. </i></font>
				<br><br>
				<strong>Name of most recent business/employer</strong>
				<br>
				<input type="text" value="gsdfg" name="employer_name_1" style="width:350px">
				<br><br>
				<strong>Employer's address</strong>
				<br>
				<textarea name="employer_address_1" style="height:60px;width:350px">á, é, í, ó, ú, ü, ñ</textarea>
				<br><br>
				<strong>Dates started and ended (or present)</strong>
				<br>
				<input type="text" name="job_1_dates" value="" style="width:350px">
				<br><br>
				<strong>Your job title</strong>
				<br>
				<input type="text" name="job_1_title" value="" style="width:350px">
				<br><br>
				<strong>Your job duties</strong>
				<br>
				<textarea name="job_1_duties" style="height:60px;width:350px">á, é, í, ó, ú, ü, ñ</textarea>
				<br><br>
				<br><br>
				<strong>Name of previous business/employer</strong>
				<br>
				<input type="text" name="employer_name_2" value="á, é, í, ó, ú, ü, ñ" style="width:350px">
				<br><br>
				<strong>Employer's address</strong>
				<br>
				<textarea name="employer_address_2" style="height:60px;width:350px"></textarea>
				<br><br>
				<strong>Dates started and ended </strong>
				<br>
				<input type="text" name="job_2_dates" value="" style="width:350px">
				<br><br>
				<strong>Your job title</strong>
				<br>
				<input type="text" name="job_2_title" value="" style="width:350px">
				<br><br>
				<strong>Your job duties</strong>
				<br>
				<textarea name="job_2_duties" style="height:60px;width:350px"></textarea>
				<br><br>
				<br><br>
				<strong>Name of previous business/employer</strong>
				<br>
				<input type="text" name="employer_name_3" value="" style="width:350px">
				<br><br>
				<strong>Employer's address</strong>
				<br>
				<textarea name="employer_address_3" style="height:60px;width:350px"></textarea>
				<br><br>
				<strong>Dates started and ended</strong>
				<br>
				<input type="text" name="job_3_dates" value="" style="width:350px">
				<br><br>
				<strong>Your job title</strong>
				<br>
				<input type="text" name="job_3_title" value="" style="width:350px">
				<br><br>
				<strong>Your job duties</strong>
				<br>
				<textarea name="job_3_duties" style="height:60px;width:350px"></textarea>
				<br><br>
				<br><br>
				<strong>Name of previous business/employer</strong>
				<br>
				<input type="text" name="employer_name_4" value="" style="width:350px">
				<br><br>
				<strong>Employer's address</strong>
				<br>
				<textarea name="employer_address_4" style="height:60px;width:350px"></textarea>
				<br><br>
				<strong>Dates started and ended</strong>
				<br>
				<input type="text" name="job_4_dates" value="" style="width:350px">
				<br><br>
				<strong>Your job title</strong>
				<br>
				<input type="text" name="job_4_title" value="" style="width:350px">
				<br><br>
				<strong>Your job duties</strong>
				<br>
				<textarea name="job_4_duties" style="height:60px;width:350px"></textarea>
				<br><br>
				<br><br>
				<span style="font-size:14px;font-weight:400">
				<i><strong>Skills, Abilities and Languages</strong></i>
				</span>
				<br><br>
				<strong>Your skills, abilities, talents and accomplishments</strong>
				<br>
				<textarea name="skills" style="height:150px;width:350px"></textarea>
				<br><br>
				<strong>Native language</strong>
				<br>
				<select name="native_language">
					<option value="-1">Please Select</option>
					<option value="1" selected="">English</option>
					<option value="2">Spanish</option>
					<option value="3">Chinese</option>
					<option value="4">German</option>
					<option value="5">French</option>
					<option value="6">Portuguese</option>
					<option value="7">Russian</option>
					<option value="8">Japanese</option>
					<option value="9">Korean</option>
					<option value="10">Turkish</option>
					<option value="11">Polish</option>
					<option value="12">Arabic</option>
					<option value="13">Italian</option>
					<option value="14">Romanian</option>
					<option value="15">Thai</option>
					<option value="16">Dutch</option>
				</select>
				<br><br>
				<table summary="" border="0">
					<tbody>
						<tr>
							<td>
								<strong>Foreign Language 1</strong>
							</td>
							<td> &nbsp; </td>
							<td>
								<strong>Proficiency</strong>
							</td>
						</tr>
						<tr>
							<td>
								<select name="language_1">
									<option value="-1">Please Select</option>
									<option value="1">English</option>
									<option value="2" selected="">Spanish</option>
									<option value="3">Chinese</option>
									<option value="4">German</option>
									<option value="5">French</option>
									<option value="6">Portuguese</option>
									<option value="7">Russian</option>
									<option value="8">Japanese</option>
									<option value="9">Korean</option>
									<option value="10">Turkish</option>
									<option value="11">Polish</option>
									<option value="12">Arabic</option>
									<option value="13">Italian</option>
									<option value="14">Romanian</option>
									<option value="15">Thai</option>
									<option value="16">Dutch</option>
								</select>
							</td>
							<td> &nbsp; </td>
							<td>
								<select name="language_1_level">
									<option value="-1">Please Select</option>
									<option value="1">Basic</option>
									<option value="2" selected="">Intermediate</option>
									<option value="3">Fluent</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<table summary="" border="0">
					<tbody>
						<tr>
							<td>
								<strong>Foreign Language 2</strong>
							</td>
							<td> &nbsp; </td>
							<td>
								<strong>Proficiency</strong>
							</td>
						</tr>
						<tr>
							<td>
								<select name="language_2">
									<option value="-1">Please Select</option>
									<option value="1">English</option>
									<option value="2">Spanish</option>
									<option value="3">Chinese</option>
									<option value="4">German</option>
									<option value="5">French</option>
									<option value="6">Portuguese</option>
									<option value="7" selected="">Russian</option>
									<option value="8">Japanese</option>
									<option value="9">Korean</option>
									<option value="10">Turkish</option>
									<option value="11">Polish</option>
									<option value="12">Arabic</option>
									<option value="13">Italian</option>
									<option value="14">Romanian</option>
									<option value="15">Thai</option>
									<option value="16">Dutch</option>
								</select>
							</td>
							<td> &nbsp; </td>
							<td>
								<select name="language_2_level">
									<option value="-1">Please Select</option>
									<option value="1">Basic</option>
									<option value="2">Intermediate</option>
									<option value="3" selected="">Fluent</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<table summary="" border="0">
					<tbody>
						<tr>
							<td>
								<strong>Foreign Language 3</strong>
							</td>
							<td> &nbsp; </td>
							<td>
								<strong>Proficiency</strong>
							</td>
						</tr>
						<tr>
							<td>
								<select name="language_3">
									<option value="-1">Please Select</option>
									<option value="1">English</option>
									<option value="2">Spanish</option>
									<option value="3">Chinese</option>
									<option value="4">German</option>
									<option value="5">French</option>
									<option value="6">Portuguese</option>
									<option value="7">Russian</option>
									<option value="8">Japanese</option>
									<option value="9">Korean</option>
									<option value="10">Turkish</option>
									<option value="11">Polish</option>
									<option value="12">Arabic</option>
									<option value="13">Italian</option>
									<option value="14">Romanian</option>
									<option value="15">Thai</option>
									<option value="16" selected="">Dutch</option>
								</select>
							</td>
							<td> &nbsp; </td>
							<td>
								<select name="language_3_level">
									<option value="-1">Please Select</option>
									<option value="1" selected="">Basic</option>
									<option value="2">Intermediate</option>
									<option value="3">Fluent</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				<br>
				<br><br>
				<span style="font-size:14px;font-weight:400">
				<i><strong>Education</strong></i>
				</span>
				<br><br>
				<font size="1"><i>
				Includes diplomas, certificates, licenses, and major subjects studied.
				You should start with your most recent degree, diploma or certificate.						</i></font>
				<br><br><br>
				<strong>Education Level </strong>
				<br>
				<select name="education_level">
					<option value="-1">Please Select</option>
					<option value="1">High School</option>
					<option value="2">Associates</option>
					<option value="3">Bachelor of Science</option>
					<option value="4">Bachelor of Business Administration</option>
					<option value="5">Bachelor of Arts</option>
					<option value="6">Juris Doctorate</option>
					<option value="7">Master of Science</option>
					<option value="8" selected="">Master of Arts</option>
					<option value="9">Medical Doctor</option>
					<option value="10">Master of Business (MBA)</option>
					<option value="11">Master of Fine Arts (MFA)</option>
					<option value="12">PhD</option>
					<option value="13">Other</option>
				</select>
				<br><br><br>
				<strong>Name, city and state of last school attended</strong>
				<br>
				<input type="text" name="school_1_name" value="" style="width:350px">
				<br><br>
				<strong>Courses studied or name of program</strong>
				<br>
				<input type="text" name="school_1_courses" value="" style="width:350px">
				<br><br>
				<strong>Dates attended </strong>
				<br>
				<input type="text" name="school_1_dates" value="" style="width:350px">
				<br>
				<font size="1"><i>if you are currently enrolled in an educational program, enter dates attended as beginning date to present (e.g. October 2001 to present)</i></font>
				<br><br>
				<strong>Degree, certificate or license earned</strong>
				<br>
				<input type="text" name="school_1_degree" value="" style="width:350px">
				<br><br><br><br>
				<strong>Name, city and state of previous school attended</strong>
				<br>
				<input type="text" name="school_2_name" value="" style="width:350px">
				<br><br>
				<strong>Courses studied or name of program</strong>
				<br>
				<input type="text" name="school_2_courses" value="" style="width:350px">
				<br><br>
				<strong>Dates attended </strong>
				<br>
				<input type="text" name="school_2_dates" value="" style="width:350px">
				<br><br>
				<strong>Degree, certificate or license earned</strong>
				<br>
				<input type="text" name="school_2_degree" value="" style="width:350px">
				<br><br><br><br>
				<strong>Name, city and state of previous school attended</strong>
				<br>
				<input type="text" name="school_3_name" value="" style="width:350px">
				<br><br>
				<strong>Courses studied or name of program</strong>
				<br>
				<input type="text" name="school_3_courses" value="" style="width:350px">
				<br><br>
				<strong>Dates attended </strong>
				<br>
				<input type="text" name="school_3_dates" value="" style="width:350px">
				<br><br>
				<strong>Degree, certificate or license earned</strong>
				<br>
				<input type="text" name="school_3_degree" value="" style="width:350px">
				<br><br>
				<br>
				<table summary="" border="0" width="100%">
					<tbody>
						<tr>
							<td align="left">
								<input type="submit" value=" Save " class="btn btn-primary">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
@endsection