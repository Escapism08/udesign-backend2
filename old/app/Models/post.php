<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class post
 * @package App\Models
 * @version November 18, 2017, 5:03 am UTC
 */
class post extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'post_title',
        'post_body',
        'post_user_id',
        'post_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'post_title' => 'string',
        'post_body' => 'string',
        'post_user_id' => 'integer',
        'post_image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
