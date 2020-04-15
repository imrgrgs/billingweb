<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SmsCampanhaFone
 * @package App\Models
 * @version April 15, 2020, 12:30 pm UTC
 *
 * @property string smscf_telefone
 * @property string smscf_nome
 * @property string smscf_data_ligar
 * @property time smscf_hora_ligar
 * @property string smscf_data_ligou
 * @property time smscf_hora_ligou
 * @property integer smscf_terminacao_id
 * @property string smscf_criouarq
 * @property integer smscf_reinclusao
 * @property string smscf_status
 * @property string smscf_message
 */
class SmsCampanhaFone extends Model
{
    use SoftDeletes;

    public $table = 'smscampanhafone1';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'smscf_telefone',
        'smscf_nome',
        'smscf_data_ligar',
        'smscf_hora_ligar',
        'smscf_data_ligou',
        'smscf_hora_ligou',
        'smscf_terminacao_id',
        'smscf_criouarq',
        'smscf_reinclusao',
        'smscf_status',
        'smscf_message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'smscf_id' => 'integer',
        'smscf_telefone' => 'string',
        'smscf_nome' => 'string',
        'smscf_data_ligar' => 'date',
        'smscf_data_ligou' => 'date',
        'smscf_terminacao_id' => 'integer',
        'smscf_criouarq' => 'string',
        'smscf_reinclusao' => 'integer',
        'smscf_status' => 'string',
        'smscf_message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
