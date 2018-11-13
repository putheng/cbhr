<script type="text/javascript">
	$('form.login-form').on('submit', function(){
		$('.loading').show();
		$('.log-response').html('');
		var	that 	= 	$(this),
			url 	= 	that.attr('action'),
			type	= 	that.attr('method'),
			data	= 	{};
		
		that.find('[name]').each(function(index, value){
			var that 	= 	$(this),
				name	= 	that.attr('name'),
				value	=	that.val();
			
			data[name] = value;
		});
		$.ajax({
			url:url,
			type:type,
			data:data,
			success: function(response){
				$('.log-response').html(response);
				$('.loading').hide();
			}
		});
		
		return false;
	});
	
	$('.job-function').change(function(){
	    var val = $(this).val();
	    if(val != null){
	    	$( "#job-function" ).prop( "checked", false );
	    }else{
	    	$( "#job-function" ).prop( "checked", true );
	    }
	});
</script>
<script type="text/javascript">

	$(".form-control.category").select2({
		placeholder: "All",
		allowClear: true
	});
	$(".job-location").select2({
		placeholder: "All",
		allowClear: true
	});
	$(".job-industry").select2({
		placeholder: "All",
		allowClear: true
	});
	$(".job-salary").select2({
		placeholder: "All",
		allowClear: true
	});
	$(".job-date").select2({
		placeholder: "All",
		allowClear: true
	});
</script>
<script type="text/javascript"> 
	$('#category').change(function(){
	    var val = $(this).val();
	    if(val != null){
	    	$( "#job-category" ).prop( "checked", false );
	    }else{
	    	$( "#job-category" ).prop( "checked", true );
	    }
	});
	
	$('.job-location').change(function(){
	    var val = $(this).val();
	    if(val != null){
	    	$( "#job-location" ).prop( "checked", false );
	    }else{
	    	$( "#job-location" ).prop( "checked", true );
	    }
	});
	
	$('.job-salary').change(function(){
	    var val = $(this).val();
	    if(val != null){
	    	$( "#job-salary" ).prop( "checked", false );
	    }else{
	    	$( "#job-salary" ).prop( "checked", true );
	    }
	});
	
	$('.job-industry').change(function(){
	    var val = $(this).val();
	    if(val != null){
	    	$( "#job-industry" ).prop( "checked", false );
	    }else{
	    	$( "#job-industry" ).prop( "checked", true );
	    }
	});
	
	$('.job-date').change(function(){
	    var val = $(this).val();
	    if(val != null){
	    	$( "#job-date" ).prop( "checked", false );
	    }else{
	    	$( "#job-date" ).prop( "checked", true );
	    }
	});
	
	function checkBox(asd){
		var id = $(asd).attr('for');
		var name = $('input[type=checkbox]#'+id).attr('name');
	}
</script>