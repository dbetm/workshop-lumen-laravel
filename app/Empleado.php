<?php
namespace App;

use Illuminate\Database\Eloquent\Model;


class Empleado extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'nombre',
      'usuario',
      'clave',
      'idCreador'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
      'clave'
    ];
}

?>
