<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TabEspA
 * @package App\Models
 * @version April 15, 2020, 12:32 pm UTC
 *
 * @property string tbe_fonecode
 * @property string tbe_descricao
 * @property string tbe_tipo
 * @property number tbe_valor
 * @property number tbe_vlr_feriado
 * @property number tbe_vlr_domingo
 * @property time tbe_hrini_ss
 * @property time tbe_hrfim_ss
 * @property number tbe_vlr_ss
 * @property time tbe_hrini_sabado
 * @property time tbe_hrfim_sabado
 * @property number tbe_vlr_sabado
 */
class TabEspA extends Model
{
    use SoftDeletes;

    public $table = 'tabespa_181';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tbe_fonecode',
        'tbe_descricao',
        'tbe_tipo',
        'tbe_valor',
        'tbe_vlr_feriado',
        'tbe_vlr_domingo',
        'tbe_hrini_ss',
        'tbe_hrfim_ss',
        'tbe_vlr_ss',
        'tbe_hrini_sabado',
        'tbe_hrfim_sabado',
        'tbe_vlr_sabado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tbe_fonecode' => 'string',
        'tbe_descricao' => 'string',
        'tbe_tipo' => 'string',
        'tbe_valor' => 'float',
        'tbe_vlr_feriado' => 'float',
        'tbe_vlr_domingo' => 'float',
        'tbe_vlr_ss' => 'float',
        'tbe_vlr_sabado' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tbe_valor' => 'required',
        'tbe_vlr_feriado' => 'required',
        'tbe_vlr_domingo' => 'required',
        'tbe_vlr_ss' => 'required',
        'tbe_vlr_sabado' => 'required'
    ];

    
}
