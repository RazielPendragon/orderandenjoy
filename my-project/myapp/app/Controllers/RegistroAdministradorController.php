<?php 
namespace App\Controllers;
//
use CodeIgniter\Controller;
//
use App\Models\AdministradorModel;
use App\Entities\AdministradorEntity;
use App\Models\UsuarioRestaurantesModel;
//
class RegistroAdministradorController extends Controller
{

    public function administradorFormulario(){
        return view('RegistroAdministrador/administradorFormulario');
    }
    public function cancelar(){
        return view('login/formaUsuario'); //FUNCION MAL, ARREGLAR!!!!!!!
    }

    public function index(){
        // Obtenemos la clase del Model que controla los conciertos
        $mod = new AdministradorModel();
        // Buscamos los conciertos
        $usuariosRestaurante = $mod->todos();
        // UN EJEMPLO PARA MAS ADELANTE
        //$conciertos = $mod->soloConA();
        
        // Ponemos en la 'data transiente' la data que queremos mostrar
        $data['registrosR'] = $usuariosRestaurante;
        // Vamos a la vista ... pero con los datos!!!
        return view('RegistroAdministrador/lista',$data);
    }
    private function recuperauser($unId){
        // Obtenemos la clase del Model que controla los conciertos
        $mod = new AdministradorlModel();
        // Buscamos el Concierto por la PK
        $usuariosRestaurante = $mod->find($unId);
        // Dejamos el concierto la 'data transiente'
        $laData['registroR'] = $usuariosRestaurante;
        return $laData;
    }
    public function ver($id){
        // 
        $data = $this->recuperauser($id);
        //Vamos a la vista
        return view('RegistroAdministrador/ver',$data);
    }
    public function agregarRestauranteBaseDato(){  
     // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
     $unRestaurante = new RegistroAdministrador();
     $unRestaurante->nombreCompletoRestaurante =  $this->request->getVar('nombreCompletoRestaurante');
     $unRestaurante->cuidadRestaurante =  $this->request->getVar('ciudadRestaurante');
     $unRestaurante->comunaRestaurante =  $this->request->getVar('comunaRestaurante');
     $unRestaurante->direccionRestaurante =  $this->request->getVar('direccionRestaurante');
     $unRestaurante->telefonoRestaurante =  $this->request->getVar('telefonoRestaurante');
     $unRestaurante->correoRestaurante =  $this->request->getVar('correoRestaurante');
     $unRestaurante->contraseñaRestaurante =  $this->request->getVar('contraseñaRestaurante');
     
     // Obtenemos la clase del Model que controla los conciertos
     $mod = new RegistroContactoModel();
     // MAndamos la Transacciòn ala Base de DAtos
     $mod->save($unRestaurante);
     //
     return $this->index();
    }
}