<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estatistica
 * @package App\Models
 * @version April 15, 2020, 12:09 pm UTC
 *
 * @property string est_destino
 * @property integer est_fornecedor_id
 * @property integer est_representante_id
 * @property string est_status
 * @property integer est_tempo_ate_atender
 * @property integer est_tempo_conversa
 * @property integer est_terminacao_id
 * @property string est_assinante
 * @property string|\Carbon\Carbon est_data_inicio
 * @property string|\Carbon\Carbon est_data_final
 * @property integer est_tentativa
 * @property string est_uniqueid
 * @property integer est_causahangup
 */
class Estatistica extends Model
{
    use SoftDeletes;

    public $table = 'estatisticas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'est_destino',
        'est_fornecedor_id',
        'est_representante_id',
        'est_status',
        'est_tempo_ate_atender',
        'est_tempo_conversa',
        'est_terminacao_id',
        'est_assinante',
        'est_data_inicio',
        'est_data_final',
        'est_tentativa',
        'est_uniqueid',
        'est_causahangup'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'est_id' => 'integer',
        'est_destino' => 'string',
        'est_fornecedor_id' => 'integer',
        'est_representante_id' => 'integer',
        'est_status' => 'string',
        'est_tempo_ate_atender' => 'integer',
        'est_tempo_conversa' => 'integer',
        'est_terminacao_id' => 'integer',
        'est_assinante' => 'string',
        'est_data_inicio' => 'datetime',
        'est_data_final' => 'datetime',
        'est_tentativa' => 'integer',
        'est_uniqueid' => 'string',
        'est_causahangup' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'est_causahangup' => 'required'
    ];

    
}
