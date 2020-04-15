<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DefinePstn
 * @package App\Models
 * @version April 15, 2020, 12:08 pm UTC
 *
 * @property integer def_fornecedor_id
 * @property integer def_representante_id
 * @property integer def_assinante_id
 * @property string def_pais
 * @property string def_tipo
 * @property string def_ddiddd_ini
 * @property string def_ddiddd_fim
 * @property integer def_terminacao1_id
 * @property integer def_terminacao2_id
 * @property integer def_terminacao3_id
 * @property integer def_terminacao4_id
 */
class DefinePstn extends Model
{
    use SoftDeletes;

    public $table = 'definepstn';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'def_fornecedor_id',
        'def_representante_id',
        'def_assinante_id',
        'def_pais',
        'def_tipo',
        'def_ddiddd_ini',
        'def_ddiddd_fim',
        'def_terminacao1_id',
        'def_terminacao2_id',
        'def_terminacao3_id',
        'def_terminacao4_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'def_id' => 'integer',
        'def_fornecedor_id' => 'integer',
        'def_representante_id' => 'integer',
        'def_assinante_id' => 'integer',
        'def_pais' => 'string',
        'def_tipo' => 'string',
        'def_ddiddd_ini' => 'string',
        'def_ddiddd_fim' => 'string',
        'def_terminacao1_id' => 'integer',
        'def_terminacao2_id' => 'integer',
        'def_terminacao3_id' => 'integer',
        'def_terminacao4_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
