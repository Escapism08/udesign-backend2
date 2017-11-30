<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class packages
 * @package App\Models
 * @version November 18, 2017, 5:10 am UTC
 */
class packages extends Model
{
    use SoftDeletes;

    public $table = 'packages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'package_name',
        'package_category',
        'package_description',
        'package_offer',
        'package_items_from_existing_products',
        'package_featured_images',
        'package_image1',
        'package_image2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'package_name' => 'string',
        'package_category' => 'string',
        'package_description' => 'string',
        'package_offer' => 'string',
        'package_items_from_existing_products' => 'string',
        'package_featured_images' => 'string',
        'package_image1' => 'string',
        'package_image2' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
