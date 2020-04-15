<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CelularSms
 * @package App\Models
 * @version April 14, 2020, 9:38 pm UTC
 *
 * @property string csms_num_cell
 * @property string csms_nome
 * @property integer csms_grupo_id
 * @property integer csms_fornecedor_id
 * @property integer csms_representante_id
 * @property integer csms_assinante_id
 */
class CelularSms extends Model
{
    use SoftDeletes;

    public $table = 'celularessms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'csms_num_cell',
        'csms_nome',
        'csms_grupo_id',
        'csms_fornecedor_id',
        'csms_representante_id',
        'csms_assinante_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'csms_id' => 'integer',
        'csms_num_cell' => 'string',
        'csms_nome' => 'string',
        'csms_grupo_id' => 'integer',
        'csms_fornecedor_id' => 'integer',
        'csms_representante_id' => 'integer',
        'csms_assinante_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
