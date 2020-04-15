<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LogChamada
 * @package App\Models
 * @version April 15, 2020, 12:18 pm UTC
 *
 * @property string|\Carbon\Carbon log_datahora
 * @property string log_destino
 * @property string log_texto
 */
class LogChamada extends Model
{
    use SoftDeletes;

    public $table = 'logchamadas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'log_datahora',
        'log_destino',
        'log_texto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'log_id' => 'integer',
        'log_datahora' => 'datetime',
        'log_destino' => 'string',
        'log_texto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'log_texto' => 'required'
    ];

    
}
