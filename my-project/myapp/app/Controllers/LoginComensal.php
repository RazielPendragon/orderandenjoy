<?php

namespace App\Controllers;

use App\Models\RegistroComensalModel;
use App\Models\UsuarioComensalModel;
use App\Models\MenuModel;
use App\Models\UsuarioRestauranteModel;
class LoginComensal extends BaseController
{
    public function index(){
        // Obtenemos la clase del Model que controla los Restaurantes Y los menus
        $mod = new UsuarioRestauranteModel(); //mod es la variable a modelo
        $mod2 = new MenuModel(); //mod2 es igual al modelo 2
        // Buscamos los restaurantes con la funcion todos
        $restaurantes = $mod->todos();
        // abrimos un foreach donde decimos que
        foreach ($restaurantes as $r){ //restaurantes es igual a la variable r
            $menus = $mod2->todEs ($r->id_restaurante); // Busca los platos del restaiurante r
            $dataRestaurante['restaurante'] = $r; // luego guardamos los datos del restauirante en un mapa
            $dataRestaurante['menu'] = $menus; // y aqui guardamos los menus en el mismo mapa
            $data['registros'][] = $dataRestaurante; //y aqui lo agregamos al resulatdo
        } 
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
            return $this->index();
    
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

}