<?php

class Usuario extends CI_Controller {

    public function index()
    {
        $this->load->model('usuario_model');
        $content_data['Usuarios'] = $this->usuario_model->get_all_users();
        $data = array(
            'page_content' => $this->load->view('usuario/lista', $content_data, true),
            'page_title' => 'Lista de Operadores'
        );
        $this->parser->parse('layout_retrospect', $data);
    }

    public function crear()
    {
        $form_action = $this->input->post('form_action');
        if( $form_action == 'crear_usuario' ) {
            $config = array(
                array(
                    'field'     => 'nombre_usuario',
                    'label'     => 'Nombre Usuario',
                    'rules'     => 'required',
                    'errors'    => array(
                        'required'  => '%s es requerido'
                    )
                ),
                array(
                    'field'     => 'correo_electronico',
                    'label'     => 'Correo Electr&oacute;nico',
                    'rules'     => 'required|valid_email',
                    'errors'    => array(
                        'required'      => '%s es requerido',
                        'valid_email'   => '%s inv&aacute;lido'
                    )
                )
            );
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<div class="error" style="color: red; margin-bottom: 1em">', '</div>');
            if ($this->form_validation->run() == FALSE) {
                $data = array(
                    'page_content' => $this->load->view('usuario/crear', null, true),
                    'page_title' => 'Crear usuario'
                );
                $this->parser->parse('layout_retrospect', $data);
            } else {
                $this->load->model('usuario_model');
                $this->usuario_model->insert_user();
                redirect('usuario');
            }
        } else {
            $data = array(
                'page_content' => $this->load->view('usuario/crear', null, true),
                'page_title' => 'Crear usuario'
            );
            $this->parser->parse('layout_retrospect', $data);
        }
    }

    public function editar()
    {
        $form_action = $this->input->post('form_action');
        if( $form_action == 'editar_usuario' ) {
            $config = array(
                array(
                    'field'     => 'nombre_usuario',
                    'label'     => 'Nombre Usuario',
                    'rules'     => 'required',
                    'errors'    => array(
                        'required'  => '%s es requerido'
                    )
                ),
                array(
                    'field'     => 'correo_electronico',
                    'label'     => 'Correo Electr&oacute;nico',
                    'rules'     => 'required|valid_email',
                    'errors'    => array(
                        'required'      => '%s es requerido',
                        'valid_email'   => '%s inv&aacute;lido'
                    )
                )
            );
            $this->form_validation->set_rules($config);
            $this->form_validation->set_error_delimiters('<div class="error" style="color: red; margin-bottom: 1em">', '</div>');
            if ($this->form_validation->run() == FALSE) {
                $this->load->model('usuario_model');
                $data_content['Usuario'] = $this->usuario_model->get_user($this->uri->segment(3));
                $data = array(
                    'page_content' => $this->load->view('usuario/editar', $data_content, true),
                    'page_title' => 'Editar usuario'
                );
                $this->parser->parse('layout_retrospect', $data);
            } else {
                $this->load->model('usuario_model');
                $this->usuario_model->update_user();
                redirect('usuario');
            }
        } else {
            $this->load->model('usuario_model');
            $data_content['Usuario'] = $this->usuario_model->get_user($this->uri->segment(3));
            $data = array(
                'page_content' => $this->load->view('usuario/editar', $data_content, true),
                'page_title' => 'Editar usuario'
            );
            $this->parser->parse('layout_retrospect', $data);
        }
    }

    public function eliminar()
    {
        $this->load->model('usuario_model');
        $this->usuario_model->delete_user($this->uri->segment(3));
        redirect('usuario');
    }

}