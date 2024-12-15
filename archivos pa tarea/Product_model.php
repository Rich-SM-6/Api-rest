<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Método para obtener todos los productos de la base de datos
    public function obtener_productos() {
        // Realizar la consulta a la base de datos
        $query = $this->db->get('productos');
        
        // Verificar si la consulta tuvo resultados
        if ($query->num_rows() > 0) {
            return $query->result_array();  // Retornar los resultados como un array
        } else {
            return false;  // Si no hay productos, retornar false
        }
    }
}
