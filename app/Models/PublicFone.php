<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PublicFone
 * @package App\Models
 * @version April 15, 2020, 12:25 pm UTC
 *
 * @property string pbt_telefone
 * @property string pbt_data_ligar
 * @property time pbt_hora_ligar
 * @property string pbt_data_ligou
 * @property time pbt_hora_ligou
 * @property integer pbt_tempo_ouviu
 * @property string pbt_obs
 * @property integer pbt_terminacao_id
 * @property string pbt_criouarq
 * @property integer pbt_reinclusao
 * @property integer pbt_cpf
 * @property string pbt_satisfacao
 */
class PublicFone extends Model
{
    use SoftDeletes;

    public $table = 'publicfones10';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pbt_telefone',
        'pbt_data_ligar',
        'pbt_hora_ligar',
        'pbt_data_ligou',
        'pbt_hora_ligou',
        'pbt_tempo_ouviu',
        'pbt_obs',
        'pbt_terminacao_id',
        'pbt_criouarq',
        'pbt_reinclusao',
        'pbt_cpf',
        'pbt_satisfacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pbt_id' => 'integer',
        'pbt_telefone' => 'string',
        'pbt_data_ligar' => 'date',
        'pbt_data_ligou' => 'date',
        'pbt_tempo_ouviu' => 'integer',
        'pbt_obs' => 'string',
        'pbt_terminacao_id' => 'integer',
        'pbt_criouarq' => 'string',
        'pbt_reinclusao' => 'integer',
        'pbt_cpf' => 'integer',
        'pbt_satisfacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
