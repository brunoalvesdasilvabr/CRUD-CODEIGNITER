<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_model{

    public function getProdutos(){
        $query = $this->db->get('produtos');
        return $query->result();
    }
}