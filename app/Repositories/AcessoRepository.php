<?php

namespace App\Repositories;

use App\Models\Acesso;
use App\Repositories\BaseRepository;

/**
 * Class AcessoRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:32 pm UTC
*/

class AcessoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ace_data',
        'ace_hora',
        'ace_ip',
        'ace_login',
        'ace_senha',
        'ace_sucesso'
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
        return Acesso::class;
    }
}
