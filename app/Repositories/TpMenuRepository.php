<?php

namespace App\Repositories;

use App\Models\TpMenu;
use App\Repositories\BaseRepository;

/**
 * Class TpMenuRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:35 pm UTC
*/

class TpMenuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tip_descricao',
        'tip_menu',
        'tip_fornecedor_id',
        'tip_representante_id',
        'tip_agente_id',
        'tip_permissao'
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
        return TpMenu::class;
    }
}
