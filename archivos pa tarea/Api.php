<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cargar el modelo y la base de datos
        $this->load->database();  // Asegurarnos de que la base de datos esté cargada
    }

    // Método para obtener todos los productos
    public function productos() {
        // Obtener los productos desde el modelo
        $productos = $this->Productos->obtener_productos();

        // Verificar si se obtuvieron productos
        if ($productos) {
            // Enviar la respuesta en formato JSON
            echo json_encode($productos);
        } else {
            // Si no hay productos, retornar un mensaje de error
            echo json_encode(array('error' => 'No hay productos disponibles.'));
        }
    }
}
