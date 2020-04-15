<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Repositories\BaseRepository;

/**
 * Class AdminRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:33 pm UTC
*/

class AdminRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Admin::class;
    }
}
