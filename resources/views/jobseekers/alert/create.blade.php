@extends('jobseekers.index')
@section('title')
	<title>Create listings alert | Job Seeker</title>
@endsection
@section('content')
<div class="page-content">
	<div class="row">
		<div class="col-lg-12" id="main_content">
			<br>
			<div class="fright">
				<a class="small-tile blue-back" href="{{ route('seeker.listings.alert') }}">
					<img class="pull-right" width="32" src="{{ asset('images/icons/rules.png') }}">
					<h3 class="h3-tile">Current Rules</h3>
				</a>
			</div>
			<div class="clear"></div>
			<h3>
				Add a New Rule
			</h3>
			<br>
			<table>
				<form id="add-form" action="" method="post" enctype="multipart/form-data"></form>
				<tbody>
					<tr height="42">
						<td valign="top" width="120">
							Location:
						</td>
						<td valign="top">
							<input type="hidden" id="region" name="region" value="">
							<select style="width:300px" onchange="sub_loc_select(this.value,'region','Please Select','../include/suggest_location')" type="text" id="region_0" name="region_0">
								<option value="">Please Select</option>
							</select>
							<div class="margin-top-5" id="s_region_0"></div>
							<div class="margin-top-5" id="s_region_1"></div>
							<div id="s_region_2"></div>
							<div id="s_region_3"></div>
							<div id="s_region_4"></div>
						</td>
					</tr>
					<tr height="42">
						<td valign="top" width="120">
							Keyword:
						</td>
						<td valign="top"><input style="width:300px" type="text" id="rule" name="rule" size="26"></td>
					</tr>
					<tr height="42">
						<td valign="top" width="120">
							Category:
						</td>
						<td valign="top">
							<input type="hidden" id="job_category" name="job_category" value="">
							<style>
								.sub-loc-select{
									width:300px !important;
								}
							</style>
							<select style="width:300px" required="" onchange="sub_loc_select(this.value,'category_1','Please Select','../include/suggest_category.php?lang=en')" type="text" class="sub-loc-select" id="category_1_0" name="category_1_0">
								<option value="">Please Select</option>
							</select>
							<div class="margin-top-5" id="s_category_1_0"></div>
							<div class="margin-top-5" id="s_category_1_1"></div>
							<div id="s_category_1_2"></div>
							<div id="s_category_1_3"></div>
							<div id="s_category_1_4"></div>
						</td>
					</tr>
				</tbody>
			</table>
			<br><br>
			<input id="submit-button" type="submit" value="Add" class="btn btn-primary">
		</div>
	</div>
</div>
@endsection
@section('script')
	<script>var loc_type="main";var m_all="Please Select";</script>
	<script>var loc_type="main";var m_all="Please Select";</script>
	<script>
		function NewRule(x)
		{
			document.getElementById("job_category").value = get_cat_value("category_1");
			document.getElementById("region").value = get_cat_value("region");
		}
	</script>
@endsection