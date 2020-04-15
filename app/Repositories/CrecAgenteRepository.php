<?php

namespace App\Repositories;

use App\Models\CrecAgente;
use App\Repositories\BaseRepository;

/**
 * Class CrecAgenteRepository
 * @package App\Repositories
 * @version April 15, 2020, 11:13 am UTC
*/

class CrecAgenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rrv_nrodoc',
        'rrv_cliente_id',
        'rrv_dtvencto',
        'rrv_valor',
        'rrv_nrparcela',
        'rrv_historico',
        'rrv_dtpagto',
        'rrv_desconto',
        'rrv_acrescimo',
        'rrv_dtreprogramada',
        'rrv_status',
        'rrv_forma',
        'rrv_nrdocpgto',
        'rrv_planocontas_id',
        'rrv_bancos_id',
        'rrv_previsao',
        'rrv_empresa_id',
        'rrv_nossonumero',
        'rrv_dtemissao',
        'rrv_dtefetivacao'
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
        return CrecAgente::class;
    }
}
