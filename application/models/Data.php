	<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 	
*/
class Data extends CI_Model
{
	
	function __construct()
	{
		//$this->load->library('database');
	}

	public function add_record($result)
	{
		$this->db->insert('records',$result);
		return true;
	}
}











	 ?>