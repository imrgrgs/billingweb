<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class LogTarifacao
 * @package App\Models
 * @version April 15, 2020, 12:18 pm UTC
 *
 * @property integer lgt_representante_id
 * @property string lgt_assinante
 * @property string lgt_tptarifacao
 * @property string lgt_data_ini
 * @property time lgt_hora_ini
 */
class LogTarifacao extends Model
{
    use SoftDeletes;

    public $table = 'logtarifacao';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'lgt_representante_id',
        'lgt_assinante',
        'lgt_tptarifacao',
        'lgt_data_ini',
        'lgt_hora_ini'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lgt_id' => 'integer',
        'lgt_representante_id' => 'integer',
        'lgt_assinante' => 'string',
        'lgt_tptarifacao' => 'string',
        'lgt_data_ini' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
