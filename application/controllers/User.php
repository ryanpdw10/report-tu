<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

//   Iriansyah Ahmad M  
//   ryanpdw10@gmail.com
//   https://ryanpdw10.github.io

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model(['user_model']);
    }

	public function index()
	{
        $data['title'] = 'Users Trakindo Technology';
        $data['content'] = 'user/index';

        $data['menu1_link'] = base_url('user');
        $data['menu1'] = 'User';
        $data['menu2'] = 'Member';
        $this->load->view('template', $data);
    } 

    public function get_data_users() {
        $data = array();
        $query = $this->user_model->get_users();
        $i = 1;
        foreach ($query->result() as $row) {
            $data[] = array(
                'id_ptfi' => $row->id_ptfi,
                'username' => $row->username,
                'name' => $row->name,
                'address' => $row->address,
                'image' => $row->image,
                'level' => $row->level,
                'crew' => $row->crew,
                'position' => $row->position
            );
        }
        echo json_encode($data);
    }
    
}