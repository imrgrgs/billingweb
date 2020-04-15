<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GrupoUraDesvio
 * @package App\Models
 * @version April 15, 2020, 12:16 pm UTC
 *
 * @property integer gru_id
 * @property string grudesvio_digito
 * @property string grudesvio_nome
 * @property string grudesvio_tipo
 * @property integer grudesvio_chamar
 */
class GrupoUraDesvio extends Model
{
    use SoftDeletes;

    public $table = 'grupouradesvio';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'gru_id',
        'grudesvio_digito',
        'grudesvio_nome',
        'grudesvio_tipo',
        'grudesvio_chamar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'grudesvio_id' => 'integer',
        'gru_id' => 'integer',
        'grudesvio_digito' => 'string',
        'grudesvio_nome' => 'string',
        'grudesvio_tipo' => 'string',
        'grudesvio_chamar' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'gru_id' => 'required',
        'grudesvio_digito' => 'required',
        'grudesvio_tipo' => 'required',
        'grudesvio_chamar' => 'required'
    ];

    
}
