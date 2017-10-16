<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EdicionController
 *
 * @author Anime
 */
class EdicionController extends CI_Controller {
   public function __construct() {
        parent::__construct();
    }
    // metodo que ejecuta la vista de edicion de productos
    public function editar() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
            redirect(base_url() . 'iniciar');
        }
        $dato = ['titulo' => " Editar producto",
            'es_usuario_normal' => FALSE,
            'perfil' => $this->usuario_model->consultarPerfil($this->session->userdata('idUsuario')),
            'mrol' => $this->usuario_model->mostrarRol($this->session->userdata('rol'))];

//        $data['subcategorias'] = $this->subcategoria_model->obtenerSubCategorias();

        $idProducto = $this->uri->segment(3);
        $obtenerProducto = $this->productos_model->obtener_productos_a_modificar($idProducto);

        // cargar el helper de manejo de formularios
        $this->load->helper('form');
        // cargar libreria para validar formularios

        if ($obtenerProducto != FALSE) {
            foreach ($obtenerProducto->result() as $fila) {
                $DescripcionProducto = strip_tags(trim($fila->DescripcionProducto));
                $NombreProducto = strip_tags(trim($fila->NombreProducto));
                $minimoStock = $fila->minimoStock;
                $MaximoStock = $fila->MaximoStock;
                $Existencias = $fila->Existencias;
                $subcategoria = $fila->Subcategoria_idSubcategoria;
            }
            $data = array(
                'id' => $idProducto,
                'descripcion' => rtrim($DescripcionProducto),
                'producto' => $NombreProducto,
                'minStock' => $minimoStock,
                'maxStock' => $MaximoStock,
                'exist' => $Existencias,
                'idsub' => $subcategoria,
                'categorias_select' => $this->categoria_model->traerCategoriasXSubcategoria(),
                'nombreSub' => $this->productos_model->obtener_nombreSubcategoria($subcategoria),
                'nombreCategoria' => $this->productos_model->obtener_nombreCategoria($subcategoria)
            );
        } else {
            $data = '';
            return FALSE;
        }
        $this->load->view('templates/admin/headerAdmin', $dato);
        $this->load->view('templates/admin/menuV');
        $this->load->view('templates/admin/menuH', $dato);
        $this->load->view('productos/actualizaProducto', $data);
        $this->load->view('templates/admin/Fadmin');
    }

    // metodo para actualizar un producto
    public function ProductoActualizado() {
        if ($this->session->userdata('rol') == NULL || $this->session->userdata('rol') != 1) {
            redirect(base_url() . 'iniciar');
        }
        $this->form_validation->set_rules('txtDescripcion', 'Descripción', 'required');
        $this->form_validation->set_rules('txtNombProd', 'Producto', 'required');
        $this->form_validation->set_rules('txtMinimo', 'minimo Stock', 'required|integer');
        $this->form_validation->set_rules('txtMaximo', 'maximo Stock', 'required|integer|greater_than[' . $this->input->post('txtMinimo') . ']');
        $this->form_validation->set_rules('txtExits', 'existencias', 'required|integer|less_than[' . $this->input->post('txtMaximo') . ']');
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('numeric', 'Ingrese numeros en el campo %s ');
        $this->form_validation->set_message('integer', 'Ingrese numeros en el campo %s ');
        $this->form_validation->set_message('is_unique', 'la información de %s ya existe por favor ingrese nueva información ');
        $this->form_validation->set_message('min_length', 'El %s  debe tener 13 numeros');
        $this->form_validation->set_message('greater_than', 'el maximo stock debe ser mayor que el minimo stock');
        $this->form_validation->set_message('less_than', 'las existencias deben ser menores que el maximo stock ');
        if ($this->form_validation->run() === FALSE) {
            $this->editar();
        } else {
            $id = $this->uri->segment(3);
            $producto_a_actualizar = array(
                'DescripcionProducto' => strip_tags(trim($this->input->post('txtDescripcion'))),
                'NombreProducto' => strip_tags(trim($this->input->post('txtNombProd'))),
                'minimoStock' => $this->input->post('txtMinimo'),
                'MaximoStock' => $this->input->post('txtMaximo'),
                'Existencias' => $this->input->post('txtExits'),
                'Subcategoria_idSubcategoria' => $this->input->post('subcategoria')
            );
            $this->productos_model->actualizarProducto($id, $producto_a_actualizar);
            redirect('producto');
        }
    }

    
}
