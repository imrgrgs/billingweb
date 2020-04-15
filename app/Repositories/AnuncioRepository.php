<?php

namespace App\Repositories;

use App\Models\Anuncio;
use App\Repositories\BaseRepository;

/**
 * Class AnuncioRepository
 * @package App\Repositories
 * @version April 14, 2020, 9:34 pm UTC
*/

class AnuncioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'anu_descricao',
        'anu_status',
        'anu_gingle_wav',
        'anu_endereco_gingle',
        'anu_qtde_tocar',
        'anu_qtde_tocado',
        'anu_data_tocado',
        'anu_hora_tocado',
        'anu_representante_id',
        'anu_fornecedor_id'
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
        return Anuncio::class;
    }
}
