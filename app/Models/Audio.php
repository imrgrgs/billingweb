<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Audio
 * @package App\Models
 * @version April 14, 2020, 9:35 pm UTC
 *
 * @property string aud_data
 * @property time aud_hora
 * @property string aud_assinante
 * @property string aud_destino
 * @property integer aud_tempo
 * @property string aud_arquivo
 */
class Audio extends Model
{
    use SoftDeletes;

    public $table = 'audios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'aud_data',
        'aud_hora',
        'aud_assinante',
        'aud_destino',
        'aud_tempo',
        'aud_arquivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'aud_id' => 'integer',
        'aud_data' => 'date',
        'aud_assinante' => 'string',
        'aud_destino' => 'string',
        'aud_tempo' => 'integer',
        'aud_arquivo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
