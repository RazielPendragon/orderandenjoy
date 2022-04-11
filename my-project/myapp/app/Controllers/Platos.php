<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Plato;
class Platos extends Controller{

    public function index(){

        $plato= new Plato();
        $datos['platos']= $plato->orderBy('id_productos','ASC')->findAll;

        return view('Platos/listar',$datos);
    }

}