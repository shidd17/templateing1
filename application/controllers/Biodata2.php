<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata2 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('biodata-saya');
        $this->load->view('layout/footer');
        
    }
}