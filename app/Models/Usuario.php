<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Usuario
 * @package App\Models
 * @version April 14, 2020, 8:51 pm UTC
 *
 * @property integer usr_fornecedor_id
 * @property integer usr_representante_id
 * @property integer usr_agente_id
 * @property string usr_login
 * @property string usr_senha
 * @property string usr_status
 * @property string usr_permissao
 * @property string usr_linguagem
 * @property string usr_nome
 * @property integer usr_tpmenu_id
 * @property integer usr_admin_id
 * @property integer usr_assinante_id
 * @property string usr_foto
 * @property string usr_email
 * @property string usr_fone
 */
class Usuario extends Model
{
    use SoftDeletes;

    public $table = 'usuarios';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'usr_fornecedor_id',
        'usr_representante_id',
        'usr_agente_id',
        'usr_login',
        'usr_senha',
        'usr_status',
        'usr_permissao',
        'usr_linguagem',
        'usr_nome',
        'usr_tpmenu_id',
        'usr_admin_id',
        'usr_assinante_id',
        'usr_foto',
        'usr_email',
        'usr_fone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'usr_id' => 'integer',
        'usr_fornecedor_id' => 'integer',
        'usr_representante_id' => 'integer',
        'usr_agente_id' => 'integer',
        'usr_login' => 'string',
        'usr_senha' => 'string',
        'usr_status' => 'string',
        'usr_permissao' => 'string',
        'usr_linguagem' => 'string',
        'usr_nome' => 'string',
        'usr_tpmenu_id' => 'integer',
        'usr_admin_id' => 'integer',
        'usr_assinante_id' => 'integer',
        'usr_foto' => 'string',
        'usr_email' => 'string',
        'usr_fone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'usr_permissao' => 'required'
    ];


}
