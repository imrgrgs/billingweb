<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Publicidade
 * @package App\Models
 * @version April 15, 2020, 12:25 pm UTC
 *
 * @property string pub_descricao
 * @property string pub_status
 * @property string pub_gingle_wav
 * @property string pub_endereco_gingle
 * @property string pub_gingle_wav2
 * @property string pub_endereco_gingle2
 * @property integer pub_tempo_gingle
 * @property string pub_data_ini
 * @property time pub_hora_ini
 * @property integer pub_terminacao_id
 * @property integer pub_fornecedor_id
 * @property string pub_login
 * @property integer pub_maxretries
 * @property integer pub_retrytime
 * @property integer pub_waittime
 * @property integer pub_reinclusao_automatica
 * @property integer pub_representante_id
 * @property string pub_checar_satisfacao
 * @property time pub_hora_parar
 * @property integer pub_qtd_simult_noite
 * @property integer pub_qtd_simult_dia
 * @property string pub_data_encerrar
 * @property string pub_bloqueia_procon
 * @property integer pub_initial_silence
 * @property integer pub_greeting
 * @property integer pub_after_greeting_silence
 * @property integer pub_total_analysis_time
 * @property integer pub_minimum_word_length
 * @property integer pub_between_words_silence
 * @property integer pub_maximum_number_of_words
 * @property integer pub_silence_threshold
 * @property integer pub_maximum_word_length
 * @property string pub_checar_automatizado
 * @property integer pub_intervalo_envio
 * @property integer pub_volume_envio_por_intervalo
 */
class Publicidade extends Model
{
    use SoftDeletes;

    public $table = 'publicidade';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pub_descricao',
        'pub_status',
        'pub_gingle_wav',
        'pub_endereco_gingle',
        'pub_gingle_wav2',
        'pub_endereco_gingle2',
        'pub_tempo_gingle',
        'pub_data_ini',
        'pub_hora_ini',
        'pub_terminacao_id',
        'pub_fornecedor_id',
        'pub_login',
        'pub_maxretries',
        'pub_retrytime',
        'pub_waittime',
        'pub_reinclusao_automatica',
        'pub_representante_id',
        'pub_checar_satisfacao',
        'pub_hora_parar',
        'pub_qtd_simult_noite',
        'pub_qtd_simult_dia',
        'pub_data_encerrar',
        'pub_bloqueia_procon',
        'pub_initial_silence',
        'pub_greeting',
        'pub_after_greeting_silence',
        'pub_total_analysis_time',
        'pub_minimum_word_length',
        'pub_between_words_silence',
        'pub_maximum_number_of_words',
        'pub_silence_threshold',
        'pub_maximum_word_length',
        'pub_checar_automatizado',
        'pub_intervalo_envio',
        'pub_volume_envio_por_intervalo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pub_id' => 'integer',
        'pub_descricao' => 'string',
        'pub_status' => 'string',
        'pub_gingle_wav' => 'string',
        'pub_endereco_gingle' => 'string',
        'pub_gingle_wav2' => 'string',
        'pub_endereco_gingle2' => 'string',
        'pub_tempo_gingle' => 'integer',
        'pub_data_ini' => 'date',
        'pub_terminacao_id' => 'integer',
        'pub_fornecedor_id' => 'integer',
        'pub_login' => 'string',
        'pub_maxretries' => 'integer',
        'pub_retrytime' => 'integer',
        'pub_waittime' => 'integer',
        'pub_reinclusao_automatica' => 'integer',
        'pub_representante_id' => 'integer',
        'pub_checar_satisfacao' => 'string',
        'pub_qtd_simult_noite' => 'integer',
        'pub_qtd_simult_dia' => 'integer',
        'pub_data_encerrar' => 'date',
        'pub_bloqueia_procon' => 'string',
        'pub_initial_silence' => 'integer',
        'pub_greeting' => 'integer',
        'pub_after_greeting_silence' => 'integer',
        'pub_total_analysis_time' => 'integer',
        'pub_minimum_word_length' => 'integer',
        'pub_between_words_silence' => 'integer',
        'pub_maximum_number_of_words' => 'integer',
        'pub_silence_threshold' => 'integer',
        'pub_maximum_word_length' => 'integer',
        'pub_checar_automatizado' => 'string',
        'pub_intervalo_envio' => 'integer',
        'pub_volume_envio_por_intervalo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
