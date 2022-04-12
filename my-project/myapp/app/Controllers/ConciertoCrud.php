<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\ConciertoModel;
use App\Entities\Concierto;
//
class ConciertoCrud extends Controller
{
public function index(){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new ConciertoModel();
    // Buscamos los conciertos
    $conciertos = $mod->todEs();
    // UN EJEMPLO PARA MASA ADELANTE
    //$conciertos = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $conciertos;
    // Vamos a la vista ... pero con los datos!!!
    return view('concierto/lista',$data);
}

private function recuperaConcierto($unId){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new ConciertoModel();
    // Buscamos el Concierto por la PK
    $concierto = $mod->find($unId);
    // Dejamos el concierto la 'data transiente'
    $laData['concierto'] = $concierto;
    return $laData;
}

public function ver($id){
    // 
    $data = $this->recuperaConcierto($id);
    //Vamos a la vista
    return view('concierto/ver',$data);
}

public function agregar01Formulario(){
    return view('concierto/agregar01Formulario');
}

public function agregar02Continuar(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unConcierto = new Concierto();
    $unConcierto->nombre =  $this->request->getVar('concierto');
    $unConcierto->ubicacion =  $this->request->getVar('ubicacion');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new ConciertoModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $mod->save($unConcierto);
    //
    return $this->index();
}

public function editar01Formulario($id){
    $data = $this->recuperaConcierto($id);
    //Vamos a la vista
    return view('concierto/editar01Formulario',$data);
}

public function editar02Continuar(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unConcierto = new Concierto();
    $unConcierto->id = $this->request->getVar('id');
    $unConcierto->nombre =  $this->request->getVar('concierto');
    $unConcierto->ubicacion =  $this->request->getVar('ubicacion');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new ConciertoModel();
    // Mandamos la Transacciòn ala Base de DAtos
    $mod->actualziar($unConcierto);
    // vuelve al inicio
   return $this->index();
}

public function eliminar01Formulario($id){
    $data = $this->recuperaConcierto($id);
    //Vamos a la vista
    return view('concierto/eliminar',$data);
}

public function eliminar02Continuar(){
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
     $unConcierto = new Concierto();
     $unConcierto->id = $this->request->getVar('id');
     // Obtenemos la clase del Model que controla los conciertos
     $mod = new ConciertoModel();
     // Mandamos la Transacciòn ala Base de DAtos
     $mod->eliminar($unConcierto);   
     //Home
     return $this->index();
 }

 public function cancelar(){
    return $this->index();
 }

}