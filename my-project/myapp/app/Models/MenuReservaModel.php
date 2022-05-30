<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\MenuReservaEntity;
class MenuReservaModel extends Model
{
    protected $table = 'MenuReserva';
    protected $primaryKey = 'menu_reserva_id';
    
    protected $allowedFields = ['menu_reserva_id','menu_id', 'reserva_id'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\MenuReservaEntity'; 

    public function  eliminar(MenuReservaEntity $unMenuReserva){
        $this->delete($unMenuReserva->id);
    }

    public function actualziar (MenuReservaEntity $unMenuReserva){
        /*
        // Escribiendo la consulta via "keys"
        $sql_update = "update conciertos set concierto_nombre = :nombre:, concierto_ubicacion= :ubicacion: where concierto_id =:id:";
        $parametros = [
            'nombre' => $unConcierto->nombre,
            'ubicacion' => $unConcierto->ubicacion,
            'id' => $unConcierto->id
        ]
        ;
        if (! 
            $this->db->query(
                $sql_update,
                $parametros
            )
        ) {
            $error = $db->error(); 
            error_log($error);
        }
        
        */

        /*
        // Aplicando el SQL Builder
        $parametros = [
            'concierto_nombre' => $unConcierto->nombre,
            'concierto_ubicacion' => $unConcierto->ubicacion
        ]
        ;
        $this->where('concierto_id',$unConcierto->id)
            ->set($parametros)
            ->update();
        */  

        // Abusando del framework porque estamos actualziando por llave priamria
        $parametros = [
            'menu_id' => $unMenuReserva->menu_id,
            'reserva_id' => $unMenuReserva->reserva_id,           
        ]
        ;

        $this->update($unMenuReserva->menu_reserva_id,$parametros);
    }

    public function todEs($menu_reserva_id){
        return $this->where('menu_reserva_id',$menu_reserva_id)->orderBy('menu_id', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }

    public function soloConA(){
        $b = $this->builder();
        $b->like('menu_id','A'); // esto es concierto_nombre like '%A%'
        $b->orderBy('menu_id', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\MenuReservaEntity');
    }
}