

		<!-- JQuery js-->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
		<script src="<?=base_url();?>assets/js/jquery-3.2.1.min.js"></script>

		<script src="<?=base_url();?>assets/plugins/bootstrap-4.3.1/js/popper.min.js"></script>

		<script src="<?=base_url();?>assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

		<script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>


		<script type="text/javascript">
			$(document).ready(function() {
        
                $("#savetaskForm").submit(function(event) {
        		event.preventDefault();
                	var client_name    		 = $('#client_name').val();
                	var task_date    		 = $('#task_date').val();
                	var task_description     = $('#task_description').val();
                	var task_percentage    	 = $('#task_percentage').val();
                	var supporting_details   = $('#supporting_details').val();
                	var billing_type     	 = $('#billing_type').val();

                    $.ajax({
                		url: "<?php echo base_url("Website/save_task");?>",
			            data: {
							    client_name: client_name,
							    task_date: task_date,
							    task_description: task_description,
							    task_percentage: task_percentage,
							    supporting_details: supporting_details,
							    billing_type: billing_type
						    },
			            type: 'POST',
                		cache: false,
                		success: function(data){ alert("Insert successfully");
                		       console.log(data);
                		  	
                		}
                	});
                        	
                });	
                
        	});


        	function isNumberKey(evt)
	       {
	          var charCode = (evt.which) ? evt.which : evt.keyCode;
	          if (charCode != 46 && charCode > 31 
	            && (charCode < 48 || charCode > 57))
	             return false;

	          return true;
	       }
		</script>


		<script type="text/javascript">
		$(document).ready(function () {
		    $('#example').DataTable();
		});	
		
		</script>

