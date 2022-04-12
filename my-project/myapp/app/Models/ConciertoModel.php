<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\Concierto;
class ConciertoModel extends Model
{
    protected $table = 'conciertos';
    protected $primaryKey = 'concierto_id';
    
    protected $allowedFields = ['concierto_nombre', 'concierto_ubicacion'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\Concierto'; 

    public function  eliminar(Concierto $unConcierto){
        $this->delete($unConcierto->id);
    }

    public function actualziar (Concierto $unConcierto){
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
            'concierto_nombre' => $unConcierto->nombre,
            'concierto_ubicacion' => $unConcierto->ubicacion            
        ]
        ;

        $this->update($unConcierto->id,$parametros);
    }

    public function todEs(){
        return $this->orderBy('concierto_nombre', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }

    public function soloConA(){
        $b = $this->builder();
        $b->like('concierto_nombre','A'); // esto es concierto_nombre like '%A%'
        $b->orderBy('concierto_nombre', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\Concierto');
    }
}