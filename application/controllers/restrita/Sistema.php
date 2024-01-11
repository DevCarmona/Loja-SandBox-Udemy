<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if(!$this->ion_auth->logged_in()) {
            redirect('restrita/login');
        }
    }

    public function index() {
        $sistema = $this->core_model->get_by_id('sistema', array('sistema_id' => 1));

        echo '<pre>';
        print_r($sistema);
        exit();
    }
}