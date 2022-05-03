<?php

namespace App\Controllers;

use App\Models\RegistroComensalModel;
use App\Models\UsuarioComensalModel;
class LoginComensal extends BaseController
{
    public function index(){
        // Pal Home
        return view('loginComensal/index');
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
        $correo=$_POST['el_correo'];
        $clave=$_POST['la_correo'];
        // Como swbe funcioanr
        // ** Recueprar los datos 
        // ** Buscar el usr en la bd (existe?)
        // ** Valdiar que la passw del usr esta ok 
        // ==> Guardar en la sesion

        // Por mientras
        // buscamos el usr por PK

        // Dejamos el USR en Session ()        
        // ** Buscamos el usuario
        $model = new UsuarioComensalModel();
        $usuario = $model->usuarioPorCorreo($correo,$clave);
        // Lo poenmos en sesion
        session_start();
        $_SESSION['USR']= $usuario;
        // Pal Home!!!
        if ($usuario){
            return $this->index();
        }
        else {
            return view('loginComensal/login01Formulario');
        }
    }
    public function volver()
    {
        session_start();
        return $this->index();
    }

    public function logout(){
        // Sacamos el USR de la Session

        //Pal Home
        return $this->index();
    }

}