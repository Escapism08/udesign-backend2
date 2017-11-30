<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users_table
 * @package App\Models
 * @version November 18, 2017, 5:17 am UTC
 */
class users_table extends Model
{
    use SoftDeletes;

    public $table = 'users_tables';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_name',
        'user_password',
        'user_image',
        'user_subscription_type',
        'user_age'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_name' => 'string',
        'user_password' => 'string',
        'user_image' => 'string',
        'user_subscription_type' => 'string',
        'user_age' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
