<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\RegistroContactoModel;
use App\Entities\RegistroContacto;
//
class RegistroContactoCrud extends Controller
{
public function index(){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new RegistroContactoModel();
    // Buscamos los conciertos
    $usuarios = $mod->todos();
    // UN EJEMPLO PARA MAS ADELANTE
    //$conciertos = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $usuarios;
    // Vamos a la vista ... pero con los datos!!!
    return view('RegistroContacto/lista',$data);
}

private function recuperauser($unId){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new RegistroContactoModel();
    // Buscamos el Concierto por la PK
    $usuarios = $mod->find($unId);
    // Dejamos el concierto la 'data transiente'
    $laData['registro'] = $usuarios;
    return $laData;
}

public function ver($id){
    // 
    $data = $this->recuperauser($id);
    //Vamos a la vista
    return view('RegistroContacto/ver',$data);
}

public function agregar01Formulario(){
    return view('RegistroContacto/agregar01Formulario');
}

public function agregar02Continuar(){
      
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unRegistro = new RegistroContacto();
    $unRegistro->NombreCompleto =  $this->request->getVar('NombreCompleto');
    $unRegistro->RazonSocial =  $this->request->getVar('RazonSocial');
    $unRegistro->NombreFantasia =  $this->request->getVar('NombreFantasia');
    $unRegistro->ContactoCuidad =  $this->request->getVar('ContactoCuidad');
    $unRegistro->ContactoComuna =  $this->request->getVar('ContactoComuna');
    $unRegistro->ContactoDireccion =  $this->request->getVar('ContactoDireccion');
    $unRegistro->correo =  $this->request->getVar('correo');
    $unRegistro->clave =  $this->request->getVar('clave');
    $unRegistro->telefono =  $this->request->getVar('telefono');

    // Obtenemos la clase del Model que controla los conciertos
    $mod = new RegistroContactoModel();
    // MAndamos la Transacciòn ala Base de DAtos
    $mod->save($unRegistro);
    //
    return $this->index();
    
   
}


public function editar01Formulario($id){
    $data = $this->recuperauser($id);
    //Vamos a la vista
    return view('RegistroContacto/editar01Formulario',$data);
}

public function editar02Continuar(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unRegistro = new RegistroContacto();
    $unRegistro->NombreCompleto =  $this->request->getVar('Nombre Completo');
    $unRegistro->correo =  $this->request->getVar('correo');
    $unRegistro->clave =  $this->request->getVar('clave');
    $unRegistro->telefono =  $this->request->getVar('telefono');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new RegistroContactoModel();
    // Mandamos la Transacciòn ala Base de DAtos
    $mod->actualziar($unRegistro);
    // vuelve al inicio
   return $this->index();
}

public function eliminar01Formulario($id){
    $data = $this->recuperauser($id);
    //Vamos a la vista
    return view('RegistroContacto/eliminar',$data);
}

 public function eliminar02Continuar(){
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
     $unRegistro = new RegistroContacto();
     $unRegistro->id = $this->request->getVar('id');
     // Obtenemos la clase del Model que controla los conciertos
     $mod = new RegistroContactoModel();
     // Mandamos la Transacciòn ala Base de DAtos
     $mod->eliminar($unRegistro);   
     //Home
     return $this->index();
 }

 public function cancelar(){
    return view('loginContacto/login01Formulario'); //boton estaba bien, já
 }

}