<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TabRevenda
 * @package App\Models
 * @version April 15, 2020, 12:34 pm UTC
 *
 * @property string tab_codigo
 * @property string tab_descricao
 */
class TabRevenda extends Model
{
    use SoftDeletes;

    public $table = 'tabrevendas1';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tab_codigo',
        'tab_descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tab_id' => 'integer',
        'tab_codigo' => 'string',
        'tab_descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
