<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PublicidadeAudio
 * @package App\Models
 * @version April 15, 2020, 12:26 pm UTC
 *
 * @property integer pub_id
 * @property integer pbaud_seq
 * @property string pbaud_descricao
 * @property string pbaud_status
 * @property string pbaud_gingle_wav
 * @property integer pbaud_tempo_gingle
 * @property string pbaud_checar_satisfacao
 * @property string pbaud_desvio_tipo
 * @property integer pbaud_desvio_chamar
 */
class PublicidadeAudio extends Model
{
    use SoftDeletes;

    public $table = 'publicidadeaudios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pub_id',
        'pbaud_seq',
        'pbaud_descricao',
        'pbaud_status',
        'pbaud_gingle_wav',
        'pbaud_tempo_gingle',
        'pbaud_checar_satisfacao',
        'pbaud_desvio_tipo',
        'pbaud_desvio_chamar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pbaud_id' => 'integer',
        'pub_id' => 'integer',
        'pbaud_seq' => 'integer',
        'pbaud_descricao' => 'string',
        'pbaud_status' => 'string',
        'pbaud_gingle_wav' => 'string',
        'pbaud_tempo_gingle' => 'integer',
        'pbaud_checar_satisfacao' => 'string',
        'pbaud_desvio_tipo' => 'string',
        'pbaud_desvio_chamar' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pub_id' => 'required',
        'pbaud_seq' => 'required'
    ];

    
}
