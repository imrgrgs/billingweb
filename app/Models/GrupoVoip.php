<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GrupoVoip
 * @package App\Models
 * @version April 15, 2020, 12:15 pm UTC
 *
 * @property string grv_nome
 * @property string grv_estrategia
 * @property integer grv_representante_id
 * @property integer grv_fornecedor_id
 * @property string grv_musica_espera
 * @property integer grv_alias_grupo
 * @property integer grv_assinante_id
 */
class GrupoVoip extends Model
{
    use SoftDeletes;

    public $table = 'gruposvoip';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'grv_nome',
        'grv_estrategia',
        'grv_representante_id',
        'grv_fornecedor_id',
        'grv_musica_espera',
        'grv_alias_grupo',
        'grv_assinante_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'grv_id' => 'integer',
        'grv_nome' => 'string',
        'grv_estrategia' => 'string',
        'grv_representante_id' => 'integer',
        'grv_fornecedor_id' => 'integer',
        'grv_musica_espera' => 'string',
        'grv_alias_grupo' => 'integer',
        'grv_assinante_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'grv_alias_grupo' => 'required'
    ];

    
}
