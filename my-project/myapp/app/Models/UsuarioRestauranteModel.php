<?php 
namespace App\Models;
//use CodeIgniter\Model;
//use App\Entities\AdministradorEntity;
//class UsuarioRestauranteModel extends Model
//{
//   protected $table = 'UsuarioRestaurante';
//    protected $primaryKey = 'usuario_restaurante_id';
    
//    protected $allowedFields = ['correo_restaurante', 'contraseña_restaurante'];

    // Tipo de dato a devolver
//    protected $returnType = 'App\Entities\AdministradorEntity'; 

//    public function  eliminar(UsuarioEntity $unUsuarioR){
//        $this->delete($unUsuarioR->id);
//    }

//   public function actualziar (UsuarioEntity $unUsuarioR){
//        $parametros = [
//            'correo_restaurante' => $unUsuarioR->correo,
//            'clave_restaurante' => $unUsuarioR->clave          
//        ]
//        ;

//        $this->update($unUsuarioR->id,$parametros);
//    }

//    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
//        return $this->findAll();
//     }

//    public function  unUsuarioR(Int $pk){
//        $unUsuarioR = $this->find($pk);
//        error_log(gettype($unUsuarioR));
//        return $unUsuarioR;
//    }

//    public function usuarioPorCorreo($unCorreo,$unaClave){
        // Instancia de builder SQL
//        $unBuilder = $this->builder();
        // Que el correo sea el valor que quiero
//        $unBuilder->where('correo_estaurante',$unCorreo); //
//        $unBuilder->where('contraseña_restaurante',$unaClave); 
//        $consulta = $unBuilder->get();
//        return $consulta->getCustomResultObject('App\Entities\AdministradorEntity');
//    }
//}