<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

//   Iriansyah Ahmad M 
//   ryanpdw10@gmail.com
//   https://ryanpdw10.github.io

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['report_model']);
        is_logged_in();
    }

	public function index()
	{
        $data['title'] = 'Daily Report Trakindo Tech';
        $data['content'] = 'report/daily';
        $data['menu'] = 'daily';

        
        $data['menu1_link'] = base_url('report');
        $data['menu1'] = 'Report';
        $data['menu2'] = 'Daily';

        $this->load->view('template', $data);
    }

	public function weekly()
	{
        $data['title'] = 'Weekly Report Trakindo Tech';
        $data['content'] = 'report/weekly';
        $data['menu'] = 'weekly';

        
        $data['menu1_link'] = base_url('report/weekly');
        $data['menu1'] = 'Report';
        $data['menu2'] = 'Weekly';

        $this->load->view('template', $data);
    }

	public function iplocation()
	{
        $data['title'] = 'IP Location Trakindo Tech';
        $data['content'] = 'report/iplocation';
        $data['menu'] = 'iplocation';

        
        $data['menu1_link'] = base_url('');
        $data['menu1'] = 'IP Location';
        $data['menu2'] = '';

        $this->load->view('template', $data);
    }
    
}