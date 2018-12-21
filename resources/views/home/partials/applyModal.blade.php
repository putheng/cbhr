<div class="modal modal-login" id="apply-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="border-bottom: 1px solid #aaa;">
				<button type="button" onclick="javascript:document.getElementById('apply-modal').style.display='none'" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 id="loginModalLabel" class="modal-title text-center text-uppercase">Apply to this job</h4>
			</div>
			<div class="modal-body">
				<div class="login-form-container">
					<form class="apply-form" action="{{ route('file.apply', $listing) }}" method="post">
						<br>
						<div class="log-response"></div>
						
						<div class="form-group" id="name">
							<label class="control-label">Full name</label>
							<input type="text" name="name" class="form-control input-pd">
						</div>

						<div class="form-group" id="email">
							<label class="control-label">Phone</label>
							<input type="text" name="phone" class="form-control input-pd">
						</div>
						<br>
						<div class="divider">
							<span>Upload your resume</span>
						</div>

						<ul id="lists"></ul>
						<div id="loading" class="loading hidden">
							<span class="l-1"></span><span class="l-2"></span><span class="l-3"></span>
							<span class="l-4"></span><span class="l-5"></span><span class="l-6"></span>
						</div>

						<div class="form-group">
							<label for="resume" class="control-label avatar_upload_form">+</label>
							<input type="file" name="resume" id="resume" class="hidden" multiple="multiple">
							
						</div>
						<div id="loading" class="loading hidden">
							<span class="l-1"></span><span class="l-2"></span><span class="l-3"></span>
							<span class="l-4"></span><span class="l-5"></span><span class="l-6"></span>
						</div>

						<br>
						<button type="submit" class="btn btn-block btn-primary custom-back-color">Apply Now</button>
						
					</form>
				</div>
			</div>
			<br>
			<div class="modal-footer">
				<p>
					<strong>Create Now</strong>
					<br><br>
					<a class="underline-link" href="">Resume (CV)</a>
					or 
					<a class="underline-link" href="">Cover letters</a>
				</p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(".apply-form").submit(function(e) {

    var form = $(this);
    var url = form.attr('action');
    var errors = [];

    $.ajax({
       type: "POST",
       url: url,
       headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       data: form.serialize(),
       success: function(data){
        	$('.log-response').html('<span class="text-success">Your application is submitted.</span><br>');
        	setTimeout(function(){
				$('#apply-modal').modal('hide');
			}, 2000)
       },
       error: function(errors){
       		var error = errors.responseJSON.errors;
       		var html = '<url>';

       		if(error.name){
       			html += `<li class="text-danger">${error.name[0]}</li>`;
       		}

       		if(error.phone){
       			html += `<li class="text-danger">${error.phone[0]}</li>`;
       		}

       		if(error.resume){
       			html += `<li class="text-danger">${error.resume[0]}</li>`;
       		}

       		html += '</ul><br>';
       		$('.log-response').html(html);
       }
    });

    e.preventDefault();
});
</script>