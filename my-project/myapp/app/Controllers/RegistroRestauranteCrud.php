<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\RegistroRestauranteModel;
use App\Entities\RegistroRestaurante;
//
class RegistroRestauranteCrud extends Controller
{
public function index(){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new RegistroRestauranteModel();
    // Buscamos los conciertos
    $usuarios = $mod->todos();
    // UN EJEMPLO PARA MAS ADELANTE
    //$conciertos = $mod->soloConA();
    
    // Ponemos en la 'data transiente' la data que queremos mostrar
    $data['registros'] = $usuarios;
    // Vamos a la vista ... pero con los datos!!!
    return view('RegistroRestaurante/lista',$data);
}

private function recuperauser($unId){
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new RegistroRestauranteModel();
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
    return view('RegistroRestaurante/ver',$data);
}

public function agregar01Formulario(){
    return view('RegistroRestaurante/agregar01Formulario');
}

public function agregar02Continuar(){
      
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unRegistro = new RegistroRestaurante();
    $unRegistro->NombreFantasia =  $this->request->getVar('NombreFantasia');
    $unRegistro->RestauranteCiudad =  $this->request->getVar('RestauranteCiudad ');
    error_log($unRegistro->RestauranteCiudad);
    $unRegistro->RestauranteComuna =  $this->request->getVar('RestauranteComuna');
    $unRegistro->RestauranteDireccion =  $this->request->getVar('RestauranteDireccion');
    $unRegistro->telefono =  $this->request->getVar('telefono');
    $unRegistro->correo =  $this->request->getVar('correo');
    $unRegistro->clave =  $this->request->getVar('clave');
    
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new RegistroRestauranteModel();
    // MAndamos la Transacciòn ala Base de DAtos
    error_log('aaaa');
    if (! 
    $mod->save($unRegistro)
    ){
        $error = $mod->db->error();
        error_log($error['message']);
    }
    //
    return $this->index();
    
   
}


public function editar01Formulario($id){
    $data = $this->recuperauser($id);
    //Vamos a la vista
    return view('RegistroRestaurante/editar01Formulario',$data);
}

public function editar02Continuar(){
    // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
    $unRegistro = new RegistroRestaurante();
    $unRegistro->NombreFantasia =  $this->request->getVar('NombreFantasia');
    $unRegistro->RestauranteCiudad =  $this->request->getVar('RestauranteCiudad');
    $unRegistro->RestauranteComuna =  $this->request->getVar('RestauranteComuna');
    $unRegistro->RestauranteDireccion =  $this->request->getVar('RestauranteDireccion');
    $unRegistro->correo =  $this->request->getVar('correo');
    $unRegistro->clave =  $this->request->getVar('clave');
    $unRegistro->telefono =  $this->request->getVar('telefono');
    // Obtenemos la clase del Model que controla los conciertos
    $mod = new RegistroRestauranteModel();
    // Mandamos la Transacciòn ala Base de DAtos
    $mod->actualziar($unRegistro);
    // vuelve al inicio
   return $this->index();
}

public function eliminar01Formulario($id){
    $data = $this->recuperauser($id);
    //Vamos a la vista
    return view('RegistroRestaurante/eliminar',$data);
}

 public function eliminar02Continuar(){
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
     $unRegistro = new RegistroRestaurante();
     $unRegistro->id = $this->request->getVar('id');
     // Obtenemos la clase del Model que controla los conciertos
     $mod = new RegistroRestauranteModel();
     // Mandamos la Transacciòn ala Base de DAtos
     $mod->eliminar($unRegistro);   
     //Home
     return $this->index();
 }

 public function cancelar(){
    return view('xxxxxxxxxxxxxxxxxx'); //arreglar boton
 }

}