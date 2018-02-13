<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
	protected $fillable =['id','nom','stock'];
    //protected $table = 'Boisson';
    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
    //redéfinir l'id comme le nom d'un autre attribut//
	/*public function getRouteKeyName()
	{
	    return 'code_boisson';
	}*/
}


