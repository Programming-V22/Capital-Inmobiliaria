<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lista_visita extends Model
{
    use HasFactory;
    protected $table = 'lista_visitas';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'id_inmueble', 'fecha_visita', 'id_cliente'];


    //!arreglar esta linea de codigo
    public function inmuebles(){
        return $this->belongsTo(inmueble::class,'id_inmueble','id');
    }

    public function cliente(){
        return $this->belongsTo(clientes::class,'id_cliente','id');
    }

}
