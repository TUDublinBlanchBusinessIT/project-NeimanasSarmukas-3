<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cruise
 * @package App\Models
 * @version April 10, 2025, 1:49 pm UTC
 *
 * @property \App\Models\Port $cruiseOrigin
 * @property \App\Models\Port $cruiseDestination
 * @property \App\Models\Ship $ship
 * @property \Illuminate\Database\Eloquent\Collection $passengers
 * @property integer $ship_id
 * @property string $dep_date
 * @property string $return_date
 * @property integer $cruise_origin
 * @property integer $cruise_destination
 */
class cruise extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cruises';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ship_id',
        'dep_date',
        'return_date',
        'cruise_origin',
        'cruise_destination'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cruise_id' => 'integer',
        'ship_id' => 'integer',
        'dep_date' => 'date',
        'return_date' => 'date',
        'cruise_origin' => 'integer',
        'cruise_destination' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ship_id' => 'nullable|integer',
        'dep_date' => 'nullable',
        'return_date' => 'nullable',
        'cruise_origin' => 'nullable|integer',
        'cruise_destination' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cruiseOrigin()
    {
        return $this->belongsTo(\App\Models\Port::class, 'cruise_origin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cruiseDestination()
    {
        return $this->belongsTo(\App\Models\Port::class, 'cruise_destination');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ship()
    {
        return $this->belongsTo(\App\Models\Ship::class, 'ship_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function passengers()
    {
        return $this->hasMany(\App\Models\Passenger::class, 'cruise_id');
    }
}
