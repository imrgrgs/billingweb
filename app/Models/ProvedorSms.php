<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProvedorSms
 * @package App\Models
 * @version April 15, 2020, 12:24 pm UTC
 *
 * @property string psms_nome
 * @property string psms_login
 * @property string psms_senha
 * @property string psms_string
 * @property string psms_disponivel
 * @property number psms_saldo
 * @property number psms_vlrsms
 * @property integer psms_fornecedor_id
 */
class ProvedorSms extends Model
{
    use SoftDeletes;

    public $table = 'provedorsms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'psms_nome',
        'psms_login',
        'psms_senha',
        'psms_string',
        'psms_disponivel',
        'psms_saldo',
        'psms_vlrsms',
        'psms_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'psms_id' => 'integer',
        'psms_nome' => 'string',
        'psms_login' => 'string',
        'psms_senha' => 'string',
        'psms_string' => 'string',
        'psms_disponivel' => 'string',
        'psms_saldo' => 'float',
        'psms_vlrsms' => 'float',
        'psms_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'psms_disponivel' => 'required',
        'psms_saldo' => 'required',
        'psms_vlrsms' => 'required'
    ];

    
}
