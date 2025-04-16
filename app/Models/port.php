<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class port
 * @package App\Models
 * @version April 10, 2025, 1:49 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $cruises
 * @property \Illuminate\Database\Eloquent\Collection $cruise1s
 * @property string $port_name
 * @property string $port_country
 */
class port extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ports';

    protected $primaryKey = 'port_id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'port_name',
        'port_country'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'port_id' => 'integer',
        'port_name' => 'string',
        'port_country' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'port_name' => 'nullable|string|max:30',
        'port_country' => 'nullable|string|max:30'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cruises()
    {
        return $this->hasMany(\App\Models\Cruise::class, 'cruise_origin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cruise1s()
    {
        return $this->hasMany(\App\Models\Cruise::class, 'cruise_destination');
    }
}
