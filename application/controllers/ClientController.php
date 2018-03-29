<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class ClientController extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('excel');
		$this->load->model('Data','DataModel');
		$this->load->helper('form');
		# code...
	}

	public function hello($str)
	{
		//echo "hello";
		echo $this->isValid($str);
		# code...
	}

	public function add()
	{
		$this->load->view('client/form');
		# code...
	}

		public function excel()
	{

		if(!empty($_FILES['result_file']))
		{
			$file_info = pathinfo($_FILES["result_file"]["name"]);
			$file_directory = "uploads/";
			$new_file_name = date("d-m-Y ") . rand(000000, 999999) .".". $file_info["extension"];

			if(move_uploaded_file($_FILES["result_file"]["tmp_name"], $file_directory . $new_file_name))
			{   
				$file_type	= PHPExcel_IOFactory::identify($file_directory . $new_file_name);
				$objReader	= PHPExcel_IOFactory::createReader($file_type);
				$obj = $objReader->load($file_directory . $new_file_name);
				$sheet_data	= $obj->getActiveSheet()->toArray(null,true,true,true);
				
				// unset($sheet_data[1]);
				// echo "<pre>";
				// print_r($sheet_data);
				// exit();
				foreach($sheet_data  as $key => $data)
				{
					if($key == 1)
					continue;
					else
					$result = array(
						'first_name' => $data['A'],
						'last_name' => $data['B'],
						'phone' => $data['C'],
						'email' => $data['D'],
						'updated_on' => date('d-m-Y')

					);
				// echo "<pre>";
				// 	print_r($result)."</br>";
					
					$this->DataModel->add_record($result);
				}

				//exit();
			}
		} else{
			$this->load->view('excel');
		}
		
	
	}
}











 ?>