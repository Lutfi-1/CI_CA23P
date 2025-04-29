<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function index(){
        $data['content']= '<h1> Welcome to adminlte 3 in codeigniter 3</h1>';
        $this->load->view('templates/header', $data);
        $this->load->view('Dashboard', $data);
        $this->load->view('templates/footer', $data);
    }
}