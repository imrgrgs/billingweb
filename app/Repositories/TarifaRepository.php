<?php

namespace App\Repositories;

use App\Models\Tarifa;
use App\Repositories\BaseRepository;

/**
 * Class TarifaRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:34 pm UTC
*/

class TarifaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tar_grupo_id',
        'tar_fonecode',
        'tar_valor1',
        'tar_valor2',
        'tar_valor3',
        'tar_valor4',
        'tar_valor5',
        'tar_fornecedor_id',
        'tar_valor_diferenciado',
        'tar_terminacao_id',
        'tar_tipo',
        'tar_fazpartefixado',
        'tar_terminacao2_id',
        'tar_terminacao3_id',
        'tar_master',
        'tar_descricao',
        'tar_terminacao_fax'
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
        return Tarifa::class;
    }
}
