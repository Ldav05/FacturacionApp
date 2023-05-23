<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaCompra extends Model
{
    protected $table = 'factura';
    protected $fillable = ['id','idusuario','idcliente'];

}
