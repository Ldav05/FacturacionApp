<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentasSinInformacion extends Model
{
    protected $table = 'producto';
    protected $fillable = ['id','precio','nombre'];
}
