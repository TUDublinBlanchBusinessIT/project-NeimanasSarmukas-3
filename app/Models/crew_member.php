<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class crew_member
 * @package App\Models
 * @version April 10, 2025, 1:49 pm UTC
 *
 * @property \App\Models\Ship $ship
 * @property string $crew_name
 * @property string $crew_role
 * @property integer $ship_id
 */
class crew_member extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'crew_members';

    protected $primaryKey = 'crew_id';
    
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'crew_name',
        'crew_role',
        'ship_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'crew_id' => 'integer',
        'crew_name' => 'string',
        'crew_role' => 'string',
        'ship_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'crew_name' => 'nullable|string|max:30',
        'crew_role' => 'nullable|string|max:30',
        'ship_id' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ship()
    {
        return $this->belongsTo(\App\Models\Ship::class, 'ship_id');
    }
}
