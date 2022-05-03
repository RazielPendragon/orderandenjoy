<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\RegistroComensal;
class UsuarioComensalModel extends Model
{
    protected $table = 'UsuarioComensal';
    protected $primaryKey = 'usuario_comensal_id';
    
    protected $allowedFields = ['usuario_comensal_correo', 'usuario_comensal_clave'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\RegistroComensal'; 

    public function  eliminar(UsuarioEntity $unUsuario){
        $this->delete($unUsuario->id);
    }

    public function actualziar (UsuarioEntity $unUsuario){
        $parametros = [
            'usuario_comensal_correo' => $unUsuario->correo,
            'usuario_comensal_clave' => $unUsuario->clave          
        ]
        ;

        $this->update($unUsuario->id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }

    public function  unUsuario(Int $pk){
        $unUsuario = $this->find($pk);
        error_log(gettype($unUsuario));
        return $unUsuario;
    }

    public function usuarioPorCorreo($unCorreo,$unaClave){
        // Instancia de builder SQL
        $unBuilder = $this->builder();
        // Que el correo sea el valor que quiero
        $unBuilder->where('usuario_comensal_correo',$unCorreo); //
        $unBuilder->where('usuario_comensal_clave',$unaClave); 
        $consulta = $unBuilder->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroComensal');
    }
}