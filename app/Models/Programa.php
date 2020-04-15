<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Programa
 * @package App\Models
 * @version April 15, 2020, 12:24 pm UTC
 *
 * @property string prg_codigo
 * @property string prg_descricao
 * @property string prg_menu
 */
class Programa extends Model
{
    use SoftDeletes;

    public $table = 'programas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'prg_codigo',
        'prg_descricao',
        'prg_menu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'prg_id' => 'integer',
        'prg_codigo' => 'string',
        'prg_descricao' => 'string',
        'prg_menu' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
