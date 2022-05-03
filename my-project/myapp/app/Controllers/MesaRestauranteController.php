<?php

namespace App\Controllers;

use CodeIgniter\Controller;
//
use App\Models\MesaModel;
use App\Entities\MesaEntity;

class MesaRestauranteController extends Controller
{
    public function lista(){
        session_start();
        $usr= $_SESSION['USR'];
       $mod = new MesaModel();
        // Buscamos las mesas
        $mesas = $mod->todos($usr->id);
        // o todEs (?)
        // UN EJEMPLO PARA MAS  ADELANTE
        //$mesa = $mod->soloConA();
        
        // Ponemos en la 'data transiente' la data que queremos mostrar
        $data['registros'] = $mesas;
        return view('MesaRestaurante/lista', $data);
    }
    private function recuperaMesa($unId){
        // Obtenemos la clase del Model que controla las mesas
        $mod = new MesaModel();
        // Buscamos las mesas por la PK
        $mesas = $mod->find($unId);
        // Dejamos las mesas la 'data transiente'
        $laData['mesa'] = $mesas;
        return $laData;
    }

    //en la lista habra un agregar formulario
    public function agregarFormulario(){
        return view('MesaRestaurante/agregarFormulario');

    } 
    public function agregarBaseDatos(){
        // Mandar los datos a la BD
        $unMesa = new MesaEntity();
        $unMesa->nombre_mesa=  $this->request->getVar('n_mesa');
        $unMesa->estado_mesa =  $this->request->getVar('estado');
        $unMesa->capacidad_mesa=  $this->request->getVar('capacidad');
        $unMesa->dia_reserva =  $this->request->getVar('dia_reserva');
        $unMesa->restaurante =  $this->request->getVar('restaurante');
        //
        $mod = new MesaModel();
        //
        $mod->save($unMesa);
        //Mostrar la lista de mesa

        return $this->lista();
        //return $this->index();
    }
//en la lista habra un editar formulario
    public function editarFormulario($id){
        $data = $this->recuperaMesa($id);
        //Vamos a la vista
        return view('MesaRestaurante/editarFormulario',$data);
    }
//en la lista habra opcion de editar capacidad
    public function editarBaseDatos(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unMesa = new MesaEntity();
    $unMesa->mesa= $this->request->getVar('id');
    $unMesa->nombre_mesa =  $this->request->getVar('n_mesa');
    $unMesa->estado_mesa =  $this->request->getVar('estado');
    $unMesa->capacidad_mesa=  $this->request->getVar('capacidad');
    $unMesa->dia_reserva =  $this->request->getVar('dia_reserva');
    $unMesa->restaurante =  $this->request->getVar('restaurante');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new MesaModel();
    // Mandamos la Transacciòn ala Base de DAtos
    $mod->actualizar($unMesa);
    // vuelve al inicio
        return $this->lista();
    } 

    public function eliminarFormulario($id){
        $data = $this->recuperaMesa($id);
        //Vamos a la vista
        return view('MesaRestaurante/eliminarFormulario',$data);
    }
    
    public function eliminarBaseDatos(){
         // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
         $unMesa= new MesaEntity();
         $unMesa->mesa = $this->request->getVar('id');
         // Obtenemos la clase del Model que controla los conciertos
         $mod = new MesaModel();
         // Mandamos la Transacciòn ala Base de DAtos
         $mod->eliminar($unMesa);   
         //Home
         return $this->lista();
     }
    
     public function cancelar(){
        return $this->lista();
     }
    
}
