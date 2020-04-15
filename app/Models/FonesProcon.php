<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FonesProcon
 * @package App\Models
 * @version April 15, 2020, 12:12 pm UTC
 *
 * @property string fpro_ddd
 * @property string fpro_fone
 * @property string fpro_dddfone
 * @property string fpro_cadastro
 * @property string fpro_evento
 * @property string fpro_data_evento
 */
class FonesProcon extends Model
{
    use SoftDeletes;

    public $table = 'fonesprocon';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fpro_ddd',
        'fpro_fone',
        'fpro_dddfone',
        'fpro_cadastro',
        'fpro_evento',
        'fpro_data_evento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fpro_id' => 'integer',
        'fpro_ddd' => 'string',
        'fpro_fone' => 'string',
        'fpro_dddfone' => 'string',
        'fpro_cadastro' => 'date',
        'fpro_evento' => 'string',
        'fpro_data_evento' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
