<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrdemTerminacaoIa
 * @package App\Models
 * @version April 15, 2020, 12:20 pm UTC
 *
 * @property integer oia_fornecedor_id
 * @property integer oia_terminacao_id
 * @property string oia_ddd
 * @property integer oia_tempo
 */
class OrdemTerminacaoIa extends Model
{
    use SoftDeletes;

    public $table = 'ordemterminacoes_ia';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'oia_fornecedor_id',
        'oia_terminacao_id',
        'oia_ddd',
        'oia_tempo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'oia_id' => 'integer',
        'oia_fornecedor_id' => 'integer',
        'oia_terminacao_id' => 'integer',
        'oia_ddd' => 'string',
        'oia_tempo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
