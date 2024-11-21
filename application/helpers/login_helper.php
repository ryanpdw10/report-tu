<?php

//   Iriansyah Ahmad M 
//   ryanpdw10@gmail.com
//   https://ryanpdw10.github.io

function is_logged_in()
{
    $ci = get_instance();

    if (!$ci->session->userdata('id_user')) {
        $ci->session->set_flashdata('message', '<div class="alert border-danger alert-dismissible fade show" role="alert"><i class="bi bi-exclamation-octagon me-1"></i> Harap login terlebih dahulu!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect('auth');
    } 
}

function sudah_login()
{
    $ci = get_instance();

    if ($ci->session->userdata('id_user')) {
    // $ci->session->set_flashdata('message', '<div class="alert border-danger alert-dismissible fade show" role="alert">Anda sudah login!!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    redirect('dashboard');
    }
}

function check_admin()
{
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()['level'] != 1){
    $ci->session->set_flashdata('message', '<div class="alert border-danger alert-dismissible fade show" role="alert"><i class="bi bi-exclamation-octagon me-1"></i> Akses ditolak!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    redirect('dashboard');
    }
}

function rupiah($angka){
	
	$hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}