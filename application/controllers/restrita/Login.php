<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() 
    {
        $data = array(
            'titulo' => 'Login na área restrita',

        );

        $this->load->view('restrita/layout/header', $data);
        $this->load->view('restrita/login/index');
        $this->load->view('restrita/layout/footer');
    }

    public function auth() 
    {
        $identity = $this->input->post('email');
        $password = $this->input->post('password');
        $remember = ($this->input->post('remember' ? 'TRUE' : 'FALSE'));
        
        if($this->ion_auth->login($identity, $password, $remember)) {
            $this->session->set_flashdata('sucesso', 'Seja muito bem vindo(a)!');
            redirect('restrita'); //    Regra de redirecionar pág para o Home está no config/routes
        }else {
            $this->session->set_flashdata('erro', 'Por favor verifique suas credenciais de acesso');
            redirect('restrita/login');
        }
    }

    public function logout() 
    {
        $this->ion_auth->logout();
        redirect('restrita/login');
    }
}