<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class NavegarMesaDatosController extends Controller{
    public function lista(){
        return view('base/lista');
    }

   

    public function editarFormulario(){
        return view('base/editarFormulario');
    }

    public function editarBaseDatos(){
       //valida datos 
       // manda la tx
       // vuelve al inicio
       return view('base/lista');
    }


    public function eliminar(){
        return view('base/eliminar');
    }


    public function eliminarFormulatio(){
        //valida datos 
        // manda la tx
        // vuelve al inicio
        return view('base/lista');
     }
 

}