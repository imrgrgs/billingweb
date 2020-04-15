<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PosPago
 * @package App\Models
 * @version April 15, 2020, 12:24 pm UTC
 *
 * @property integer pos_plano_id
 * @property string pos_data_contrato
 * @property integer pos_utilizado_fixo
 * @property integer pos_utilizado_celular
 * @property integer pos_dia_zerar
 */
class PosPago extends Model
{
    use SoftDeletes;

    public $table = 'pospagos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pos_plano_id',
        'pos_data_contrato',
        'pos_utilizado_fixo',
        'pos_utilizado_celular',
        'pos_dia_zerar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pos_assinante_id' => 'integer',
        'pos_plano_id' => 'integer',
        'pos_data_contrato' => 'date',
        'pos_utilizado_fixo' => 'integer',
        'pos_utilizado_celular' => 'integer',
        'pos_dia_zerar' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
