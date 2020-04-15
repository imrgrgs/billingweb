<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Anuncio
 * @package App\Models
 * @version April 14, 2020, 9:34 pm UTC
 *
 * @property string anu_descricao
 * @property string anu_status
 * @property string anu_gingle_wav
 * @property string anu_endereco_gingle
 * @property integer anu_qtde_tocar
 * @property integer anu_qtde_tocado
 * @property string anu_data_tocado
 * @property time anu_hora_tocado
 * @property integer anu_representante_id
 * @property integer anu_fornecedor_id
 */
class Anuncio extends Model
{
    use SoftDeletes;

    public $table = 'anuncios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'anu_descricao',
        'anu_status',
        'anu_gingle_wav',
        'anu_endereco_gingle',
        'anu_qtde_tocar',
        'anu_qtde_tocado',
        'anu_data_tocado',
        'anu_hora_tocado',
        'anu_representante_id',
        'anu_fornecedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'anu_id' => 'integer',
        'anu_descricao' => 'string',
        'anu_status' => 'string',
        'anu_gingle_wav' => 'string',
        'anu_endereco_gingle' => 'string',
        'anu_qtde_tocar' => 'integer',
        'anu_qtde_tocado' => 'integer',
        'anu_data_tocado' => 'date',
        'anu_representante_id' => 'integer',
        'anu_fornecedor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
