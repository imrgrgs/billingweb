<?php

namespace App\Repositories;

use App\Models\Usuario;
use App\Repositories\BaseRepository;

/**
 * Class UsuarioRepository
 * @package App\Repositories
 * @version April 14, 2020, 8:51 pm UTC
*/

class UsuarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Usuario::class;
    }
}
