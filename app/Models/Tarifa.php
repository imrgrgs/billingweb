<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tarifa
 * @package App\Models
 * @version April 15, 2020, 12:34 pm UTC
 *
 * @property integer tar_grupo_id
 * @property string tar_fonecode
 * @property number tar_valor1
 * @property number tar_valor2
 * @property number tar_valor3
 * @property number tar_valor4
 * @property number tar_valor5
 * @property integer tar_fornecedor_id
 * @property number tar_valor_diferenciado
 * @property integer tar_terminacao_id
 * @property string tar_tipo
 * @property string tar_fazpartefixado
 * @property integer tar_terminacao2_id
 * @property integer tar_terminacao3_id
 * @property string tar_master
 * @property string tar_descricao
 * @property integer tar_terminacao_fax
 */
class Tarifa extends Model
{
    use SoftDeletes;

    public $table = 'tarifas1';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tar_grupo_id',
        'tar_fonecode',
        'tar_valor1',
        'tar_valor2',
        'tar_valor3',
        'tar_valor4',
        'tar_valor5',
        'tar_fornecedor_id',
        'tar_valor_diferenciado',
        'tar_terminacao_id',
        'tar_tipo',
        'tar_fazpartefixado',
        'tar_terminacao2_id',
        'tar_terminacao3_id',
        'tar_master',
        'tar_descricao',
        'tar_terminacao_fax'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tar_id' => 'integer',
        'tar_grupo_id' => 'integer',
        'tar_fonecode' => 'string',
        'tar_valor1' => 'float',
        'tar_valor2' => 'float',
        'tar_valor3' => 'float',
        'tar_valor4' => 'float',
        'tar_valor5' => 'float',
        'tar_fornecedor_id' => 'integer',
        'tar_valor_diferenciado' => 'float',
        'tar_terminacao_id' => 'integer',
        'tar_tipo' => 'string',
        'tar_fazpartefixado' => 'string',
        'tar_terminacao2_id' => 'integer',
        'tar_terminacao3_id' => 'integer',
        'tar_master' => 'string',
        'tar_descricao' => 'string',
        'tar_terminacao_fax' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tar_valor1' => 'required',
        'tar_valor2' => 'required',
        'tar_valor3' => 'required',
        'tar_valor4' => 'required',
        'tar_valor5' => 'required',
        'tar_valor_diferenciado' => 'required',
        'tar_terminacao_fax' => 'required'
    ];

    
}
