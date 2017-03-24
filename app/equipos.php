<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    protected $table = 'equipos';
    protected $fillable =['Fecha_de_ingreso', 'Marca', 'Numero_de_equipo', 'Codigo_de_mouse', 'Codigo_de_teclado', 'Codigo_de_pantalla', 'Codigo_del_cpu', 'Descripcion', 'fk_id_ambiente' ];
    public $timestamps = false;
}
