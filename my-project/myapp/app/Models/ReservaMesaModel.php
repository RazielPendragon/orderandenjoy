<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\ReservaMesaEntity;

class ReservaMesaModel extends Model
{
    protected $table = 'Reserva';
    protected $primaryKey = 'reserva_id';
    
    protected $allowedFields = ['reserva_id','cantidad_personas', 'comensal_id', 'hora_id'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\ReservaMesaEntity'; 

    public function  eliminar(ReservaMesaEntity $unaReserva){
        $this->delete($unaReserva->id);
    }



    public function todos($comensal_id){
        return $this->where('comensal_id',$comensal_id)->orderBy('hora_id', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }


}