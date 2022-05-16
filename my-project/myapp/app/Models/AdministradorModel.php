<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\AdministradorEntity;
class AdministradorModel extends Model
{
    protected $table = 'UsuarioRestaurante';
    protected $primaryKey = 'usuario_restaurante_id';
    
    protected $allowedFields = ['nombre_completo','cuidad','comuna','direccion','telefono','correo_restaurante','contraseña_restaurante'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\AdministradorEntity';

    public function  eliminar(AdministradorEntity $unRestaurante){
        $this->delete($unRetaurante->id);
    }

    public function actualizar (AdministradorEntity $unRestaurante){
        $parametros = [
        
            'nombre_completo' => $unRestaurante->nombreCompletoRestaurante,
            'cuidad' => $unRestaurante->cuidadRestaurante,
            'comuna' => $unRestaurante->comunaRestaurante,
            'direccion' => $unRestaurante->direccionRestaurante,
            'telefono' => $unRestaurante->telefonoRestaurante,
            'correo_restautante' => $unRestaurante->correoRestaurante,
            'contraseña_restaurante' => $unRestaurante->contraseñaRestaurante,

        ]
        ;

        $this->update($unRestaurante->id,$parametros);
    }

    public function todos(){
        return $this->where('usuarioRestaurante_id',$id)->orderBy('nombre_completo', 'DESC')->findAll(); 
    }
    public function soloConA(){
        $b = $this->builder();
        $b->like('nombre_completo','A'); 
        $b->orderBy('nombre_completo', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\AdministradorEntity');
    }

}

    