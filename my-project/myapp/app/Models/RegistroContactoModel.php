<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\RegistroContactoEntity;
class RegistroContactoModel extends Model
{
    protected $table = 'Contactos';
    protected $primaryKey = 'contacto_id';
    
    protected $allowedFields = ['nombre_completo', 'razon_social','rut', 'nombre_fantasia','cuidad','comuna','direccion','contacto_telefono'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\RegistroContactoEntity';

    public function  eliminar(RegistroContactoEntity $unRegistroContacto){
        $this->delete($unRegistroContacto->id);
    }

    public function actualizar (RegistroContactoEntity $unRegistroContacto){
        $parametros = [
        
            'nombre_completo' => $unRegistroContacto->nombreCompleto,
            'razon_social' => $unRegistroContacto->razonSocial,
            'rut' => $unRegistroContacto->rutRestaurante,
            'nombre_fantasia' => $unRegistroContacto->nombreFantasia,
            'correo_contacto' => $unRegistroContacto->correoContacto,
            'cuidad' => $unRegistroContacto->cuidad,
            'comuna' => $unRegistroContacto->comuna,
            'direccion' => $unRegistroContacto->direccion,
            'contacto_telefono' => $unRegistroContacto->contactoTelefono,

        ]
        ;

        $this->update($unRegistroContacto->id,$parametros);
    }

    public function todos(){
        return $this->where('contacto_id',$id)->orderBy('nombre_completo', 'DESC')->findAll(); 
    }
    public function soloConA(){
        $b = $this->builder();
        $b->like('nombre_completo','A'); 
        $b->orderBy('nombre_completo', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroContactoEntity');
    }

}

    