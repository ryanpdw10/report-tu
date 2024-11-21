<?php 

//   Iriansyah Ahmad M 
//   ryanpdw10@gmail.com
//   https://ryanodw10.github.io


Class Fungsi {
    public function __construct()
    {
        $ci =& get_instance();
        $ci->load->model(['user_model']);
    }
    
    public function user_login()
    {
        $ci =& get_instance();
        $id_user = $ci->session->userdata('id_user');
        return $ci->user_model->get($id_user);
    }

}