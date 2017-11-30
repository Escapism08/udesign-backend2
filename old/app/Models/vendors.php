<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vendors
 * @package App\Models
 * @version November 18, 2017, 5:07 am UTC
 */
class vendors extends Model
{
    use SoftDeletes;

    public $table = 'vendors';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'vendor_total_sales'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'vendor_total_sales' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
