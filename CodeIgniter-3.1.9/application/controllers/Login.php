<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	public function index()
	{
		$this->load->view('login');
	}

    public function check()
    {
        $this->load->helper(array('form', 'url'));
        $data['name'] = $this->input->post('username');
        if($this->input->post('username') == "test"){
            $this->load->view('mean');
        }else{
            $this->load->view('failed',$data);
        }
    }
}
