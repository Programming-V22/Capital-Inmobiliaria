<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inmueble extends Model
{
    use HasFactory;
    protected $table = 'inmuebles';
    protected $primaryKey = 'id';
    protected $fillable = ['fecha', 'precio', 'direccion', 'titulo', 'descripcion', 'inodoros', 'autos', 'cuartos', 'id_tipo','portada'];

    public function tipos1(){
        return $this->belongsTo(tipo::class,'id_tipo','id');
    }




    //!borrado no uso
    /*borrador
    public function clientss(){
        return $this->hasMany(clientes::class,'id');
    }
    */
}
