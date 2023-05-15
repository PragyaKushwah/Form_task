        <!--Register-Section-->
		<section class="sptb login-sptb register-form"> 
			<div class="container customerpage sptb login-form">
				<div class="row single-page justify-content-center"> 
					<div class="col-lg-12 col-xl-12 col-md-12">
						<div class="section-title2 center-block text-left"> 
						    <h6>Task list</h6> 
						    <div class="table-responsive">
							<table id="example" class="table table-bordered table-striped table-hover">

								<thead>

									<tr>

										<th>Client Name</th>

										<th>Task date</th>

										<th>Task description</th>

										<th>Task percentage</th>

										<th>Supporting details</th>

										<th>Billing type</th>

									</tr>

								</thead>

								<tbody>
								<?php
                                    if(!empty($tasks)){
                                    	foreach($tasks as $task){  
                                ?>
                                	<tr>
                                		<th><?= $task->client_name;?></th>
                                		<th><?= $task->task_date;?></th>
                                		<th><?= $task->task_description;?></th>
                                		<th><?= $task->task_percentage;?></th>
                                		<th><?= $task->supporting_details;?></th>
                                		<th><?= $task->billing_type;?></th>
                                	</tr>
                                <?php 
	                                	}
	                                }
                                ?>

								</tbody>

							</table>
								
							</div>	
							
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<!--/Register-Section-->
		
		
		
		
    