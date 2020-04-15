<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CustoTerm
 * @package App\Models
 * @version April 15, 2020, 11:18 am UTC
 *
 * @property string ctt_fonecode
 * @property string ctt_descricao
 * @property number ctt_valor
 */
class CustoTerm extends Model
{
    use SoftDeletes;

    public $table = 'custoterm10';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ctt_fonecode',
        'ctt_descricao',
        'ctt_valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ctt_fonecode' => 'string',
        'ctt_descricao' => 'string',
        'ctt_valor' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ctt_valor' => 'required'
    ];

    
}
