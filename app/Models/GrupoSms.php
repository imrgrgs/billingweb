<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GrupoSms
 * @package App\Models
 * @version April 15, 2020, 12:15 pm UTC
 *
 * @property string gsms_nome
 * @property integer gsms_fornecedor_id
 * @property integer gsms_representante_id
 * @property integer gsms_assinante_id
 */
class GrupoSms extends Model
{
    use SoftDeletes;

    public $table = 'grupossms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'gsms_nome',
        'gsms_fornecedor_id',
        'gsms_representante_id',
        'gsms_assinante_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'gsms_id' => 'integer',
        'gsms_nome' => 'string',
        'gsms_fornecedor_id' => 'integer',
        'gsms_representante_id' => 'integer',
        'gsms_assinante_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
