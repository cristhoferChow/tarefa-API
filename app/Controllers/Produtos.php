<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produtos extends ResourceController
{
    private $produtosModel;

    public function __construct(){
        $this->produtosModel = new \App\Models\ProdutosModel();
    }

    public function listar()
    {
        $data = $this->produtosModel->findALL();
        return $this->response->setJson($data);
    }
    public function listarmb()
    {
        $data = $this->produtosModel->findAll(3);
        return $this->response->setJson($data);
    }
    

    public function produto($id)
    {
        $data = $this->produtosModel->getProduto($id);
        return $this->response->setJson($data);
    }
}