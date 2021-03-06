<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GestacionalTegumentar extends Model
{
	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'gestacional_tegumentars';
	 
	/**
	 * Retorna o pai 
	 *
	 * @var gestacional
	 */
	public function gestacional() {
		return $this->belongsTo ( 'App\Models\AreaGestacional' );
	} 
}
