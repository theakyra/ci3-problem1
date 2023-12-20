<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vijay extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function add()
    {

        $this->load->model('ajay');
        $data['users'] = $this->ajay->getData();
       
        $this->load->view('add', $data);
    }

}
