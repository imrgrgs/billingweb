<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Taxa
 * @package App\Models
 * @version April 15, 2020, 12:34 pm UTC
 *
 * @property integer tax_pais_id
 * @property integer tax_plano_id
 * @property string tax_tipo
 * @property number tax_valor
 * @property number tax_valorfora
 * @property number tax_vlrfornecedor
 */
class Taxa extends Model
{
    use SoftDeletes;

    public $table = 'taxas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tax_pais_id',
        'tax_plano_id',
        'tax_tipo',
        'tax_valor',
        'tax_valorfora',
        'tax_vlrfornecedor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tax_id' => 'integer',
        'tax_pais_id' => 'integer',
        'tax_plano_id' => 'integer',
        'tax_tipo' => 'string',
        'tax_valor' => 'float',
        'tax_valorfora' => 'float',
        'tax_vlrfornecedor' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
