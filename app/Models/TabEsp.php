<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TabEsp
 * @package App\Models
 * @version April 15, 2020, 12:33 pm UTC
 *
 * @property string tbe_fonecode
 * @property string tbe_descricao
 * @property string tbe_tipo
 * @property number tbe_valor
 */
class TabEsp extends Model
{
    use SoftDeletes;

    public $table = 'tabesp_10001';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tbe_fonecode',
        'tbe_descricao',
        'tbe_tipo',
        'tbe_valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tbe_fonecode' => 'string',
        'tbe_descricao' => 'string',
        'tbe_tipo' => 'string',
        'tbe_valor' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tbe_valor' => 'required'
    ];

    
}
