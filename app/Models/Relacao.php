<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Relacao
 * @package App\Models
 * @version April 15, 2020, 12:27 pm UTC
 *
 * @property string rel_username
 * @property string rel_username_amigo
 */
class Relacao extends Model
{
    use SoftDeletes;

    public $table = 'relacao';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'rel_username',
        'rel_username_amigo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'rel_id' => 'integer',
        'rel_username' => 'string',
        'rel_username_amigo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
