<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sitio
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicamento[] $medicamentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sitio extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicamentos()
    {
        return $this->hasMany('App\Models\Medicamento', 'sitio_id', 'id');
    }
    

}
