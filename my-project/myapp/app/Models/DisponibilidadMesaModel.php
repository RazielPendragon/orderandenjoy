<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\DisponibilidadMesaEntity;
class DisponibilidadMesaModel extends Model
{
    protected $table = 'DisponibilidadMesa';
    protected $primaryKey = 'disponibilidad_id';
    
    protected $allowedFields = ['disponibilidad_id', 'dia_reserva', 'mesa_id'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\DisponibilidadMesaEntity';

    public function  eliminar(DisponibilidadMesaEntity $unMesaDisponible){
        $this->delete($unMesaDisponible->disponibilidad_id);
    }

    public function actualizar (DisponibilidadMesaEntity $unMesaDisponible){
        $parametros = [
            'dia_reserva' => $unMesaDisponible->dia_reserva,
            'mesa_id' => $unMesaDisponible->mesa_id,
        ]
        ;

        $this->update($unMesaDisponible->disponibilidad_id,$parametros);
    }

    public function todEs($mesa_id){
        return $this->where('mesa_id',$mesa_id)->orderBy('dia_reserva', 'DESC')->findAll(); 
    }
    public function soloConA(){
        $b = $this->builder();
        $b->like('dia_reserva','A'); // esto es concierto_nombre like '%A%'
        $b->orderBy('dia_reserva', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\DisponibilidadMesaEntity');
    }

}