<?php
/**
 * Created by PhpStorm.
 * User: OzzO
 * Date: 29/5/2017
 * Time: 13:55
 */
class Usuario_model extends CI_Model {

    public $nombre_usuario;
    public $correo_electronico;
    public $pais;
    public $tipo_usuario;

    public function get_all_users()
    {
        $query = $this->db->get('usuario');
        return $query->result();
    }

    public function get_user($id = 0)
    {
        $query = $this->db->get_where('usuario', array('id' => $id));
        return $query->result();
    }

    public function insert_user()
    {
        $this->nombre_usuario       = $_POST['nombre_usuario'];
        $this->correo_electronico   = $_POST['correo_electronico'];
        $this->pais                 = $_POST['pais'];
        $this->tipo_usuario         = $_POST['tipo_usuario'];

        $this->db->insert('usuario', $this);
    }

    public function update_user()
    {
        $this->nombre_usuario       = $_POST['nombre_usuario'];
        $this->correo_electronico   = $_POST['correo_electronico'];
        $this->pais                 = $_POST['pais'];
        $this->tipo_usuario         = $_POST['tipo_usuario'];

        $this->db->update('usuario', $this, array('id' => $_POST['id']));
    }

    public function delete_user($id = 0)
    {
        $this->db->delete('usuario', array('id' => $id));
    }

}