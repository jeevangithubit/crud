<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$sql = "SElECT * FROM `entry`";
		$data['get'] = $this->MyModel->getarraybyquery($sql);
		$this->load->view('index',$data);
	}

      public function save(){

      $this->load->model('MyModel');
		$data=array('username' => $_POST['name'],
					'email' => $_POST['email'],
					'password' => $_POST['password'],
					'dob' => $_POST['dob']
	);
		$insert=$this->MyModel->save('index', $data);

		redirect('Auth/index');
      }
}
