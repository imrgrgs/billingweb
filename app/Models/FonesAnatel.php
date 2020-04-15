<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FonesAnatel
 * @package App\Models
 * @version April 15, 2020, 12:12 pm UTC
 *
 * @property string anal_sigla_uf
 * @property string anal_sigla_cnl
 * @property string anal_codigo_cnl
 * @property string anal_localidade
 * @property string anal_municipio
 * @property string anal_codigo_area
 * @property string anal_prefixo
 * @property string anal_prestadora
 * @property string anal_faixa_ini
 * @property string anal_faixa_fim
 * @property string anal_latitude
 * @property string anal_hemisferio
 * @property string anal_longitude
 * @property string anal_sigla_cnl_local
 */
class FonesAnatel extends Model
{
    use SoftDeletes;

    public $table = 'fonesanatel';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'anal_sigla_uf',
        'anal_sigla_cnl',
        'anal_codigo_cnl',
        'anal_localidade',
        'anal_municipio',
        'anal_codigo_area',
        'anal_prefixo',
        'anal_prestadora',
        'anal_faixa_ini',
        'anal_faixa_fim',
        'anal_latitude',
        'anal_hemisferio',
        'anal_longitude',
        'anal_sigla_cnl_local'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'anal_id' => 'integer',
        'anal_sigla_uf' => 'string',
        'anal_sigla_cnl' => 'string',
        'anal_codigo_cnl' => 'string',
        'anal_localidade' => 'string',
        'anal_municipio' => 'string',
        'anal_codigo_area' => 'string',
        'anal_prefixo' => 'string',
        'anal_prestadora' => 'string',
        'anal_faixa_ini' => 'string',
        'anal_faixa_fim' => 'string',
        'anal_latitude' => 'string',
        'anal_hemisferio' => 'string',
        'anal_longitude' => 'string',
        'anal_sigla_cnl_local' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
