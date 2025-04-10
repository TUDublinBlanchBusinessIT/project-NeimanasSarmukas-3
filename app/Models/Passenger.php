<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Passenger
 * @package App\Models
 * @version April 10, 2025, 1:51 pm UTC
 *
 * @property \App\Models\Cruise $cruise
 * @property string $pass_name
 * @property string $pass_email
 * @property integer $pass_cabin
 * @property integer $cruise_id
 */
class Passenger extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'passengers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pass_name',
        'pass_email',
        'pass_cabin',
        'cruise_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pass_id' => 'integer',
        'pass_name' => 'string',
        'pass_email' => 'string',
        'pass_cabin' => 'integer',
        'cruise_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pass_name' => 'nullable|string|max:30',
        'pass_email' => 'nullable|string|max:30',
        'pass_cabin' => 'nullable|integer',
        'cruise_id' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cruise()
    {
        return $this->belongsTo(\App\Models\Cruise::class, 'cruise_id');
    }
}
