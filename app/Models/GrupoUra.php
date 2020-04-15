<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GrupoUra
 * @package App\Models
 * @version April 15, 2020, 12:16 pm UTC
 *
 * @property string gru_nome
 * @property integer gru_representante_id
 * @property string gru_musica_espera
 * @property string gru_arquivo_ura
 * @property integer gru_assinante_id
 */
class GrupoUra extends Model
{
    use SoftDeletes;

    public $table = 'grupoURA';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'gru_nome',
        'gru_representante_id',
        'gru_musica_espera',
        'gru_arquivo_ura',
        'gru_assinante_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'gru_id' => 'integer',
        'gru_nome' => 'string',
        'gru_representante_id' => 'integer',
        'gru_musica_espera' => 'string',
        'gru_arquivo_ura' => 'string',
        'gru_assinante_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'gru_representante_id' => 'required'
    ];

    
}
