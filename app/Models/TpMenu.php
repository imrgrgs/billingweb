<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TpMenu
 * @package App\Models
 * @version April 15, 2020, 12:35 pm UTC
 *
 * @property string tip_descricao
 * @property string tip_menu
 * @property integer tip_fornecedor_id
 * @property integer tip_representante_id
 * @property integer tip_agente_id
 * @property string tip_permissao
 */
class TpMenu extends Model
{
    use SoftDeletes;

    public $table = 'tpmenus';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tip_descricao',
        'tip_menu',
        'tip_fornecedor_id',
        'tip_representante_id',
        'tip_agente_id',
        'tip_permissao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tip_id' => 'integer',
        'tip_descricao' => 'string',
        'tip_menu' => 'string',
        'tip_fornecedor_id' => 'integer',
        'tip_representante_id' => 'integer',
        'tip_agente_id' => 'integer',
        'tip_permissao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
