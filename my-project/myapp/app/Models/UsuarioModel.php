<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\UsaurioEntity;
class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'usuario_id';
    
    protected $allowedFields = ['usuario_nombre_completo', 'usuario_correo'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\UsuarioEntity'; 

    public function  eliminar(UsuarioEntity $unUsuario){
        $this->delete($unUsuario->id);
    }

    public function actualziar (UsuarioEntity $unUsuario){
        $parametros = [
            'usuario_nombre_completo' => $unUsuario->nombre,
            'usuario_correo' => $unUsuario->correo            
        ]
        ;

        $this->update($unUsuario->id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('usuario_nombre_completo', 'DESC')->findAll(); 
        return $this->findAll();
     }