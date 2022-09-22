<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo extends Model
{
    use HasFactory;
    protected $table = 'tipos';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre'];
}
