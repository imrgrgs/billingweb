<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NaoTarifadoTerm
 * @package App\Models
 * @version April 15, 2020, 12:19 pm UTC
 *
 * @property string nao_destino
 * @property integer nao_fornecedor_id
 * @property integer nao_terminacao_id
 * @property integer nao_segundos
 */
class NaoTarifadoTerm extends Model
{
    use SoftDeletes;

    public $table = 'naotarifadosterm';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nao_destino',
        'nao_fornecedor_id',
        'nao_terminacao_id',
        'nao_segundos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nao_id' => 'integer',
        'nao_destino' => 'string',
        'nao_fornecedor_id' => 'integer',
        'nao_terminacao_id' => 'integer',
        'nao_segundos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
