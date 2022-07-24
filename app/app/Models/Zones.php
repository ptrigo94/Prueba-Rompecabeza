<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $countries_country_id
 * @property int    $territory
 * @property int    $order
 * @property string $name
 * @property string $iso_code
 */
class Zones extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'zones';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'countries_country_id', 'name', 'iso_code', 'territory', 'order'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'countries_country_id' => 'int', 'name' => 'string', 'iso_code' => 'string', 'territory' => 'int', 'order' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
