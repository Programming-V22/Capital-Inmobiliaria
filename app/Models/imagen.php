<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagen extends Model
{
    use HasFactory;
    protected $table = 'imagens';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_img', 'prioridad', 'id_inmueble'];


    public function inmuebles(){
        return $this->hasOne(inmueble::class,'id','id_inmueble' );
    }
}
