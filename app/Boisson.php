<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
	protected $fillable =['code_boisson','nom_boisson','Prix'];
    //protected $table = 'Boisson';
    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
    //redéfinir l'id comme le nom d'un autre attribut//
    public function getRouteKeyName()
    {
    	return 'code_boisson';
    }
}
