<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\MenuEntity;
class MenuModel extends Model
{
    protected $table = 'Menu';
    protected $primaryKey = 'menu_id';
    
    protected $allowedFields = ['menu_nombre', 'menu_descripcion', 'menu_precio','id_usuarios'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\MenuEntity'; 

    public function  eliminar(MenuEntity $unMenu){
        $this->delete($unMenu->id);
    }

    public function actualziar (MenuEntity $unMenu){
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
            'menu_nombre' => $unMenu->nombre,
            'menu_descripcion' => $unMenu->descripcion,
            'menu_precio' => $unMenu->precio,
            'id_usuarios' => $unMenu->restaurante,            
        ]
        ;

        $this->update($unMenu->id,$parametros);
    }

    public function todEs($id){
        return $this->where('id_usuarios',$id)->orderBy('menu_nombre', 'DESC')->findAll(); // algo asi como select * from CONCIERTOS order by  CONCIERTO_NOMBRE
    }

    public function soloConA(){
        $b = $this->builder();
        $b->like('menu_nombre','A'); // esto es concierto_nombre like '%A%'
        $b->orderBy('menu_nombre', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\MenuEntity');
    }
}