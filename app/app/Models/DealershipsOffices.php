<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $office_id
 * @property int     $subzone_id
 * @property int     $dealership_id
 * @property int     $order
 * @property string  $address
 * @property string  $description_form
 * @property string  $email
 * @property string  $phone
 * @property string  $phone2
 * @property string  $zone_iso_code
 * @property string  $territory
 * @property string  $weekday_sales
 * @property string  $weekday_service
 * @property string  $weekend_sales
 * @property string  $weekend_service
 * @property string  $code_salazar_israel_cl
 * @property float   $latitude
 * @property float   $longitude
 * @property boolean $point_sales
 * @property boolean $service_workshop
 * @property boolean $spare_parts
 */
class DealershipsOffices extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dealerships_offices';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'office_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address', 'description_form', 'email', 'phone', 'phone2', 'zone_iso_code', 'subzone_id', 'latitude', 'longitude', 'dealership_id', 'point_sales', 'service_workshop', 'spare_parts', 'territory', 'weekday_sales', 'weekday_service', 'weekend_sales', 'weekend_service', 'code_salazar_israel_cl', 'order'
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
        'office_id' => 'int', 'address' => 'string', 'description_form' => 'string', 'email' => 'string', 'phone' => 'string', 'phone2' => 'string', 'zone_iso_code' => 'string', 'subzone_id' => 'int', 'latitude' => 'float', 'longitude' => 'float', 'dealership_id' => 'int', 'point_sales' => 'boolean', 'service_workshop' => 'boolean', 'spare_parts' => 'boolean', 'territory' => 'string', 'weekday_sales' => 'string', 'weekday_service' => 'string', 'weekend_sales' => 'string', 'weekend_service' => 'string', 'code_salazar_israel_cl' => 'string', 'order' => 'int'
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

    public function dealership(){
        return $this->belongsTo(Dealerships::class, 'dealership_id','dealership_id');
    }

    // Scopes...

    // Functions ...

    // Relations ...
}
