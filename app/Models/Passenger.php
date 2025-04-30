<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

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

    protected $primaryKey = 'pass_id';  // Use pass_id as primary key
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    // Include user_id in fillable
    public $fillable = [
        'pass_name',
        'pass_email',
        'pass_cabin',
        'cruise_id',
        'user_id',  // Ensure user_id is mass assignable
    ];

    protected $casts = [
        'pass_id' => 'integer',
        'pass_name' => 'string',
        'pass_email' => 'string',
        'pass_cabin' => 'integer',
        'cruise_id' => 'integer',
        'user_id' => 'integer', // Add user_id to cast array
    ];

    public static $rules = [
        'pass_name' => 'nullable|string|max:30',
        'pass_email' => 'nullable|string|max:30',
        'pass_cabin' => 'nullable|integer',
        'cruise_id' => 'nullable|integer'
    ];

    /**
     * Passenger belongs to a cruise.
     */
    public function cruise()
    {
        return $this->belongsTo(\App\Models\Cruise::class, 'cruise_id');
    }

    /**
     * Passenger belongs to a user (logged-in user).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');  // Change 'user_id' to 'userid'
    }


    /**
     * Store a new passenger.
     */
    public function store(Request $request)
    {
        $passenger = new Passenger();
        $passenger->pass_name = $request->input('pass_name');
        $passenger->pass_email = $request->input('pass_email');
        $passenger->pass_cabin = $request->input('pass_cabin');
        $passenger->cruise_id = $request->input('cruise_id');

        // Associate with the logged-in user
        $passenger->user_id = auth()->user()->id;  // Ensure the user_id is set to the logged-in user's id
        
        $passenger->save();

        return redirect()->route('passenger.index');
    }
}
