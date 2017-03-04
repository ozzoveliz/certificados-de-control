<?php
/**
 * Created by PhpStorm.
 * User: OzzO
 * Date: 04/03/2017
 * Time: 04:56 PM
 */

class Operador extends CI_Controller {

    public function index()
    {
        $content_data['kaka'] = 'asdasd';
        $data = array(
            'page_content' => $this->load->view('operador/list', $content_data, true),
            'page_title' => 'Lista de Operadores'
        );
        
        $this->parser->parse('layout_retrospect', $data);
    }
    public function nuevo()
    {
        $content_data['kaka'] = 'asdasd';
        $data = array(
            'page_content' => $this->load->view('operador/nuevo', $content_data, true),
            'page_title' => 'Lista de Operadores'
        );
        
        $this->parser->parse('layout_retrospect', $data);
        
    }
}