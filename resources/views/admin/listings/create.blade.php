@extends('admin.index')

@section('content')

<div class="fright">
	<a class="small-tile blue-back" href="{{ route('admin.listing.index') }}">
		<img class="hide-sm pull-right" width="32" src="/images/icons/default.png">
		<h3 class="h3-tile">Job Ads</h3>
	</a>
</div>
<div class="clear"></div>
<h3>Post a new job ad on the website</h3>

<!--
<table summary="" border="0" class="pull-right">
  	<tr>
  		<td><img src="images/link_arrow.gif" width="16" height="16" alt="" border="0"></td>
  		<td><a href="index.php?category=jobs&folder=add&page=export" style="color:#6d6d6d;text-transform:uppercase;font-weight:800">Export or Import</a></td>
  	</tr>
  </table>
  -->
<br>

<script>
String.prototype.trim = function() {
	return this.replace(/^\s+|\s+$/g,"");
}

function NewJob(x)
{

	document.getElementById("job_category").value=get_cat_value("category_1");
	document.getElementById("region").value=get_cat_value("region");
	
		
	if(x.title.value=="")
	{
		alert("The job title can not be empty!");
		x.title.focus();
		return false;
	}
	
	var wEditor = new nicEditors.findEditor('message');
	
	
	wEditor.saveContent();
	
	if(x.message.value=="")
	{
		alert("The job description can not be empty!");
		x.message.focus();
		return false;
	}
	
	return true;
}

</script>



<table><form id="add-form"  onsubmit='return NewJob(this)' action="index.php" method="post" enctype="multipart/form-data"><input type="hidden" name="category" value="jobs"/><input type="hidden" name="action" value="add"/><input type="hidden" name="SpecialProcessAddForm" value="1"/><tr height=24>
				<td valign="top" width="120">
				EMPLOYER:
				</td>
			<td valign="top"><select id="employer" name="employer"><option value="oracle@test.com">Oracle Corporation</option><option value="computer@test.com">Computer Training Ltd</option><option value="amazon@test.com">Amazon.com Inc.</option><option value="dell@test.com">Dell Inc</option><option value="hp@test.com">Hewlett-Packard</option><option value="teste@teste.com">Test Company</option></select></td></tr><tr height=24>
				<td valign="top" width="120">
				Category:
				</td>
			<td valign="top">				<input type="hidden" id="job_category" name="job_category" value=""/>
				
				<style>
					.sub-loc-select
					{
						width:400px !important;
					}
				</style>
									<script>var loc_type="main";var m_all="Please Select";</script>
				<select style="width:400px" required onChange="sub_loc_select(this.value,'category_1','Please Select','../include/suggest_category')" type="text" class="sub-loc-select" id="category_1_0" name="category_1_0"><option value="">Please Select</option><option  value="1" >Bartendar</option><option  value="2" >Bar Manager</option><option  value="3" >Front of The House Manager</option><option  value="4" >Waitress/Waiter</option><option  value="5" >Hostess</option><option  value="6" >Food & Beverage Manager</option><option  value="7" >Chef</option><option  value="8" >Sous Chef</option><option  value="9" >Barback</option><option  value="10" >Expeditor</option><option  value="11" >General Manager</option><option  value="12" >Assistant Manager</option></select><div class="margin-top-5" id="s_category_1_0"></div><div class="margin-top-5" id="s_category_1_1"></div><div id="s_category_1_2"></div><div id="s_category_1_3"></div><div id="s_category_1_4"></div></td></tr><tr height=24>
				<td valign="top" width="120">
				Job Type:
				</td>
			<td valign="top"><select style="width:400px" id="job_type" name="job_type"><option value="1">Full Time</option><option value="2">Contract</option><option value="3">Part Time</option><option value="4">Internship</option><option value="5">Temp</option></select></td></tr><tr height=24>
				<td valign="top" width="120">
				Title:
				</td>
			<td valign="top"><input type="text" id="title" name="title" value="" size="67"/></td></tr><tr height=24>
				<td valign="top" width="120">
				Description:
				</td>
			<td valign="top"><input type="hidden" id="post_message" name="post_message"/>
				<textarea id="message" name="message" cols="90" rows="12"></textarea></td></tr><tr height=24>
				<td valign="top" width="120">
				Location:
				</td>
			<td valign="top">
				<input type="hidden" id="region" name="region" value=""/>
					<script>var loc_type="main";var m_all="Please Select";</script>
				<select style="width:400px" onChange="sub_loc_select(this.value,'region','Please Select','../include/suggest_location')" type="text" id="region_0" name="region_0"><option value="">Please Select</option><option  value="1" >New York</option><option  value="2" >Atlanta</option><option  value="3" >Tampa</option><option  value="4" >Miami</option><option  value="5" >San Francisco</option><option  value="6" >Los Angeles</option><option  value="7" >San Jose</option><option  value="9" >Houston</option><option  value="10" >Dallas</option><option  value="11" >Austin</option><option  value="12" >Columbus</option><option  value="13" >St. Louise</option><option  value="14" >Las Vegas</option></select><div class="margin-top-5" id="s_region_0"></div><div class="margin-top-5" id="s_region_1"></div><div id="s_region_2"></div><div id="s_region_3"></div><div id="s_region_4"></div></td></tr><tr height=24>
				<td valign="top" width="120">
				ZIP:
				</td>
			<td valign="top"><input type="text" id="zip" name="zip" value="" size="8"/></td></tr><tr height=24>
				<td valign="top" width="120">
				Start Date:
				</td>
			<td valign="top"><input type="text" id="date_available" name="date_available" value="" size="20"/></td></tr><tr height=24>
				<td valign="top" width="120">
				Application URL:
				</td>
			<td valign="top"><input type="text" id="application_url" name="application_url" value="" size="67"/></td></tr><tr height=24>
				<td valign="top" width="120">
				Active:
				</td>
			<td valign="top"><select style="width:400px" id="active" name="active"><option value="YES">YES</option><option value="NO">NO</option></select></td></tr></table><br>
		
		<input  id="submit-button" type="submit" value="Add" class="btn btn-default btn-gradient"/>
		</form>
<script src="{{ asset('js/nicEdit.js?v=12') }}" type="text/javascript"></script>
<script type="text/javascript">

	new nicEditor({buttonList : ['fontSize','bold','italic','forecolor','fontFamily','link','unlink','left','center','right','justify','ol','ul','removeformat','indent','outdent','hr','bgcolor','underline','html'],iconsPath : '/js/nicEditorIcons.gif'}).panelInstance('message');

</script>



@endsection