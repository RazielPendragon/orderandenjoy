<?php

namespace App\Controllers;

use CodeIgniter\Controller;
//
use App\Models\MesaModel;
use App\Entities\MesaEntity;

class MesaRestauranteController extends BaseController
{
    public function lista()
    {   $mod = new MesaModel();
        // Buscamos las mesas
        $mesas = $mod->todos();
        // UN EJEMPLO PARA MAS  ADELANTE
        //$mesa = $mod->soloConA();
        
        // Ponemos en la 'data transiente' la data que queremos mostrar
        $data['registros'] = $mesas;
        return view('MesaRestaurante/lista', $data);
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
