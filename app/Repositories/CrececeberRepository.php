<?php

namespace App\Repositories;

use App\Models\Crececeber;
use App\Repositories\BaseRepository;

/**
 * Class CrececeberRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:14 am UTC
*/

class CrececeberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rec_nrodoc',
        'rec_cliente_id',
        'rec_dtvencto',
        'rec_valor',
        'rec_nrparcela',
        'rec_historico',
        'rec_dtpagto',
        'rec_desconto',
        'rec_acrescimo',
        'rec_dtreprogramada',
        'rec_status',
        'rec_forma',
        'rec_nrdocpgto',
        'rec_planocontas_id',
        'rec_bancos_id',
        'rec_previsao',
        'rec_empresa_id',
        'rec_nossonumero',
        'rec_dtemissao',
        'rec_dtefetivacao'
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
        return Crececeber::class;
    }
}
