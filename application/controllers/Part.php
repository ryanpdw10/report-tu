<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Part extends CI_Controller {

//   Iriansyah Ahmad M 
//   ryanpdw10@gmail.com
//   https://ryanpdw10.github.io

    public function __construct()
    {
        parent::__construct();
        // $this->load->model(['part_model']);
        is_logged_in();
    }

	public function index()
	{
        $data['title'] = 'Stock Part Trakindo Tech';
        $data['content'] = 'part/stock';
        $data['menu'] = 'stock';

        
        $data['menu1_link'] = base_url('part');
        $data['menu1'] = 'Part';
        $data['menu2'] = 'Stock';

        $this->load->view('template', $data);


    }

	public function history()
	{
        $data['title'] = 'History Part Trakindo Tech';
        $data['content'] = 'part/history';
        $data['menu'] = 'stock';

        
        $data['menu1_link'] = base_url('part/history');
        $data['menu1'] = 'Part';
        $data['menu2'] = 'History';

        $this->load->view('template', $data);


    }
    
}