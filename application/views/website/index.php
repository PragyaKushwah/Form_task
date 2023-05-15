        <!--Register-Section-->
		<section class="sptb login-sptb register-form"> 
			<div class="container customerpage sptb login-form">
				<div class="row single-page justify-content-center"> 
					<div class="col-lg-6 col-xl-7 col-md-6">
						<div class="section-title2 center-block text-left"> 
						    <h6>Form task</h6> 
							<h3 class="pb-1 pb-sm-3">Please develop a basic form in Codeigniter 3 which will allow a user to file a Days task performed at work.</h3> 
							<div class="mt-5 login-step">
								
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">1. User will select a Date from the Calendar and enter in a form.</span>
    								</span>
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">2. In the form User will enter/select following details.</span>
    								</span>
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">- Client Name (Dropdown)</span>
    								</span>
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">- Task Description (TextArea) - Max 100 Characters</span>
    								</span> 
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">- Percentage Completion (Textbox) -Only numbers allowed till 100 with 2 decimal places</span>
    								</span> 
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">- Supporting details (TextArea) - Min 50 Characters and Max 200 Characters</span>
    								</span> 
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">- Billing Type - (Dropdown) - Billable, Non Billable</span>
    								</span> 
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">- Submit button. </span>
    								</span> 
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">3. Save Data in db.  Write API to save data.</span>
    								</span> 
								</div>
								<div>
								    <span class="d-flex mb-5">
    								    
    								    <span class="text-body fs-20 ml-3 align-middle mb-0 lr-title">4. Fetch data to show what was filed.  Write API to fetch data.</span>
    								</span> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-xl-5 col-md-6">
						<div class="wrapper wrapper2">
						
							   
		                      <form id="savetaskForm" class="card-body register-padding" >
		                        <?php
                                    if($this->session->flashdata('error')){
                                        echo '<div class="alert alert-danger border-danger">
                                                    <button type="button" class="close"
                                                        data-dismiss="alert" aria-label="Close">
                                                        <i class="icofont icofont-close-line-circled"></i>
                                                    </button>'.
                                                  $this->session->flashdata("error")  
                                                .'</div>';
                                    }else if($this->session->flashdata('success')){
                                        echo '<div class="alert alert-success border-success">
                                                    <button type="button" class="close"
                                                        data-dismiss="alert" aria-label="Close">
                                                        <i class="icofont icofont-close-line-circled"></i>
                                                    </button>'.
                                                  $this->session->flashdata("success")  
                                                .'</div>';
                                    }
                                ?>
                                
								<h3>Store form data</h3>
							  
								
								<div class="field">
									<label for="cars">Choose client:</label>

									<select class="dropdown_formtask" name="client_name" id="client_name">
									  <option value="Carmine afe">Carmine afe</option>
									  <option value="Bhavik savaliya">Bhavik savaliya</option>
									  <option value="John">John </option>
									  <option value="Jofe">Jofe </option>
									</select> 
									<span id="client_name_error" class="error d-flex justify-content-left" style="color:red"><?php echo form_error('client_name'); ?></span>
								</div>
								<div class="field">
									<input type="date" id="task_date" name="task_date" value="<?php echo set_value('task_date', $this->session->userdata('task_date')); ?>" required>
									<label>task date</label>
									<span id="task_date_error" class="error d-flex justify-content-left" style="color:red"><?php echo form_error('task_date'); ?></span>
								</div>
								
								<div class="field">
									<textarea class="formtask_textara" maxlength="100" id="task_description" name="task_description" required></textarea>
									<label>Task Description</label>
									<span id="task_description_error" class="error d-flex justify-content-left" style="color:red"><?php echo form_error('task_description_details'); ?></span>
								</div>
								
								<div class="field">
									<input type="text" name="task_percentage" id="task_percentage" onkeypress="return isNumberKey(event)" value="<?php echo set_value('task_percentage', $this->session->userdata('task_percentage')); ?>" required>
									<label>Percentage Completion</label>
									<span id="task_percentage_error" class="error d-flex justify-content-left" style="color:red"><?php echo form_error('task_percentage'); ?></span>
								</div>
								<div class="field">
									<textarea class="formtask_textara" maxlength="200" minlength="50" id="supporting_details" name="supporting_details" required></textarea>
									<label>Supporting details</label>
									<span id="supporting_details_error" class="error d-flex justify-content-left" style="color:red"><?php echo form_error('supporting_details'); ?></span>
								</div>
								<div class="field">
									<label for="cars">Billing Type:</label>

									<select class="dropdown_formtask" name="billing_type" id="billing_type">
									  <option value="Billable">Billable</option>
									  <option value="Non Billable">Non Billable</option>
									</select> 
									<span id="billing_type_error" class="error d-flex justify-content-left" style="color:red"><?php echo form_error('billing_type'); ?></span>
								</div>
								
								<div class="submit">
									<button name="submit" class="btn btn-primary btn-block btn-lg" type="submit">Submit</button>
								</div>
							
						
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Register-Section-->
		
		
		
		
    