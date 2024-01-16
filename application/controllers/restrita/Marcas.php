<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marcas extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // if(!$this->ion_auth->logged_in()) {
        //     redirect('restrita/login');
        // }
    }

    public function index() {

        $data = array(
            'titulo' => 'Marcas cadastradas',
            'styles' => array (
                'bundles/datatables/datatables.min.css',
                'bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array (
                'bundles/datatables/datatables.min.js',
                'bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
                'bundles/jquery-ui/jquery-ui.min.js',
                'js/page/datatables.js',
            ),
            'marcas' => $this->core_model->get_all('marcas'),
        );

        // echo '<pre>';
        // print_r($data['marcas']);
        // exit();

        $this->load->view('restrita/layout/header', $data);
        $this->load->view('restrita/marcas/index');
        $this->load->view('restrita/layout/footer');
    }

    public function core($marca_id = NULL) {

        if(!$marca_id) {
            //  Cadastrando
        }else {
            if(!$marca = $this->core_model->get_by_id('marcas', array ('marca_id' => $marca_id))) {
                $this->session->set_flashdata('erro', 'A marca não foi encontrada');
                redirect('rstrita/marcas');
            }else {
                //  Editando

                $this->form_validation->set_rules('marca_nome', 'Nome da marca', 'trim|required|min_length[2]|max_length[40]');

                if($this->form_validation->run()) {
                    echo '<pre>';
                    print_r($this->input->post());
                    exit();
                }else {
                    //  Erro de validação
                    $data = array(
                        'titulo' => 'Editar marca',
                        'marca' => $marca,
                    );
            
                    // echo '<pre>';
                    // print_r($data['marcas']);
                    // exit();
            
                    $this->load->view('restrita/layout/header', $data);
                    $this->load->view('restrita/marcas/core');
                    $this->load->view('restrita/layout/footer');
                }
            }
        }
    }
}