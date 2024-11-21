<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

//   Iriansyah Ahmad M 
//   ryanpdw10@gmail.com
//   https://ryanpdw10.github.io

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

	public function index()
	{
        $data['title'] = 'Dashboard Trakindo Technology';
        $data['content'] = 'dashboard';

        $data['menu1_link'] = base_url('dashboard');
        $data['menu1'] = 'Dashboard';
        $data['menu2'] = '';
        
        $this->load->view('template', $data);
    }
    
}