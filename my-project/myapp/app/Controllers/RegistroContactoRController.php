<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\RegistroContactoModel;
use App\Entities\RegistroContactoEntity;
use App\Models\UsuarioModel;
//
class RegistroContactoRController extends Controller
{

    public function contactoFormulario(){
        return view('RegistroContactoR/contactoFormulario');
    }
    public function cancelar(){
        return view('login/formaUsuario'); //FUNCION MAL, ARREGLAR
    }

    public function index(){
        // Obtenemos la clase del Model que controla los conciertos
        $mod = new RegistroContactoModel();
        // Buscamos los conciertos
        $contactos = $mod->todos();
        // UN EJEMPLO PARA MAS ADELANTE
        //$conciertos = $mod->soloConA();
        
        // Ponemos en la 'data transiente' la data que queremos mostrar
        $data['contactos'] = $contactos;
        // Vamos a la vista ... pero con los datos!!!
        return view('RegistroContactoR/lista',$data);
    }
    private function recuperauser($unId){
        // Obtenemos la clase del Model que controla los conciertos
        $mod = new RegistroComensalModel();
        // Buscamos el Concierto por la PK
        $contactos = $mod->find($unId);
        // Dejamos el concierto la 'data transiente'
        $laData['contacto'] = $contactos;
        return $laData;
    }
    public function ver($id){
        // 
        $data = $this->recuperauser($id);
        //Vamos a la vista
        return view('RegistroContacto/ver',$data);
    }
    public function agregarContactoBaseDato(){  
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
     $unRegistroContacto = new RegistroContacto();
     $unRegistroContacto->nombreCompleto =  $this->request->getVar('nombreCompleto');
     $unRegistroContacto->razonSocial =  $this->request->getVar('razonSocial');
     $unRegistroContacto->rutRestaurante =  $this->request->getVar('rutRestaurante');
     $unRegistroContacto->nombreFantasia =  $this->request->getVar('nombreFantasia');
     $unRegistroContacto->correoContacto =  $this->request->getVar('correoContacto');
     $unRegistroContacto->cuidad =  $this->request->getVar('ciudad');
     $unRegistroContacto->comuna =  $this->request->getVar('comuna');
     $unRegistroContacto->direccion =  $this->request->getVar('direccion');
     $unRegistroContacto->contactoTelefono =  $this->request->getVar('contactoTelefono');
     // Obtenemos la clase del Model que controla los conciertos
     $mod = new RegistroContactoModel();
     // MAndamos la Transacciòn ala Base de DAtos
     $mod->save($unRegistroContacto);
     //
     return $this->index();
    }
}