<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SaldoGeral
 * @package App\Models
 * @version April 15, 2020, 12:28 pm UTC
 *
 * @property string sdg_data
 * @property time sdg_hora
 * @property string sdg_tipo
 * @property number sdg_valor
 * @property integer sdg_codigo
 */
class SaldoGeral extends Model
{
    use SoftDeletes;

    public $table = 'saldosgerais';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'sdg_data',
        'sdg_hora',
        'sdg_tipo',
        'sdg_valor',
        'sdg_codigo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'sdg_id' => 'integer',
        'sdg_data' => 'date',
        'sdg_tipo' => 'string',
        'sdg_valor' => 'float',
        'sdg_codigo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'sdg_valor' => 'required'
    ];

    
}
