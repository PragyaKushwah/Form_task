<?php

class Task_model extends CI_model{
	
	// save task in db
	public function save_task($data)
    {
        $this->db->insert('tasks', $data); // Insert data into 'tasks' table
        return $this->db->insert_id(); // Return the inserted record's ID
    }

    public function fetch_tasks(){
		
		$this->db->select('*');
        $this->db->from('tasks');          
        $this->db->order_by('id', 'desc');
        $query = $this->db->get();
        return $query->result();
	}

}

?>