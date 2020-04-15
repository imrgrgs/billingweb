<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contrato
 * @package App\Models
 * @version April 14, 2020, 9:40 pm UTC
 *
 * @property integer cnt_id
 * @property string cnt_contrato
 */
class Contrato extends Model
{
    use SoftDeletes;

    public $table = 'contrato';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cnt_id',
        'cnt_contrato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cnt_id' => 'integer',
        'cnt_contrato' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cnt_id' => 'required'
    ];

    
}
