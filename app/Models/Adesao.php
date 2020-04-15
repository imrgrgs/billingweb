<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Adesao
 * @package App\Models
 * @version April 14, 2020, 9:33 pm UTC
 *
 * @property integer ads_assinante_id
 * @property integer ads_plano_id
 * @property string ads_data_contrato
 * @property integer ads_franquia
 * @property string ads_data_teto
 * @property integer ads_minutos_utilizadas
 * @property string ads_status
 * @property string ads_nossonumero
 */
class Adesao extends Model
{
    use SoftDeletes;

    public $table = 'adesao';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ads_assinante_id',
        'ads_plano_id',
        'ads_data_contrato',
        'ads_franquia',
        'ads_data_teto',
        'ads_minutos_utilizadas',
        'ads_status',
        'ads_nossonumero'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ads_id' => 'integer',
        'ads_assinante_id' => 'integer',
        'ads_plano_id' => 'integer',
        'ads_data_contrato' => 'date',
        'ads_franquia' => 'integer',
        'ads_data_teto' => 'date',
        'ads_minutos_utilizadas' => 'integer',
        'ads_status' => 'string',
        'ads_nossonumero' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
