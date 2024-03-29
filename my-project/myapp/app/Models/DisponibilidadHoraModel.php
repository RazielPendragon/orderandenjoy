<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\DisponibilidadHoraEntity;
class DisponibilidadHoraModel extends Model
{
    protected $table = 'DisponibilidadHora';
    protected $primaryKey = 'hora_id';
    
    protected $allowedFields = ['hora_id', 'hora', 'disponibilidad_id', 'reservada'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\DisponibilidadHoraEntity';

    public function  eliminar(DisponibilidadHoraEntity $unHoraDisponible){
        $this->delete($unHoraDisponible->hora_id);
    }

    public function actualizar (DisponibilidadHoraEntity $unHoraDisponible){
        $parametros = [
            'hora' => $unHoraDisponible->dia_reserva,
            'disponibilidad_id' => $unHoraDisponible->mesa_id,
            'reservada' => $unHoraDisponible->reservada,
        ]
        ;

        $this->update($unHoraDisponible->disponibilidad_id,$parametros);
    }

    public function todos($disponibilidad_id){
        return $this->where('disponibilidad_id',$disponibilidad_id)->where('reservada',0)->orderBy('hora', 'DESC')->findAll(); 

    }
    public function soloConA(){
        $b = $this->builder();
        $b->like('hora','A'); // esto es concierto_nombre like '%A%'
        $b->orderBy('hora', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\DisponibilidadHoraEntity');
    }
}