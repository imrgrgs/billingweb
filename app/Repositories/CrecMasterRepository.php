<?php

namespace App\Repositories;

use App\Models\CrecMaster;
use App\Repositories\BaseRepository;

/**
 * Class CrecMasterRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:14 am UTC
*/

class CrecMasterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ram_nrodoc',
        'ram_cliente_id',
        'ram_dtvencto',
        'ram_valor',
        'ram_nrparcela',
        'ram_historico',
        'ram_dtpagto',
        'ram_desconto',
        'ram_acrescimo',
        'ram_dtreprogramada',
        'ram_status',
        'ram_forma',
        'ram_nrdocpgto',
        'ram_planocontas_id',
        'ram_bancos_id',
        'ram_previsao',
        'ram_empresa_id',
        'ram_nossonumero',
        'ram_dtemissao',
        'ram_dtefetivacao'
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
        return CrecMaster::class;
    }
}
