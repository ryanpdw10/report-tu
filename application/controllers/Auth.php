<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

//   Iriansyah Ahmad M 
//   ryanpdw10@gmail.com
//   https://ryanpdw10.github.io

	public function index()
	{
        sudah_login();
        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username belum diinput']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password belum diinput']);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Trakindo Tech';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
	}

	private function _login()
    {
        $this->load->model('user_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->user_model->login($username);
        if ($user) {
			if (password_verify($password, $user['password'])) {
				$data = [
					'id_user' =>  $user['id_user'],
					'username' =>  $user['username'],
					'level' =>  $user['level']
				];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><i class="bi bi-emoji-smile me-1"></i> Selamat datang diaplikasi Trakindo Tech<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect('dashboard');
			} else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="bi bi-exclamation-octagon me-1"></i> Username / Password Salah!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect('auth');
			}
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert"><i class="bi bi-exclamation-triangle me-1"></i> User tidak ada!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        // menghapus session
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert"><i class="bi bi-check me-1"></i> Anda berhasil keluar!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('auth');
    }
}
