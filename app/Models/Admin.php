<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admin
 * @package App\Models
 * @version April 14, 2020, 9:33 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection fornecedors
 * @property string adm_razao
 * @property string adm_cnpj
 * @property string adm_inscrest
 * @property string adm_fantasia
 * @property string adm_rua
 * @property string adm_complem
 * @property string adm_bairro
 * @property string adm_cidade
 * @property string adm_estado
 * @property integer adm_cep
 * @property string adm_email
 * @property integer adm_banco
 * @property string adm_agencia
 * @property string adm_conta
 * @property number adm_saldo
 * @property string adm_login
 * @property string adm_senha
 * @property string adm_mudasenha
 * @property string adm_telefone1
 * @property string adm_telefone2
 * @property string adm_celular
 * @property string adm_data
 * @property string adm_contato
 */
class Admin extends Model
{
    use SoftDeletes;

    public $table = 'admin';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'adm_razao',
        'adm_cnpj',
        'adm_inscrest',
        'adm_fantasia',
        'adm_rua',
        'adm_complem',
        'adm_bairro',
        'adm_cidade',
        'adm_estado',
        'adm_cep',
        'adm_email',
        'adm_banco',
        'adm_agencia',
        'adm_conta',
        'adm_saldo',
        'adm_login',
        'adm_senha',
        'adm_mudasenha',
        'adm_telefone1',
        'adm_telefone2',
        'adm_celular',
        'adm_data',
        'adm_contato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'adm_id' => 'integer',
        'adm_razao' => 'string',
        'adm_cnpj' => 'string',
        'adm_inscrest' => 'string',
        'adm_fantasia' => 'string',
        'adm_rua' => 'string',
        'adm_complem' => 'string',
        'adm_bairro' => 'string',
        'adm_cidade' => 'string',
        'adm_estado' => 'string',
        'adm_cep' => 'integer',
        'adm_email' => 'string',
        'adm_banco' => 'integer',
        'adm_agencia' => 'string',
        'adm_conta' => 'string',
        'adm_saldo' => 'float',
        'adm_login' => 'string',
        'adm_senha' => 'string',
        'adm_mudasenha' => 'string',
        'adm_telefone1' => 'string',
        'adm_telefone2' => 'string',
        'adm_celular' => 'string',
        'adm_data' => 'date',
        'adm_contato' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function fornecedors()
    {
        return $this->hasMany(\App\Models\Fornecedor::class, 'for_admin_id');
    }
}
