<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicamento
 *
 * @property $id
 * @property $nombre
 * @property $cantidad
 * @property $precio
 * @property $fechaCaducidad
 * @property $disponible
 * @property $laboratorio_id
 * @property $sitio_id
 * @property $presentacion_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Laboratorio $laboratorio
 * @property Presentacione $presentacione
 * @property Sitio $sitio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicamento extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cantidad','precio','fechaCaducidad','disponible','laboratorio_id','sitio_id','presentacion_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function laboratorio()
    {
        return $this->hasOne('App\Models\Laboratorio', 'id', 'laboratorio_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function presentacione()
    {
        return $this->hasOne('App\Models\Presentacione', 'id', 'presentacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sitio()
    {
        return $this->hasOne('App\Models\Sitio', 'id', 'sitio_id');
    }
    

}
