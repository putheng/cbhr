<form action="" method="get">
	<div class="modal fade " id="advanceSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Advance Search</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									Keyword<br>
									<input type="text" name="title" class="form-control">
								</div>
								<div class="col-md-12 margin-top-10">
									<span id="label_category">Category</span>
									<br>
									<select style="width:100%" name="category[]" id="category" class="form-control category" multiple="multiple">
										<option value="104 Airline">104 Airline</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<span id="label_location">Location</span>
									<br>
									<select style="width:100%" class="form-control job-location" name="location[]" id="location"  multiple="multiple">
										<option value="Rattanakiri">Rattanakiri</option>
									</select>
								</div>
								<div class="col-md-12 margin-top-10">
									<span id="label_location">Industry</span>
									<br>
									<select style="width:100%" class="form-control job-industry" name="industry[]" multiple="multiple">
										<option value="104 Airline">104 Airline</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row margin-top-10 margin-bottom-5">
								<div class="col-md-12">
									<span>Job Type</span>
								</div>
								<div class="col-md-4 margin-top-10">
									<div>
										<input name="term[]" value="full time" class="style" type="checkbox" id="full">
										<label for="full"><span></span>Full Time</label>
									</div>
									<div>
										<input name="term[]" value="contract" class="style" type="checkbox" id="Contact">
										<label for="Contact"><span></span>Contact</label>
									</div>
								</div>
								<div class="col-md-4 margin-top-10">
									<div>
										<input name="term[]" value="intership" class="style" type="checkbox" id="Intership">
										<label for="Intership"><span></span>Intership</label>
									</div>
									<div>
										<input name="term[]" value="temp" class="style" type="checkbox" id="Temp">
										<label for="Temp"><span></span>Temp</label>
									</div>
								</div>
								<div class="col-md-4 margin-top-10">
									<div>
										<input name="term[]" value="" class="style" type="checkbox" id="Other">
										<label for="Other"><span></span>Other</label>
									</div>
									<div>
										<input name="term[]" value="part time" class="style" type="checkbox" id="Part">
										<label for="Part"><span></span>Part Time</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 margin-top-10 margin-bottom-5">
									<span>Career Level</span>
								</div>
								<div class="col-md-4">
									<div>
										<input name="career[]" value="Entry Level" class="style" type="checkbox" id="Entry">
										<label for="Entry"><span></span>Entry Level</label>
									</div>
									<div>
										<input name="career[]" value="Experienced" class="style" type="checkbox" id="Experienced">
										<label for="Experienced"><span></span>Experienced</label>
									</div>
								</div>
								<div class="col-md-4">
									<div>
										<input name="career[]" value="Manager" class="style" type="checkbox" id="Manager">
										<label for="Manager"><span></span>Manager</label>
									</div>
									<div>
										<input name="career[]" value="Senior Executive" class="style" type="checkbox" id="Senior">
										<label for="Senior"><span></span>Senior Executive</label>
									</div>
								</div>
								<div class="col-md-4">
									<div>
										<input name="career[]" value="Advanced" class="style" type="checkbox" id="Advancedl">
										<label for="Advancedl"><span></span>Advanced</label>
									</div>
									<div>
										<input name="career[]" value="Executive" class="style" type="checkbox" id="Executive">
										<label for="Executive"><span></span>Executive</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 margin-top-10 margin-bottom-5">
									<span>Years of Experience</span>
								</div>
								<div class="col-md-4">
									<div>
										<input name="exp[]" value="Less than 1 Year" class="style" type="checkbox" id="Less">
										<label for="Less"><span></span>Less than 1</label>
									</div>
									<div>
										<input name="exp[]" value="1+ to 2 Years" class="style" type="checkbox" id="1+">
										<label for="1+"><span></span>1+ to 2 </label>
									</div>
								</div>
								<div class="col-md-4">
									<div>
										<input name="exp[]" value="2+ to 5 Years" class="style" type="checkbox" id="2+">
										<label for="2+"><span></span>2+ to 5</label>
									</div>
									<div>
										<input name="exp[]" value="5+ to 7 Years" class="style" type="checkbox" id="5+">
										<label for="5+"><span></span>5+ to 7</label>
									</div>
								</div>
								<div class="col-md-4">
									<div>
										<input name="exp[]" value="7+ to 10 Years" class="style" type="checkbox" id="7+">
										<label for="7+"><span></span>7+ to 10</label>
									</div>
									<div>
										<input name="exp[]" value="More than 10 Years" class="style" type="checkbox" id="More">
										<label for="More"><span></span>More than 10</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row margin-top-10">
								<div class="col-md-12">
									<span>Education Level:</span>
								</div>
								<div class="col-md-6 margin-top-10">
									<div>
										<input name="education[]" value="Advanced Degree" class="style" type="checkbox" id="Advanced">
										<label for="Advanced"><span></span>Advanced Degree</label>
									</div>
									<div>
										<input name="education[]" value="Bachelor Degree" class="style" type="checkbox" id="Bachelor">
										<label for="Bachelor"><span></span>Bachelor Degree</label>
									</div>
								</div>
								<div class="col-md-6 margin-top-10">
									<div>
										<input name="education[]" value="Associate Degree" class="style" type="checkbox" id="Associate">
										<label onclick="checkBox(this)" for="Associate"><span></span>Associate Degree</label>
									</div>
									<div>
										<input name="education[]" value="High School" class="style" type="checkbox" id="High">
										<label for="High"><span></span>High School</label>
									</div>
								</div>
							</div>
							<div class="row margin-top-10">
								<div class="col-md-6">
									Salary<br>
									<select style="width:100%" name="salary[]" class="form-control job-salary" multiple="multiple">
										<option value="<$200"><$200</option>
									</select>
								</div>
								<div class="col-md-6">
									Posting Date<br>
									<select style="width:100%" class="form-control job-date" name="posting_date">
										<option value="">Any date</option>
										<option value="1">Today</option>
										<option value="2">Yesterday</option>
										<option value="3">Last 3 days</option>
										<option value="7">Last 7 days</option>
										<option value="30">Last 30 days</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</div>
		</div>
	</div>
</form>