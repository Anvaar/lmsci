<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH.'/libraries/Rest_Server.php');

/**
* 	
*/
class ApiController extends Rest_server
{
	


	public function index_get() {

		$id = $this->get('id');
		if($id == ''){
			$country = $this->db->get('countries')->result();
		}
		else{
			$this->db->where('id',$id);
			$country = $this->db->get('countries')->result();
		}
		$this->response($country, 200);

	}


}













 ?>