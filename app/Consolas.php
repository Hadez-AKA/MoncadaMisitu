<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consolas extends Model
{
    protected $table ='consolas';

    public static function imagenes($id)
    {
        $imagenes = Imagenes::select('ruta')->where('idProductoImagen_fk', '=', $id)->get();

        return $imagenes;
    }
}
