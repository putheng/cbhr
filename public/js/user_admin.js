$("#sidebar-toggle").click(function(e) {
    e.preventDefault();
    $(".navbar-side").toggleClass("collapsed");
    $("#page-wrapper").toggleClass("collapsed");
});

if($(document).width() > 800)
{
	$('#side').css("height",  ($(document).height()));
}

$(window).on('resize', function(){
    if($(document).width() > 800)
	{
		$('#side').css("height",  ($(document).height()));
	}
	else
	{
		$('#side').css("height",  204);
	}
});

var default_content="";
var lock_check = false;
var interval_id = 0;

function isFunction(possibleFunction) 
{
  return (typeof(possibleFunction) == typeof(Function));
}

function ShowLoading()
{
	do_process=true;
	if(isFunction(ValidateForm))
	{
		if(!ValidateForm(document.getElementById("add-form")))
		{
			do_process=false;
		}
	}
	
	if(do_process)
	{
		lock_check = true;
		$('#loading').css('visibility','hidden');
		$('#add-form').submit();
	}
}

function LoadingIcon()
{
	$('#loading').css('visibility','visible');
}

function HideLoadingIcon()
{
	$('#loading').css('visibility','hidden');
}

function StartOver()
{
	
}






 
function init() 
{
	
}
 

function ShowHide(div_name)
{

	if(document.getElementById(div_name).style.display=="block")
	{
		document.getElementById(div_name).style.display="none";
	}
	else
	{
		document.getElementById(div_name).style.display="block";
	}

}






function sub_loc_select(x,field_name,all_text,suggest_action)
{
	if(x=="") return;
	
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			show_sub_locs(xmlhttp.responseText,x,field_name,all_text,suggest_action);
		}
	}
	
	if(suggest_action.indexOf("lang=") !=-1)
	{
		xmlhttp.open("GET",suggest_action+"&location="+x+"&q=",true);
	}
	else
	{
		xmlhttp.open("GET",suggest_action+".php?location="+x+"&q=",true);
	}
	
	
	xmlhttp.send(null);
	
}
var up_html = new Array();
var i_last_level = -1;
function show_sub_locs(text,x,field_name,all_text,suggest_action)
{
	var i_level = (x.split(".").length - 1);

	for(i=i_level;i<=4;i++)
	{
		document.getElementById("s_"+field_name+"_"+i).innerHTML="";	
	}
	
	var new_html="";
	var splitArray = text.split("~");

	var j = 0;
	for(j = 0; j < splitArray.length; j++)
	{
		var location = splitArray[j].split("#");
		 
		if(location[0]=="no suggestion")
		{
			
			
		}
		else
		{
			new_html += "<option value=\""+location[1]+"\">"+location[0]+"</option>";
		}
	}
	
	if(new_html!="")
	{
		new_html ='<select '+(field_name=="category_1"?'required':'')+' onChange="sub_loc_select(this.value,\''+field_name+'\',\''+all_text+'\',\''+suggest_action+'\')" type="text" class="sub-loc-select" id="'+field_name+'_'+(i_level+1)+'" name="'+field_name+'_'+(i_level+1)+'">'
		+'<option value="">'+m_all+'</option>'+new_html+'</select>';
		document.getElementById("s_"+field_name+"_"+i_level).innerHTML="<div class=\"s-top-bottom-margin\">"+new_html+"</div>";
	}

	i_last_level = i_level
}	


function get_cat_value(x)
{
	for(i=4;i>=0;i--)
	{
		if(document.getElementById(x+"_"+i))
		{
			var e = document.getElementById(x+"_"+i);
			if(e.options[e.selectedIndex].value!="") 
			return  e.options[e.selectedIndex].value;
		}
	
	}
	return "";
}