<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $country_id
 * @property int     $timezone
 * @property int     $work_start
 * @property int     $work_end
 * @property string  $name
 * @property string  $shortname
 * @property string  $flag_image
 * @property string  $phone_code
 * @property string  $url
 * @property string  $address
 * @property string  $phone
 * @property string  $email
 * @property string  $zones_name
 * @property string  $subzones_name
 * @property boolean $enabled
 */
class Countries extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'country_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'shortname', 'flag_image', 'phone_code', 'url', 'address', 'phone', 'email', 'zones_name', 'subzones_name', 'enabled', 'timezone', 'work_start', 'work_end'
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
        'country_id' => 'int', 'name' => 'string', 'shortname' => 'string', 'flag_image' => 'string', 'phone_code' => 'string', 'url' => 'string', 'address' => 'string', 'phone' => 'string', 'email' => 'string', 'zones_name' => 'string', 'subzones_name' => 'string', 'enabled' => 'boolean', 'timezone' => 'int', 'work_start' => 'int', 'work_end' => 'int'
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
