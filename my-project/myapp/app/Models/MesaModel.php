<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Entities\MesaEntity;
class MesaModel extends Model
{
    protected $table = 'Mesa';
    protected $primaryKey = ['mesa_id', 'dia_reserva'];
    
    protected $allowedFields = ['mesa_id', 'n_mesa', 'estado_mesa', 'capacidad_mesa','restaurantes_id','dia_reserva'];

    // Tipo de dato a devolver
    protected $returnType = 'App\Entities\MesaEntity';

    public function  eliminar(MesaEntity $unaMesa){
        $this->delete($unaMesa->id);
    }

    public function actualizar (MesaEntity $unaMesa){
        $parametros = [
            'n_mesa' => $$unaMesa->n_mesa,
            'estado_mesa' => $unaMesa->disponibilidad           
        ]
        ;

        $this->update($unaMesa->id,$parametros);
    }

    public function todos(){
        //return $this->orderBy('n° mesa', 'DESC')->findAll(
        return $this->findAll();
     }
     public function  unaMesa(Int $pk){
        $unUsuario = $this->find($pk);
        error_log(gettype($unaMesa));
        return $unaMesa;
    }

}
