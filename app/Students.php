<?php


 //Este archivo es una clase que extiende de la clase Model
 //Aquí se pasa los campos que van a ser administrado por el modelo hacia la
 //base de datos
namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //Clase protegida para declarar los campo llenables
    protected $fillable = ["name", "active"];
}
