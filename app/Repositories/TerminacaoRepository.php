<?php

namespace App\Repositories;

use App\Models\Terminacao;
use App\Repositories\BaseRepository;

/**
 * Class TerminacaoRepository
 * @package App\Repositories
 * @version April 15, 2020, 12:35 pm UTC
*/

class TerminacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pst_nome',
        'pst_apelido',
        'pst_extension',
        'pst_fornecedor_id',
        'pst_del_prefix',
        'pst_channel',
        'pst_status',
        'pst_celular',
        'pst_fixo',
        'pst_saldo',
        'pst_atualizado',
        'pst_vlrfixo',
        'pst_vlrcelular',
        'pst_tp_tarifacao',
        'pst_obs',
        'pst_login',
        'pst_senha',
        'pst_ip_proxy',
        'pst_reinvite',
        'pst_ringfalso',
        'pst_nomeficticio',
        'pst_formacobranca',
        'pst_finalidade',
        'pst_participa_mcusto',
        'pst_id_terminador',
        'pst_sgs_comecar_cobrar',
        'pst_sgs_comecar_cobrar_celular',
        'pst_rota_automatica',
        'pst_custoemdolar',
        'pst_limite_maximo',
        'pst_consumido',
        'pst_qtde_utilizada',
        'pst_configuracao',
        'pst_fazerregister',
        'pst_jaincluido',
        'pst_codec1',
        'pst_codec2',
        'pst_codec3',
        'pst_codec4',
        'pst_codec5',
        'pst_porta',
        'pst_digitos_eliminar',
        'pst_caracteres_incluir',
        'pst_tech_prefix',
        'pst_qtde_simultaneas',
        'pst_codigo_operadora',
        'pst_complemento_callerid'
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
        return Terminacao::class;
    }
}
