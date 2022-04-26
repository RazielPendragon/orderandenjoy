<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\MesaEntity;
class MesaModel extends Model
{
    protected $table = 'Mesa';
    protected $primaryKey = ['mesa_id', 'dia_reserva'];
    
    protected $allowedFields = ['mesa_id', 'n_mesa', 'estado_mesa', 'capacidad_mesa','dia_reserva','restaurantes_id'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\MesaEntity';

    public function  eliminar(MesaEntity $unMesa){
        $this->delete($unMesa->id);
    }

    public function actualizar (MesaEntity $unMesa){
        $parametros = [
            'n_mesa' => $$unMesa->n_mesa,
            'estado_mesa' => $unMesa->estado_mesa,
            'capacidad_mesa' => $unMesa->capacidad_mesa,
            'dia_reserva' => $unMesa->dia_reserva,
            'restaurante_id' => $unMesa->restaurante,

        ]
        ;

        $this->update($unMesa->id,$parametros);
    }

    public function todos(){
        return $this->where('restaurantes_id',$id)->orderBy('n_mesa', 'DESC')->findAll(); 
    }
    public function soloConA(){
        $b = $this->builder();
        $b->like('n_mesa','A'); // esto es concierto_nombre like '%A%'
        $b->orderBy('n_mesa', 'ASC');
        $consulta = $b->get();
        return $consulta->getCustomResultObject('App\Entities\MesaEntity');
    }

}

