<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CacRevenda
 * @package App\Models
 * @version April 14, 2020, 9:37 pm UTC
 *
 * @property integer cac_representante_id
 * @property string cac_data_abertura
 * @property time cac_hora_abertura
 * @property string cac_tipo
 * @property string cac_descricao
 * @property string cac_solucao
 * @property string cac_status
 * @property string cac_nomecontato
 * @property string cac_data_solucao
 * @property time cac_hora_solucao
 * @property string cac_login
 */
class CacRevenda extends Model
{
    use SoftDeletes;

    public $table = 'cacsrevenda';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cac_representante_id',
        'cac_data_abertura',
        'cac_hora_abertura',
        'cac_tipo',
        'cac_descricao',
        'cac_solucao',
        'cac_status',
        'cac_nomecontato',
        'cac_data_solucao',
        'cac_hora_solucao',
        'cac_login'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cac_id' => 'integer',
        'cac_representante_id' => 'integer',
        'cac_data_abertura' => 'date',
        'cac_tipo' => 'string',
        'cac_descricao' => 'string',
        'cac_solucao' => 'string',
        'cac_status' => 'string',
        'cac_nomecontato' => 'string',
        'cac_data_solucao' => 'date',
        'cac_login' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
