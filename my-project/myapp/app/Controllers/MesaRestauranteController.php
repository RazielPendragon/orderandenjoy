<?php

namespace App\Controllers;

class MesaRestauranteController extends BaseController
{
    public function lista()
    {
        return view('MesaRestaurante/lista');
    }
//en la lista habra un agregar formulario
    public function agregarFormulario(){
        return view('MesaRestaurante/agregarFormulario');

    } 

    public function agregarBaseDatos(){
        // Mandar los datos a la BD

        //Mostrar la lista de mesa
        return $this->lista();
    }
//en la lista habra un editar formulario
    public function editarFormulario()
    {
        return view('MesaRestaurante/editarFormulario');
    }
//en la lista habra opcion de editar capacidad
    public function editarBaseDato()
    {
        return $this->lista();
    }

    
}
