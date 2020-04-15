<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Aparelho
 * @package App\Models
 * @version April 14, 2020, 9:35 pm UTC
 *
 * @property string apa_descricao
 * @property number apa_valor
 * @property integer apa_fornecedor_id
 */
class Aparelho extends Model
{
    use SoftDeletes;

    public $table = 'aparelhos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'apa_descricao',
        'apa_valor',
        'apa_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'apa_id' => 'integer',
        'apa_descricao' => 'string',
        'apa_valor' => 'float',
        'apa_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'apa_valor' => 'required'
    ];

    
}
