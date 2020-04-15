<?php

namespace App\Repositories;

use App\Models\Gvt;
use App\Repositories\BaseRepository;

/**
 * Class GvtRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:17 pm UTC
*/

class GvtRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'gvt_user',
        'gvt_pass',
        'gvt_url',
        'gvt_porta',
        'gvt_user_fsol',
        'gvt_status',
        'gvt_fornecedor_id',
        'gvt_numfone',
        'gvt_aplicacao',
        'gvt_vlr_callingcard',
        'gvt_tp_tarifacao',
        'gvt_fazer_registro',
        'gvt_vlr_conexao_fixo',
        'gvt_vlr_conexao_celular',
        'gvt_vlr_callingcard_cel',
        'gvt_identificador_via_uri',
        'gvt_arq_audio',
        'gvt_lig_gratuita',
        'gvt_tmp_maximo_gratuita',
        'gvt_codec1',
        'gvt_codec2',
        'gvt_codec3',
        'gvt_codec4',
        'gvt_codec5',
        'pode_transferir',
        'gvt_representante_id',
        'gvt_tabprecos_id',
        'gvt_vlr_fx_revenda',
        'gvt_vlr_cel_revenda',
        'gvt_recebe_de',
        'gvt_lista_negra',
        'gvt_tipo_atendimento',
        'gvt_telegram_token'
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
        return Gvt::class;
    }
}
