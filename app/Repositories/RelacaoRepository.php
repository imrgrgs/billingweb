<?php

namespace App\Repositories;

use App\Models\Relacao;
use App\Repositories\BaseRepository;

/**
 * Class RelacaoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:27 pm UTC
*/

class RelacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rel_username',
        'rel_username_amigo'
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
        return Relacao::class;
    }
}
