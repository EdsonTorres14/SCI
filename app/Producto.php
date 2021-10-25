<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id';
    //creamos un array $fillable y le pasamos los campos que queremos llenar
    protected $fillable = ['nombre', 'descripcion','precio','fechaCompra', 'estado', 'comentarios','categoria_idCategoria','sucursal_idSucursal', 'created_at','update_at'];
}
