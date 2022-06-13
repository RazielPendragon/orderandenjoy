<?php

namespace App\Controllers;
use App\Models\RegistroComensalModel;
use App\Models\UsuarioComensalModel;
use App\Models\MenuModel;
use App\Models\MesaModel;
use App\Models\DisponibilidadHoraModel;
use App\Models\DisponibilidadMesaModel;
use App\Models\UsuarioRestauranteModel;
use App\Models\ReservaMesaModel;
use App\Models\ReservaMenuModel;
use App\Entities\ReservaMesaEntity;
use App\Entities\ReservaMenuEntity;

class LoginComensal extends BaseController
{
    public function index(){
        // Obtenemos la clase del Model que controla los Restaurantes Y los menus
        $mod = new UsuarioRestauranteModel(); //mod es la variable a modelo
       
        // Buscamos los restaurantes con la funcion todos
        $restaurantes = $mod->todos();
        // abrimos un foreach donde decimos que
        $data ['registros'] = $restaurantes;
        return view('loginComensal/index',$data);
    
    }

    public function login01Formulario()
    {
        // Como Debe funcionar
        // ** Mosrar el formulario de Login

        // Por mientras
        // ** Lista de usaurios desde la BD
        $model = new RegistroComensalModel();
        $usuarios = $model->todos();
        $data['registros'] = $usuarios;
        return view('loginComensal/login01Formulario',$data);
    }

    public function login02Validar()
    {
        // Como debe funcioanr-
        // ** Recueprar los datos
        $unCorreo = $_POST["el_correo"];
        $unaClave = $_POST["la_clave"];
        
        // ** Buscar el usr en la bd (existe?)
        // ** Valdiar que la passw del usr esta ok 
        // ==> Guardar en la sesion

        // Por mientras
        // buscamos el usr por PK

        // Dejamos el USR en Session ()        
        // ** Buscamos el usuario
        $model = new UsuarioComensalModel();
        $usuario = $model->usuarioPorCorreo($unCorreo,$unaClave);
        // **$clave = $model->usuarioPorclave($unaClave);

        if (sizeof($usuario) ==1 ) {
            session_start();
            $_SESSION['USR_C']= $usuario[0];
         // **   $_SESSION['USR']= $clave[0];
            return redirect()-> route ('Comensal-home');
    
        }
        else{
           
            echo "Correo electrónico y/o contraseña inválidos.";
            return $this->login01Formulario();  
            
        }  
    }
    public function volver()
    {
        session_start();
        return $this->index();
    }

    public function logout(){
        // Sacamos el USR de la Session
        session_start();
        session_unset();
        //Pal Home
        return view('welcome_message');
    }

    public function mesaVer($id_restaurante){
        //guardamos seleccion de restaurante 
        session_start();
        $modeloRestaurante = new UsuarioRestauranteModel();
        $unRestaurante = $modeloRestaurante ->find($id_restaurante);
        $_SESSION['restaurante'] = $unRestaurante;
        // Obtenemos la clase del Model que controla los Restaurantes Y los menus
        $modeloMesa = new MesaModel(); //modelo de los Días
        $mesas = $modeloMesa -> todos ($id_restaurante);
        $data ['registros'] = $mesas;
        return view('loginComensal/mesaVer',$data);
    }
    public function diasVer($mesa){
        //guardamos seleccion de mesa
        session_start();
        $modeloMesa = new MesaModel();
        $unaMesa = $modeloMesa ->find($mesa);
        $_SESSION['mesa'] = $unaMesa;
        // Obtenemos la clase del Model que controla los Restaurantes Y los menus
        $modeloDias = new DisponibilidadMesaModel(); //modelo de los Días
        $dias = $modeloDias -> todEs ($mesa);
        $data ['registros'] = $dias;
        return view('loginComensal/diasVer',$data);
    }
    public function horasVer($disponibilidad_id){
        //guardamos seleccion de dias 
        session_start();
        $modeloDias = new DisponibilidadMesaModel();
        $unDia = $modeloDias ->find($disponibilidad_id);
        $_SESSION['dia'] = $unDia;
        // Obtenemos la clase del Model que controla los Restaurantes Y los menus
        $modeloHoras = new DisponibilidadHoraModel(); //modelo de los Días
        $horas = $modeloHoras -> todos ($disponibilidad_id);
        $data ['registros'] = $horas;
        return view('loginComensal/horasVer',$data);
    }

    public function menuVer($hora_id){
        //guardamos seleccion de dias
        session_start();
        $modeloHoras = new DisponibilidadHoraModel();
        $unaHora = $modeloHoras ->find($hora_id);
        $_SESSION['hora'] = $unaHora;
        $id_restaurante = $_SESSION ['restaurante'] -> id_restaurante;
        // Obtenemos la clase del Model que controla los Restaurantes Y los menus
        $modeloMenu = new MenuModel(); //modelo de los Días
        $menus = $modeloMenu -> todEs ($id_restaurante);
        $data ['registros'] = $menus;
        return view('loginComensal/menuVer',$data);
    }

    public function agregarReserva(){
      
        // Recuperamos los datos desde el formulario (porque se enviaron por un POST y Request)
        $unaReserva = new ReservaMesaEntity();
        $unaReserva->cantidad_personas =  $this->request->getVar('cantidad');
        $unaReserva->comensal_id =  $this->request->getVar('ComensalId');
        $unaReserva->hora_id =  $this->request->getVar('HoraId');
        // Obtenemos la clase del Model que controla los conciertos
        $mod = new ReservaMesaModel();
        // MAndamos la Transacciòn ala Base de DAtos
        $reserva_id=$mod->insert($unaReserva);
        // reserva menu
        $menu=  $this->request->getVar('menu');

        foreach($menu as $menu_id => $menu_cantidad) {
            if ($menu_cantidad >0) {
            $unMenuReserva = new ReservaMenuEntity();
            $unMenuReserva->menu_id = $menu_id ;
            $unMenuReserva->reserva_id = $reserva_id;
            $unMenuReserva->menu_cantidad = $menu_cantidad;
            // Obtenemos la clase del Model
            $mod = new ReservaMenuModel();
            $mod->save($unMenuReserva);
        }

        }
        $modeloHoras = new DisponibilidadHoraModel();
        $unaHora = $modeloHoras ->find($this->request->getVar('HoraId'));
        $unaHora -> reservada= "1";
        var_dump ($unaHora);
        $modeloHoras -> actualizar ($unaHora);

        return view('loginComensal/reservaLista');
       
    }



}