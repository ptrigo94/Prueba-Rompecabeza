<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $subdivision_1_id
 * @property string $name
 * @property string $region_code
 * @property string $name_region
 * @property string $province_code
 * @property string $district_code
 */
class SubZones extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sub_zones';

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
        'subdivision_1_id', 'name', 'region_code', 'name_region', 'province_code', 'district_code'
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
        'id' => 'int', 'subdivision_1_id' => 'int', 'name' => 'string', 'region_code' => 'string', 'name_region' => 'string', 'province_code' => 'string', 'district_code' => 'string'
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
