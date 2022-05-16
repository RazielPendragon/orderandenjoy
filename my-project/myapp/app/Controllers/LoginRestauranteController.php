<?php

namespace App\Controllers;

//use App\Models\AdministradorModel;
//use App\Models\UsuarioRestauranteModel; 
//class LoginRestauranteController extends BaseController
//{
//    public function index(){
        // Pal Home********
//      return view('loginRestaurante/index');
//     }
//     public function loginFormularioRestaurante()
//     {
         // Como Debe funcionar********
         // ** Mosrar el formulario de Login********
// 
         // Por mientras********
        // ** Lista de usaurios desde la BD********
//         $model = new AdministradorModel();
//         $usuariosRestaurante = $model->todos();
//         $data['registrosR'] = $usuariosRestaurante;
//         return view('loginRestaurante/loginFormularioRestaurante',$data);
//     }

//     public function loginValidarRestaurante()
//     {
        // Como debe funcioanr-********
        // ** Recueprar los datos********
//         $unCorreo = $_POST["el_correo"];
//         $unaClave = $_POST["la_clave"];
        
        // ** Buscar el usr en la bd (existe?)********
        // ** Valdiar que la passw del usr esta ok ********
        // ==> Guardar en la sesion********

        // Por mientras********
        // buscamos el usr por PK********

        // Dejamos el USR en Session ()   ********     
        // ** Buscamos el usuario********
//         $model = new UsuarioRestauranteModel();
//         $usuario = $model->usuarioPorCorreo($unCorreo,$unaClave);
        // **$clave = $model->usuarioPorclave($unaClave);********

//         if (sizeof($usuario) ==1 ) {
//             session_start();
//             $_SESSION['USR_C']= $usuario[0];
         // **   $_SESSION['USR']= $clave[0];********
//             return $this->index();
    
//         }
//         else{
           
//             echo "Correo electrónico y/o contraseña inválidos.";
//             return $this->loginFormularioRestaurante();  
            
//         }  
//     }
//     public function volver()
//     {
//         session_start();
//         return $this->index();
//     }

//     public function logout(){
        // Sacamos el USR de la Session********
//         session_start();
//         session_unset();
        //Pal Home********
//         return view('welcome_message');
//     }

// }
