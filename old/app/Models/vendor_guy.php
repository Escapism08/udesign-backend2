<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vendor_guy
 * @package App\Models
 * @version November 18, 2017, 3:09 pm UTC
 */
class vendor_guy extends Model
{
    use SoftDeletes;

    public $table = 'vendor_guys';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'vendor_name',
        'vendor_brand',
        'vendor_password',
        'vendor_sales'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vendor_name' => 'string',
        'vendor_brand' => 'string',
        'vendor_password' => 'string',
        'vendor_sales' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
