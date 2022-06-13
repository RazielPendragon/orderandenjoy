<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\ReservaMenuEntity;

class ReservaMenuModel extends Model
{
    protected $table = 'MenuReserva';
    protected $primaryKey = 'menu_reserva_id';
    
    protected $allowedFields = ['menu_reserva_id','menu_id', 'reserva_id','menu_cantidad'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\ReservaMenuEntity'; 

    public function  eliminar(ReservaMenuEntity $unMenuReserva){
        $this->delete($unMenuReserva->id);
    }

    public function todos($comensal_id){
        return $this->where('comensal_id',$comensal_id)->orderBy('menu_reserva_id', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }


}