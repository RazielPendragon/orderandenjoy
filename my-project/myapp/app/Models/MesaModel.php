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
            'estado_mesa' => $unMesa->disponibilidad           
        ]
        ;

        $this->update($unMesa->id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('n° mesa', 'DESC')->findAll(
        return $this->findAll();
     }
     public function  unMesa(Int $pk){
        $unUsuario = $this->find($pk);
        error_log(gettype($unMesa));
        return $unMesa;
    }

}
