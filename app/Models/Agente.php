<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agente
 * @package App\Models
 * @version April 14, 2020, 9:33 pm UTC
 *
 * @property \App\Models\Representante ageRepresentante
 * @property string age_nome
 * @property string age_login
 * @property string age_senha
 * @property number age_comissao
 * @property string age_endereco
 * @property string age_bairro
 * @property string age_cidade
 * @property string age_estado
 * @property integer age_cep
 * @property string age_email
 * @property string age_status
 * @property string age_data
 * @property string age_telefone1
 * @property string age_telefone2
 * @property string age_celular
 * @property string age_mudasenha
 * @property integer age_representante_id
 * @property string age_linguagem
 * @property string age_incluir_users
 * @property string age_alterar_users
 * @property string age_acesso_cabines
 * @property string age_acesso_creditos
 * @property integer age_tabelaespecial_id
 * @property number age_percacrescimo
 * @property number age_saldoreal
 * @property string age_atualizado
 * @property string age_tptarifacao
 * @property string age_com_ident_nome
 * @property string age_ligacoes_emcurso
 * @property string age_liberar_inicializar
 * @property string age_controle_lastro
 * @property string age_qtde_colunas
 * @property string age_como_revenda
 */
class Agente extends Model
{
    use SoftDeletes;

    public $table = 'agentes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'age_nome',
        'age_login',
        'age_senha',
        'age_comissao',
        'age_endereco',
        'age_bairro',
        'age_cidade',
        'age_estado',
        'age_cep',
        'age_email',
        'age_status',
        'age_data',
        'age_telefone1',
        'age_telefone2',
        'age_celular',
        'age_mudasenha',
        'age_representante_id',
        'age_linguagem',
        'age_incluir_users',
        'age_alterar_users',
        'age_acesso_cabines',
        'age_acesso_creditos',
        'age_tabelaespecial_id',
        'age_percacrescimo',
        'age_saldoreal',
        'age_atualizado',
        'age_tptarifacao',
        'age_com_ident_nome',
        'age_ligacoes_emcurso',
        'age_liberar_inicializar',
        'age_controle_lastro',
        'age_qtde_colunas',
        'age_como_revenda'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'age_id' => 'integer',
        'age_nome' => 'string',
        'age_login' => 'string',
        'age_senha' => 'string',
        'age_comissao' => 'float',
        'age_endereco' => 'string',
        'age_bairro' => 'string',
        'age_cidade' => 'string',
        'age_estado' => 'string',
        'age_cep' => 'integer',
        'age_email' => 'string',
        'age_status' => 'string',
        'age_data' => 'date',
        'age_telefone1' => 'string',
        'age_telefone2' => 'string',
        'age_celular' => 'string',
        'age_mudasenha' => 'string',
        'age_representante_id' => 'integer',
        'age_linguagem' => 'string',
        'age_incluir_users' => 'string',
        'age_alterar_users' => 'string',
        'age_acesso_cabines' => 'string',
        'age_acesso_creditos' => 'string',
        'age_tabelaespecial_id' => 'integer',
        'age_percacrescimo' => 'float',
        'age_saldoreal' => 'float',
        'age_atualizado' => 'string',
        'age_tptarifacao' => 'string',
        'age_com_ident_nome' => 'string',
        'age_ligacoes_emcurso' => 'string',
        'age_liberar_inicializar' => 'string',
        'age_controle_lastro' => 'string',
        'age_qtde_colunas' => 'string',
        'age_como_revenda' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'age_representante_id' => 'required',
        'age_incluir_users' => 'required',
        'age_alterar_users' => 'required',
        'age_acesso_cabines' => 'required',
        'age_acesso_creditos' => 'required',
        'age_percacrescimo' => 'required',
        'age_saldoreal' => 'required',
        'age_atualizado' => 'required',
        'age_com_ident_nome' => 'required',
        'age_ligacoes_emcurso' => 'required',
        'age_liberar_inicializar' => 'required',
        'age_controle_lastro' => 'required',
        'age_qtde_colunas' => 'required',
        'age_como_revenda' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ageRepresentante()
    {
        return $this->belongsTo(\App\Models\Representante::class, 'age_representante_id');
    }
}
