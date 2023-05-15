<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {	

	public function index(){
	    
	    // Page Specific Information
	    $data['view']='website/index';
	    $data['page'] = 'page';
	    $data['title'] = 'Form Task| Store data';
	    
        	        
	   // Loads View
		$this->load->view('website/layouts/main',$data);
	       
	}

	public function save_task() 
    { 
    	
    	$this->load->model('Task_model');

        $data = array(
            'client_name' => $this->input->post('client_name'),
            'task_date' => $this->input->post('task_date'),
            'task_description' => $this->input->post('task_description'),
            'task_percentage' => $this->input->post('task_percentage'),
            'supporting_details' => $this->input->post('supporting_details'),
            'billing_type' => $this->input->post('billing_type'),
        );

        $task_id = $this->Task_model->save_task($data); // Save the task data

        if ($task_id) {
            $response = array(
                'status' => 'success',
                'message' => 'Task saved successfully.',
                'task_id' => $task_id
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Failed to save task.'
            );
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response)); // Send JSON response
    }

    public function list(){
	    
	    $this->load->model('Task_model');

	  
	    // fetch task data
	    $data['tasks'] = $this->Task_model->fetch_tasks();
	         
	    // Page Specific Information
	    $data['view']='website/list';
	    $data['page'] = 'page';
	    $data['title'] = 'Form Task| Store data';
	    
        	        
	   // Loads View
		$this->load->view('website/layouts/main',$data);
	       
	}




}