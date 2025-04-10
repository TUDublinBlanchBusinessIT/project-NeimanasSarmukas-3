<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ship
 * @package App\Models
 * @version April 10, 2025, 1:49 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $crewMembers
 * @property \Illuminate\Database\Eloquent\Collection $cruises
 * @property string $ship_name
 * @property integer $capacity
 */
class ship extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ships';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ship_name',
        'capacity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ship_id' => 'integer',
        'ship_name' => 'string',
        'capacity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ship_name' => 'nullable|string|max:30',
        'capacity' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function crewMembers()
    {
        return $this->hasMany(\App\Models\CrewMember::class, 'ship_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cruises()
    {
        return $this->hasMany(\App\Models\Cruise::class, 'ship_id');
    }
}
