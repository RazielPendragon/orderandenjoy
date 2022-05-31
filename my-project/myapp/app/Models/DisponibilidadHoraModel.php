<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\DisponibilidadHoraEntity;
class DisponibilidadHoraModel extends Model
{
    protected $table = 'DisponibilidadHora';
    protected $primaryKey = 'hora_id';
    
    protected $allowedFields = ['hora_id', 'hora', 'disponibilidad_id'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\DisponibilidadHoraEntity';

    public function  eliminar(DisponibilidadHoraEntity $unHoraDisponible){
        $this->delete($unHoraDisponible->hora_id);
    }

    public function actualizar (DisponibilidadHoraEntity $unMesaDisponible){
        $parametros = [
            'hora' => $unHoraDisponible->dia_reserva,
            'disponibilidad_id' => $unHoraDisponible->mesa_id,
        ]
        ;

        $this->update($unHoraDisponible->disponibilidad_id,$parametros);
    }

    public function todos($disponibilidad_id){
        return $this->where('hora_id',$disponibilidad_id)->orderBy('hora', 'DESC')->findAll(); 
    }
}