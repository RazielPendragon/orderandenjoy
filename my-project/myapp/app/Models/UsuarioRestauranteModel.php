<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\RegistroRestaurante;
class UsuarioRestauranteModel extends Model
{
   protected $table = 'UsuarioRestaurante';
    protected $primaryKey = 'usuario_restaurante_id';
    
    protected $allowedFields = ['usuario_restaurante_correo', 'usuario_restaurante_clave'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\RegistroRestaurante'; 

    public function  eliminar(RegistroRestaurante $unUsuarioR){
        $this->delete($unUsuarioR->id);
    }

   public function actualziar (RegistroRestaurante $unUsuarioR){
        $parametros = [
            'usuario_restaurante_correo' => $unUsuarioR->correo,
            'usuario_restaurante_clave' => $unUsuarioR->clave                  
            ]
        ;

        $this->update($unUsuarioR->id,$parametros);
    }

   public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
       return $this->findAll();
     }

    public function  unUsuarioR(Int $pk){
        $unUsuarioR = $this->find($pk);
       error_log(gettype($unUsuarioR));
       return $unUsuarioR;
    }

    public function usuarioPorCorreo($unCorreo,$unaClave){
        // Instancia de builder SQL
        $unBuilder = $this->builder();
        // Que el correo sea el valor que quiero
        $unBuilder->where('usuario_restaurante_correo',$unCorreo); //
        $unBuilder->where('usuario_restaurante_clave',$unaClave); 
       $consulta = $unBuilder->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroRestaurante');
    }
}