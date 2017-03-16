<?php

class Usuario extends CI_Controller {

    public function index()
    {
        $content_data['kaka'] = 'asdasd';
        $data = array(
            'page_content' => $this->load->view('usuario/list', $content_data, true),
            'page_title' => 'Lista de Operadores'
        );
        
        $this->parser->parse('layout_retrospect', $data);
    }
    public function nuevo()
    {
        $content_data['kaka'] = 'asdasd';
        $data = array(
            'page_content' => $this->load->view('usuario/nuevo', $content_data, true),
            'page_title' => 'Lista de Usuarios'
        );
        
        $this->parser->parse('layout_retrospect', $data);
        
    }
}