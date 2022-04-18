<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\MenuModel;
use App\Entities\MenuEntity;
//
class MenuCrud extends Controller
{
public function index($id){
    // Obtenemos la clase del Model que controla los Menús
    $mod = new MenuModel();
    // Buscamos los Menús
    $menus = $mod->todEs($id);
    // UN EJEMPLO PARA MASA ADELANTE
    //$menus = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $menus;
    // Vamos a la vista ... pero con los datos!!!
    return view('MenuView/lista',$data);
}

private function recuperaMenu($unId){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new MenuModel();
    // Buscamos el Concierto por la PK
    $menus = $mod->find($unId);
    // Dejamos el concierto la 'data transiente'
    $laData['menu'] = $menus;
    return $laData;
}

public function ver($id){
    // 
    $data = $this->recuperaMenu($id);
    //Vamos a la vista
    return view('Menuview/ver',$data);
}

public function agregar01Formulario(){
    return view('Menuview/agregar01Formulario');
}

public function agregar02Continuar(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unMenu = new MenuEntity();
    $unMenu->nombre =  $this->request->getVar('menu');
    $unMenu->descripcion =  $this->request->getVar('descripcion');
    $unMenu->precio =  $this->request->getVar('precio');
    $unMenu->restaurante =  $this->request->getVar('restaurante');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new MenuModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $mod->save($unMenu);
    //
    session_start();
    return $this->index($_SESSION ['USR']->usuario_id);
}

public function editar01Formulario($id){
    $data = $this->recuperaMenu($id);
    //Vamos a la vista
    return view('MenuView/editar01Formulario',$data);
}

public function editar02Continuar(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unMenu = new MenuEntity();
    $unMenu->id = $this->request->getVar('id');
    $unMenu->nombre =  $this->request->getVar('menu');
    $unMenu->descripcion =  $this->request->getVar('descripcion');
    $unMenu->precio =  $this->request->getVar('precio');
    $unMenu->restaurante =  $this->request->getVar('restaurante');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new MenuModel();
    // Mandamos la Transacciòn ala Base de DAtos
    $mod->actualziar($unMenu);
    // vuelve al inicio
    session_start();
   return $this->index($_SESSION ['USR']->usuario_id);
}

public function eliminar01Formulario($id){
    $data = $this->recuperaMenu($id);
    //Vamos a la vista
    return view('MenuView/eliminar',$data);
}

public function eliminar02Continuar(){
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
     $unMenu = new MenuEntity();
     $unMenu->id = $this->request->getVar('id');
     // Obtenemos la clase del Model que controla los conciertos
     $mod = new MenuModel();
     // Mandamos la Transacciòn ala Base de DAtos
     $mod->eliminar($unMenu);   
     //Home
     session_start();
     return $this->index($_SESSION ['USR']->usuario_id);
 }

 public function cancelar(){
    session_start();
    return $this->index($_SESSION ['USR']->usuario_id);
 }

}