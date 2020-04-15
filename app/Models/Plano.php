<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Plano
 * @package App\Models
 * @version April 15, 2020, 12:22 pm UTC
 *
 * @property string pln_descricao
 * @property number pln_adesao
 * @property number pln_mensalidade
 * @property integer pln_limite_fixo
 * @property integer pln_limite_celular
 * @property string pln_status
 * @property string pln_detalhes
 * @property string pln_geral
 * @property string pln_imagem1
 * @property string pln_imagem2
 * @property string pln_imagem3
 * @property string pln_extensao1
 * @property string pln_extensao2
 * @property string pln_extensao3
 * @property number pln_vlrfixo_excedente
 * @property number pln_vlrcel_excedente
 * @property integer pln_representante_id
 * @property string pln_sem_limites
 * @property string pln_bloquear_atingiu_franquia
 * @property integer pln_tabespecial_id
 */
class Plano extends Model
{
    use SoftDeletes;

    public $table = 'planos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pln_descricao',
        'pln_adesao',
        'pln_mensalidade',
        'pln_limite_fixo',
        'pln_limite_celular',
        'pln_status',
        'pln_detalhes',
        'pln_geral',
        'pln_imagem1',
        'pln_imagem2',
        'pln_imagem3',
        'pln_extensao1',
        'pln_extensao2',
        'pln_extensao3',
        'pln_vlrfixo_excedente',
        'pln_vlrcel_excedente',
        'pln_representante_id',
        'pln_sem_limites',
        'pln_bloquear_atingiu_franquia',
        'pln_tabespecial_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pln_id' => 'integer',
        'pln_descricao' => 'string',
        'pln_adesao' => 'float',
        'pln_mensalidade' => 'float',
        'pln_limite_fixo' => 'integer',
        'pln_limite_celular' => 'integer',
        'pln_status' => 'string',
        'pln_detalhes' => 'string',
        'pln_geral' => 'string',
        'pln_imagem1' => 'string',
        'pln_imagem2' => 'string',
        'pln_imagem3' => 'string',
        'pln_extensao1' => 'string',
        'pln_extensao2' => 'string',
        'pln_extensao3' => 'string',
        'pln_vlrfixo_excedente' => 'float',
        'pln_vlrcel_excedente' => 'float',
        'pln_representante_id' => 'integer',
        'pln_sem_limites' => 'string',
        'pln_bloquear_atingiu_franquia' => 'string',
        'pln_tabespecial_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pln_mensalidade' => 'required',
        'pln_detalhes' => 'required',
        'pln_imagem1' => 'required',
        'pln_imagem2' => 'required',
        'pln_imagem3' => 'required',
        'pln_bloquear_atingiu_franquia' => 'required'
    ];

    
}
