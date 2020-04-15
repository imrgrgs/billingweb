<?php

namespace App\Repositories;

use App\Models\ParBoleto;
use App\Repositories\BaseRepository;

/**
 * Class ParBoletoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:20 pm UTC
*/

class ParBoletoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'bol_empresa_id',
        'bol_banco',
        'bol_agencia',
        'bol_conta',
        'bol_localpagamento',
        'bol_carteira',
        'bol_instrucao1',
        'bol_instrucao2',
        'bol_instrucao3',
        'bol_instrucao4',
        'bol_instrucao5',
        'bol_nossonumero',
        'bol_percjuros',
        'bol_taxabancaria',
        'bol_tetotxbanc',
        'bol_vlrminimo',
        'bol_convenio',
        'bol_qtd_dias_vcto'
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
        return ParBoleto::class;
    }
}
