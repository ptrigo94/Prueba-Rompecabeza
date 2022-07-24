<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $dealership_id
 * @property string $name
 * @property string $address
 * @property string $country_iso_code
 * @property string $phone
 * @property string $email
 * @property string $coverage_area
 * @property string $salesforce_dealercode_cl
 */
class Dealerships extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dealerships';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'dealership_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'country_iso_code', 'phone', 'email', 'coverage_area', 'salesforce_dealercode_cl'
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
        'dealership_id' => 'int', 'name' => 'string', 'address' => 'string', 'country_iso_code' => 'string', 'phone' => 'string', 'email' => 'string', 'coverage_area' => 'string', 'salesforce_dealercode_cl' => 'string'
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

    public function dealership_offices(){
        return $this->hasMany('\App\Models\DealershipsOffices','dealership_id','dealership_id');
    }

    // Scopes...

    // Functions ...

    // Relations ...
}
