<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//  12 - 4m

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('restrita/layout/header');
        $this->load->view('restrita/home/index');
        $this->load->view('restrita/layout/footer');
    }
}