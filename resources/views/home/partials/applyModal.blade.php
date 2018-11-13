<div class="modal modal-login" id="apply-modal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="    border-bottom: 1px solid #aaa;">
				<button type="button" onclick="javascript:document.getElementById('apply-modal').style.display='none'" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 id="loginModalLabel" class="modal-title text-center text-uppercase">Apply to this job</h4>
			</div>
			<div class="modal-body">
				<div class="login-form-container">
					<form class="login-form" action="" method="post">
						<input type="hidden" name="mod" value="login">
						<div class="log-response"></div>
						<br><br>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">RESUME</span>
							<select class="form-control" aria-describedby="basic-addon1">
								<option value="">Web Developer</option>
							</select>
						</div>
						<br>
						<div class="divider">
							<span>AND</span>
						</div>
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">LETTER &nbsp;&nbsp;</span>
							<select class="form-control" aria-describedby="basic-addon1">
								<option value="">Web Developer</option>
							</select>
						</div>
						<br><br>
						<button type="submit" class="btn btn-block btn-primary custom-back-color">Apply Now</button>
						<div class="loading" style="display:none;text-align: center;">
							<span class="l-1"></span><span class="l-2"></span><span class="l-3"></span>
							<span class="l-4"></span><span class="l-5"></span><span class="l-6"></span>
						</div>
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