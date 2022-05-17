<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\RegistroContacto;
class RegistroContactoModel extends Model
{
    protected $table = 'UsuarioContacto';
    protected $primaryKey = 'usuario_contacto_id';
    
    protected $allowedFields = ['usuario_contacto_nombre_completo','usuario_contacto_razon_social','usuario_contacto_nombre_fantasia','usuario_contacto_cuidad','usuario_contacto_comuna','usuario_contacto_direccion','usuario_contacto_telefono','usuario_contacto_correo', 'usuario_contacto_clave'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\RegistroContacto'; 

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
        $unBuilder->where('usuario_contacto_correo',$unCorreo); //
        $unBuilder->where('usuario_contacto_clave',$unaClave); 
        $consulta = $unBuilder->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroContacto');
    }
}