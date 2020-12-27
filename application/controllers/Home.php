<?php
class Home extends CI_Controller{
    public function __construct(){
        parent:: __construct();
    }

    function index(){
        $data = array(
            'title' => 'Home | Wesite dengan CI 3',
            'keywords' => 'Membuat website dengan ci',
            'description' => 'Mudah membuat website dengan ci'
        );
        $this->load->view('template/header',$data);
        $this->load->view('pages/index');
        $this->load->view('template/sidebar');
        $this->load->view('template/footer');
    }
}