<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\RegistroRestaurante;
class RegistroRestauranteModel extends Model
{
    protected $table = 'UsuarioRestaurante';
                        //UsuarioRestaurante
    protected $primaryKey = 'usuario_restaurante_id';
    
    protected $allowedFields = ['usuario_restaurante_nombre_fantasia', 'usuario_restaurante_ciudad', 'usuario_restaurante_comuna', 'usuario_restaurante_direccion', 'usuario_restaurante_telefono', 'usuario_restaurante_correo','usuario_restaurante_clave'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\RegistroRestaurante'; 

    public function  eliminar(RegistroRestaurante $unRegistro){
        $this->delete($unRegistro->id);
    }

    public function actualziar (RegistroRestaurante $unRegistro){

        $parametros = [
            'usuario_restaurante_nombre_fantasia' => $unRegistro->NombreFantasia,
            'usuario_restaurante_ciudad' => $unRegistro->RestauranteCiudad,  
            'usuario_restaurante_comuna' => $unRegistro->RestauranteComuna,  
            'usuario_restaurante_direccion' => $unRegistro->RestauranteDireccion,
            'usuario_restaurante_telefono' => $unRegistro->telefono,   
            'usuario_restaurante_correo' => $unRegistro->correo,  
            'usuario_restaurante_clave' => $unRegistro->clave,
            
        ];

        $this->update($unRegistro->id,$parametros);
    }

    public function todos(){
        return $this->orderBy('usuario_restaurante_correo', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }
    public function obtenerusuario($correo){
        $b = $this->builder();
        $b->where('usuario_restaurante_correo',$correo);
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroRestaurante'); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }
    public function soloConA(){
        $b = $this->builder();
        $b->like('usuario_restaurante_correo','A'); // esto es concierto_nombre like '%A%'
        $b->orderBy('usuario_restaurante_clave', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\RegistroRestaurante');
    }
}