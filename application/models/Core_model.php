<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core_model extends CI_Model () {

    public function get_all($tabela = NULL, $condicoes = NULL)
    {
        if($tabela && $this->db->table_exists($tabela)) {
            if(is_array($condicoes)) {
                $this->db->where($condicoes);
            }
            return $this->db->get($tabela)->result();
        }else {
            return FALSE;
        }
    }

    public function get_by_id($tabela = NULL, $condicoes = NULL)
    {
        if($tabela && $this->db->table_exists($tabela) && is_array($condicoes)) {

            $this->db->where($condicoes);
            $this->db->limit(1);

            return $this->db->get($tabela)->row();
        }else {
            return FALSE;
        }
    }

    public function insert($tabela = NULL, $data = NULL, $get_last_id = NULL)
    {
        
    }
}